<?php

// Require MYSQL connection
require "database/DBController.php";

// Require Product
require "database/Product.php";

// Require Cart
require "database/Cart.php";

//DBController object
$db = new DBController();

//Product object
$product = new Product($db);
$pro = $product->getData();

$Cart = new Cart($db);
