<?php

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
    <link rel="stylesheet" href="../styles.css" />
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

    <div class="grid grid-cols-12 gap-6 m-6">
        <!-- Product Overview -->
        <div class="col-span-12">
            <h2 class="mb-6 text-lg font-bold text-gray-700">Krepšelis</h2>

            <!-- Product Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Eil. nr.</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nuotrauka</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pavadinimas</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kiekis</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kaina su PVM, €</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Suma su PVM, €</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Product row -->
                    <?php foreach($cartItems as $key => $cartItem): ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $key + 1 ?>.</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <img class="h-16 w-16 object-cover rounded" src="<?= $cartItem['nuotrauka'] ?>" alt="Product Image">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $cartItem['pavadinimas'] ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $cartItem['orderQuantity'] ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= number_format($cartItem['kaina'], 2) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= number_format($cartItem['kaina'] * $cartItem['orderQuantity'], 2) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="cart.php?action=delete&product_id=<?= $cartItem['id'] ?>">
                                    <button class="text-indigo-600 hover:text-indigo-900">Delete</button>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Summary -->
        <div class="col-start-7 col-span-6 mt-6 bg-gray-100 p-6 rounded-lg">
            <!-- Subtotal -->
            <div class="flex justify-between mb-4">
                <div class="text-lg font-medium text-gray-700">Suma</div>
                <div class="text-lg font-bold text-gray-900">€<?= number_format($suma, 2) ?></div>
            </div>

            <!-- Shipping -->
            <div class="flex justify-between mb-4">
                <div class="text-lg font-medium text-gray-700">Siuntimo kaina</div>
                <div class="text-lg font-bold text-gray-900">€<?= number_format($siuntimoKaina, 2) ?></div>
            </div>

            <!-- Taxes -->
            <div class="flex justify-between mb-4">
                <div class="text-lg font-medium text-gray-700">PVM</div>
                <div class="text-lg font-bold text-gray-900">€<?= number_format($pvm, 2) ?></div>
            </div>

            <hr class="my-6">

            <!-- Total -->
            <div class="flex justify-between mb-4">
                <div class="text-xl font-medium text-gray-700">Viso, su PVM</div>
                <div class="text-xl font-bold text-gray-900">€<?= number_format($viso, 2) ?></div>
            </div>

            <!-- Return and Checkout Buttons -->
            <div class="flex justify-between mt-6">
                <a href="../store/products.php">
                    <button class="px-6 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-500">Return to Catalog</button>
                </a>
                <button class="px-6 py-2 text-white bg-green-600 rounded-lg hover:bg-green-500">Proceed to Checkout</button>
            </div>
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