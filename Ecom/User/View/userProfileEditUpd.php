<?php

include "../Controller/addressController.php";
$resultT = $_SESSION["townships"];
$resultR = $_SESSION["regions"];
$userData = $_SESSION["user_data"];
// echo "<pre>";
// print_r($userData);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
</head>

<body class=" font-poppins ">
    <nav class=" bg-violet-300 dark:bg-color-primary-dark  w-full z-20 border-b border-gray-200 dark:border-gray-600 font-PlayfairSC">
        <div class=" flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="./mainPage.php" class="flex items-center">
                <img src="./resources/img/logo_slowdown.gif" class="mr-3 h-12" alt="beyond Logo" />
                <span class="text-2lg font-semibold whitespace-nowrap text-black dark:text-white font-philosopher">Beyond</span>
            </a>

            <div class="flex items-center md:order-2">
                <ion-icon name="cart-outline" class="text-lg dark:text-white"></ion-icon>
                <button id="theme-toggle" type="button" class="text-gray-900 dark:text-white focus:outline-none  rounded-md text-sm p-2.5">
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
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-md shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">User's name</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@something.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="./profileMenu.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="./userCart.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Wishlist</a>
                        </li>
                        <li>
                            <a href="./orderNotification.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Notification</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-md md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 bg-transparent" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-md bg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:border-gray-700">
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
    <form action="../Controller/profileUpdateController.php" method="post">
        <div class="flex flex-wrap mt-4 w-auto h-auto md:space-x-24 space-x-16 md:pl-0 pl-5">
            <div class="md:flex flex-col md:m-5 m-2 space-y-5">
                <button type="button" class="w-28 border-solid  rounded-md p-2 border-purple-600 border-2">Profile</button>
                <a href="./Wishlist2.php"><button type="button" class="w-28 border border-solid border-black rounded-md p-2 hover:border-purple-600 hover:border-2">WishList</button></a>
                <button type="button" class="w-28 border border-solid border-black rounded-md p-2 hover:border-purple-600 hover:border-2">History</button>
                <button type="button" class="w-28 border border-solid border-black rounded-md p-2 hover:border-purple-600 hover:border-2">Notification</button>
            </div>

            <main class=" flex-wrap flex justify-center dark:bg-linear_dark md:w-[70%] w-[50%] pb-10 md:p-3 p-1">
                <div class=" my-5 flex-col space-y-3">
                    <div>
                        <p class=" font-philosopher text-3xl">My Profile</p>
                        <p>Manage and protect your account</p>
                    </div>
                    <div class=" pt-5">
                        <div class=" flex-col space-y-3">
                            <div class=" md:w-32 md:h-32 w-24 h-24 bg-slate-500 rounded-full shadow-lg"></div>
                            <button class=" md:py-2 md:px-4 py-1 px-2 bg-white rounded-md shadow-md md:text-base text-sm">Select Image</button>
                        </div>
                    </div>
                </div>
                <div class=" flex justify-around  w-[60%]">
                    <section div class=" col-start-1 col-span-3 space-y-3 md:w-[700px] w-[380px] md:mx-20 mx-10">
                        <!-- <div class="">
                            <p class="text-start md:text-lg text-sm">Username</p>
                            <input type="text" class="profileInputBox rounded-md col-start-2 outline-none" name="username" >
                        </div> -->
                        <div class="">
                            <p class=" text-start md:text-lg text-sm">Name</p>
                            <input type="text" class="profileInputBox rounded-md col-start-2 outline-none" name="name" required>
                        </div>
                        <!-- <div class="">
                            <p class=" text-start md:text-lg text-sm">Email</p>
                            <input type="text" class="profileInputBox rounded-md col-start-2 outline-none" name="email" >
                        </div> -->
                        <div class="">
                            <p class=" text-start md:text-lg text-sm">Phone Number</p>
                            <input type="text" class="profileInputBox rounded-md col-start-2 outline-none" name="phone_no" required>
                        </div>
                        <div class=" ">
                            <p class="md:text-lg text-sm ">Gender</p>
                            <div>
                                <input type="radio" id="male" name="gender" value="0" required>
                                <label for="male" class=" md:text-base text-sm  dark:text-white">Male</label>
                                <input type="radio" id="female" name="gender" value="1" required>
                                <label for="female" class=" md:text-base text-sm  dark:text-white">Female</label>
                                <input type="radio" id="other" name="gender" value="2" required>
                                <label for="other" class=" md:text-base text-sm  dark:text-white">Other</label>
                            </div>
                        </div>
                        <div class="">
                            <p class=" md:text-lg text-sm ">Date of Birth</p>
                            <input type="date" class=" md:w-72 w-66 md:p-3 p-2 rounded-md md:text-base text-sm" name="dob" required>
                        </div>
                    </section>

                    <section>
                        <div class=" flex-col space-y-3">
                            <div>
                                <p class="  text-start md:text-lg text-sm">Street</p>
                                <input type="text" class="profileInputBox rounded-md col-start-2 outline-none" name="street" required>
                            </div>

                            <p class="  text-start md:text-lg text-sm">Township</p>
                            <select name="township" class=" rounded-md profileInputBox" required>
                                <?php foreach ($resultT as $township) { ?>
                                    <option value="<?= ++$tID ?>"><?= $township["t_name"]; ?></option>
                                <?php } ?>
                            </select>
                            <p class="  text-start md:text-lg text-sm">Region/State</p>
                            <select name="region" class=" rounded-md profileInputBox" required>
                                <?php foreach ($resultR as $region) { ?>
                                    <option value="<?= ++$rID ?>"><?= $region["r_name"]; ?></option>
                                <?php } ?>
                            </select>

                            <div class=" pt-10 float-right space-x-3">
                                <button class=" font-Playfair Display md:px-3 md:py-3 px-2 py-2 border border-solid border-black rounded-md p-2 hover:border-purple-600 hover:border-2">Cancel</button>
                                <button type="submit" class=" font-Playfair Display md:px-4 md:py-3 px-3 py-2 border border-solid border-black rounded-md p-2 hover:border-purple-600 hover:border-2">Save</button>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
    </form>
    </div>
    <section id="footer">
        <div class="relative bg-purple-300 dark:bg-linear_dark dark:text-white">
            <div class="container py-5 ">
                <div class="grid gap-10 md:grid-cols-3 pb-10">
                    <div class="space-y-6">
                        <img src="./resources/img/logo.png" class="h-20" alt="beyond Logo" />
                        <h4 class="font-bold text-md">About Beyond</h4>
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
                            <h4 class="font-bold text-md">Quick Links</h4>
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
                        <h4 class="font-bold text-md">Newsletter</h4>
                        <p class="leading-relaxed">Subscribe With Email And Loads Of News Will Be Sent To You</p>
                        <div class="flex items-center">
                            <input type="text" class="w-3/4 text-color-gray bg-color-white p-2 md:p-3 rounded-l-md focus:outline-none" placeholder="Enter Your Email">
                            <button type="submit" class="px-4 py-2 md:px-5 md:py-3 rounded-r-md hover:opacity-90 border border-solid bg-slate-900">
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
        <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-90 bottom-8 right-8 border-0 w-12 h-12 rounded-full drop-shadow-md shadow-inner bg-rose-500 text-white text-3lg font-bold"><ion-icon name="arrow-up-outline"></ion-icon></button>
    </section>
    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>