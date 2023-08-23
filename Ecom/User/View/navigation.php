<?php

include "../Controller/categoryListController.php";
include "../Controller/newcartController.php";
include "../Controller/wishlistcart.php";
include "../Controller/trendingProductController.php";
include  "../../User/Controller/bannerController.php";
include  "../../Admin/Controller/readfaqController.php";
include "../Controller/userProfileController.php";
$faq = $_SESSION["m_faq"];
include "../Controller/bannerController.php";
$banner = $_SESSION["banner"];
$userData = $_SESSION["user_data"];
$verifyData = $_SESSION['verifyData'];
// echo "<pre>";
// print_r($userData);
// echo "</pre>"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Beyond</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=BioRhyme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./resources/css/scroll.css">
    <link rel="stylesheet" href="./resources/css/bannerSlideShow.css">
    <link rel="stylesheet" href="./resources/css/chat.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script src="./resources/js/bannerSlideShow.js" defer></script>
    <script src="./resources/js/searchProduct.js" defer></script>
    <script src="./resources/js/userMainPage.js" defer></script>
    <script src="./resources/js/chat.js" defer></script>
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

</head>

<body>
    <nav class=" bg-violet-300 dark:bg-color-primary-dark fixed w-full z-40 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class=" flex flex-wrap items-center justify-between mx-auto p-4 ">
            <a href="./mainPage.php" class="flex items-center">
                <img src="./resources/img/logo_slowdown.gif" class="mr-3 h-12" alt="beyond Logo" />
                <span class="text-2xl font-semibold whitespace-nowrap text-black dark:text-white font-philosopher">Beyond</span>
            </a>


            <div class="flex items-center md:order-2 justify-between">
                <div class="relative w-32 -translate-y-4">
                    <div class=" overflow-hidden absolute mx-2 rounded-xl">
                        <div id="ln_space" class="w-28 h-20"></div>
                    </div>
                </div>
                <input type="checkbox" name="cart" id="cart" class="hidden peer " />
                <label for="cart" class="ml-3">
                    <div class="relative  ">
                        <div class="absolute left-0 top-0 text-white px-0.5 bg-red-500 rounded-full">

                            <?php
                            if (isset($_SESSION['usercart'])) {
                                $cc = count($_SESSION['carttle']);
                                echo $cc;

                                //    echo ' <span class="text-sm text-white p-1"></span>'
                            ?>
                            <?php  } else {
                                echo ' <span class="text-sm text-white p-1">0</span>';
                            }
                            ?>
                        </div>
                        <div class="p-2">
                            <a href="../View/userCart.php" class=" cursor-pointer"> <ion-icon name="cart-sharp" class=" text-2xl mt-2 dark:text-white text-black"></ion-icon></a>
                        </div>
                    </div>
                </label>

                <!-- <label for="cart" class="ml-3"><ion-icon name="cart-outline" class="text-2xl mt-2 dark:text-white text-black"></ion-icon></label> -->
                <button id="theme-toggle" type="button" class="text-gray-900 dark:text-white focus:outline-none  rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <button type="button" class="flex mr-3 text-sm  rounded-full md:mr-0 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <?php if ($verifyData["verify"] == 0) { ?>
                        <img class="w-10 h-10 rounded-full" src="../../Storage/profile/profile.png" alt="user photo">
                    <?php } else if ($verifyData["verify"] == 1) { ?>
                        <img class="w-10 h-10 rounded-full" src="../../Storage/profile/<?= $userData["p_picture"] ?>" alt="user photo">
                    <?php } ?>
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">

                    <?php if ($userData) { ?>
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">
                                <?php
                                echo $userData['username'];
                                ?>
                            </span>
                            <span class="block text-sm text-gray-900 dark:text-white">
                                <?php
                                echo $userData['email'];
                                ?>
                            </span>
                        </div>
                        
                    <?php }  ?>

                    <?php if (!empty($userData)) { ?>
                        <ul class="py-2" aria-labelledby="user-menu-button">

                            <li>
                                <a href="./profileMenu.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                            </li>

                            <li>
                                <a href="./Wishlist2.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Wishlist</a>
                            </li>
                           
                        <?php } ?>
                        <?php if ($userData) { ?>
                            <li>
                                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block w-full py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" type="button">
                                    <p class="float-left px-4">Log out</p>
                                </button>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="./SignUp.php">
                                    <button class="block w-full py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" type="button">
                                        <p class="float-left px-4">
                                            Signup
                                        </p>
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a href="./login.php">
                                    <button  class="block w-full py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" type="button">
                                        <p class="float-left px-4">
                                            Login
                                        </p>
                                    </button>
                                </a>
                            </li>
                        <?php } ?>

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
    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <!-- <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg> -->
                    <img src="./resources/img/sad-sponge.gif" alt="" class="mx-auto mb-4 w-3/4 h-52">
                    <h3 class="mb-5 text-lg font-normal text-gray-800 dark:text-gray-500">Are you sure you want to Log Out?</h3>
                    <form action="../Controller/logoutController.php?email=<?php echo $userData['email'] ?>" method="post">
                        <button data-modal-hide="popup-modal" type="submit" name="logout" class="text-white bg-purple-600 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Log out
                        </button>
                        <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <button class="chat-btn z-50 scale-110" id="chatBoxButton">
        <img src="./resources/img/chat.png" alt="" class="w-20 h-auto animate-[wiggle_700ms_ease-in-out_infinite] ">
    </button>
    <div class="chat-popup z-50 bg-white">
    </div>


    <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-50 bottom-28 right-10 border-0 w-14 h-14 rounded-full drop-shadow-md shadow-inner bg-purple-500 text-white text-3xl font-bold "><ion-icon name="arrow-up-outline" class="scale-110"></ion-icon></button>
</body>
<script src="//cdn.conveythis.com/javascript/conveythis-initializer.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(e) {
        ConveyThis_Initializer.init({
            api_key: "pub_f0dadebebe17f7b23e125a0a04edb015"
        });
    });
</script>
<script>
    var toTopButton = document.getElementById("to-top-button");
    window.onscroll = function() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            toTopButton.classList.remove("hidden");
        } else {
            toTopButton.classList.add("hidden");
        }
    }

    function goToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
<script src="./resources/js/toggle.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</html>