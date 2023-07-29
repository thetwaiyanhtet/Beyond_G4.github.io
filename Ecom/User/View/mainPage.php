<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beyond</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./resources/css/scroll.css">
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class=" dark:bg-black font-poppins">
    <section class="sec">
        <nav class="bg-gradient-to-r from-fuchsia-300 to-purple-400 dark:bg-linear_dark  border-gray-200 ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="./mainPage.php" class="flex items-center">
                    <img src="./resources/img/logo.png" class="mr-3 h-10" alt="beyond Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-black dark:text-white font-philosopher">Beyond</span>
                </a>

                <div class="flex items-center md:order-2">
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none  rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
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
                    <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 bg-transparent" id="navbar-user">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:border-gray-700">
                        <li>
                            <a href="./mainPage.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-blue-500 font-bold" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="./aboutUs.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">About Us</a>
                        </li>
                        <li>
                            <a href="./contactUs.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <!-- Banner_1 section -->
            <img src="./resources/img/home_hero/Banner_1.png" alt="" class="w-full ">
        </div>
        <!--Trending product section  -->
        <div class="flex flex-col m-auto p-auto font-poppins">
            <h1 class="m-4 text-2xl font-extrabold text-white dark:text-black md:text-3xl "><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-bold">Trending Product</span></h1>

            <div class="flex overflow-x-scroll pb-3 hide-scroll-bar">
                <div class="flex flex-nowrap ">
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>

        <a href="./trandingProduct.php" class="relative inline-flex items-center justify-center p-4 px-6 py-1 overflow-hidden font-medium text-my-purple1 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group float-right m-2">
            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-purple-500 group-hover:translate-x-0 ease">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </span>
            <span class="absolute flex items-center justify-center w-full h-full text-purple-500 transition-all duration-300 transform group-hover:translate-x-full ease">View All</span>
            <span class="relative invisible ">View All</span>
        </a>
        <!--End of Trending product section  -->
        <!-- Banner 2 -->
        <div>
            <img src="./resources/img/home_hero/Banner_2_upt.png" alt="" class="w-full">
        </div>
        <!--End of Banner 2 -->
        <!-- All Product session start -->
        <div class="pdt inline-flex m-2">
            <h1 class="m-4 text-2xl font-extrabold text-white dark:text-black md:text-3xl "><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-bold">All Product</span></h1>
        </div>

        <!--All Product-->
        <div>
            <div class="flex overflow-x-scroll pb-6 hide-scroll-bar">
                <div class="flex flex-nowrap ">
                    <div class="inline-block px-3">
                        <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <div class="relative overflow-hidden">
                                <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                                <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                    <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                </div>
                            </div>
                            <div class="text-center relative dark:text-white">
                                <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                                <!-- <del class="text-red-700 text-lg">$999</del> -->
                                <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <a href="./Wishlist.php"> <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button></a>
                                <a href="./userCart.php"><button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button></a>


                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="flex overflow-x-scroll pb-3 hide-scroll-bar">
            <div class="flex flex-nowrap ">
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="flex overflow-x-scroll pb-3 hide-scroll-bar">
            <div class="flex flex-nowrap ">
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>
                <div class="inline-block px-3">
                    <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                        <div class="relative overflow-hidden">
                            <img class="h-auto w-3/4 md-w-full object-cover m-auto" src="./resources/img/home_hero/game_controller.png" alt="">
                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                            </div>
                        </div>
                        <div class="text-center relative dark:text-white">
                            <h2 class="mt-3 text-sm md:text-md capitalize font-bold">JoyStick Game Controller</h2>
                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                            <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                            <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                            <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        </div>
        <a href="./trandingProduct.php" class="relative inline-flex items-center justify-center p-4 px-6 py-1 overflow-hidden font-medium text-my-purple1 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group float-right m-2">
            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-purple-500 group-hover:translate-x-0 ease">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </span>
            <span class="absolute flex items-center justify-center w-full h-full text-purple-500 transition-all duration-300 transform group-hover:translate-x-full ease">View All</span>
            <span class="relative invisible ">View All</span>
        </a>

        <div>
            <img src="./resources/img/home_hero/Banner_3.png" alt="" class="w-full">
        </div>
        <div class="relative">
            <img src="./resources/img/home_hero/shop_bg.gif" alt="" class=" relative w-full h-screen">
            <h5 class="absolute top-[8%] left-[5%] text-black font-bold text-lg">Feature Shop
            </h5>
            <div class="flex items-center justify-around w-full absolute top-[20%]">
                <div>
                    <div class="w-96 h-96 p-4 bg-white rounded-xl shadow-xl z-10">
                        <div class="relative">
                            <img src="./resources/img/gymshark.png" class="max-h-64 object-cover rounded-full ml-2" alt="">
                            <div class="bottom-0 right-0 mb-2 mr-2 px-4 rounded-lg absolute bg-yellow-500 text-gray-100 text-xs font-medium">Myanmar</div>
                        </div>
                        <div class="px-2 py-1">
                            <!-- Product Title -->
                            <div class="text-sm md:text-base font-bold pr-2">Gymshark</div>
                            <div class="flex py-2">
                                <div class="flex justify-between item-center">
                                    <div class="flex items-center">
                                        <svg class="h-3 md:h-5 md:w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <p class="text-gray-600 font-bold text-xs md:text-sm ml-1">
                                            4.96
                                            <span class="text-gray-500 font-normal">(76 reviews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-black dark:bg-slate-300 rounded-xl py-4  m-2 flex">
                                <div>
                                    <a href="#" target="_blank"><img alt="" height="auto" src="./resources/img/crop.png" /></a>
                                </div>
                                <div class=" text-white w-72">
                                    <h2 class="mt-3 text-sm md:text-md capitalize font-bold">Long Sleeve Crop Top</h2>
                                    <!-- <del class="text-red-700 text-lg">$999</del> -->
                                    <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                    <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                    <div class="flex justify-end">
                                        <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                        <div class="">
                                            <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>
                                        </div>
                                        <div class="">
                                            <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="cart-outline"></ion-icon></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="inset-x-0 bottom-0 flex justify-center bg-blue-500 hover:bg-white text-sm md:text-base border hover:border-2 hover:border-blue-500 rounded-xl  p-2 text-gray-100 hover:text-blue-900  w-24  float-right" href="#">View Shop</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-96 h-96 p-4 bg-white rounded-xl shadow-xl z-10">
                        <div class="relative">
                            <img src="./resources/img/gymshark.png" class="max-h-64 object-cover rounded-full ml-2" alt="">
                            <div class="bottom-0 right-0 mb-2 mr-2 px-4 rounded-lg absolute bg-yellow-500 text-gray-100 text-xs font-medium">Myanmar</div>
                        </div>
                        <div class="px-2 py-1">
                            <!-- Product Title -->
                            <div class="text-sm md:text-base font-bold pr-2">Gymshark</div>
                            <div class="flex py-2">
                                <div class="flex justify-between item-center">
                                    <div class="flex items-center">
                                        <svg class="h-3 md:h-5 md:w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <p class="text-gray-600 font-bold text-xs md:text-sm ml-1">
                                            4.96
                                            <span class="text-gray-500 font-normal">(76 reviews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-black dark:bg-slate-300 rounded-xl py-4  m-2 flex">
                                <div>
                                    <a href="#" target="_blank"><img alt="" height="auto" src="./resources/img/crop.png" /></a>
                                </div>
                                <div class=" text-white w-72">
                                    <h2 class="mt-3 text-sm md:text-md capitalize font-bold">Long Sleeve Crop Top</h2>
                                    <!-- <del class="text-red-700 text-lg">$999</del> -->
                                    <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                    <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                    <div class="flex justify-end">
                                        <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                        <div class="">
                                            <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>
                                        </div>
                                        <div class="">
                                            <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="cart-outline"></ion-icon></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="inset-x-0 bottom-0 flex justify-center bg-blue-500 hover:bg-white text-sm md:text-base border hover:border-2 hover:border-blue-500 rounded-xl  p-2 text-gray-100 hover:text-blue-900  w-24  float-right" href="#">View Shop</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-96 h-96 p-4 bg-white rounded-xl shadow-xl z-10">
                        <div class="relative">
                            <img src="./resources/img/gymshark.png" class="max-h-64 object-cover rounded-full ml-2" alt="">
                            <div class="bottom-0 right-0 mb-2 mr-2 px-4 rounded-lg absolute bg-yellow-500 text-gray-100 text-xs font-medium">Myanmar</div>
                        </div>
                        <div class="px-2 py-1">
                            <!-- Product Title -->
                            <div class="text-sm md:text-base font-bold pr-2">Gymshark</div>
                            <div class="flex py-2">
                                <div class="flex justify-between item-center">
                                    <div class="flex items-center">
                                        <svg class="h-3 md:h-5 md:w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <p class="text-gray-600 font-bold text-xs md:text-sm ml-1">
                                            4.96
                                            <span class="text-gray-500 font-normal">(76 reviews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-black dark:bg-slate-300 rounded-xl py-4  m-2 flex">
                                <div>
                                    <a href="#" target="_blank"><img alt="" height="auto" src="./resources/img/crop.png" /></a>
                                </div>
                                <div class=" text-white w-72">
                                    <h2 class="mt-3 text-sm md:text-md capitalize font-bold">Long Sleeve Crop Top</h2>
                                    <!-- <del class="text-red-700 text-lg">$999</del> -->
                                    <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                    <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                    <div class="flex justify-end">
                                        <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                        <div class="">
                                            <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>
                                        </div>
                                        <div class="">
                                            <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="cart-outline"></ion-icon></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="inset-x-0 bottom-0 flex justify-center bg-blue-500 hover:bg-white text-sm md:text-base border hover:border-2 hover:border-blue-500 rounded-xl  p-2 text-gray-100 hover:text-blue-900  w-24  float-right" href="#">View Shop</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-full h-auto py-5">
            <div class=" w-3/4 m-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <div class="p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-1">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                                <span>How can I place an order on Beyond?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">To place an order, simply browse our curated collection and click on the product you wish to purchase. Add the item to your shopping cart, proceed to checkout, and follow the prompts to complete your order securely.
                                </p>

                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-2">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                                <span>What payment methods do you accept?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">We accept various payment methods, including credit/debit cards, PayPal, and other secure online payment options. Choose the one that suits you best during checkout.</p>

                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-3">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                                <span>What is your return policy?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">We want you to be completely satisfied with your purchase. If you are not happy with your order, please refer to our return policy ... for detailed information on how to initiate a return or exchange..</p>


                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-4">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
                                <span>How can I get in touch with your customer support?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">If you have any questions, concerns, or need assistance, our friendly customer support team is here to help.</p>

                                </ul>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-5">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-5">
                                <span>Are the products on Beyond authentic and of high quality?
                                </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Yes, absolutely! At Beyond, we take pride in curating a collection of premium lifestyle products from trusted merchants and brands. We ensure that each item meets our stringent quality standards.</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="h-96 bg-black">
            
        </div>

        <script src="./resources/js/toggle.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
        </div>
    </section>
</body>

</html>