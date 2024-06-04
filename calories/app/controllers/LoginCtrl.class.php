<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\LoginForm;

class LoginCtrl{
    private $form;
    private $validator;

    public function __construct() {
        $this->form = new LoginForm();
        $this->validator = new Validator();
    }

    public function validate(){
        $this->form->login = $this->validator->validateFromRequest('login',[
            'required' => true,
            'required_message' => 'Nie podano loginu',
        ]);

        $this->form->password = $this->validator->validateFromRequest('pass',[
            'required' => true,
            'required_message' => 'Nie podano hasła',
        ]);

        if(App::getMessages()->isError()) return false;

        try {
            $record = App::getDB()->get("user", "*", ["login" => $this->form->login]);
    
            if (!$record) {
                Utils::addErrorMessage("Nie istnieje użytkownik o podanym loginie");
            } else {
                $hash_password = $record["password"];
    
                if (!password_verify($this->form->password, $hash_password)) {
                    Utils::addErrorMessage("Nieprawidłowe hasło");
                }

                if(App::getMessages()->isError()) return false;

                if($record['isActive'] == 0){
                    Utils::addErrorMessage('Ten użytkownik jest zdezaktywowany');
                }

                $idRole = App::getDB()->get('userroles','idRole',[
                    'idUser' => $record['idUser'],
                    'removeDate' => null
                ]);

                $isRoleActive = App::getDB()->get('role', 'isActive',[
                    'idRole' => $idRole
                ]);

                if($isRoleActive == 0){
                    Utils::addErrorMessage('Rola tego użytkownika jest nieaktywna');
                }
            }
        } catch(\PDOException){
            Utils::addErrorMessage("Wystąpił błąd podczas odczytu rekordu");
        }

        return !App::getMessages()->isError();
    }

    public function action_login_show(){
        $this->generateView();
    }

    public function action_login(){
        if ($this->validate()){
            
            try {
                $user = App::getDB()->get("user", "*", [
                    "login" => $this->form->login
                ]);

                $role_id = App::getDB()->get("userroles", "idRole", [
                    "AND" => [
                        "idUser" => $user["idUser"],
                        "removeDate" => null
                    ]
                ]);

                $role_name = App::getDB()->get("role", "roleName", [
                    "idRole" => $role_id
                ]);

                RoleUtils::addRole($role_name);
                SessionUtils::store("user", $user);
                
            } catch(\PDOException) {
                Utils::addErrorMessage("Wystąpił błąd podczas odczytu rekordu");
            }

            App::getRouter()->redirectTo('home_view');

        } else {
            $this->generateView();
        }
    }

    public function action_logout(){
        session_destroy();
        App::getRouter()->redirectTo('home_view');
    }

    public function generateView(){
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('login_view.tpl');
    }
}