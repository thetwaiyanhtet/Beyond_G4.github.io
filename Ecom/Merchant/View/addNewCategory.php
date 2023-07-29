<?php
include "./sidebar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Category</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/css/inventory.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main class=" ml-56 h-screen">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p>2023/July/24 - 4:04 PM</p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="moon-outline" class=" text-xl"></ion-icon></li>
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="55px"></li>
                </ul>
            </div>
        </header>
        <section>
            <p class=" p-3"><a href="./productList.php">Inventory</a> > <span class=" font-bold">Add New Category</span></p>
            <form action="">
                <div class=" flex justify-center px-5 py-1">
                    <div class=" w-screen h-full rounded-lg p-5 shadow-xl border-2 border-blue-950">
                        <h1 class=" text-lg font-bold font-philosopher">Add New Category</h1>
                        <div class=" grid grid-cols-2">
                            <div class=" p-3 py-4">
                                <p class=" text-base font-semibold pb-4">Category</p>
                                <select name="category" class=" w-[50%] rounded-md border border-gray-500 p-2 outline-none ">
                                    <option value="1">Clothing</option>
                                    <option value="2">Electronic</option>
                                    <option value="3">Furniture</option>
                                </select>
                            </div>
                            <div class=" p-3 py-4">
                                <p class=" text-base font-semibold pb-4">Description</p>
                                <textarea cols="50" rows="5" class=" rounded-md outline-none indent-2 p-2 border border-gray-500"></textarea>
                            </div>
                        </div>
                        <button class="btn float-right">Save</button>
                    </div>
                </div>
            </form>

        </section>

    </main>
</body>

</html>