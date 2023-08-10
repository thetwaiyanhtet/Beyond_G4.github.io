<?php

include "../Controller/trendingProductController.php";
// echo "<pre>";
// print_r($trandingProduct);
// echo "</pre>";

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/css/scroll.css">
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="container mx-auto dark:bg-linear_dark">

    <nav class="bg-white dark:bg-linear_dark">
        <div class=" flex flex-wrap items-center justify-between mx-auto p-4">

            <div class="flex items-center">
                <a href="./mainPage.php"><img class="w-7 lg:w-14" src="./resources/img/logo_slowdown.gif" alt=""></a>
                <span class="self-center text-xl lg:text-2xl font-semibold whitespace-nowrap dark:text-white font-philosopher">Beyond</span>
            </div>

            <div class="flex items-center space-x-6 lg:w-[380px] h-[31px] lg:h-[44px] border border-[#f3f5f761] rounded-md bg-[#F3F5F7] shadow-md">
                <ion-icon name="search-outline" class="lg:w-[25px] lg:h-[25px]"></ion-icon>
                <input type="text" placeholder="Search" class="bg-[#F3F5F7] outline-none w-[120px] lg:w-[200px]">
                <!-- <ion-icon name="mic-outline" class="lg:w-[25px] lg:h-[25px]"></ion-icon> -->
            </div>

            <div class="flex items-center md:order-2">
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none  rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="./resources/img/bille.png" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">User's name</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@something.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="./profileMenu.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="./userCart.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cart</a>
                        </li>
                        <li>
                            <a href="./orderNotification.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Notification</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </li>
                    </ul>
                </div>


            </div>
    </nav>

    <img class=" mx-auto h-auto w-[90%]" src="../View/resources/img/Tranding product image.png" alt="image description">
    <!-- <ion-icon class="text-3xl lg:text-6xl cursor-pointer max-md:text-6xl max-md:left-8 max-md:bottom-24 pt-4" name="caret-back-outline"></ion-icon> -->
    <div class="flex items-center space-x-2 lg:space-x-4 pt-10">
        <p class=" pl-5 lg:ml-0 font-philosopher Display text-2xl lg:text-4xl bg-gradient-to-r to-blue-600 from-red-400 font-bold text-transparent bg-clip-text">Trending Products</p>
        <img src="../View/resources/img/fire.svg" alt="" class=" w-[40px] h-[40px]">
    </div>
    <div>
        <div class="flex overflow-y-scroll pb-6 h-96 ">
            <div class="flex flex-wrap w-full space-x-10 pl-20 pt-10">
                <?php foreach ($trandingProductViewAll as $tranding) { ?>
                    <div class="inline p-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="w-32 h-40 m-auto" src="../../<?= $tranding["p_one"] ?>" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="relative dark:text-white">
                                <h2 class="mt-3 ml-5 text-sm md:text-md capitalize font-bold"><?= $tranding["name"] ?></h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-5 block "><?= $tranding["description"] ?></p>
                                <p class="text-md font-bold mt-2 ml-5 block ">$<?= $tranding["sellprice"] ?></p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

    </div>





    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>



</html>