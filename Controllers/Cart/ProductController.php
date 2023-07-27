<?php

require_once __DIR__ . '../../../Models/ShoppingCart.php';
require_once __DIR__ . '../../../db/db.php';

session_start();

if (isset($_SESSION['cart_items'])) {
    $cart = new ShoppingCart($_SESSION['cart_items']);
  } else {
    $cart = new ShoppingCart();
  }
 

if (isset($_POST['product_to_add_name'])) {
    session_start();
    foreach ($products as $product) {
        if ($product->getName() === $_POST['product_to_add_name']) {
            if (!isset($_SESSION['cart_items'])) {
                $_SESSION['cart_items'] = array();
            }
            $_SESSION['cart_items'][] = $cart->addProduct($product);
            header('Location: ../../index.php');
        }
    }
}

if (isset($_POST['product_to_remove_name'])) {
    if (!empty($cart->getProducts())) {
        foreach ($cart->getProducts() as $key => $product) {
            if ($product->getName() === $_POST['product_to_remove_name']) {
                $cart->removeProduct($product);
                break;
            }
        }
        $_SESSION['cart_items'] = $cart->getProducts();
        header('Location: ../../index.php');
    } else {
        header('Location: ../../index.php');
    }
}

if (isset($_POST['remove_all_products'])) {
    if (!empty($cart->getProducts())) {
        $cart->removeAllProducts();
        $_SESSION['cart_items'] = [];
        header('Location: ../../index.php');
    } else {
        header('Location: ../../index.php');
    }
}

?>