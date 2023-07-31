<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="mt-3 font-Philosopher dark:bg-black">
    <a href="./profileMenu.php"><ion-icon name="arrow-back-outline" class="text-2xl"></ion-icon></a>
    <nav>
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="./mainPage.php" class="flex items-center">
                <img src="./resources/img/logo_slowdown.gif" class="mr-3 h-10" alt="beyond Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-black dark:text-white font-philosopher">Beyond</span>
            </a>

            <div class="flex items-center md:order-2">
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none  rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 ml-4" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
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

    </nav>
    <!-- <section class=" flex items-center justify-between mx-[5%]">
        <span class="flex items-center  mb-[1%]">
            <a href="./mainPage.php">
                <img class="h-10" src="./resources/img/logo.png" alt="">
            </a>
            <p class="text-2xl ml-[1%] max-md:text-2xl font-philosopher">Beyond</p>
        </span>
        <span>
            <ion-icon class="text-4xl float-right " name="person-circle-outline"></ion-icon>
        </span>
    </section> -->

    <section class="relative">
        <section class="w-full h-full rounded-t-3xl bg-gradient-to-tl from-purple-400 via-purple-400 to-purple-500 dark:bg-linear_dark">
            <p class=" font-philosopher font-bold text-2xl text-white md:p-10 p-5 ">WishList</p>
            <!--Card-->
            <div class="flex justify-center items-center flex-wrap m-auto ">
                <!-- Card 1 -->
                <div class="md:w-80 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 m-2">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="self-end p-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <a href="./userCart.php"><button type="button" class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button></a>
                </div>

                <!-- Card 2 -->
                <div class="md:w-80 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 m-2">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="self-end p-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <a href="./userCart.php"> <button type="button" class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button></a>
                </div>

                <!-- Card 3 -->
                <div class="md:w-80 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 m-2">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="self-end p-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <a href="./userCart.php"> <button type="button" class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button></a>
                </div>

                <!-- Card 4 -->
                <div class="md:w-80 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 m-2 ">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="self-end p-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <a href="./userCart.php"> <button type="button" class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button></a>
                </div>

                <!-- Card 5 -->
                <div class="md:w-80 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 m-2 ">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="self-end p-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <a href="./userCart.php"> <button type="button" class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button></a>
                </div>

                <!-- Card 6 -->
                <div class="md:w-80 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 m-2 ">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="self-end p-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <a href="./userCart.php"><button type="button" class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button></a>
                </div>
            </div>
            <!-- <a href="./profileMenu.php">  <ion-icon class="text-5xl absolute left-14 bottom-36 cursor-pointer max-md:text-3xl max-md:left-8 max-md:bottom-16" name="caret-back-outline"></ion-icon></a> -->

        </section>
        <script src="./resources/js/toggle.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>