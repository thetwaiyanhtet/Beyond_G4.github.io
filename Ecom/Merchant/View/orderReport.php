<?php
include "./sidebar.php";
include "../Controller/orderreportcontroller.php";

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/js/dateandtime.js " defer></script>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/report.css">
    <!-- <link rel="stylesheet" href="./resources/css/navbar.css"> -->
</head>

<body>
    <main class=" ml-56">
        <div class="flex justify-between mt-6 pl-5">
            <div class="flex">
                <a href="./saleReport.php">
                    <button class="w-[220px] h-[40px]  rounded-md flex items-center justify-center 
         font-poppins text-black transition-all duration-200">Sale reports</button>
                </a>
                <button class="w-[220px] h-[40px]  rounded-md bg-[#1366D9] flex items-center justify-center 
         font-poppins text-white ">Order reports</button>
            </div>
        </div>
        <div class="flex  items-center float-right mt-3 pl-5 pb-5 pr-5">
            <!-- <span class="flex p-1 border rounded-lg">
                <input type="date" name="" id="" class="outline-none text-[#756e6ef7]">
            </span>
            <span>-</span>
            <span class="flex p-1 border rounded-lg">
                <input type="date" name="" id="" class="outline-none text-[#756e6ef7]">
            </span> -->
            <button class=" ml-3 p-2 border border-[#1366D9] rounded-lg transition-all duration-200 hover:bg-[#1366D9] hover:text-white">Export to CSV</button>
        </div>


        <section class=" p-5">
            <div class=" clear-both w-full rounded-lg p-2 shadow-xl border-2 border-blue-950 mt-3 ">
                <div class="relative overflow-x-auto py-3">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-blue-200 ">
                            <tr>
                                <th scope="col" class=" pl-24 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Customer name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Payment By
                                </th>
                                <th scope="col" class="px-6 py-3 ">
                                    Total amount
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Order date
                                </th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = ($currentPage - 1) * $itemsPerPage ?>
                            <?php foreach ($paginatedData as $order) { ?>
                                <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                    <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap text-center">
                                        <?= ++$count ?>.
                                    </th>
                                    <td class="px-6 py-4">
                                        <?= $order["username"]; ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?php if ($order["payment_id"] == 0) { ?>
                                            Visa
                                        <?php } ?>
                                        <?php if ($order["payment_id"] == 1) { ?>
                                            KBZ pay
                                        <?php } ?> </td>
                                    <td class="pl-8 py-4">
                                        <?php $totalamt = $order["quantity"] * $order["price_per_unit"]  ?>
                                        <?= $totalamt ?> Ks
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $order["order_date"]; ?>
                                    </td>


                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="flex justify-center items-end pt-5">
                        <nav aria-label="Page navigation example">
                            <ul class=" flex space-x-3 pagination justify-content-center">
                                <?php if ($currentPage > 1) { ?>
                                    <li class="page-item p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline"><a class="page-link " href="?page=<?= $currentPage - 1 ?>">Previous</a></li>
                                <?php } else { ?>
                                    <li class="page-item disabled p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline"><a class="page-link opacity-50">Previous</a></li>
                                <?php } ?>
                                <?php for ($i = 1; $i <= ceil(count($ordersreport) / $itemsPerPage); $i++) { ?>
                                    <li class="page-item p-2 rounded-md px-3 <?= $i === $currentPage ? 'active font-semibold bg-blue-500 text-white' : '' ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                                <?php } ?>
                                <?php if ($startIndex + $itemsPerPage < count($ordersreport)) { ?><a class="page-link p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline" href="?page=<?= $currentPage + 1 ?>">Next</a></li>
                                <?php } else { ?>
                                    <li class="page-item disabled p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline"><a class="page-link opacity-50 ">Next</a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

    </main>
</body>

</html>