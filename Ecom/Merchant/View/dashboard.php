<?php
include "./sidebar.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main class=" ml-56 h-screen">
        <header class=" border-gray-300 border-b-2 h-20 flex justify-between items-center">
            <div class=" pl-2">
                <p>2023/July/24 - 4:04 PM</p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-3">
                    <li><ion-icon name="moon-outline" class=" text-xl"></ion-icon></li>
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="50px"></li>
                </ul>
            </div>
        </header>
        <section>
            <p class=" p-3">Dashboard</p>
            <div class=" flex justify-center px-5 py-1 space-x-2">
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Sales Overview</h1>
                    <div class=" flex justify-between pb-3">
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Sales.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                    <p>$832</p>
                                    <p>Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Revenue.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                    <p>$1832</p>
                                    <p>Revenue</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Profit.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                    <p>$868</p>
                                    <p>Profit</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Cost.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                    <p>$12300</p>
                                    <p>Cost</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" w-[50%] h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950 ">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Inventory Summary</h1>
                    <div class=" flex justify-between pb-3">
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Quantity.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                    <p>800</p>
                                    <p class=" text-sm">Quantity in Hand</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Categories.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                    <p>21</p>
                                    <p class=" text-sm">Number of Categories</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" flex justify-center px-5 py-1 space-x-2">
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Customer Reviews</h1>
                    <div class=" flex justify-between pb-3">
                        <div class=" flex">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                        </div>
                        <p class=" font-semibold text-lg">5</p>
                        <p>Out of Stars</p>
                    </div>
                    <p class=" text-sm opacity-50">Overall rating of Customers' Reviews</p>
                    <div class=" flex-col space-y-5 pt-3">
                        <div class=" flex space-x-3 items-center font-semibold">
                            <p>Excellent</p>
                            <div class=" h-3 w-full bg-green-500 rounded-lg"></div>
                            <p>35</p>
                        </div>
                        <div class=" flex space-x-3 items-center font-semibold">
                            <p>Good</p>
                            <div class=" h-3 w-full bg-green-500 rounded-lg"></div>
                            <p>25</p>
                        </div>
                        <div class=" flex space-x-3 items-center font-semibold">
                            <p>Average</p>
                            <div class=" h-3 w-full bg-green-500 rounded-lg"></div>
                            <p>10</p>
                        </div>
                        <div class=" flex space-x-3 items-center font-semibold">
                            <p>Poor</p>
                            <div class=" h-3 w-full bg-green-500 rounded-lg"></div>
                            <p>05</p>
                        </div>
                    </div>
                    <div class=" flex justify-center pt-3">
                        <button class=" px-20 py-2 rounded-3xl bg-transparent border-2 border-gray-500">See All</button>
                    </div>
                </div>

                <div>
                    <div class=" rounded-lg p-3 shadow-xl border-2 border-blue-950">
                        <div class=" flex justify-start items-center space-x-3">
                            <img src="./resources/img/tabler_truck-delivery.png" alt="...">
                            <h1 class=" text-lg font-bold font-philosopher">Delivery</h1>
                        </div>
                        <div class=" flex justify-between pb-3 space-x-5 p-3">
                            <div>
                                <p class=" font-semibold">150</p>
                                <p>Processing</p>
                            </div>
                            <div>
                                <p class=" font-semibold">75</p>
                                <p>Processed</p>
                            </div>
                        </div>
                    </div>
                    <div class=" rounded-lg p-3 shadow-xl border-2 border-blue-950">
                        <div class=" flex justify-start items-center space-x-3">
                            <img src="./resources/img/customer.png" alt="..." width="30px">
                            <h1 class=" text-lg font-bold font-philosopher">Top Customers</h1>
                        </div>
                        <div class=" flex-col justify-between pb-3 p-3">
                            <div class=" flex">
                                <p>1</p>
                                <img src="./resources/img/Profile.png" alt="...">
                                <p>Kyaw Gyi</p>

                            </div>
                            <div class=" flex">
                                <p>2</p>
                                <img src="./resources/img/Profile.png" alt="...">
                                <p>Mi Chaw</p>
                            </div>
                            <div class=" flex">
                                <p>3</p>
                                <img src="./resources/img/Profile.png" alt="...">
                                <p>Toke Gyi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class=" w-full h-auto  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                        <h1 class=" text-lg font-bold font-philosopher pb-5">Earn of the Month</h1>
                        <div class=" flex-col justify-between pb-3">
                            <p>$215456</p>
                        </div>
                    </div>
                    <div class=" rounded-lg p-3 shadow-xl border-2 border-blue-950">
                        <h1 class=" text-lg font-bold font-philosopher pb-5">Current Plan</h1>
                        <div class=" flex-col justify-between pb-3">
                            <p>Professional</p>
                        </div>
                    </div>
                </div>
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Trending Products</h1>
                    <div class=" flex-col justify-between pb-3">
                        <div class=" flex justify-center">
                            <img src="./resources/img/pieChart.png" alt="">
                        </div>
                    </div>

                    <div class=" flex justify-around">
                        <div class=" flex-col">
                            <div class=" flex space-x-10">
                                <p>Jeans</p>
                                <p>60</p>
                            </div>
                            <div class=" flex justify-between">
                                <p>T-Shirts</p>
                                <p>33</p>
                            </div>
                        </div>

                        <div class=" flex-col">
                            <div class=" flex space-x-10">
                                <p>Shoes</p>
                                <p>40</p>
                            </div>
                            <div class=" flex justify-between">
                                <p>EarBuds</p>
                                <p>9</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=" flex justify-center px-5 py-1 space-x-2">
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Customer Reviews</h1>
                    <div class=" flex-col justify-between pb-3">
                        <div class=" flex">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                        </div>
                        <p class=" font-semibold text-lg">5</p>
                        <p>Out of Stars</p>
                    </div>
                </div>
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Customer Reviews</h1>
                    <div class=" flex-col justify-between pb-3">
                        <div class=" flex">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                        </div>
                        <p class=" font-semibold text-lg">5</p>
                        <p>Out of Stars</p>
                    </div>
                </div>
            </div>

            <div class=" flex justify-center px-5 py-1 space-x-2">
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Customer Reviews</h1>
                    <div class=" flex-col justify-between pb-3">
                        <div class=" flex">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                        </div>
                        <p class=" font-semibold text-lg">5</p>
                        <p>Out of Stars</p>
                    </div>
                </div>
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Customer Reviews</h1>
                    <div class=" flex-col justify-between pb-3">
                        <div class=" flex">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                            <img src="./resources/img/noto_star.png" alt="...">
                        </div>
                        <p class=" font-semibold text-lg">5</p>
                        <p>Out of Stars</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>