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
                        <?php foreach ($results as $result) { ?>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <?php
                                    $product_id = $result['product_id'];
                                    $sql = $pdo->prepare("SELECT proudct_name FROM m_orderdetails WHERE product_id =:product_id ");
                                    $sql->bindValue(":product_id", $product_id);
                                    $sql->execute();
                                    $product_name = $sql->fetchColumn();
                                    echo $product_name;
                                    ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php $merchant_id = $result['merchant_id'];
                                    $sql = $pdo->prepare("SELECT m_name FROM m_merchant WHERE merchant_id =:merchant_id ");
                                    $sql->bindValue(":merchant_id", $merchant_id);
                                    $sql->execute();
                                    $merchant_name = $sql->fetchColumn();
                                    echo $merchant_name;
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php $customer_id = $result['customer_id'];
                                    $sql = $pdo->prepare("SELECT username FROM m_customer WHERE customer_id =:customer_id ");
                                    $sql->bindValue(":customer_id", $customer_id);
                                    $sql->execute();
                                    $customer_name = $sql->fetchColumn();
                                    echo $customer_name;
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php $customer_id = $result['customer_id'];
                                    $sql = $pdo->prepare("SELECT customer_city FROM m_customer WHERE customer_id =:customer_id ");
                                    $sql->bindValue(":customer_id", $customer_id);
                                    $sql->execute();
                                    $customer_address = $sql->fetchColumn();
                                    echo $customer_address;
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $result['total_amt'];
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $result['order_date'];
                                    ?>
                                </td>
                                <td class="px-6 py-4 flex space-x-3">
                                    <a href="./orderDetail.php?id=<?php echo $result['id']; ?>"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>

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