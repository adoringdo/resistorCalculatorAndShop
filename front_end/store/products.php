<?php

use store\models\Product;

global $db;
require 'database/db.php';
require 'models/Product.php';

// Create a new Product instance
$product = new Product($db);

$categoryId = $_GET['category_id'] ?? null;

$resistance = $_GET['power'] ?? null;

$price = $_GET['kaina'] ?? null;

$rings = $_GET['rings'] ?? null;

$ohmId = $_GET['ohm_id'] ?? null;

$resistorType = $_GET['resistor_type'] ?? null;

if ($resistance || $price || $rings || $ohmId || $resistorType) {
    $products = $product->filter($resistance, $price, $rings, $ohmId, $resistorType);
} else {
    $products = $product->getProductsByCategory($categoryId);
}

// Include HTML file
include 'views/products.html.php';
