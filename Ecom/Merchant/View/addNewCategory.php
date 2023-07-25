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
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main class=" ml-56 h-screen">
        <header class=" border-red-600 border-b-2 h-20 flex justify-between items-center">
            <div class=" pl-2">
                <p>2023/July/24 - 4:04 PM</p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-3">
                    <li><ion-icon name="moon-outline"></ion-icon></li>
                    <li><ion-icon name="notifications-outline"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="60px"></li>
                </ul>
            </div>
        </header>
        <section>
            <p class=" p-3">Inventory > Product Details</p>
            <div class=" flex justify-center p-5">
                <div class=" w-screen h-full bg-slate-200 rounded-lg p-5 shadow-xl">
                    <h1 class=" text-lg font-bold font-philosopher">Add New Category</h1>
                    <div class=" grid grid-cols-2">
                        <div class=" p-3 py-4">
                            <p class=" text-base font-semibold pb-4">Category</p>
                            <select name="category" class=" w-[50%] rounded-md ">
                                <option value="1">Clothing</option>
                                <option value="2">Electronic</option>
                                <option value="3">Furniture</option>
                            </select>
                        </div>
                        <div class=" p-3 py-4">
                            <p class=" text-base font-semibold pb-4">Description</p>
                            <textarea cols="50" rows="5" class=" rounded-md"></textarea>
                        </div>
                    </div>
                    <button class="btn float-right">Save</button>
                </div>
            </div>

        </section>
        
    </main>
</body>

</html>