<?php

require_once 'vendor/autoload.php';

use App\classes\Product;
use App\classes\Category;


if (isset($_GET['pages'])){
    if ($_GET['pages'] == 'products'){
        $category = new Category();
        $categories = $category->category();
        $product = new Product();
        $products = $product->getAllProducts();
        include 'pages/products.php';
    }
    elseif ($_GET['pages'] == 'cat-products'){
        $category = new Category();
        $categories = $category->category();
        $product = new Product();
        $products = $product->shortProducts($_GET['category_id']);
        include 'pages/products.php';
    }
    elseif ($_GET['pages'] == 'details'){

        $category = new Category();
        $categories = $category->category();

        $product = new Product();
        $productDetails = $product->getAllProductsDetails($_GET['proId']);

        include 'pages/details.php';
    }


}
//elseif(isset($_POST['hBtn'])){
//    $calculator = new Calculator($_POST);
//    $result = $calculator->calculate();
//    include 'pages/home.php';
//}

    //echo $_POST['num1'].' '.$_POST['option'].' '.$_POST['num2'].' = '.$result;



