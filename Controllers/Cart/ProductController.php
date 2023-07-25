<?php

require_once __DIR__ . '../../../Models/ShoppingCart.php';
require_once __DIR__ . '../../../db/db.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    
    $cart = new ShoppingCart();
    
    if ($action === 'addProduct') {
        if (isset($_GET['product_name'])) {
            foreach ($products as $product) {
                if ($product->getName() === $_GET['product_name']) {
                    session_start();
                    if (!isset($_SESSION['cart_items'])) {
                        $_SESSION['cart_items'] = array();
                    }
                    $_SESSION['cart_items'][] = $cart->addProduct($product);
                }
            }
        }
    } else {
        echo "Azione sconosciuta!";
    }
    header('Location: ../../index.php');
}
?>