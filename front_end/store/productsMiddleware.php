<?php
include('../backend_calculations/calculations.php');

$power = $_COOKIE['cookiepower'];
$rings = $_COOKIE['cookierings'];

// Redirecting to the store with query string
$path = "products.php?power=$power&rings=$rings";

// Use header() function to redirect
header("Location: $path");
