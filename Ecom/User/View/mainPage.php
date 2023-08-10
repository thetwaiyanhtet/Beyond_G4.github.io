<?php
session_start();
// require_once("../Controller/cartController.php");
include "../Controller/trendingProductController.php";
include  "../../User/Controller/bannerController.php";
include  "../../Admin/Controller/readfaqController.php";
include "../Controller/userProfileController.php";
$faq = $_SESSION["m_faq"];
include "../Controller/bannerController.php";
$banner = $_SESSION["banner"];
$userData = $_SESSION["user_data"];
$verifyData = $_SESSION["verifyData"];
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
                    <div class="absolute left-0 top-0 pl-2  bg-red-500 rounded-full">
                       
                        <?php 
                          if (isset($_SESSION['usercart'])) { 
                            $cc = count($_SESSION['usercart']);
                            echo $cc;
                    //    echo ' <span class="text-sm text-white p-1"></span>'?>
                         <?php  }else{
                            echo ' <span class="text-sm text-white p-1">0</span>';
                         }
                        ?>
                    </div>
                    <div class="p-2">
                   <a href="" class=" cursor-pointer"> <ion-icon name="cart-outline" class="text-2xl mt-2 dark:text-white text-black"></ion-icon></a>
                    </div>
                </div>
                 </label>
                <!-- <label for="cart" class="ml-3"><ion-icon name="cart-outline" class="text-2xl mt-2 dark:text-white text-black"></ion-icon>
                </label> --> 
                <div id="shopping-cart" class=" invisible peer-checked:visible w-auto bg-white/50 backdrop-blur-lg dark:bg-gray-800/50 dark:text-white p-5 absolute z-30 top-20 right-0 rounded-bl-2xl drop-shadow-lg cursor-pointer overflow-y-scroll hide-scroll-bar">
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
                                    <form action="../Controller/checkoutController.php" method="post" enctype="multipart/form-data">
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
                </div>


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
                        <img class="w-10 h-10 rounded-full" src="../../<?= $userData["p_picture"] ?>" alt="user photo">
                    <?php } ?>
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
                            <a href="./userCart.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Wishlist</a>
                        </li>
                        <li>
                            <a href="./orderNotification.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Notification</a>
                        </li>
                        <li>
                            <a href="./login.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log out</a>
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
    </nav>
    <section class="sec h-screen">
        <section class="w-[85%] m-auto">

            <div>
                <!-- Banner_1 section -->
                <img src="<?= $banner[0]['banner_one_img']  ?>" alt="" class="rounded-xl mt-24">
            </div>
            <!--Trending product section  -->
            <div class=" flex flex-col m-auto p-auto font-poppins ">

                <h1 class="m-2 text-2xl md:text-3xl text-center font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-philosopher">Trending Product</span></h1>
                <hr class="w-20 m-auto bg-purple-800 dark:bg-white h-1 ">

                <div class="flex overflow-x-scroll pb-3 hide-scroll-bar mt-4">
                    <div class="flex flex-nowrap">
                        <div id="product-grid">
                            <?php
                            // $product_array = $db_handle->runQuery("SELECT * FROM m_cart ORDER BY id ASC");
                            if (!empty($trandingProduct)) {
                                foreach ($trandingProduct as $tranding) {
                            ?>
                                    <div class="product-item font-poppins">
                                        <!-- <form method="post" action="../Controller/cartController.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>"> -->
                                        <div class="mx-4">
                                            <div class="h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                                                <form action="../Controller/newcartController.php" method="post">
                                                    <div class="relative overflow-hidden">
                                                        <input type="hidden" name="image"  value="../../<?php echo $tranding["p_one"]; ?>">
                                                        <img class="w-32 h-40 m-auto"  src="../../<?php echo $tranding["p_one"]; ?>" alt="">
                                                        <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                                            <a href="./Wishlist2.php"><button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button></a>
                                                            <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>
                                                        </div>
                                                    </div>
                                                    <div class="relative dark:text-white ">
                                                        <h2 class="mt-3 ml-5 text-sm md:text-md capitalize font-extrabold w-full "><?php echo $tranding["name"]; ?></h2>
                                                        <p class="text-xs mt-2 ml-5 block font-bold"><?php echo $tranding["description"]; ?></p>
                                                        <!-- <del class="text-red-700 text-md">$999</del> -->
                                                        <p name="price" class="text-md font-bold mt-2 ml-5 block "><?php echo "$" . $tranding["sellprice"]; ?></p>
                                                        <div class="cart-action">
                                                            <input type="number" class="product-quantity bg-white/30 border-2 border-gray-400 w-16 absolute bottom-14 right-3 rounded-md" name="quantity" value="1" size="2" />
                                                            <input type="submit" value="Add to Cart" class="btnAddAction bg-slate-300 shadow-2xl w-full h-12 rounded-b-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center" />
                                                            <input type="hidden" name="product_id" value="<?= $tranding["product_id"]; ?>">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                        </div>
                <?php
                                }
                            }
                ?>

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
                <span class="absolute flex items-center justify-center w-full h-fuinline p-3ll text-purple-500 transition-all duration-300 transform group-hover:translate-x-full ease">View All</span>
                <span class="relative invisible ">View All</span>
            </a>
            <!--End of Trending product section  -->
            <!-- Banner 2 -->
            <div>
                <img src="<?= $banner[0]['banner_two_img']  ?>" alt="" class=" w-full rounded-xl">
            </div>
            <!--End of Banner 2 -->
            <!-- All Product session start -->
            <div class=" pdt m-2">
                <h1 class="m-2 text-2xl md:text-3xl text-center font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-philosopher">All Product</span></h1>
                <hr class="w-20 m-auto bg-purple-800 dark:bg-white h-1 ">
            </div>
            <div>
                <div class="flex overflow-y-scroll pb-6 h-96">
                    <div class="flex flex-wrap w-full space-x-10">
                        <?php foreach ($AllProduct as $productDetail) { ?>
                            <div class="inline p-3">
                                <div class=" h-fit w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                                    <div class="relative overflow-hidden">
                                        <img class="w-32 h-40 m-auto" src="../../<?= $productDetail["p_one"] ?>" alt="">
                                        <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                            <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                            <button class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>

                                        </div>
                                    </div>
                                    <div class="relative dark:text-white">
                                        <h2 class="mt-3 ml-5 text-sm md:text-md capitalize font-bold"><?= $productDetail["name"] ?></h2>
                                        <!-- <del class="text-red-700 text-lg">$999</del> -->
                                        <p class="text-xs mt-2 ml-5 block "><?= $productDetail["description"] ?></p>
                                        <p class="text-md font-bold mt-2 ml-5 block ">$<?= $productDetail["sellprice"] ?></p>
                                        <button type="button" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto flex justify-center items-center">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>
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
                <img src="<?= $banner[0]['banner_three_img']  ?>" alt="" class=" w-full rounded-xl">
            </div>
            <h1 class="m-2 text-2xl md:text-3xl text-center font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-philosopher">Feature Shops</span></h1>
            <hr class="w-20 m-auto bg-purple-800 dark:bg-white h-1 mb-4">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 m-10">
                <!-- Product Card 1 -->
                <?php foreach ($latestMerchants as $latestShop) { ?>
                    <div class="w-full sm:w-1/2 lg:w-1/3 mb-4">
                        <div class="w-96 h-60 p-4 bg-white dark:bg-gray-800 rounded-xl shadow-xl z-10">
                            <div class="relative">
                                <img src="../../<?= $latestShop["logo"] ?>" class=" w-20 h-20 object-cover rounded-full ml-2" alt="">
                                <div class="bottom-0 right-0 mb-2 mr-2 px-4 rounded-lg absolute bg-yellow-500 text-gray-100 text-xs font-medium">Myanmar</div>
                            </div>
                            <div class="px-2 py-1">
                                <!-- Product Title -->
                                <div class="text-sm md:text-base font-bold pr-2"><?= $latestShop["m_name"] ?></div>
                                <div class="flex py-2">
                                    <div class="flex justify-between items-center">
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
                                <!-- <div class="bg-black dark:bg-slate-300 rounded-xl py-4 m-2 flex">
                                <div>
                                    <a href="#" target="_blank"><img alt="" height="auto" src="./resources/img/crop.png" /></a>
                                </div>
                                <div class="text-white w-72">
                                    <h2 class="mt-3 text-sm md:text-md capitalize font-bold">Long Sleeve Crop Top</h2>
                                  
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
                            </div> -->
                                <a class="inset-x-0 bottom-0 flex justify-center bg-blue-500 hover:bg-white text-sm md:text-base border hover:border-2 hover:border-blue-500 rounded-xl p-2 text-gray-100 hover:text-blue-900 w-24 float-right mb-4" href="#">View Shop</a>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>



        </section>
        <section class="w-[90%] m-auto">
            <div>
                <img src="<?= $banner[0]['banner_four_img']  ?>" alt="" class=" w-full rounded-xl">
            </div>

            <div class=" w-full h-auto py-5 z-10">
                <h1 class="m-2 text-2xl md:text-3xl text-center font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-philosopher">Frequently Ask Questions</span></h1>
                <hr class="w-20 m-auto bg-purple-800 dark:bg-white h-1 mb-4">



                <div class=" w-[80%] m-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 backdrop-blur-lg">

                    <div class="p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                        <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white rounded-lg" data-inactive-classes="text-gray-500 dark:text-gray-400">
                            <h2 id="accordion-flush-heading-1">
                                <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1">
                                    <span><?= $faq[0]['question_one'] ?></span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400"><?= $faq[0]['answer_one'] ?>
                                    </p>

                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-2">
                                <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                                    <span><?= $faq[0]['question_two'] ?></span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400"><?= $faq[0]['answer_two'] ?></p>

                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-3">
                                <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                                    <span><?= $faq[0]['question_three'] ?></span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400"><?= $faq[0]['answer_three'] ?></p>

                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-4">
                                <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
                                    <span><?= $faq[0]['question_four'] ?></span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400"><?= $faq[0]['answer_four'] ?></p>
                                    </ul>
                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-5">
                                <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-5">
                                    <span><?= $faq[0]['question_fivre'] ?>
                                    </span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400"><?= $faq[0]['answer_five'] ?></p>
                                    </ul>
                                </div>
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
        <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-90 bottom-8 right-8 border-0 w-12 h-12 rounded-full drop-shadow-md shadow-inner bg-rose-500 text-white text-3xl font-bold animate-bounce"><ion-icon name="arrow-up-outline"></ion-icon></button>

    </section>
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
</body>

</html>