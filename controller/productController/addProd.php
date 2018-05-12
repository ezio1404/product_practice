<?php
require '../../model/productModel.php';
$prod = new Product();
if(isset($_POST['submit'])){
    $prod_name=$_POST['prod_name'];
    $prod_price=$_POST['prod_price'];

    $prod->addProd(array($prod_name,$prod_price));
    header('location:../../index.php');
}