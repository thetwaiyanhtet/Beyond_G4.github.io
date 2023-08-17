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
                        <?php foreach ($paginatedData as  $result) { ?>

                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <?php
                                    $product_name = $result['id'];
                                    echo $product_name;
                                    ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php
                                    echo $result['m_name'];
                                    ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php
                                    echo $result["username"];
                                    ?>
                                </td>
                                <td class="px-6 py-4 w-40">
                                    <?php
                                    echo $result['r_name']  . $result['t_name'] .' , ' . $result['street'];
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
                                    <a href="./orderDetail.php?id=<?= $result['id'] ?>"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>
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
                                <li class="page-item disabled p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline"><a class="page-link  opacity-50">Previous</a></li>
                            <?php } ?>
                            <?php for ($i = 1; $i <= ceil(count($results) / $itemsPerPage); $i++) { ?>
                                <li class="page-item p-2 rounded-md px-3 <?= $i === $currentPage ? 'active font-semibold bg-blue-500 text-white' : '' ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                            <?php } ?>
                            <?php if ($startIndex + $itemsPerPage < count($results)) { ?><a class="page-link p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline" href="?page=<?= $currentPage + 1 ?>">Next</a></li>
                            <?php } else { ?>
                                <li class="page-item disabled p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline"><a class="page-link opacity-50">Next</a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>


    </main>
</body>

</html>