<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\PersonSearchForm;
use core\SessionUtils;


class PersonListCtrl {
    private $form;
    private $records;
    
    public function __construct(){
        $this->form = new PersonSearchForm();
    }
    
    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('sf_login');

        return !App::getMessages()->isError();
    }

    public function load_data(){
        $this->validate();
        $curr_user = SessionUtils::load('user', true);
        
        $search_param = null;
        if (isset($this->form->login) && strlen($this->form->login) > 0) {
            $search_param = $this->form->login.'%';
        }

        try {
            $this->records = App::getDB()->select("user", [
                "[>]userroles" => ["idUser" => "idUser"],
                "[>]role" => ["userroles.idRole" => "idRole"]
            ], [
                "user.idUser",
                "user.login",
                "user.password",
                "user.creationDate",
                "user.userName",
                "user.editedBy",
                "user.editDate",
                "user.isActive",
                "user.deactivateDate",
                "role.roleName",
            ], [
                'userroles.removeDate' => null,
                "user.idUser[!]" => $curr_user['idUser'],
                "user.login[~]" => $search_param,
            ]);

            usort($this->records, function($a, $b) {
                return strcasecmp($a['login'], $b['login']);
            });

        } catch (\PDOException){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

    }

    public function generateView() {
        App::getSmarty()->assign('searchForm',$this->form);
        App::getSmarty()->assign('users',$this->records);
        App::getSmarty()->display('person_list.tpl');
    }

    public function action_person_list() {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('users', $this->records);
        App::getSmarty()->display('person_list_full_page.tpl');
    }

    public function action_person_list_part() {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('users', $this->records);
        App::getSmarty()->display('person_list_table.tpl');
    }
}

