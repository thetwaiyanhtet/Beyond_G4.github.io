<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="mt-3 font-poppins overflow-hidden dark:bg-black">
    <a href="./profileMenu.php"><ion-icon name="arrow-back-outline" class="text-2xl dark:text-white"></ion-icon></a>
    <nav>
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="./mainPage.php" class="flex items-center">
                <img src="./resources/img/logo.png" class="mr-3 h-10" alt="beyond Logo" />
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

    </nav>
    <section class="relative">
        <section class="w-screen  h-screen rounded-tl-[50px] rounded-tr-[50px] 
              bg-gradient-to-tl from-[#d5a0e6] - to-[#9f80f4] dark:bg-linear_dark">
            <p class="font-extrabold text-2xl lg:text-3xl mx-[4%] pt-[6%] lg:pt-[2%] dark:text-white">Order details</p>
            <p class="font-medium text-xl mx-[4%] pt-[5%] lg:pt-[1%] text-[#4B4B4B] dark:text-white">Review and manage recent orders.</p>
        </section>
        <div class="absolute w-[362px] lg:w-[1043px] h-[103px] lg:h-[154px] bg-[#AC8CE0] border border-1 border-black top-[20%] lg:top-[24%] left-[9%] lg:left-[17%]"></div>
        <div class="absolute w-[362px] lg:w-[1043px] h-[103px] lg:h-[154px] bg-[#AC8CE0] border border-1 border-black top-[18%] lg:top-[22%] left-[8%] lg:left-[16%]"></div>
        <div class="absolute w-[362px] lg:w-[1043px] h-[103px] lg:h-[154px] bg-[#AC8CE0] border border-1 border-black top-[16%] lg:top-[20%] left-[7%] lg:left-[15%]">
            <div class="flex justify-evenly mt-7 lg:mt-8">
                <div class="flex items-center">
                    <img class=" w-10 lg:w-24 " src="../View/resources/img/gymshark.png" alt="">
                    <span class="hidden lg:block text-3xl font-semibold">Gymshark</span>
                </div>
                <div class="flex flex-col item-center text-center">
                    <p class="text-xs lg:text-xl text-white lg:font-semibold">Product</p>
                    <p class="text-xs lg:text-xl text-white mt-3 lg:mt-9 lg:font-semibold ">Crop Tube</p>
                </div>
                <div class="flex flex-col item-center text-center">
                    <p class="text-xs lg:text-xl text-white lg:font-semibold">Order Date</p>
                    <p class="text-xs lg:text-xl text-white mt-3 lg:mt-9 lg:font-semibold">11/07/2023</p>
                </div>
                <div class="flex flex-col item-center text-center">
                    <p class="text-xs lg:text-xl text-white lg:font-semibold">Quantity</p>
                    <p class="text-xs lg:text-xl text-white mt-3 lg:mt-9 lg:font-semibold">1</p>
                </div>
                <div class="flex flex-col item-center text-center">
                    <p class="text-xs lg:text-xl text-white lg:font-semibold">Total Price</p>
                    <p class="text-xs lg:text-xl text-white mt-3 lg:mt-9 lg:font-semibold">$200</p>
                </div>
                <a href="./historyDetail.php"> <button type="button" class="w-[38px] lg:w-[113px] h-[16px] lg:h-[40px] rounded-md font-philosopher bg-[#eeeeeeae] dark:bg-[#eeeeeeae]
                 text-black text-xs lg:text-3xl lg:mt-9 mt-5 ">view</button></a>
            </div>
        </div>

        <div class="absolute mt-8 lg:mt-0 w-[362px] lg:w-[1043px] h-[103px] lg:h-[154px] bg-[#AC8CE0] border border-1 border-black top-[38%] lg:top-[55%] left-[9%] lg:left-[17%]"></div>
        <div class="absolute mt-8 lg:mt-0 w-[362px] lg:w-[1043px] h-[103px] lg:h-[154px] bg-[#AC8CE0] border border-1 border-black top-[36%] lg:top-[53%] left-[8%] lg:left-[16%]"></div>
        <div class="absolute mt-8 lg:mt-0 w-[362px] lg:w-[1043px] h-[103px] lg:h-[154px] bg-[#AC8CE0] border border-1 border-black top-[34%] lg:top-[51%] left-[7%] lg:left-[15%]">
            <div class="flex justify-evenly mt-7 lg:mt-8 ">
                <div class="flex items-center">
                    <img class=" w-10 lg:w-24 " src="../View/resources/img/gymshark.png" alt="">
                    <span class="hidden lg:block text-3xl font-semibold">Gymshark</span>
                </div>
                <div class="flex flex-col item-center text-center">
                    <p class="text-xs lg:text-xl text-white lg:font-semibold">Product</p>
                    <p class="text-xs lg:text-xl text-white mt-3 lg:mt-9 lg:font-semibold ">Crop Tube</p>
                </div>
                <div class="flex flex-col item-center text-center">
                    <p class="text-xs lg:text-xl text-white lg:font-semibold">Order Date</p>
                    <p class="text-xs lg:text-xl text-white mt-3 lg:mt-9 lg:font-semibold">11/07/2023</p>
                </div>
                <div class="flex flex-col item-center text-center">
                    <p class="text-xs lg:text-xl text-white lg:font-semibold">Quantity</p>
                    <p class="text-xs lg:text-xl text-white mt-3 lg:mt-9 lg:font-semibold">1</p>
                </div>
                <div class="flex flex-col item-center text-center">
                    <p class="text-xs lg:text-xl text-white lg:font-semibold">Total Price</p>
                    <p class="text-xs lg:text-xl text-white mt-3 lg:mt-9 lg:font-semibold">$200</p>
                </div>
                <a href="./historyDetail.php"> <button type="button" class="w-[38px] lg:w-[113px] h-[16px] lg:h-[40px] rounded-md font-philosopher bg-[#eeeeeeae] dark:bg-[#eeeeeeae]
                 text-black text-xs lg:text-3xl lg:mt-9 mt-5">view</button></a>
            </div>
        </div>
    </section>
    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>

</html>