<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use core\SessionUtils;
use app\forms\ProductSearchForm;


class ProductListCtrl {
    private $form;
    private $records;
    private $page = 1;
    private $offset;
    private $size = 5;
    private $last = 0;

    public function __construct(){
        $this->form = new ProductSearchForm();
    }

    public function action_product_list(){
        $this->form->product_name = ParamUtils::getFromRequest('sf_product_name');
        $this->page = ParamUtils::getFromCleanURL(1,false);
        
        if($this->page == null){
            $this->page = 1;
        }
        
        $search_param = null;
        if (isset($this->form->product_name) && strlen($this->form->product_name) > 0) {
            $search_param = $this->form->product_name.'%';
        }

        $this->offset = $this->size * ($this->page - 1);

        try {
            $this->records = App::getDB()->select("product", "*",[
                'productName[~]' => $search_param,
                'ORDER' => 'productName',
                'LIMIT' => [$this->offset,$this->size+1]
            ]);

            if(count($this->records) > $this->size){
                $this->records = array_slice($this->records,0,$this->size);
            } else {
                $this->last = 1;
            }


        } catch (\PDOException $e){
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
        }

        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign('last', $this->last);
        App::getSmarty()->assign('page', $this->page);
        App::getSmarty()->assign('searchForm',$this->form);
        App::getSmarty()->assign('products',$this->records);
        App::getSmarty()->display('product_list.tpl');

    }
}

