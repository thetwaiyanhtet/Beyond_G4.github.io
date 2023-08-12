<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Order Notification</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=BioRhyme&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-purple-200 dark:bg-color-primary-dark ">
    <nav class=" bg-violet-300 dark:bg-color-primary-dark fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600 font-PlayfairSC">
        <div class=" flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="./mainPage.php" class="flex items-center">
                <img src="./resources/img/logo_slowdown.gif" class="mr-3 h-12" alt="beyond Logo" />
                <span class="text-2xl font-semibold whitespace-nowrap text-black dark:text-white font-philosopher">Beyond</span>
            </a>

            <div class="flex items-center md:order-2">
                <ion-icon name="cart-outline" class="text-xl dark:text-white text-black"></ion-icon>

                <button id="theme-toggle" type="button" class="text-gray-900 dark:text-white focus:outline-none  rounded-lg text-sm p-2.5">
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
                        <span class="block text-xs  text-gray-500 truncate dark:text-gray-400">name@something.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="./profileMenu.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="./Wishlist2.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Wishlist</a>
                        </li>
                        <li>
                            <a href="./orderNotification.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Notification</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log out</a>
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
                        <a href="./mainPage.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-600 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-purple-500 md:dark:hover:bg-transparent dark:border-gray-700 font-bold" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="./aboutUs.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-600 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-purple-500 md:dark:hover:bg-transparent dark:border-gray-700 font-bold">About Us</a>
                    </li>
                    <li>
                        <a href="./contactUs.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-600 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-purple-500 md:dark:hover:bg-transparent dark:border-gray-700 font-bold">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="flex flex-wrap w-full mt-24 ">
        <div class="md:flex flex-col m-5 space-y-5 w-[100%] md:w-44">
            <a href="./userProfileEditUpd.php">
                <button type="button" class="w-36  bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">Manage Profile</button>
            </a>
            <a href="./Wishlist2.php">
                <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">WishList</button>
            </a>
            <a href="./user_history.php">
                <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">History</button>
            </a>
            <a href="./orderNotification.php"> <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">Notification</button>
            </a>
        </div>

        <div class="my-5 w-[100%] md:w-3/4 ">
            <div class="w-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Notification</h5>

                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 ">
                        <li class="py-3 sm:py-4 w-auto">
                            <div class="flex items-center justify-between space-x-2">
                                <div class="flex w-32">
                                    <img class="w-16 h-16 object-fill" src="./resources/img/logo_upt.png" alt="image">
                                    <img class="w-16 h-16 object-fill" src="./resources/img/logo_upt.png" alt="image">
                                </div>
                                <div class="flex-col min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Your order is being processed and prepared for shipment. Thank you for shopping with us!
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        From: MONCLER GENIUS
                                    </p>
                                </div>

                                <div>

                                    <button class="block text-white bg-red-500 scale-100 hover:scale-90 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600  dark:focus:ring-red-800" type="button">
                                        Delete
                                    </button>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="relative bg-purple-300 dark:bg-color-primary-dark dark:text-white border-t border-t-transparent dark:border-t-slate-200">
            <div class="container pl-12 py-5 ">
                <div class="grid gap-10 md:grid-cols-3 pb-10">
                    <div class="space-y-6">
                        <img src="./resources/img/logo.png" class="h-20" alt="beyond Logo" />
                        <h4 class="font-bold text-lg">About Beyond</h4>
                        <p class="leading-relaxed"> Discover a curated collection of unique products that transcend the ordinary. Join us as we redefine the art of shopping, delivering seamless journeys that inspire and delight. Unleash the extraordinary with Beyond.</p>
                        <div class="flex gap-5 items-center">
                            <p>Follow Us</p>
                            <i class="fa-brands fa-facebook-f cursor-pointer hover:text-purple-700"></i>
                            <i class="fa-brands fa-twitter cursor-pointer hover:text-purple-700"></i>
                            <i class="fa-brands fa-youtube cursor-pointer hover:text-purple-700"></i>
                            <i class="fa-brands fa-instagram cursor-pointer hover:text-purple-700"></i>
                        </div>
                    </div>
                    <div class="flex justify-between md:justify-around">
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">Quick Links</h4>
                            <ul class="space-y-3">
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="./mainPage.php">Home</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="./aboutUs.php">About us</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="./contactUs.php">Contact Us</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="./profileMenu.php">Profile</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="#blog">Return policy</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="#blog">Terms and Conditions</a></li>

                            </ul>
                        </div>

                    </div>
                    <div class="space-y-6">
                        <h4 class="font-bold text-lg">Newsletter</h4>
                        <p class="leading-relaxed">Subscribe With Email And Loads Of News Will Be Sent To You</p>
                        <div class="flex items-center">
                            <input type="text" class="w-3/4 text-black bg-color-white p-2 lg:p-3 rounded-l-md focus:outline-none" placeholder="Enter Your Email">

                            <button type="submit" class="px-4 py-2 lg:px-5 lg:py-3 rounded-r-md hover:opacity-90 border border-solid bg-slate-900">
                                <i class="fa-solid fa-chevron-right text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center pt-10 border-t border-color-gray">
                    <p>2023 &copy; Beyond. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>