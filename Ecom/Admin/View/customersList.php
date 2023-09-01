<?php
include "./adminsidebar.php";
include "../Controller/costomerListController.php";

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Customer List</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/customers.css">
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script src="../View/resources/js/searchCustomer.js"></script>
</head>

<body>
    <main id="main" class=" ml-72 mt-24">
        <div class=" px-5 space-y-3">
            <p class=" text-xl font-semibold font-philosopher ">Customer List</p>
            <section class=" py-3 ml-5">
                <div class=" flex justify-start items-center space-x-3">
                    <p>Search : </p>
                    <input type="search" id="search" class="border rounded-md indent-1 px-2 py-1 outline-none bg-gray-300" placeholder="By Name">
                </div>
            </section>

            <section class="border-2 border-gray-400 rounded-lg shadow-lg p-2">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs uppercase bg-blue-600 text-white border rounded-lg">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Options
                            </th>
                        </tr>
                    </thead>
                    <tbody id="searchResult">                       
                        <?php foreach ($paginatedData as $customer) { ?>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <?= $customer["username"]; ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= $customer["email"]; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $customer["street"]; ?> , <?= $customer["t_name"]; ?> , <?= $customer["r_name"]; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $customer["phone"]; ?>
                                </td>
                                <td class="px-8 py-4 flex space-x-3">
                                    <a href="./customerDetail.php?id=<?= $customer["id"]; ?>"><img src="./resources/img/eye.svg" alt="..."></a>
                                    
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
                            <?php for ($i = 1; $i <= ceil(count($customers) / $itemsPerPage); $i++) { ?>
                                <li class="page-item p-2 rounded-md px-3 <?= $i === $currentPage ? 'active font-semibold bg-blue-800 text-white' : '' ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                            <?php } ?>
                            <?php if ($startIndex + $itemsPerPage < count($customers)) { ?><a class="page-link p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline" href="?page=<?= $currentPage + 1 ?>">Next</a></li>
                            <?php } else { ?>
                                <li class="page-item disabled p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline"><a class="page-link opacity-50">Next</a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
        <div id="delhid" class=" absolute top-20 mt-40 ml-60 hidden">
            <?php
            include "./deldetepo-up.php";
            ?>
        </div>
    </main>
    <script>
        document.getElementById('del').addEventListener('click', (e) => {
            document.getElementById('delhid').classList.add('show');
            document.getElementById('delhid').classList.remove('hidden');
        })
        document.getElementById('no').addEventListener('click', (e) => {
            document.getElementById('delhid').classList.add('hidden');
            document.getElementById('delhid').classList.remove('show');
        })
    </script>
</body>

</html>