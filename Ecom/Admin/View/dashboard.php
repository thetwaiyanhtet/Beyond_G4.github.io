<?php
include "./adminsidebar.php";
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <main id="main" class=" ml-64 h-screen mt-28  w-[80%]">
        <div class="flex justify-around flex-wrap">
            <div class=" relative  border w-52 rounded-lg shadow-xl">
                <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-blue-600"></div>
                <p class="mt-2 p-2 pl-5">Total Orders</p>
                <div class="flex  p-2 pl-5 items-center  justify-between">
                    <p class="text-[#3786FB] font-semibold">4805</p>
                    <div class="h-10 bg-blue-600 w-10 rounded-full ">
                        <i class='bx bxs-cart text-white mt-1 ml-1 text-center text-3xl'></i>
                    </div>
                </div>
            </div>
            <div class=" relative  border w-52 rounded-lg shadow-xl">
                <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-pink-600"></div>
                <p class="mt-2 p-2 pl-5">Total Revenue</p>
                <div class="flex  p-2 pl-5 items-center  justify-between">
                    <p class=" text-pink-600 font-semibold">$12,152</p>
                    <div class="h-10 bg-pink-600 w-10 rounded-full ">
                        <i class='bx bxs-wallet text-white mt-1 ml-1 text-center text-3xl'></i>
                    </div>
                </div>
            </div>
            <div class=" relative  border w-52 rounded-lg shadow-xl">
                <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-green-600"></div>
                <p class="mt-2 p-2 pl-5">Total Merchant</p>
                <div class="flex  p-2 pl-5 items-center  justify-between">
                    <p class=" text-green-600 font-semibold">150</p>
                    <div class="h-10 bg-green-600 w-10 rounded-full ">
                        <i class='bx bxs-group text-white mt-1 ml-1 text-center text-3xl'></i>
                    </div>
                </div>
            </div>
            <div class=" relative  border w-52 rounded-lg shadow-xl">
                <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-yellow-400"></div>
                <p class="mt-2 p-2 pl-5">Total Customers</p>
                <div class="flex  p-2 pl-5 items-center  justify-between">
                    <p class="text-yellow-400 font-semibold">1.5K</p>
                    <div class="h-10 bg-yellow-400 w-10 rounded-full ">
                        <i class='bx bxs-group text-white mt-1 ml-1 text-center text-3xl'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-around">

            <div class="shadow-lg rounded-lg w-[61%] h-96 ml-5 mt-10 overflow-hidden">
                <div class="py-3 px-5 bg-gray-50 font-semibold">Orders and Customers Overview</div>
                <div class="flex">
                    <div class="flex items-center text-xs  border border-black rounded-lg w-28 justify-center mx-5">
                        <i class='bx bxs-circle text-[#F294C4]'></i>
                        <span>Customers</span>
                    </div>
                    <div class="flex items-center text-xs  border border-black rounded-lg w-28 justify-center mx-5">
                        <i class='bx bxs-circle text-[#5143D1]'></i>
                        <span>Orders</span>
                    </div>
                </div>
                <canvas class="p-10" id="chartLine"></canvas>
            </div>

            <!-- Required chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <!-- Chart line -->
            <script>
                const labels = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
                const data = {
                    labels: labels,
                    datasets: [{
                            label: "",
                            backgroundColor: "#F294C4",
                            borderColor: "#F294C4",
                            data: [210, 820, 720, 325, 50, 500, 550, 560, 950, 450],
                        },
                        // Add a new dataset for the second line
                        {
                            label: "",
                            backgroundColor: "#5143D1",
                            borderColor: "#5143D1",
                            data: [210, 270, 750, 750, 600, 650, 750, 210, 280, 750, 280],
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
                    var data1 = {
                        labels: ['Joker', 'Ballone', 'Hpone Toe', 'Lingerie'],
                        datasets: [{
                            label: 'Trending Products',
                            data: [60, 10, 33, 2],
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
                                display: false
                            }
                        },
                        aspectRatio: 1,
                        cutout: '50%',
                        animation: {
                            animateRotate: false
                        }
                    };

                    // Create the chart
                    var chart = new Chart(canvas, {
                        type: 'doughnut',
                        data: data1,
                        options: options
                    });
                </script>
                <div class=" text-xs ">
                    <div class="flex justify-center space-x-5 mt-5">

                        <span class="flex items-center space-x-5">
                            <p>Joker</p>
                            <div class="h-5 w-10 rounded-2xl text-white text-center bg-[#9179DD]">60</div>
                        </span>
                        <span class="flex items-center space-x-5">
                            <p>Ballone</p>
                            <div class="h-5 w-10 rounded-2xl text-white text-center bg-[#D92828]">60</div>
                        </span>
                    </div>
                    <div class="flex justify-center space-x-5 mt-5">

                        <span class="flex items-center space-x-3">
                            <p>Hpone Toe</p>
                            <div class="h-5 w-10 rounded-2xl text-white text-center bg-[#01CBA3]">60</div>
                        </span>
                        <span class="flex items-center space-x-3">
                            <p>Lingerie</p>
                            <div class="h-5 w-10 rounded-2xl text-white text-center bg-[#3C0A8D]">60</div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="shadow-lg rounded-lg w-[100%] h-auto mt-10 overflow-hidden">
                <div class="py-3 px-5 bg-gray-50 font-semibold">Orders and Customers Overview</div>
                <div class="flex">
                    <div class="flex items-center text-xs  border border-black rounded-lg w-28 justify-center mx-5">
                        <i class='bx bxs-circle text-[#F86D59]'></i>
                        <span>Pro</span>
                    </div>
                    <div class="flex items-center text-xs  border border-black rounded-lg w-28 justify-center mx-5">
                        <i class='bx bxs-circle text-[#835D6A]'></i>
                        <span>Enterprice</span>
                    </div>
                    <div class="flex items-center text-xs  border border-black rounded-lg w-28 justify-center mx-5">
                        <i class='bx bxs-circle text-[#BFCCDF]'></i>
                        <span>Basic</span>
                    </div>
                </div>
                <canvas class="p-10 text-center ml-20" id="chartLinea"></canvas>
            </div>

            <!-- Required chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <!-- Chart line -->
            <script>
                const labelsh = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
                const datag = {
                    labels: labelsh,
                    datasets: [{
                            labels: "",
                            backgroundColor: "#F86D59",
                            borderColor: "#F86D59",
                            data: [210, 820, 720, 325, 50, 500, 550, 560, 950, 450],
                        },
                        // Add a new dataset for the second line
                        {
                            labels: "",
                            backgroundColor: "#835D6A",
                            borderColor: "#835D6A",
                            data: [210, 270, 750, 750, 600, 650, 750, 210, 280, 750, 280],
                        },
                        {
                            labels: "",
                            backgroundColor: "#BFCCDF",
                            borderColor: "#BFCCDF",
                            data: [210, 500, 750, 750, 600, 650, 750, 210, 280, 750, 280],
                        },

                    ],
                };

                const configLineChartf = {
                    type: "line",
                    data,
                    options: {},
                };

                var chartLine = new Chart(
                    document.getElementById("chartLinea"),
                    configLineChartf
                );
            </script>
        </div>
        </div>
        <div class="flex justify-between my-5">
            <div class=" w-64 h-auto  border rounded-lg space-y-3 shadow-xl">
                <p class="font-semibold px-3 my-3">Top Selling Categories</p>
                <img src="./resources/img/Chart.png" class="px-3 my-3" alt="">
                <div class="flex justify-between text-sm">
                    <div class=" border-t-2 border-r-2 py-1 px-6">
                        <p>$45,216</p>
                        <p>Clothing</p>
                    </div>
                    <div class="border-t-2  py-1 px-6">
                        <p>$35,216</p>
                        <p>Electronic</p>
                    </div>
                </div>
            </div>
            <div class=" w-64 h-auto  border rounded-lg space-y-3 shadow-xl">
                <p class="font-semibold px-3 my-3">Merchant List</p>
                <div class="flex items-center ml-3 border-b-2 pb-2">
                    <img src="./resources/img/amazfit.png" alt="">
                    <div class="mx-3">
                        <p>Mary Pu Tu</p>
                        <p>30 mins</p>
                    </div>
                </div>
                <div class="flex items-center ml-3 border-b-2 pb-2">
                    <img src="./resources/img/amazfit.png" alt="">
                    <div class="mx-3">
                        <p>Mary Pu Tu</p>
                        <p>30 mins</p>
                    </div>
                </div>
                <div class="flex items-center ml-3 border-b-2 pb-2">
                    <img src="./resources/img/amazfit.png" alt="">
                    <div class="mx-3">
                        <p>Mary Pu Tu</p>
                        <p>30 mins</p>
                    </div>
                </div>
            </div>
            <div class=" w-96 h-auto  border rounded-lg space-y-3 shadow-xl">
            <p class="font-semibold px-3 my-3">Quick Actions</p>
                <div class="flex items-center ml-3 border-b-2 pb-2 space-x-3">
                    <img src="./resources/img/amazfit.png" alt="">
                        <p>Mary Pu Tu</p>
                        <button class="bg-blue-600 text-white rounded-lg px-3 py-1 ">Approve</button>
                        <button class="bg-red-500 rounded-lg text-white px-3 py-1">Reject</button>
                </div>
                <div class="flex items-center ml-3 border-b-2 pb-2 space-x-3">
                    <img src="./resources/img/amazfit.png" alt="">
                        <p>Mary Pu Tu</p>
                        <button class="bg-blue-600 text-white rounded-lg px-3 py-1 ">Approve</button>
                        <button class="bg-red-500 rounded-lg text-white px-3 py-1">Reject</button>
                </div>
                <div class="flex items-center ml-3 border-b-2 pb-2 space-x-3">
                    <img src="./resources/img/amazfit.png" alt="">
                        <p>Mary Pu Tu</p>
                        <button class="bg-blue-600 text-white rounded-lg px-3 py-1 ">Approve</button>
                        <button class="bg-red-500 rounded-lg text-white px-3 py-1">Reject</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>