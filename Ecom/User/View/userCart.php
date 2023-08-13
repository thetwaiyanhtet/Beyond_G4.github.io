<?php

//   session_start();
require_once("../Controller/newcartController.php");
// echo "</pre>";
// print_r($_SESSION['usercart']);
if (!empty($cartass)) {
        
   
    //session_start();
    $cart = $_SESSION['carttle'];
    $placeholers = [];
    foreach ($cart as $item) {
        $placeholders[] = $item['product_id'];
    }

    function uniqueAssocArray($array)
    {
        $result = array();
        foreach ($array as $key => $value) {
            if (!in_array($value, $result)) {
                $result[$key] = $value;
                // header("Location: ../View/userCart.php");
            }
        }
        return $result;
    }

    $uniqueAssocArray = uniqueAssocArray($placeholders);

    $placeholdersString = implode(',', $uniqueAssocArray);
    // print_r($cart);


    if (isset($_POST['id'])) {
        $idValues = $_POST['id'];

        foreach ($cart as $key => $value) {;
            if ($cart[$key]['product_id'] == $_POST["id"]) {
                unset($_SESSION['usercart'][$key]);
                header("Location: ../View/userCart.php");
            }
        }

    }

    $sql = $pdo->prepare(
        "SELECT id,p_one,name,sellprice FROM m_product WHERE id IN ($placeholdersString)"
    );
    $sql->execute();

    $_SESSION['placeholdcart'] = $sql->fetchAll(PDO::FETCH_ASSOC);

    $cartloop = $_SESSION["placeholdcart"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Cart</title>
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
    <style>
        * {
            outline: 1px solid red;
        }
    </style>
</head>
<div id="session-data">

</div>

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
            <a href="./userCart.php">
                <button type="button" class="w-44  bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">Cart</button>
            </a>
            <a href="./Wishlist2.php">
                <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">WishList</button>
            </a>
            <a href="./user_history.php">
                <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">History</button>
            </a>
            <a href="./orderNotification.php"> <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400 ">Notification</button>
            </a>
        </div>

        <div class="my-5 w-[100%] md:w-3/4 ">
            <?php if (!empty($_SESSION['usercart'])) { ?>


                <div class="w-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Shopping Cart</h5>
                    </div>

                    <section class="">

                        <div class=" h-auto bg-purple-200 dark:bg-color-primary-dark dark:text-white rounded-lg flex flex-wrap w-[100%]">

                            <div class=" w-[100%] md:w-3/4">
                                <div class="flex justify-evenly space-x-14 py-2">
                                    <p class="font-semibold text-[12px] md:text-[16px]">Description</p>
                                    <p class="font-semibold text-[12px] md:text-[16px]">Name</p>
                                    <p class="font-semibold text-[12px] md:text-[16px]">Quantity</p>
                                    <p class="font-semibold text-[12px] md:text-[16px]">Price</p>
                                    <p class="font-semibold text-[12px] md:text-[16px]">Total</p>
                                </div>

                                <?php $total_price = 0; {
                                    # code...
                                ?>

                                    <?php foreach ($cartloop as $key => $value) { ?>
                                        <form action="./userCart.php" method="post">
                                            <div class="flex items-center text-sm md:text-[16px] font-semibold space-x-10 justify-evenly pb-4">
                                                <div class="bg-white/30 w-20 h-20 p-2 flex items-center justify-center rounded-md">
                                                    <img class="w-12" src="../..<?= $value['p_one'] ?>" alt="">
                                                </div>
                                                <div name="pname" class="w-24"><?= $value['name'] ?></div>

                                                <input class="w-16 h-8 bg-white/30 rounded-md iquantity" name="pquantity" onchange="subTotal()" min="1" max="100" type="number" value="1">

                                                <p>$<?= $value['sellprice'] ?> </p>
                                                <input type="hidden" class="iprice " name="psellprice" value="<?= $value['sellprice'] ?>">

                                                <p class="itotal"></p>
                                                <input type="hidden" name="id" value="<?= $value['id'] ?>">

                                                <input type="submit" value="x" class="cursor-pointer rounded-full font-black bg-[#EBEBEB] flex items-center justify-center"></input>

                                            </div>
                                        </form>
                                <?php }
                                } ?>

                                <!-- <div class="ml-[240px] block md:hidden">
                                <a href="./cart2.php">
                                    <button type="button" class="w-[90px] h-[28px] bg-[#314755] font-bold text-xs rounded-lg text-white font-Playfair Display">Checkout</button>
                                </a>
                                <div class="mt-2"><button class="w-[100px] h-[40px] bg-[#3147558b] font-bold text-xs rounded-lg text-white font-Playfair Display">Continue Shopping</button></div>
                            </div> -->

                            </div>



                            <div class="bg-purple-300 dark:bg-purple-500 w-[100%] md:w-1/4 rounded-lg">
                                <form action="../Controller/orderController.php" method="post">
                                    <div class="">
                                        <div class="py-[2%] ml-[15px] border-b-black border-2 border-transparent w-[136px] h-[30px] font-bold text-[10px] md:text-[15px] ">Order Summary</div>
                                        <div class="flex item py-[4%]">
                                            <p class="ml-[15px] font-bold text-xs md:text-sm">Sub Total</p>
                                            <input readonly class="ml-[44px] font-bold text-xs w-[60px] md:text-sm " id="gtotal" name="stotal"></input>
                                            <input type="hidden" name="quantiarr" id="quantiarray">
                                        </div>
                                        <div class="flex">
                                            <p class="ml-[15px] font-bold text-xs md:text-sm">Shipping fee</p>
                                            <div class="ml-[25px] font-bold text-xs md:text-sm" name="name">$10</div>
                                        </div>
                                    </div>

                                    <div class="flex h-[40px] items-center md:justify-around border-2 space-x-12 md:space-x-0  font-bold">
                                        <p class="text-xs md:text-sm ml-9 md:ml-0">Total</p>
                                        <input readonly class="text-xs md:text-sm w-[60px] bg-transparent" id="delitotal" name="delitotal">
                                    </div>

                                    <div class="ml-[110px] mt-3">
                                        <input type="submit" class="w-[90px] h-[28px] bg-slate-600 font-bold text-xs text-black cursor-pointer rounded-lg " value="Checkout">
                                        <div class="mt-2"><button class="w-[100px] h-[40px] bg-[#3147558b] font-bold text-xs rounded-lg text-white">Continue Shopping</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                </div>
            <?php } else { ?>
                <div class="w-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                    Empty Cart
                    </div>
                </div>
            <?php  } ?>
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
    <script>
        var gt = 0;
        var quanti = [];
        var iprice = document.getElementsByClassName("iprice");
        var itotal = document.getElementsByClassName("itotal")
        var iquantity = document.getElementsByClassName("iquantity");
        var gtotal = document.getElementById("gtotal");
        var delitotal = document.getElementById("delitotal");
        var quantiarray = document.getElementById("quantiarray");

        function subTotal() {
            gt = 0;
            quanti = [];
            for (let i = 0; i < iprice.length; i++) {
                itotal[i].innerHTML = "$" + (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);
                quanti.push(iquantity[i].value);

            }
            gtotal.value = "$" + gt;
            var tot = gt + 10;
            delitotal.value = "$" + tot;
            quantiarray.value = quanti;

        }
        subTotal();
    </script>
</body>

</html>