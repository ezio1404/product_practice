<?php
require 'db/DBhelper.php';
class Product extends DBhelper 
{
    private $table = 'tbl_product';
    private $fields = array(
        'prod_name',
        'prod_price'
    );

    function __construct(){
        return DBhelper::__construct();
    }

    function addProd($data){
        return DBhelper::insertRecord($data,$this->fields,$this->table);
    }

    function getAllProd(){
        return DBhelper::getAllRecord($this->table);
    }
}
