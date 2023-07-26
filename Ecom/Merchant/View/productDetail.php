<?php
include "./sidebar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main class=" ml-56 h-screen">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p>2023/July/24 - 4:04 PM</p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="moon-outline" class=" text-xl"></ion-icon></li>
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="60px"></li>
                </ul>
            </div>
        </header>
        <section>
            <p class=" p-3">Inventory > <span class=" font-semibold">Product Details</span></p>
            <div class=" flex justify-center px-5 py-1">
                <div class=" w-screen h-full bg-slate-200 rounded-lg p-5 shadow-xl">
                    <div class=" flex justify-between items-center">
                        <h1 class=" text-lg font-bold">Addidas Jac</h1>
                        <div class=" flex space-x-3 pr-4">
                            <button class="px-3 py-2 rounded-md border border-purple-300 shadow-lg font-playfairDisplay"><ion-icon name="create-outline" class=" text-lg text-black"></ion-icon> Edit</button>
                            <button class=" px-3 py-2 rounded-md border shadow-lg text-white font-playfairDisplay bg-red-500"><ion-icon name="trash-outline" class=" text-lg"></ion-icon> Delete</button>
                        </div>
                    </div>

                    <p class=" font-philosopher text-lg font-semibold pl-3">OverView</p>

                    <div class=" grid grid-cols-2 items-center justify-center w-full">

                        <div class="p-10">
                            <p class=" font-bold font-philosopher mb-3">Primary Details</p>
                            <div class=" flex-col space-y-6">
                                <div class=" flex justify-between space-x-10">
                                    <p>Product Name</p>
                                    <p>Addidas Jac</p>
                                </div>
                                <div class=" flex justify-between space-x-10">
                                    <p>Product ID</p>
                                    <p>456567</p>
                                </div>
                                <div class=" flex justify-between space-x-10">
                                    <p>Product Caategory</p>
                                    <p>Jacket</p>
                                </div>
                                <div class=" flex justify-between space-x-10">
                                    <p>Buying Price</p>
                                    <p>$200</p>
                                </div>
                                <div class=" flex justify-between space-x-10">
                                    <p>Selling Price</p>
                                    <p>$300</p>
                                </div>
                                <div class=" flex justify-between space-x-10">
                                    <p>Date</p>
                                    <p>24/07/2023</p>
                                </div>
                                <div class=" flex justify-between space-x-10">
                                    <p>Color</p>
                                    <p>Gray&Orange</p>
                                </div>
                            </div>
                        </div>
                        <div class="pt-20 border-gray-400 border-l-2">
                            <div class="flex justify-center">
                                <div class="  bg-slate-400 rounded-lg shadow-lg border border-dashed"><img src="./resources/img/adidas jacket 1.png" alt="..."></div>
                            </div>
                            <div class="flex justify-center py-7">
                                <div class=" flex-col space-y-3 w-56">
                                    <div class=" flex justify-between space-x-10">
                                        <p>Opening Stock</p>
                                        <p>40</p>
                                    </div>
                                    <div class=" flex justify-between space-x-10">
                                        <p>Remaining Stock</p>
                                        <p>30</p>
                                    </div>
                                    <div class=" flex justify-between space-x-10">
                                        <p>On the way</p>
                                        <p>10</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>