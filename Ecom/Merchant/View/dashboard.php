<?php
// session_start();
include "./sidebar.php";

include "../../User/Controller/trendingProductController.php";
include "../Controller/DashboardShowController.php";
$review = $_SESSION["reviewCustomers"];
$review_json = json_encode($review);
$trending = $_SESSION["trandingProductGraph"];
$trending_json = json_encode($trending);
// echo "<pre>";
// print_r($trending_json);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/css/dashboard.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./resources/js/dateandtime.js " defer></script>
    <link rel="stylesheet" href="./resources/css/navbar.css">
</head>

<body>
    <main class=" ml-56">
        <section class=" pb-3">
            <p class=" pt-3 pl-5 font-semibold text-lg">Dashboard</p>
            <div class=" flex justify-center px-5 py-2 space-x-4">
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Sales Overview</h1>
                    <div class=" flex justify-evenly pb-3">
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Sales.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                    <?php if (!$result["totalSales"] == 0) { ?>
                                        <p>$<?= $result["totalSales"] ?></p>
                                    <?php } else { ?>
                                        <p>$ 0</p>
                                    <?php } ?>
                                    <p>Sales</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Revenue.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                    <p>$1832</p>
                                    <p>Revenue</p>
                                </div>
                            </div>
                        </div> -->
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Profit.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                    <p>$<?= $profit ?></p>
                                    <p>Profit</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Cost.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                <?php if (!$result["totalCost"] == 0) { ?>
                                        <p>$<?= $result["totalCost"] ?></p>
                                    <?php } else { ?>
                                        <p>$ 0</p>
                                    <?php } ?>
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
                                    <?php if (!$result["quantityOnHand"] == 0) { ?>
                                        <p><?= $result["quantityOnHand"] ?></p>
                                    <?php } else { ?>
                                        <p>0</p>
                                    <?php } ?>
                                    <p class=" text-sm">Quantity in Hand</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" flex justify-center"><img src="./resources/img/Categories.png" alt="..."></div>
                                <div class=" flex space-x-5">
                                    <p><?= $totalCategoryCount ?></p>
                                    <p class=" text-sm">Number of Categories</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" flex justify-center px-5 py-2 space-x-4">
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-1">Customer Reviews</h1>
                    <div class=" flex space-x-3 items-center ">
                        <div class=" text-yellow-500 text-xl">
                            <?php
                            if (!function_exists('numberToStars')) {
                                function numberToStars($number)
                                {
                                    $roundedNumber = round($number);
                                    $maxStars = 5;
                                    $fullStars = str_repeat('★', $roundedNumber);
                                    $emptyStars = str_repeat('☆', $maxStars - $roundedNumber);
                                    return $fullStars . $emptyStars;
                                }

                            ?>
                            <?php }  ?>
                            <?= numberToStars($averageReview["review_rating"]) ?>

                        </div>
                        <p class=" font-semibold text-lg"><?= $averageReview["review_rating"] ?></p>
                        <p>Out of Stars</p>
                    </div>
                    <p class=" text-sm opacity-50">Overall rating of Customers' Reviews</p>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <div class=" flex-col justify-between pt-2">
                        <div class=" w-44 mx-auto">
                            <canvas id="donut-chart2"></canvas>
                        </div>
                    </div>

                    <script>
                        // Get the canvas element
                        var canvas2 = document.getElementById('donut-chart2');

                        // Set the chart data
                        var trend = <?= $review_json ?>;
                        console.log(trend);
                        var itemName = [];
                        var quantity = [];
                        trend.forEach(function(item, index) {
                            itemName.push(item.rating)
                            quantity.push(item.review_count);
                        });


                        var data2 = {
                            labels: itemName,
                            datasets: [{
                                label: 'Customer Reviews',
                                data: quantity,
                                backgroundColor: [
                                    '#F40C0C',
                                    '#F4DC0C',
                                    '#01CBA3',
                                    '#0C4AF4',
                                    '#28E307'
                                ],
                                hoverOffset: 4
                            }]
                        };

                        // Set the chart options
                        var options2 = {
                            plugins: {
                                legend: {
                                    display: true
                                }
                            },
                            aspectRatio: 1,
                            cutout: '50%',
                            animation: {
                                animateRotate: true
                            }
                        };

                        // Create the chart
                        var chart = new Chart(canvas2, {
                            type: 'doughnut',
                            data: data2,
                            options: options2
                        });
                    </script>


                    <div class=" flex space-x-2 pt-6 pb-6">
                        <div>
                            <p>Worst=1</p>

                        </div>
                        <div>
                            <p>Poor=2</p>

                        </div>
                        <div>
                            <p>Normal=3</p>

                        </div>
                        <div>
                            <p>Good=4</p>

                        </div>
                        <div>
                            <p>Excellent=5</p>

                        </div>
                    </div>
                </div>

                <div class=" flex-col space-y-4">
                    <div class=" rounded-lg p-3 shadow-xl border-2 border-blue-950">
                        <div class=" flex justify-center items-center space-x-3 pb-3 pt-3">
                            <img src="./resources/img/tabler_truck-delivery.png" alt="..." width="30px">
                            <h1 class=" text-lg font-bold font-philosopher">Delivery</h1>
                        </div>
                        <hr>
                        <?php if (!count($deliveryCounts) == 0) { ?>
                            <div class=" flex justify-between pb-3 space-x-5 p-3">
                                <div>
                                    <?php if ($deliveryCounts[0]["delivery_status"] == 0) { ?>
                                        <p class=" font-semibold"><?= $deliveryCounts[0]["product_count"] ?></p>
                                        <p>Processing</p>
                                    <?php } ?>
                                </div>
                                <div>
                                    <?php if ($deliveryCounts[1]["delivery_status"] == 1) { ?>
                                        <p class=" font-semibold"><?= $deliveryCounts[1]["product_count"] ?></p>
                                        <p>Processed</p>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class=" flex justify-between pb-3 space-x-5 p-3">
                                <div>
                                    <p class=" font-semibold">0</p>
                                    <p>Processing</p>
                                </div>
                                <div>
                                    <p class=" font-semibold">0</p>
                                    <p>Processed</p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class=" rounded-lg p-3 shadow-xl border-2 border-blue-950 h-[192px]">
                        <div class=" flex justify-center items-center space-x-3 pb-3 pt-3">
                            <img src="./resources/img/person-heart-outline.svg" alt="..." width="30px">
                            <h1 class=" text-lg font-bold font-philosopher">Top Customers</h1>
                        </div>
                        <hr>
                        <div class=" flex justify-center">
                            <div class=" flex-col justify-between pb-3 p-3 space-y-2">
                                <?php foreach ($topCustomers as $topCus) { ?>
                                    <div class=" flex space-x-5 pl-1">
                                        <img src="../../<?= $topCus["p_picture"] ?>" alt="..." class=" w-6 h-6 rounded-full">
                                        <p><?= $topCus["username"] ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" flex-col space-y-4">
                    <div class=" w-60 rounded-lg p-3 shadow-xl border-2 border-blue-950">
                        <div class=" flex justify-center items-center space-x-3 pb-3 pt-3">
                            <img src="./resources/img/dollar.svg" alt="..." width="30px">
                            <h1 class=" text-lg font-bold font-philosopher">Earn of the Month</h1>
                        </div>
                        <hr>
                        <div class=" text-center py-6">
                            <p>$<?= $totalProfit ?></p>
                        </div>
                    </div>
                    <div class=" rounded-lg p-3 shadow-xl border-2 border-blue-950">
                        <div class=" flex justify-center items-center space-x-3 pb-3 pt-3">
                            <ion-icon name="wallet-outline" class=" text-3xl"></ion-icon>
                            <h1 class=" text-lg font-bold font-philosopher">Current Plan</h1>
                        </div>
                        <hr>
                        <div class=" flex-col items-center text-center py-3">
                            <p class=" font-semibold text-lg pt-1"><?= $planName ?></p>
                            <div class=" flex space-x-5 p-4">
                                <p>Days Left:</p>
                                <p><spantrendingdonut-chart class=" font-semibold"><?= $daysRemaining ?> days</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-full h-[360px] space-y-4  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-3">Trending Products</h1>
                    <div class=" flex-col justify-between pb-0">
                        <div class=" w-52 mx-auto">
                            <canvas id="donut-chart"></canvas>
                        </div>
                    </div>

                    <script>
                        // Get the canvas element
                        var canvas = document.getElementById('donut-chart');

                        // Set the chart data
                        var trend1 = <?= $trending_json ?>;
                        console.log(trend1);
                        var itemName1 = [];
                        var quantity1 = [];
                        trend1.forEach(function(item, index) {
                            itemName1.push(item.name)
                            quantity1.push(item.product_count);
                        });

                        // Set the chart data
                        var data1 = {
                            labels: itemName1,
                            datasets: [{
                                label: 'Trending Products',
                                data: quantity1,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 205, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(75, 152, 172, 0.2)',
                                    'rgba(75, 232, 142, 0.2)'

                                ],
                                borderColor: [
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)',
                                    'rgb(255, 205, 86)',
                                    'rgb(75, 192, 192)',
                                    'rgb(65, 155, 76)',
                                    'rgb(59, 182, 82)'

                                ],
                                borderWidth: 1
                            }]
                        };

                        // Set the chart options
                        var options = {
                            plugins: {
                                legend: {
                                    display: false
                                }
                            },
                            aspectRatio: 1,
                            cutout: '50%',
                            animation: {
                                animateRotate: true
                            }
                        };

                        // Create the chart
                        var chart = new Chart(canvas, {
                            type: 'bar',
                            data: data1,
                            options: options
                        });
                        // ..............................................................................
                    </script>

                    <div class=" flex justify-around pt-4 pb-4">
                        <?php foreach ($trending as $trendingProduct) { ?>
                            <div class=" flex-col space-y-3">
                                <div class=" flex space-x-2">
                                    <p><?= $trendingProduct["name"] ?> :</p>
                                    <p><?= $trendingProduct["product_count"] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class=" flex justify-center px-5 py-2 space-x-4">
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Top Selling Stocks</h1>
                    <div class=" flex-col justify-between pb-5">
                        <div class="relative overflow-x-auto py-3">
                            <table class="w-[780px] text-sm text-left text-gray-500 ">
                                <thead class="text-xs text-gray-700 uppercase bg-blue-200 text-center">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start">
                                            Product name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            sold quantity
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            remaining quantity
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class=" text-center">
                                    <?php foreach ($topSellingProducts as $topSelling) { ?>
                                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start">
                                                <?= $topSelling["name"] ?>
                                            </th>
                                            <td class="px-6 py-4">
                                                <?= $topSelling["total_sold"] ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                <?= $topSelling["instock"] ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                <?= $topSelling["sellprice"] ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Low Quantity Stocks</h1>
                    <?php foreach ($lowQuantity as $lowQuantityStock) { ?>
                        <div class=" flex justify-between items-center pb-3 space-y-4">
                            <img src="../../<?= $lowQuantityStock["p_one"] ?>" alt="..." class=" w-12 h-12 ">
                            <div class="">
                                <p class=" font-semibold text-lg"><?= $lowQuantityStock["name"] ?></p>
                                <p class=" opacity-60">Remaining Qty : <?= $lowQuantityStock["instock"] ?> Units</p>
                            </div>
                            <p class=" rounded-2xl p-1 text-red-500 bg-red-300 border w-12 text-center hover:underline">Low</p>
                        </div>
                    <?php } ?>


                </div>
            </div>

            <!-- <div class=" flex justify-center px-5 py-2 space-x-4">
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <div class="flex justify-between items-center">
                        <h1 class=" text-lg font-bold font-philosopher">Sales & Profits</h1>
                        <button class=" border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:text-white hover:bg-blue-500"><ion-icon name="calendar-clear-outline"></ion-icon> Weekly</button>
                    </div>
                    <div class=" w-[700px] flex-col justify-between py-4">
                        <canvas class="p-10" id="chartLine"></canvas>
                        <img src="./resources/img/saleChart.png" alt="">
                    </div>
                </div>

                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <div class="flex justify-between items-center">
                        <h1 class=" text-lg font-bold font-philosopher">Order Chart</h1>
                        <button class=" border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:text-white hover:bg-blue-500"><ion-icon name="calendar-clear-outline"></ion-icon> Weekly</button>
                    </div>
                    <div class=" flex-col justify-between py-3">
                        <img src="./resources/img/orderChart.png" alt="...">
                    </div>
                </div>
            </div> -->
        </section>
    </main>
</body>



</html>