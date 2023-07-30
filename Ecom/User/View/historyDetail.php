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
<a href="./history.php"><ion-icon name="arrow-back-outline" class="text-2xl dark:text-white"></ion-icon></a>
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
    <section class="relative">
        <section class="w-screen  h-screen rounded-tl-[50px] rounded-tr-[50px] 
              bg-gradient-to-tl from-[#d5a0e6] - to-[#9f80f4] dark:bg-linear_dark min-h-screen flex items-center justify-center">
            <div class="lg:w-[948px] h-[466px] lg:h-[400px] bg-[#ffffff41] mb-72 mt-14 lg:mt-10 rounded-3xl shadow-inner  flex items-center lg:justify-evenly lg:flex-row flex-col ">
                <div class="pt-10 lg:pt-0">
                    <div class="w-[250px] h-[200px] lg:h-[248px] bg-[#fffbfb47] rounded-3xl flex items-center border ">
                        <img src="../View/resources/img/black girl blouse.png" alt="">
                    </div>
                </div>
                <div class="flex flex-col text-white w-[354px] h-[295px] mb-16  pt-9 p-16  lg:pt-0 lg:pl-0">
                    <p class="font-semibold text-[15px] lg:text-[36px] lg:text-center">Crop Tube</p>
                    <div class="flex font-medium text-[13px] lg:text-[24px] pt-3 md:pt-10">
                        <p>Color:</p>
                        <p class="ml-[100px] lg:ml-[130px]">Black</p>
                    </div>
                    <div class="flex font-medium text-[13px] lg:text-[24px] pt-2">
                        <p>Size:</p>
                        <p class="ml-[110px] lg:ml-[150px]">M</p>
                    </div>
                    <div class="flex font-medium text-[13px] lg:text-[24px] pt-2">
                        <p>Total Count:</p>
                        <p class="ml-[60px] lg:ml-[60px]">1</p>
                    </div>
                    <div class="flex font-medium text-[13px] lg:text-[24px] pt-2">
                        <p>Date:</p>
                        <p class="ml-[105px] lg:ml-[140px]">11/07/2023</p>
                    </div>
                    <div class="flex font-medium text-[13px] lg:text-[24px] pt-2">
                        <p>Total Price:</p>
                        <p class="ml-[70px] lg:ml-[75px]">$200</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- <a href="./history.php"> <ion-icon class=" lg:text-7xl absolute left-[5%] top-[80%] lg:top-[75%] cursor-pointer max-md:text-6xl max-md:left-8 max-md:bottom-24" name="caret-back-outline"></ion-icon></a> -->
    </section>
    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>

</html>