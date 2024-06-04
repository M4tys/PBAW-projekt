<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;
use app\forms\DishProductEditForm;

class DishProductEditCtrl {
    private $form;
    private $validator;
    private $records;

    public function __construct(){
        $this->form = new DishProductEditForm();
        $this->validator = new Validator();
    }

    public function validate(){
        $this->form->idDish = ParamUtils::getFromCleanURL(1,true,'Błąd wywoływania aplikacji');
        $this->form->idProduct = ParamUtils::getFromCleanURL(2,true,'Błąd wywoływania aplikacji');

        try{
            $this->form->product_name = App::getDB()->get('product','productName',[
                'idProduct' => $this->form->idProduct
            ]);
        } catch (\PDOException) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        return !App::getMessages()->isError();
    }
    
    public function action_product_add(){

        if($this->validate()){

            try{

                App::getDB()->insert('dishproducts',[
                    'idDish' => $this->form->idDish,
                    'idProduct' => $this->form->idProduct
                ]);

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas zapisu rekordu.');
            }

        }
        App::getRouter()->redirectTo('show_quantity/'.$this->form->idDish.'/'.$this->form->idProduct);

    }

    public function validateQuantity(){
        $this->form->idDish = ParamUtils::getFromRequest('idDish',true,'Błąd wywoływania aplikacji');
        $this->form->idProduct = ParamUtils::getFromRequest('idProduct',true,'Błąd wywoływania aplikacji');
        
        $this->form->quantity = $this->validator->validateFromRequest('quantity',[
            'required' => true,
            'required_message' => 'Nie podano ilości',
            'numeric' => true,
            'validator_message' => 'Podana wartość nie jest liczbą',
        ]);

        try{
            $this->form->product_name = App::getDB()->get('product','productName',[
                'idProduct' => $this->form->idProduct
            ]);
        } catch (\PDOException) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu.');
        }
 
        return !App::getMessages()->isError();
    }

    public function action_show_quantity(){
        $this->validate();
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('set_quantity.tpl');
    }

    public function action_set_quantity_save(){
        if($this->validateQuantity()){
        try{

            App::getDB()->update('dishproducts', [
                'quantity' => $this->form->quantity
            ],[
                'idDish' => $this->form->idDish,
                'idProduct' => $this->form->idProduct
            ]);

            } catch (\PDOException) {
                Utils::addErrorMessage('Wystąpił błąd podczas zapisu rekordu');
            }
            
            App::getRouter()->redirectTo('dish_product_list/'.$this->form->idDish);
        } else {
            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->display('set_quantity.tpl');
        }
    }

    public function action_dish_product_delete() {

        if($this->validate()){
            try{
                App::getDB()->delete('dishproducts', [
                    'idProduct' => $this->form->idProduct,
                    'idDish' => $this->form->idDish
                ]);
            } catch (\PDOException){
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
            }
        }

        App::getRouter()->redirectTo('dish_product_list/'.$this->form->idDish);
    }

}
