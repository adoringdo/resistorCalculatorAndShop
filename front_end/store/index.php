<?php

use store\models\Category;

require 'database/db.php';
require 'models/Category.php';


// Create a new Category instance
$category = new Category($db);

// Fetch all categories
$categories = $category->getAllCategories();

// Include HTML file
include 'views/categories.html.php';