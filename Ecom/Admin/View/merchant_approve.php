<!-- <?php
        // include "./adminsidebar.php";
        ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Merchant Approve</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/merchantApprove.css">
</head>

<body>
    <main id="main" class=" ml-72 mt-24 py-5 font-poppins">
        <div class=" px-5 space-y-3">
            <p class=" text-xl font-semibold font-philosopher">Merchant Approve</p>
            <section class=" py-3">
                <div class=" flex justify-start items-center space-x-3">
                    <p>Search : </p>
                    <input type="text" class="border rounded-md indent-1 px-2 py-1 outline-none bg-gray-300">
                </div>
            </section>
            <section class="border-2 border-gray-400 rounded-lg shadow-lg  p-2">
                <table class="w-full text-sm text-gray-500 border-collapse text-center">
                    <thead class="text-xs uppercase bg-table text-white border rounded-tl-md rounded-tr-md">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Merchant Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Business Plan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Purchase date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Options
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Mail Sample
                            </th>
                            <td class="px-6 py-4">
                                AI mobile
                            </td>
                            <td class="px-6 py-4">
                                Pro
                            </td>
                            <td class="px-6 py-4">
                                12-07-2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3 justify-center">
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Approve</button>
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Reject</button>
                            </td>

                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Mail Sample
                            </th>
                            <td class="px-6 py-4">
                                AI mobile
                            </td>
                            <td class="px-6 py-4">
                                Pro
                            </td>
                            <td class="px-6 py-4">
                                12-07-2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3 justify-center">
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Approve</button>
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Reject</button>
                            </td>

                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Mail Sample
                            </th>
                            <td class="px-6 py-4">
                                AI mobile
                            </td>
                            <td class="px-6 py-4">
                                Pro
                            </td>
                            <td class="px-6 py-4">
                                12-07-2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3 justify-center">
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Approve</button>
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Reject</button>
                            </td>

                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Mail Sample
                            </th>
                            <td class="px-6 py-4">
                                AI mobile
                            </td>
                            <td class="px-6 py-4">
                                Pro
                            </td>
                            <td class="px-6 py-4">
                                12-07-2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3 justify-center">
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Approve</button>
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Reject</button>
                            </td>

                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Mail Sample
                            </th>
                            <td class="px-6 py-4">
                                AI mobile
                            </td>
                            <td class="px-6 py-4">
                                Pro
                            </td>
                            <td class="px-6 py-4">
                                12-07-2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3 justify-center">
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Approve</button>
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Reject</button>
                            </td>

                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Mail Sample
                            </th>
                            <td class="px-6 py-4">
                                AI mobile
                            </td>
                            <td class="px-6 py-4">
                                Pro
                            </td>
                            <td class="px-6 py-4">
                                12-07-2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3 justify-center">
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Approve</button>
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Reject</button>
                            </td>

                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Mail Sample
                            </th>
                            <td class="px-6 py-4">
                                AI mobile
                            </td>
                            <td class="px-6 py-4">
                                Pro
                            </td>
                            <td class="px-6 py-4">
                                12-07-2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3 justify-center">
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Approve</button>
                                <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Reject</button>
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

</html> -->