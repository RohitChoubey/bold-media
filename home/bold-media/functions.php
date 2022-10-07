<?php

// require MySQL Connection
require ('dbconfig.php');

require ('getPost.php');
require ('getCategory.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

$category = new Category($db);
$product_shuffle = $category->getData();