<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\RegisterForm;

class RegisterCtrl{
    private $form;
    private $validator;

    public function __construct() {
        $this->form = new RegisterForm();
        $this->validator = new Validator();
    }

    public function validate(){
        $this->form->username = $this->validator->validateFromRequest('username', [
            'required' => true,
            'required_message' => 'Nie podano nazwy użytkownika',
            'min_length' => 4,
            'validator_message' => 'Za krótka nazwa użytkownika',
        ]);

        $this->form->login = $this->validator->validateFromRequest('login',[
            'required' => true,
            'trim' => true,
            'required_message' => 'Nie podano loginu',
            'min_length' => 4,
            'max_length' => 25,
            'validator_message' => 'Login musi mieć od 4 do 25 znaków',
            'regexp' => '/^[a-zA-Z0-9_]+$/',
            'validator_message' => 'Login może zawierać tylko litery, cyfry i podkreślenia, bez spacji',
        ]);

        $this->form->password = $this->validator->validateFromRequest('pass',[
            'required' => true,
            'required_message' => 'Nie podano hasła',
            'min_length' => 5,
            'max_length' => 25,
            'validator_message' => 'Hasło musi mieć od 4 do 25 znaków',
            'regexp' => '/^(?=.*[A-Z])(?=.*\d)(?!\s).+$/',
            'validator_message' => 'Hasło musi zawierać co najmniej jedną dużą literę, jedną cyfrę i nie może zawierać spacji',
        ]);

        $this->form->password_check = $this->validator->validateFromRequest('pass_check',[
            'required' => true,
            'required_message' => 'Nie podano powtórzonego hasła',
        ]);

        $this->form->acc_role = $this->validator->validateFromRequest('acc_role',[
            'required' => true,
            'required_message' => 'Nie podano rodzaju konta',
        ]);

        if($this->form->password != $this->form->password_check){
            Utils::addErrorMessage('Podane hasła nie są takie same');
        }

        try{
            $count = App::getDB()->count("user", ['login' => $this->form->login]);
            if($count > 0){
                Utils::addErrorMessage('Istnieje już użytkownik o podanym loginie');
            }
        } catch (\PDOException){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        return !App::getMessages()->isError();
    }

    public function action_register_show(){
        $this->generateView();
    }

    public function action_register(){
        if ($this->validate()){
            $hash_password = password_hash($this->form->password, PASSWORD_DEFAULT);

            try {
                App::getDB()->insert("user",[
                    "login" => $this->form->login,
                    "password" => $hash_password,
                    "userName" => $this->form->username,
                   ]);

                $user = App::getDB()->get("user","*",[
                    "login" => $this->form->login
                ]);

                App::getDB()->insert("userroles",[
                    "idUser" => $user["idUser"],
                    "idRole" => $this->form->acc_role,
                ]);

                $role_name = App::getDB()->get("role","roleName",[
                    "idRole" => $this->form->acc_role
                ]);

                RoleUtils::addRole($role_name);
                SessionUtils::store("user", $user);
                
            } catch (\PDOException){
                Utils::addErrorMessage('Wystąpił błąd podczas zapisu rekordu');
            }

            App::getRouter()->redirectTo('home_view');
        } else {
            $this->generateView();
        }
    }

    public function generateView(){
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('register_view.tpl');
    }
}