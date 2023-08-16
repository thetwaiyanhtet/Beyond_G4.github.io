<?php
include "./adminsidebar.php";
include "../Controller/merchantListController.php";
// print_r($merchantList);

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/merchant.css">
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script src="../View/resources/js/searchMerchant.js"></script>
</head>

<body>
    <main id="main" class=" ml-72 mt-24 py-5">
        <div class=" px-5 space-y-3">
            <p class=" text-xl font-semibold font-philosopher">Merchant List</p>
            <section class=" py-3">
                <div class=" flex justify-start items-center space-x-3">
                    <p>Search : </p>
                    <input type="search" id="search" class=" border rounded-md indent-1 px-2 py-1 outline-none bg-gray-300" placeholder="By Merchant Name">
                </div>
            </section>
            <section class="border-2 border-gray-400 rounded-lg shadow-lg p-2">
                <table class="w-full text-sm text-left text-gray-500 border-collapse">
                    <thead class="text-xs uppercase bg-table text-white border rounded-tl-md rounded-tr-md">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Merchant Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Plan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Create date
                            </th>
                            <!-- <th scope="col" class="px-6 py-3">
                                Revenue
                            </th> -->
                            <th scope="col" class="px-6 py-3">
                                Options
                            </th>
                        </tr>
                    </thead>
                    <tbody id="searchResult">
                        <?php foreach ($merchantList as $merchantListDetail) { ?>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <?= $merchantListDetail["m_name"] ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= $merchantListDetail["email"] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $merchantListDetail["plan_name"] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $merchantListDetail["create_date"] ?>
                                </td>
                                <!-- <td class="px-6 py-4">
                                $12600
                            </td> -->

                                <td class="px-6 py-4 flex space-x-3">
                                    <a href="./merchantProfile.php?id=<?= $merchantListDetail["id"] ?>"><img src="./resources/img/eye.svg" alt=""></a>
                                    <img src="./resources/img/bin.svg" alt="">
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
                <div class="flex justify-between items-center py-2 px-3 pt-5">
                    <a href="#"><button class=" border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline">Previous</button></a>
                    <div>Page 1 of 10</div>
                    <a href="#"><button class="  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline">Next</button></a>
                </div>
            </section>
        </div>
    </main>
</body>

</html>