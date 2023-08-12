<?php
include "../Controller/orderlistController.php";
include "./adminsidebar.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/orderlist.css">
</head>

<body>
    <main class="ml-72 mt-24 py-5" id="main">
        <div class=" px-5 space-y-3">
            <p class=" text-xl font-semibold font-philosopher">Order list</p>

            <section class=" py-3">
                <div class=" flex justify-start items-center space-x-3">
                    <p class="text-lg">Search : </p>
                    <input type="text" class="border bg-bcolor rounded-md indent-1 px-2 py-1 outline-none">
                </div>
            </section>

            <section class="border rounded-lg shadow-lg p-2">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs uppercase bg-table text-white border rounded-lg">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Merchant Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Options
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                     <?php
                                    $product_name = $results['name'];
                                    echo $product_name;
                                    ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php 
                                     $name =  $merchantInfo['m_name'];
                                     echo $name;
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                <?php 
                                    $name =  $customerInfo['username'];
                                    echo $name;
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                <?php 
                                echo $Region['r_name'].' , ' . $Township['t_name'].' , '.  $customerStreetName;
                                ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $results['total_amt'];
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $results['order_date'];
                                    ?>
                                </td>
                                <td class="px-6 py-4 flex space-x-3">
                                    <a href="./orderDetail.php?order_id=<?= $results['order_id'] ?>"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>
                                </td>
                            </tr>
                       
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