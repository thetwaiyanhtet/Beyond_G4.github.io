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
$verifyData = $_SESSION["verifyData"];
$logoutEmail =  $_SESSION['logOutEmail'];
// echo "<pre>";
// print_r($userData);
// echo "</pre>";
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
    <link rel="stylesheet" href="./resources/css/scroll.css">
    <link rel="stylesheet" href="./resources/css/bannerSlideShow.css">
    <link rel="stylesheet" href="./resources/css/chat.css">
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/js/chat.js" defer></script>
    <script src="./resources/js/bannerSlideShow.js" defer></script>
    <script src="./resources/js/searchProduct.js"></script>
    <script src="./resources/js/userMainPage.js" defer></script>
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class=" bg-purple-50 dark:bg-gray-950 hide-scroll-bar scroll-smooth">
    <nav class=" bg-violet-300 dark:bg-color-primary-dark fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class=" flex flex-wrap items-center justify-between mx-auto p-4 ">
            <a href="./mainPage.php" class="flex items-center">
                <img src="./resources/img/logo_slowdown.gif" class="mr-3 h-12" alt="beyond Logo" />
                <span class="text-2xl font-semibold whitespace-nowrap text-black dark:text-white font-philosopher">Beyond</span>
            </a>

            <div class="flex items-center md:order-2">

                <input type="checkbox" name="cart" id="cart" class="hidden peer " />
                <label for="cart" class="ml-3">
                    <div class="relative  ">
                        <div class="absolute left-0 top-0 text-white px-1 py-0 bg-red-500 rounded-full">

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
                            <a href="../View/userCart.php" class=" cursor-pointer"> <ion-icon name="cart-outline" class="text-2xl mt-2 dark:text-white text-black"></ion-icon></a>
                        </div>
                    </div>
                </label>
                <!-- <label for="cart" class="ml-3"><ion-icon name="cart-outline" class="text-2xl mt-2 dark:text-white text-black"></ion-icon>
                </label> -->
                <!-- <div id="shopping-cart" class="  peer-checked:visible w-auto bg-white/50 backdrop-blur-lg dark:bg-gray-800/50 dark:text-white p-5 absolute z-30 top-20 right-0 rounded-bl-2xl drop-shadow-lg cursor-pointer overflow-y-scroll hide-scroll-bar">
                    <div class="font-bold">Your Shopping Cart</div>

                    <a id="btnEmpty" href="../Controller/cartController.php?action=empty">Empty Cart</a>
                    <?php
                    if (isset($_SESSION["cart_item"])) {
                        $total_quantity = 0;
                        $total_price = 0;
                    ?>

                        <table class="tbl-cart m-4" cellpadding="5" cellspacing="1">
                            <tbody>
                                <tr class="text-left border-b-2 border-b-black dark:border-b-white">
                                    <th class="w-36">Name</th>
                                    <th class="w-32">Code</th>
                                    <th class="w-32">Quantity</th>
                                    <th class="w-32">Unit Price</th>
                                    <th class="w-32">Price</th>
                                    <th class="w-32">Remove</th>
                                </tr>
                                <?php
                                $index = 0;
                                foreach ($_SESSION["cart_item"] as  $item) {
                                    $item_price = $item["quantity"] * $item["price"];
                                ?>
                                    <form action="./mainPage.php" method="post" enctype="multipart/form-data">
                                        <tr class="text-left">
                                            <td hidden><input type="text" value="<?php echo $item["image"] ?>" hidden name="image_<?= $index ?>" id=""></td>
                                            <td><img name="image_<?= $index ?>" src="<?php echo $item["image"] ?>" class="cart-item-image" /><input type="text" readonly name="itemname_<?= $index ?>" class=" w-48 bg-transparent border border-transparent outline-none" value="<?php echo $item["name"]; ?>"></td>
                                            <td><input type="text" readonly name="code_<?= $index ?>" class="w-20 bg-transparent border border-transparent outline-none" value="<?php echo $item["code"]; ?>"></td>
                                            <td><input type="text" readonly name="quantity_<?= $index ?>" class="w-20 bg-transparent border border-transparent outline-none" value="<?php echo $item["quantity"]; ?>"></td>
                                            <td><input type="text" readonly name="price_<?= $index ?>" class="w-28 bg-transparent border border-transparent outline-none" value=" <?php echo "$ " . $item["price"]; ?>"></td>
                                            <td><input type="text" readonly name="subprice_<?= $index ?>" class="w-28 bg-transparent border border-transparent outline-none" value="<?php echo "$ " . number_format($item_price, 2); ?>" id=""></td>

                                            <td class="text-center"><a href="../Controller/cartController.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><ion-icon name="trash-outline" alt="Remove Item"></ion-icon></a></td>
                                        </tr>
                                    <?php
                                    $total_quantity += $item["quantity"];
                                    $total_price += ($item["price"] * $item["quantity"]);
                                    $index += 1;
                                }
                                    ?>

                                    <tr class=" border-t-2 border-t-black dark:border-t-white">
                                        <td colspan="2" align="right">Total:</td>
                                        <td align="right"><?php echo $total_quantity; ?></td>
                                        <td align="right" colspan="2"><strong><input type="text" readonly name="totprice" class="w-28 bg-transparent border border-transparent outline-none" value="<?php echo "$ " . number_format($total_price, 2); ?>" id=""></strong></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><input type="submit" value="Check Out" class=" cursor-pointer float-right bg-blue-500 text-white py-1 px-3 rounded-md"></input></td>
                                    </tr>
                                    </form>
                            </tbody>

                        </table>

                    <?php
                    } else {
                    ?>
                        <div class="no-records">Your Cart is Empty</div>
                    <?php
                    }
                    ?>
                </div> -->


                <button id="theme-toggle" type="button" class="text-gray-900 dark:text-white focus:outline-none  rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- <div class="relative w-32">
                    <div class=" overflow-hidden absolute mx-2 ">
                        <div id="ln_space" class="w-28 h-20"></div>
                    </div>
                </div> -->

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
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white"><?= $userData["username"] ?></span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400"><?= $userEmail ?></span>
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
                            <!-- <a href="./login.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log out</a> -->
                            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block w-full py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" type="button">
                                <p class="float-left px-4">Log out</p>
                            </button>
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
                        <a href="./mainPage.php" class="block py-2 pl-3 pr-4 text-purple-800 bg-purple-400 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-purple-500 font-bold" aria-current="page">Home</a>
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
        <!-- <form action="../Controller/searchProductController.php" method="post"> -->
        <div class="flex w-3/4 m-auto pb-4">
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg></button>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button relative">
                    <?php foreach ($categories as $category) { ?>
                        <li class="relative">
                            <div class="category inline-flex w-full px-4 py-2 hover:bg-gray-100 text-start" data-category-id="<?= $category["id"] ?>">
                                <?= $category["c_name"] ?>
                            </div>
                            <div class="category-subcategories fixed top-0 w-40 h-[250px] left-44 hidden py-3 bg-white shadow dark:bg-gray-700 rounded-md">
                                <?php foreach ($subCategories as $subcategory) {
                                    if ($subcategory["category_id"] === $category["id"]) { ?>
                                        <div class="py-1 pl-3 hover:bg-gray-100" data-subcategory-id="<?= $subcategory["id"] ?>">
                                            <?= $subcategory["s_c_name"] ?>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="relative w-full">
                <input type="search" id="search" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search Here..." required>
                <button id="searchButton" type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium w-20 h-full text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
        <!-- </form> -->
        <?php
        // echo "<pre>";
        // print_r($categories);
        ?>
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
                    <form action="../Controller/logoutController.php?email=<?php echo $userEmail ?>" method="post">
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
    <div class="chat-popup z-50 bg-white"></div>
    <section class=" mt-24">
        <!-- <div class="m-2">
            <h1 class="m-2 text-2xl md:text-3xl text-center font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-philosopher">All Product</span></h1>
            <hr class="w-20 m-auto bg-purple-800 dark:bg-white h-1 ">
        </div> -->
        <div>
            <div class="flex overflow-y-scroll pb-6 h-full">
                <div id="searchResult" class="flex flex-wrap w-full  justify-around">
                    <!-- <form action="../Controller/newcartController.php" method="post"> -->
                    <?php foreach ($AllProduct as $productDetail) { ?>
                        <div class="inline p-3">
                            <div class="h-80 w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                                <form action="./mainPage.php" method="post">
                                    <div class="relative overflow-hidden  bg-slate-300 dark:bg-slate-700 rounded-xl ">
                                        <div class="flex justify-center items-center h-44">
                                            <img class="w-48 h-auto m-auto" src="../../Storage/product/<?= $productDetail["p_one"] ?>" alt="">
                                        </div>
                                        <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                            <a href="./mainPage.php?pid=<?= $productDetail["id"]; ?>"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="heart-outline"></ion-icon></button></a>
                                            <a href="../View/itemDetail.php?pid=<?= $productDetail["id"]; ?>"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="list-outline"></ion-icon></button></a>

                                        </div>
                                    </div>
                                    <div class="relative dark:text-white">
                                        <h2 class="mt-3 ml-5 text-sm md:text-md capitalize font-bold w-full"><?= $productDetail["name"] ?></h2>
                                        <!-- <del class="text-red-700 text-lg">$999</del> -->
                                        <p class="text-xs mt-2 ml-5 block 
                                             overflow-hidden h-4"><?= $productDetail["description"] ?></p>
                                        <p class="text-md font-bold mt-2 ml-5 block ">$<?= $productDetail["sellprice"] ?></p>
                                        <button type="submit" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto justify-end items-baseline">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                                        <input type="hidden" name="product_id" value="<?= $productDetail["id"] ?>">
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="sec">
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
                                    <li class="underline hover:no-underline hover:text-purple-700"><button data-modal-target="defaultModal1" data-modal-toggle="defaultModal1" class="block" type="button">
                                            Return Policy
                                        </button></li>
                                    <li class="underline hover:no-underline hover:text-purple-700"><button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block" type="button">
                                            Terms and Conditions
                                        </button></li>
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
                    <div class="flex justify-center pt-5 border-t border-color-gray">
                        <p>2023 &copy; Beyond. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Terms and Conditions
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 h-96 overflow-y-scroll">
                                <img src="./resources/img/terms.jpg" alt="" class="m-auto w-64 h-auto">
                                <b>1. User Accounts</b> <br>
                                a. Registration: To access certain features of the Website, you may be required to create a user account. You agree to provide accurate and complete information during the registration process. <br>
                                b. Account Security: You are responsible for maintaining the confidentiality of your account login credentials and for any activities that occur under your account. Notify us immediately of any unauthorized use or security breach. <br><br>

                                <b>2. Use of the Website</b> <br>
                                a. General Use: You may use the Website for personal and non-commercial purposes only. You agree not to use the Website for any illegal, harmful, or abusive activities that may disrupt or interfere with the proper functioning of the Website or infringe on the rights of others. <br>
                                b. Content: Any content you upload or submit to the Website must not violate any applicable laws or infringe on the rights of any third parties.<br><br>

                                <b>3. Intellectual Property</b>
                                a. Ownership: The Website and its content, including text, graphics, images, logos, and software, are the property of Beyond or its licensors and are protected by intellectual property laws. <br>
                                b. Limited License: Beyond grants you a limited, non-exclusive, non-transferable license to access and use the Website for its intended purposes. <br><br>

                                <b>4. Privacy</b>
                                Your privacy is important to us. Please review our Privacy Policy to understand how we collect, use, and disclose your personal information. <br><br>

                                <b>5. Third-Party Links</b>
                                The Website may contain links to third-party websites or services. Beyond is not responsible for the content or actions of any third-party websites or services. These links are provided for convenience and do not imply endorsement or affiliation. <br><br>

                                <b>6. Limitation of Liability</b>
                                Beyond shall not be liable for any direct, indirect, incidental, special, or consequential damages arising from your use of the Website. <br><br>

                                <b>7. Modifications to the Terms</b>
                                We reserve the right to update or modify these Terms at any time without prior notice. Your continued use of the Website after such changes constitutes your acceptance of the revised Terms. <br><br>

                                <b>8. Termination</b>
                                Beyond may terminate or suspend your access to the Website at any time and for any reason without prior notice. <br><br>


                                <b>9. Contact Us</b>
                                If you have any questions or concerns about these Terms or the Website, please contact us at beyondecommerce634@gmail.com. <br><br>

                                <b>By using the Beyond website, you agree to abide by these Terms and Conditions. Please read them carefully before proceeding with your use of the Website.</b>
                            </p>

                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="defaultModal" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-md px-5 py-2.5  text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Agree</button>
                        </div>
                    </div>
                </div>
            </div>


            <div id="defaultModal1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Return Policy
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal1">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 h-96 overflow-y-scroll">
                                <img src="./resources/img/return.png" alt="" class="m-auto w-auto h-44 pb-2">
                                <b>At Beyond, we strive to provide you with the best shopping experience possible. If you're not completely satisfied with your purchase, we're here to help. Our return policy is designed to be fair and transparent, ensuring your peace of mind.</b> <br> <br>

                                <b>30-Day Return Window:</b> You have up to 30 days from the date of delivery to return eligible items. <br>

                                <b>Eligibility Criteria:</b> To be eligible for a return, the item must be in its original condition and packaging. It should be unused, unworn, and free from any signs of damage or alteration. <br>

                                <b>Easy Returns Process:</b> Initiating a return is simple. Just log in to your account, go to the order history, and select the items you want to return. Our system will guide you through the process step by step. <br>

                                <b>Non-Returnable Items:</b> Some items, such as personalized or intimate goods, are non-returnable for hygiene and safety reasons. <br>

                                <b>Exchanges:</b> Currently, we don't offer direct exchanges. You can return the unwanted item and place a new order for the desired item. <br>

                                <b>Processing Time:</b> Once we receive your returned item, we'll inspect it and process your refund within merchants business days. <br>

                                <b>Contact Us:</b> If you have any questions or concerns about our return policy, feel free to reach out to our customer support team. We're here to assist you every step of the way. <br>

                                <b>Please note that this policy is subject to change, and we recommend reviewing it periodically. Your satisfaction is our priority, and we want your shopping experience with Beyond to be exceptional.</b>
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="defaultModal1" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-md px-5 py-2.5  text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Agree</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-50 bottom-28 right-10 border-0 w-14 h-14 rounded-full drop-shadow-md shadow-inner bg-purple-500 text-white text-3xl font-bold "><ion-icon name="arrow-up-outline" class="scale-110"></ion-icon></button>

    </section>
    <!-- <script src="//cdn.conveythis.com/javascript/conveythis-initializer.js"></script> -->
    <script>

    </script>
    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>


</html>