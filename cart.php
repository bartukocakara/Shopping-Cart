<?php 
ob_start();
include ('header.php'); ?>

<?php
count($product->getData('cart')) ? include ('Template/_cart-template.php') : include ('Template/notFound/_cart_notFound.php'); ?>



<?php count($product->getData('wishlist')) ? include ('Template/_wishlist-template.php') : include ('Template/notFound/_wishlist_notFound.php'); ?>

<?php include ('Template/_new-phones.php'); ?>

<?php include ('footer.php'); ?>