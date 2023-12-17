<?php

session_start();
include("../log-ins/connections.php");
include("../log-ins/functions.php");

$user_data = check_login($con);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Shop</title>
    <link rel="stylesheet" href="../../front_end/styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>

<!--Header-->
<nav>
    <div class="logo"><img src="../../media/logo_transparent.png" alt=""/></div>
    <a href="../index.php">Pradžia</a>
    <a href="../calculator.php">Skaičiuoklė</a>
    <a href="../store/index.php">Parduotuvė</a>
    <a href="../about.php">Apie Mus</a>
    <a href="../contacts.php">Kontaktai</a>
    <a href="../store/cart.php" class="cart"><img src="../../media/cart.png" alt=""></a>
    <a class="dropDown" href="javascript:void(0);" onclick="dropdownMenu()"
    >&#9776;</a
    >
</nav>

<!-- Content -->
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 text-gray-700">

    <!-- Products -->
    <div id="app">
        <div v-if="products.length">
            <div v-for="(product, index) in products" :key="index">
                <!-- start product -->
                <div class="flex h-32 rounded-lg shadow-md border mb-3">
                    <!-- left -->
                    <div class="w-42 overflow-hidden p-3">
                        <img :src="product.nuotrauka" :alt="product.pavadinimas" class="w-full h-full object-cover"
                             style="width: 120px; height: 100px;">
                    </div>

                    <!-- right -->
                    <div class="flex flex-col flex-grow p-3">

                        <!-- top -->
                        <div class="flex-1">
                            <div class="flex justify-between">
                                <div class="text-xl">{{ product.pavadinimas }}</div>
                                <div class="text-3xl font-bold">€{{ roundToTwoDecimalPlaces(product.kaina) }}</div>
                            </div>
                        </div>

                        <!-- bottom -->
                        <div class="flex-1">
                            <div class="flex justify-end items-center mt-6">
                                <!-- stock level -->
                                <div class="mx-4">
                                <span v-if="product.kiekis > 0">
                                    <i class="fa-sharp fa-solid fa-circle-check fa-lg text-green-500"></i>
                                    Yra sandelyje.
                                </span>
                                    <span v-else>
                                    <i class="fa-sharp fa-solid fa-circle-xmark fa-lg text-red-500"></i>
                                    Nera sandelyje.
                                </span>
                                </div>
                                <!-- order quantity -->
                                <div class="mx-4">
                                    <button
                                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"
                                            @click="decreaseQty(index)"
                                            :disabled="product.kiekis === 0">
                                        -
                                    </button>
                                    <input type="text" class="w-20 text-center" v-model="product.orderQuantity"
                                           :disabled="product.kiekis === 0">
                                    <button
                                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"
                                            @click="increaseQty(index)"
                                            :disabled="product.kiekis === 0">
                                        +
                                    </button>
                                </div>
                                <!-- add to cart -->
                                <div class="ml-4">
                                    <button class="border-2 border-green-500 hover:border-green-700 text-green-500 hover:text-green-700 font-bold py-2 px-4 rounded">
                                        <a :href="`cart.php?action=add&product_id=${product.id}&quantity=${product.orderQuantity}`">PRIDĖTI
                                            Į KREPŠELĮ</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end product -->
            </div>
        </div>
        <div v-else>
            Katagorija tuscia
        </div>
    </div>


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

    <script>
        const {createApp} = Vue;

        createApp({
            data() {
                return {
                    products: <?= json_encode($products) ?>.map(product => ({
                        ...product,
                        orderQuantity: 0
                    }))
                }
            },
            methods: {
                roundToTwoDecimalPlaces(num) {
                    return parseFloat(num).toFixed(2);
                },
                increaseQty(index) {
                    this.products[index].orderQuantity++;
                },
                decreaseQty(index) {
                    let orderQuantity = this.products[index].orderQuantity;
                    orderQuantity = orderQuantity - 1;
                    console.log(orderQuantity)
                    if (orderQuantity < 0) {
                        this.products[index].orderQuantity = 0;
                    } else {
                        this.products[index].orderQuantity = orderQuantity;
                    }
                },
            }
        }).mount('#app');
    </script>

</body>
</html>

