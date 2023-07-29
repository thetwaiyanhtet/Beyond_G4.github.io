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
                <a href="./mainPage.php"><img class="w-7 lg:w-14" src="../View/resources/img/logo.png" alt=""></a>
                <span class="self-center text-xl lg:text-2xl font-semibold whitespace-nowrap dark:text-white font-philosopher">Beyond</span>
            </div>

            <div class="flex items-center justify-evenly lg:w-[380px] h-[31px] lg:h-[44px] border border-[#f3f5f761] rounded-md bg-[#F3F5F7] shadow-md">
                <ion-icon name="search-outline" class="lg:w-[25px] lg:h-[25px]"></ion-icon>
                <input type="text" placeholder="Search" class="bg-[#F3F5F7] outline-none w-[120px] lg:w-[200px]">
                <ion-icon name="mic-outline" class="lg:w-[25px] lg:h-[25px]"></ion-icon>
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
    <div class="flex items-center space-x-2 lg:space-x-4">
        <p class=" pl-5 lg:ml-0 font-philosopher Display text-2xl lg:text-4xl bg-gradient-to-r to-blue-600 from-red-400 font-bold text-transparent bg-clip-text">Trending Products</p>
        <img src="../View/resources/img/fire.svg" alt="" class=" w-[40px] h-[40px]">
    </div>
    <div class="flex justify-around font-poppins pt-12 pl-12 pr-12 lg:pl-0 lg:pr-0 space-x-3">
        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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
               <a href="./userCart.php"><p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p></a>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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
                <a href="./userCart.php"><p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p></a>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>
        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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

    <div class="flex justify-around pt-12 pl-12 pr-12 lg:pl-0 lg:pr-0 font-poppins space-x-3">
        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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
    <div class="flex justify-evenly text-center pt-5 md:pt-12">
        <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Furniture</div>
        <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Clothes</div>
        <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Furniture</div>
        <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Clothes</div>
        <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Furniture</div>
        <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Clothes</div>
    </div>

    <div class="flex justify-around font-poppins pt-5 md:pt-12 pl-12 pr-12 lg:pl-0 lg:pr-0 space-x-3">
        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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

    <div class="flex justify-around pt-12 pb-12 pl-12 pr-12 lg:pl-0 lg:pr-0 font-poppins space-x-3">
        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
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
    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>



</html>