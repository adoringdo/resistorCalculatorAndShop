<?php

global $db;

use store\models\Product;

require 'database/db.php';
require 'models/Product.php';

session_start();

// Create a new Product instance
$product = new Product($db);

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Get the action and product_id from the URL
$action = $_GET['action'] ?? null;
$productId = $_GET['product_id'] ?? null;
$quantity = $_GET['quantity'] ?? null;

if ($action === 'delete') {
    unset($_SESSION['cart'][$productId]);
}

// Perform the requested action
if ($action === 'add') {
    if (is_null($quantity) || (int)$quantity === 0) {
        $quantity = 1;
    }

    // Check if the product is already in the cart
    if (!isset($_SESSION['cart'][$productId])) {
        // If not, add it with quantity 1
        $_SESSION['cart'][$productId] = $quantity;
    } else {
        // If it is, increment the quantity
        $_SESSION['cart'][$productId] += (int)$quantity;
    }
}

$cart = $_SESSION['cart'];
$productKeys = array_keys($cart);

$producst = [];
$cartItems = [];
$suma = 0.00;
$siuntimoKaina = 0.00;
$pvm = 0.00;
$viso = 0.00;
$taxRate = 21;

if (count($productKeys)) {
    $products = $product->getProductsById($productKeys);

    $cartItems = array_map(function($product) use ($cart) {
        $product['orderQuantity'] = $cart[$product['id']];
        return $product;
    }, $products);

    $siuntimoKaina = 5.00;

    foreach ($cartItems as $cartItem) {
        $suma += ($cartItem['kaina'] / (100 + $taxRate)) * 100 * $cartItem['orderQuantity'];
        $pvm += ($cartItem['kaina'] / (100 + $taxRate)) * $taxRate * $cartItem['orderQuantity'];
        $viso += $cartItem['kaina'] * $cartItem['orderQuantity'];
    }
}

// Include HTML file
include 'views/cart.html.php';