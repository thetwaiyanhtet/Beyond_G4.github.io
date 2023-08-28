<?php
// session_start();
include "./adminsidebar.php";
include "../Controller/totalController.php";
include "../Controller/trendingproductController.php";
include "../Controller/orderandcustomerController.php";
include "../Controller/recentmerchantcontroller.php";
$order = $_SESSION["order"];
$revenue = $_SESSION["revenue"];
$merchant = $_SESSION["merchant"];
$customer = $_SESSION["customer"];
$trending = $_SESSION["m_trending"];
$trending_json = json_encode($trending);
$orderchart = $_SESSION["m_order"];
$order_json = json_encode($orderchart);
$customerchart = $_SESSION["m_customer"];
$customer_json = json_encode($customerchart);
$planchart = $_SESSION["m_plan"];
$plan_json = json_encode($planchart);
$lmerchant = $_SESSION["m_lastmerchant"];
$lcustomer = $_SESSION["m_lastcustomer"];
$category = $_SESSION["m_category"];
$category_json = json_encode($category);
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Dashboard</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../View/resources/css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <script src="./resources/js/dashboard.js" defer></script>
</head>

<body>
    <main id="main" class=" ml-60 h-screen mt-20  w-[80%]">
        <div class="flex justify-evenly flex-wrap">
            <div class=" relative  border w-48 rounded-lg shadow-xl">
                <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-blue-600"></div>
                <p class="mt-2 p-2 pl-5">Total Orders</p>
                <div class="flex  p-2 pl-5 items-center  justify-between">
                    <p class="text-[#3786FB] font-semibold"><?= $order[0]['COUNT(*)'] ?></p>
                    <div class="h-10 bg-blue-600 w-10 rounded-full ">
                        <i class='bx bxs-cart text-white mt-1 ml-1 text-center text-3xl'></i>
                    </div>
                </div>
            </div>
            <div class=" relative  border w-48 rounded-lg shadow-xl">
                <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-pink-600"></div>
                <p class="mt-2 p-2 pl-5">Total Revenue</p>
                <div class="flex  p-2 pl-5 items-center  justify-between">
                    <p class=" text-pink-600 font-semibold"><?= $revenue[0]['sum_received'] ?> Ks</p>
                    <div class="h-10 bg-pink-600 w-10 rounded-full ">
                        <i class='bx bxs-wallet text-white mt-1 ml-1 text-center text-3xl'></i>
                    </div>
                </div>
            </div>
            <div class=" relative  border w-48 rounded-lg shadow-xl">
                <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-green-600"></div>
                <p class="mt-2 p-2 pl-5">Total Merchant</p>
                <div class="flex  p-2 pl-5 items-center  justify-between">
                    <p class=" text-green-600 font-semibold"><?= $merchant[0]['COUNT(*)'] ?></p>
                    <div class="h-10 bg-green-600 w-10 rounded-full ">
                        <i class='bx bxs-group text-white mt-1 ml-1 text-center text-3xl'></i>
                    </div>
                </div>
            </div>
            <div class=" relative  border w-48 rounded-lg shadow-xl">
                <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-yellow-400"></div>
                <p class="mt-2 p-2 pl-5">Total Customers</p>
                <div class="flex  p-2 pl-5 items-center  justify-between">
                    <p class="text-yellow-400 font-semibold"><?= $customer[0]['COUNT(*)'] ?></p>
                    <div class="h-10 bg-yellow-400 w-10 rounded-full ">
                        <i class='bx bxs-group text-white mt-1 ml-1 text-center text-3xl'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-around">

            <div class="shadow-lg rounded-lg w-[61%] h-96 ml-5 mt-10 overflow-hidden">
                <div class="py-3 px-5 bg-gray-50 font-semibold">Orders and Customers Overview</div>
                <!-- <div class="flex">
                    <div class="flex items-center text-xs  border border-black rounded-lg w-28 justify-center mx-5">
                        <i class='bx bxs-circle text-[#F294C4]'></i>
                        <span>Customers</span>
                    </div>
                    <div class="flex items-center text-xs  border border-black rounded-lg w-28 justify-center mx-5">
                        <i class='bx bxs-circle text-[#5143D1]'></i>
                        <span>Orders</span>
                    </div>
                </div> -->
                <canvas class="p-10" id="chartLine"></canvas>
            </div>

            <!-- Required chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <!-- Chart line -->
            <script>
                var ordertt = <?= $order_json ?>;
                var orderdate = [];
                var ordertotal = [];
                console.log(ordertt);
                ordertt.forEach(function(item, index) {
                    orderdate.push(item.order_date)
                    ordertotal.push(item.total_rows);
                });

                var customertt = <?= $customer_json ?>;
                var customerdate = [];
                var customertotal = [];
                console.log(customertt);
                customertt.forEach(function(item, index) {
                    customerdate.push(item.create_date)
                    customertotal.push(item.total_rows);
                });

                const labels = customerdate;
                const data = {
                    labels: labels,
                    datasets: [{
                            label: "Customer",
                            backgroundColor: "#F294C4",
                            borderColor: "#F294C4",
                            data: customertotal,
                        },
                        // Add a new dataset for the second line
                        {
                            label: "Order",
                            backgroundColor: "#5143D1",
                            borderColor: "#5143D1",
                            data: ordertotal,
                        },
                    ],
                };

                const configLineChart = {
                    type: "line",
                    data,
                    options: {},
                };

                var chartLine = new Chart(
                    document.getElementById("chartLine"),
                    configLineChart
                );
            </script>

            <div class=" border rounded-xl shadow-xl w-64 mr-5 mt-10">
                <p class="pl-3 pt-3">Trending Products</p>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <div class=" w-56 mx-auto h-56 mt-3">
                    <canvas id="donut-chart"></canvas>
                </div>

                <script>
                    // Get the canvas element
                    var canvas = document.getElementById('donut-chart');

                    // Set the chart data
                    var trend = <?= $trending_json ?>;
                    var itemName = [];
                    var quantity = [];
                    trend.forEach(function(item, index) {
                        itemName.push(item.name)
                        quantity.push(item.total_sales);
                    });


                    var data1 = {
                        labels: itemName,
                        datasets: [{
                            label: 'Sold Quantity',
                            data: quantity,
                            backgroundColor: [
                                '#9179DD',
                                '#D92828',
                                '#01CBA3',
                                '#3C0A8D',
                            ],
                            hoverOffset: 4
                        }]
                    };

                    // Set the chart options
                    var options = {
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
                    var chart = new Chart(canvas, {
                        type: 'doughnut',
                        data: data1,
                        options: options
                    });
                </script>

            </div>
        </div>
        <div class=" flex justify-center">
            <div class="shadow-lg rounded-lg w-[90%] h-auto mt-10  overflow-hidden">
                <div class="py-3 px-5 bg-gray-50 font-semibold">Orders and Customers Overview</div>
                <canvas class="p-10 text-center " id="chartLinetwo"></canvas>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                // Get the canvas element
                // var canvas = document.getElementById('chartLinetwo');

                var plantt = <?= $plan_json ?>;
                var totmerchant = [];
                plantt.forEach(function(item, index) {
                    totmerchant.push(item.total_merchants)
                });

                const labels1 = ['1 month', '6 month', '12 month'];
                const datatot = {
                    labels: labels1,
                    datasets: [{
                            label: "Merchant",
                            backgroundColor: "#1ee12f",
                            borderColor: "#1ee12f",
                            data: totmerchant,
                        },
                        // Add a new dataset for the second line

                    ],
                };

                const config = {
                    type: 'line',
                    data: datatot,
                };

                var chartLine = new Chart(
                    document.getElementById("chartLinetwo"),
                    config
                );
            </script>
        </div>
        <div class="flex justify-around mt-5 mb-20">
        </div>
        <div class="flex justify-around mt-5 mb-20">
            <div class=" w-64 h-auto  border rounded-lg space-y-3 shadow-xl">
                <p class="font-semibold px-3 my-3">Top Selling Categories</p>
                <div class="">
                    <canvas height="400" id="bar"></canvas>
                </div>
                <script>
                    var cate = <?= $category_json ?>;
                    var totcategory = [];
                    var categoryquanti = [];
                    console.log(cate);
                    cate.forEach(function(item, index) {
                        totcategory.push(item.c_name);
                        categoryquanti.push(item.quantity);
                    });


                    var firstValue = totcategory[0].toString();
                    var secondValue = totcategory[1].toString();
                    var quantityValue = categoryquanti[0]
                    var quantitytwoValue = categoryquanti[1]
                    console.log(quantityValue);


                    var dataee = {
                        labels: ['August'],
                        datasets: [{
                                label: firstValue,
                                data: [quantityValue],
                                backgroundColor: '#671ee1',
                            },
                            {
                                label: secondValue,
                                data: [quantitytwoValue],
                                backgroundColor: '#0dcbf2',
                            },
                        ],
                    };

                    var options = {
                        scales: {
                            x: {
                                stacked: true, // This will stack the bars on top of each other
                            },
                            y: {
                                beginAtZero: true,
                            },
                        },
                    };


                    const configee = {
                        type: 'bar',
                        data: dataee,
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        },
                    };
                    var bar = new Chart(
                        document.getElementById("bar"),
                        configee
                    );
                </script>
            </div>
            <div class=" w-72 h-auto  border rounded-lg space-y-3 shadow-xl">
                <p class="font-semibold px-3 my-3">Recent Registred Merchant</p>
                <?php $for = 2; foreach ($lmerchant as $index => $value) { ?>
                    <div class="flex items-center ml-3 border-b-2 pb-2">
                        <img class="w-20" src="../../Storage/profile/<?= $value['logo'] ?>" alt="">
                        <div class="mx-3">
                            <p><?= $value['m_name'] ?></p>
                            <p><?= $data[$for - $index]['create_date'] ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class=" w-72 h-auto  border rounded-lg space-y-3 shadow-xl">
                <p class="font-semibold px-3 my-3">Recent Registred Customer</p>
                <?php $for = 2; foreach ($lcustomer as $index => $value) { ?>
                    <div class="flex items-center ml-3 border-b-2 pb-2">
                        <img class="w-20" src="../../Storage/profile/<?= $value['p_picture'] ?>" alt="">
                        <div class="mx-3">
                            <p><?= $value['username'] ?></p>
                            <p><?= $value['create_date'] ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>