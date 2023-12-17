<?php

session_start();
include("../log-ins/connections.php");
include("../log-ins/functions.php");

$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop</title>
    <link rel="stylesheet" href="../../front_end/styles.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../../backend_calculations/otherfunctions.js?2" defer></script>
</head>
<body>

<!-- Nav Bar -->

<nav>
    <div class="logo"><img src="../../media/logo_transparent.png" alt="" /></div>
    <a href="../index.php">Pradžia</a>
    <a href="../calculator.php">Skaičiuoklė</a>
    <a href="../store/index.php">Parduotuvė</a>
    <a href="../about.php">Apie Mus</a>
    <a href="../contacts.php">Kontaktai</a>
    <a href="../store/cart.php" class="cart"><img src="../../media/cart.png" alt=""></a>
    <?php if(!empty($user_data['username'])){
        echo '<a href="">'.$user_data['username'].'</a>';}
    else {}?>

    <?php if(empty($user_data['username'])){
        echo '<div class="dropdown"><a class="dropdownA" href="javascript:void(0);" onclick="dropdownMenu()"
        >&#9776;</a>';}?>

    <?php if(!empty($user_data['username'])){
        echo '<div class="dropdown"><a class="dropdownAhidden" href="javascript:void(0);" onclick="dropdownMenu()"
        >&#9776;</a>';}?>

    <?php if(empty($user_data['username'])){
        echo '<div class="dropdown-content" id="dropdownClick">
          <a href="log-ins/login.php">Prisijungti</a>
          <a href="log-ins/login.php">Registruotis</a>
        </div>';}?>
    </div>
</nav>

<!-- Content -->

<main>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <h1 class="text-4xl mb-8">Rezistoriai</h1>
        <div class="flex space-x-5">
            <?php foreach($categories as $category): ?>

                <div class="flex flex-col justify-between w-64 bg-white shadow-md rounded-md overflow-hidden">
                    <div class="flex justify-center">
                        <img src="<?= $category['image_path'] ?>" alt="" class="w-auto h-auto object-cover">
                    </div>
                    <div class="text-center px-6 py-4">
                        <h2 class="font-bold text-xl mb-2"><a href="products.php?category_id=<?= $category['id'] ?>" class="text-gray-900 hover:text-gray-700"><?= $category['name'] ?></a></h2>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="footerContent">
    <div class="socialsText">Socialiniai tinklai</div>
    <div class="flex items-center justify-center">
        <a href="#facebook"><img src="../../media/facebook-logo.png" alt=""></a>
        <a href="#whatsapp"><img src="../../media/whatsapp-logo.png" alt=""></a>
        <a href="#youtube"><img src="../../media/youtube-logo.png" alt=""></a>
    </div>
    <div class="copyright">Copyright &#169; 2023. Ohm Depot. All rights reserved</div>
</footer>
</body>
</html>