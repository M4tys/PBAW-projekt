<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\RoleEditForm;

class RoleEditCtrl {
    private $form;
    private $validator;

    public function __construct(){
        $this->form = new RoleEditForm();
        $this->validator = new Validator();
    }

    public function validate(){
        $this->form->idRole = ParamUtils::getFromCleanURL(1,true,'Błedne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }


    public function action_role_activate(){
        $this->validate();

        try {
            
            App::getDB()->update('role', [
                'isActive' => true
            ], [
                'idRole' => $this->form->idRole
            ]);

        } catch (\PDOException $e){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        App::getRouter()->redirectTo('role_list');
    }

    public function action_role_deactivate(){
        $this->validate();

        try{

            App::getDB()->update('role', [
                'isActive' => false
            ], [
                'idRole' => $this->form->idRole
            ]);

        } catch (\PDOException $e){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        App::getRouter()->redirectTo('role_list');
    }

    public function action_role_add_show(){
        $this->generateView();
    }

    public function action_role_add(){

        if($this->validateAdd()){
            try {

                App::getDB()->insert("role",[
                    'roleName' => $this->form->roleName
                ]);

            } catch (\PDOException){
                Utils::addErrorMessage('Wystąpił błąd podczas zapisu rekordu');
            }

            App::getRouter()->redirectTo('role_list');
        } else {
            $this->generateView();
        }
    }

    public function validateAdd(){
        $this->form->roleName = $this->validator->validateFromRequest('rolename',[
            'required' => true,
            'required_message' => 'Nie podano nazwy roli',
        ]);

        return !App::getMessages()->isError();
    }

    public function generateView(){
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('role_add.tpl');
    }
}
