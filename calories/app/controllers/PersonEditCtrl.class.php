<?php

namespace app\controllers;

use app\forms\PersonEditForm;
use core\Validator;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class PersonEditCtrl {

    private $form;
    private $validator;
    private $password;

    public function __construct(){
        $this->form = new PersonEditForm();
        $this->validator = new Validator();
    }

    public function validateSave() {

        $this->form->id = ParamUtils::getFromRequest('id', true, "Błedne wykonanie aplikacji");

        $this->form->username = $this->validator->validateFromRequest('username', [
            'required' => true,
            'required_message' => 'Nie podano nazwy użytkownika',
            'min_length' => 4,
            'validator_message' => 'Za krótka nazwa użytkownika',
        ]);

        $this->form->login = $this->validator->validateFromRequest('login',[
            'required' => true,
            'required_message' => 'Nie podano loginu',
            'min_length' => 4,
            'validator_message' => 'Za krótki login',
        ]);

        $this->form->acc_role = ParamUtils::getFromRequest('acc_role', true, "Błedne wykonanie aplikacji");

        $this->form->new_pass = ParamUtils::getFromRequest('pass');

        $this->form->new_pass_check = ParamUtils::getFromRequest('pass_check');

        if(isset($this->form->new_pass) && isset($this->form->new_pass_check)){
            if($this->form->new_pass != $this->form->new_pass_check){
                Utils::addErrorMessage('Podane hasła nie są takie same');
            }
        }

        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wykonanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_person_edit(){

        if($this->validateEdit()){
            try {
                $record = App::getDB()->get("user","*",[
                    'idUser' => $this->form->id
                ]);

                $idRole = App::getDB()->get('userroles', 'idRole', [
                    'idUser' => $record['idUser'],
                    'removeDate' => null
                ]);

                $this->form->rolename = App::getDB()->get('role', 'roleName',[
                    'idRole' => $idRole
                ]);
            
                $this->form->id = $record['idUser'];
                $this->form->login = $record['login'];
                $this->form->username = $record['userName'];
            } catch (\PDOException){
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            }
        }

        $this->generateView();
    }

    public function action_person_save(){
        if($this->validateSave()){   
            if(!empty($this->form->new_pass)){
                $this->password = password_hash($this->form->new_pass, PASSWORD_DEFAULT);
            } else {
                $this->password = App::getDB()->get('user', 'password', ["idUser" => $this->form->id]);
            }

            $curr_user = SessionUtils::load('user',true);
               
            try{

                App::getDB()->update('user', [
                    'login' => $this->form->login,
                    'userName' => $this->form->username,
                    'editedBy' => $curr_user['idUser'],
                    'password' => $this->password,
                    ], [
                    'idUser' => $this->form->id
                ]);

                $idRole = App::getDB()->get('userroles', 'idRole', [
                    'idUser' => $this->form->id,
                    'removeDate' => null
                ]);

                if($this->form->acc_role != $idRole){
                    App::getDB()->update('userroles', ['removeDate' => date('Y-m-d H:i:s')], [
                            'idUser' => $this->form->id,
                            'removeDate' => null
                        ]);

                    App::getDB()->insert('userroles', [
                        'idUser' => $this->form->id,
                        'idRole' => $this->form->acc_role
                    ]);
                }

            } catch (\PDOException) {
                Utils::addErrorMessage('Wystąpił błąd podczas zapisu rekordu');
            }

            App::getRouter()->redirectTo('person_list');
        } else {
            $this->generateView();
        }

    }

    public function generateView(){
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('person_edit.tpl');
    }

    public function action_person_activate(){
        $this->validateEdit();

        try {
            
            App::getDB()->update('user', [
                'isActive' => true,
                'deactivateDate' => null
            ], [
                'idUser' => $this->form->id
            ]);

        } catch (\PDOException){
            Utils::addErrorMessage('Wystąpił błąd podczas zapisu rekordu');
        }

        App::getRouter()->redirectTo('person_list');
    }

    public function action_person_deactivate(){
        $this->validateEdit();

        try{

            App::getDB()->update('user', [
                'isActive' => false
            ], [
                'idUser' => $this->form->id
            ]);

        } catch (\PDOException $e){
            Utils::addErrorMessage('Wystąpił błąd podczas zapisu rekordu');
        }

        App::getRouter()->redirectTo('person_list');
    }




}