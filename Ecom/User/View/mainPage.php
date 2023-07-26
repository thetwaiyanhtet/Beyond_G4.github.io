<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="font-philosopher">
    <nav class="bg-gradient-to-r from-fuchsia-300 to-purple-500  border-gray-200 dark:bg-gray-900 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="./mainPage.php" class="flex items-center">
                <img src="./resources/img/logo.png" class="mr-3 h-10" alt="beyond Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">Beyond</span>
            </a>
            <div class="flex items-center md:order-2">
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
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cart</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Notification</a>
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


            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>


            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 bg-transparent" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="./mainPage.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-blue-500 font-bold" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="./aboutUs.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">About</a>
                    </li>
                    <li>
                        <a href="./contactUs.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <div class="search_area flex justify-end items-center w-full h-14 md:h-20 bg-gradient-to-r from-fuchsia-200 to-purple-300 pr-4">
        <div class="flex items-center justify-evenly lg:w-[380px] h-[31px] lg:h-[44px] border border-[#f3f5f761] rounded-md bg-[#F3F5F7] shadow-md">
            <ion-icon name="search-outline" class="lg:w-[25px] lg:h-[25px] pl-2"></ion-icon>
            <input type="text" placeholder="Search" class="bg-[#F3F5F7] outline-none w-[120px] lg:w-[200px] pl-2">
            <ion-icon name="mic-outline" class="lg:w-[25px] lg:h-[25px] pr-2"></ion-icon>
        </div> -->
    </div>
    <div>
        <img src="./resources/img/home_hero/Banner_1.png" alt="" class="w-full 
        h-auto">
    </div>
    <a href=""></a>
    <!-- product -->
    <div class="flex justify-center font-poppins space-x-6 my-4">
        <div class="my-2">
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 md:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[9px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div class="my-2">
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[9px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div class="my-2">
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[9px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>
    </div>
    <div>
        <img src="./resources/img/home_hero/Banner_2.png" alt="" class="w-full">
    </div>
    <div class="pdt inline-flex m-4">
        <p class="font-PlayfairSC text-2xl">All Product</p>
        <img src="./resources/img/home_hero/fire.png" alt="" class="mt-2 w-4 h-4">
    </div>
    <div class="flex justify-evenly text-center p-4">
        <div class="w-[70px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Furniture</div>
        <div class="w-[70px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Clothes</div>
        <div class="w-[70px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Furniture</div>
        <div class="w-[70px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Clothes</div>
        <div class="w-[70px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Furniture</div>
        <div class="w-[70px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Clothes</div>
    </div>
    <!--All Product-->
    <div class="flex justify-center items-center flex-wrap m-2 font-poppins space-x-6 p-6">
        <div class="my-2">
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[9px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div class="my-2">
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[9px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div class="my-2">
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[9px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div class="my-2">
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[9px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div class="my-2">
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[9px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>
    </div>
    <div>
        <img src="./resources/img/home_hero/Banner_3.png" alt="" class="w-full">
    </div>
    <div>
        <img src="./resources/img/home_hero/shop_bg.gif" alt="" class="w-full">
    </div>
    <script src="./toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>

</html>