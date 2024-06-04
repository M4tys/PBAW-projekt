<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use app\forms\ProductSearchForm;

class DishProductPickListCtrl {
    private $form;
    private $validator;
    private $records;
    private $idDish;

    public function __construct(){
        $this->form = new ProductSearchForm();
    }

    public function action_product_pick(){
        $this->idDish = ParamUtils::getFromCleanURL(1,true,'Błąd wywoływania aplikacji');
        $this->form->product_name = ParamUtils::getFromRequest('sf_product_name');
        
        $search_param = null;
        if (isset($this->form->product_name) && strlen($this->form->product_name) > 0) {
            $search_param = $this->form->product_name.'%';
        }

        try {
            $countProducts = App::getDB()->count('dishproducts',[
                'idDish' => $this->idDish
            ]);

            if($countProducts > 0){
                $assignedProducts = App::getDB()->select("dishproducts", "idProduct", [
                    "idDish" => $this->idDish
                ]);

                $this->records = App::getDB()->select("product", "*", [
                    "idProduct[!]" => $assignedProducts,
                    "productName[~]" => $search_param,
                    'ORDER' => 'productName'
                ]);
            } else {
                $this->records = App::getDB()->select("product", "*", [
                    "productName[~]" => $search_param
                ]); 
            }

        } catch (\PDOException $e){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        $this->generateView();
    }

    public function generateView() { 
        App::getSmarty()->assign('idDish', $this->idDish);
        App::getSmarty()->assign('searchForm',$this->form);
        App::getSmarty()->assign('products',$this->records);
        App::getSmarty()->display('product_pick.tpl');
    }
}
