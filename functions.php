<?php 
require ('database/DBController.php');

require ('database/Product.php');

require ('database/Cart.php');

//DBController Object
$db = new DBController();

//Product Object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart Object
$Cart = new Cart($db);