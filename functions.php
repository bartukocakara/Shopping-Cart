<?php 
require ('database/DBController.php');

require ('database/Product.php');

//DBController Object
$db = new DBController();

//Product Object
$product = new Product($db);

print_r($product->getData());