<?php
include "./adminsidebar.php";
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
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/customers.css">
</head>

<body>
    <main id="main" class=" ml-72 mt-24">
        <div class=" px-5 space-y-3">
            <p class=" text-xl font-semibold font-philosopher ">Customer List</p>

            <section class=" py-3 ml-5">
                <div class=" flex justify-start items-center space-x-3">
                    <p>Search : </p>
                    <input type="text" class="border rounded-md indent-1 px-2 py-1 outline-none bg-gray-300">
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
                    <tbody>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                John
                            </th>
                            <td class="px-6 py-4">
                                Mail Sample
                            </td>
                            <td class="px-6 py-4">
                                Address Sample
                            </td>
                            <td class="px-6 py-4">
                                09123456789
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                                <a href="./customers.php"><img src="./resources/img/eye.svg" alt=""></a>
                                <img id="del" class=" cursor-pointer" src="./resources/img/bin.svg" alt="">
                            </td>

                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                John
                            </th>
                            <td class="px-6 py-4">
                                Mail Sample
                            </td>
                            <td class="px-6 py-4">
                                Address Sample
                            </td>
                            <td class="px-6 py-4">
                                09123456789
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                                <a href="./customers.php"><img src="./resources/img/eye.svg" alt=""></a>
                                <img id="del" class=" cursor-pointer" src="./resources/img/bin.svg" alt="">
                            </td>

                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                John
                            </th>
                            <td class="px-6 py-4">
                                Mail Sample
                            </td>
                            <td class="px-6 py-4">
                                Address Sample
                            </td>
                            <td class="px-6 py-4">
                                09123456789
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                                <a href="./customers.php"><img src="./resources/img/eye.svg" alt=""></a>
                                <img id="del" class=" cursor-pointer" src="./resources/img/bin.svg" alt="">
                            </td>

                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                John
                            </th>
                            <td class="px-6 py-4">
                                Mail Sample
                            </td>
                            <td class="px-6 py-4">
                                Address Sample
                            </td>
                            <td class="px-6 py-4">
                                09123456789
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                                <a href="./customers.php"><img src="./resources/img/eye.svg" alt=""></a>
                                <img id="del" class=" cursor-pointer" src="./resources/img/bin.svg" alt="">
                            </td>

                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                John
                            </th>
                            <td class="px-6 py-4">
                                Mail Sample
                            </td>
                            <td class="px-6 py-4">
                                Address Sample
                            </td>
                            <td class="px-6 py-4">
                                09123456789
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                                <a href="./customers.php"><img src="./resources/img/eye.svg" alt=""></a>
                                <img id="del2" class=" cursor-pointer" src="./resources/img/bin.svg" alt="">
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