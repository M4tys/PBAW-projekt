<?php

namespace app\controllers;

use core\App;
use core\Utils;

class RoleListCtrl {
    private $records;


    public function action_role_list(){

        try {

            $this->records = App::getDB()->select('role', '*');

        } catch (\PDOException $e){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        $this->generateView();
    }


    public function generateView() { 
        App::getSmarty()->assign('roles',$this->records);
        App::getSmarty()->display('role_list.tpl');
    }
}
