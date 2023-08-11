<?php
// include ("../Controller/cartConrroller.php");
require_once("../Controller/newcartController.php");

$placeholers = [];
foreach ($cart as $item) {
    $placeholders[] = $item['product_id'];
}

function uniqueAssocArray($array) {
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
       
   foreach ($cart as $key => $value) {
;    if ($cart[$key]['product_id'] == $_POST["id"]) {
        unset( $_SESSION['usercart'][$key]);
        header("Location: ../View/userCart.php");
    }
   }
   //print_r($cart);
    
    }

$sql = $pdo->prepare(
    "SELECT id,p_one,name,sellprice FROM m_product WHERE id IN ($placeholdersString)"
);
$sql->execute();

$_SESSION['placeholdcart'] = $sql->fetchAll(PDO::FETCH_ASSOC);

$cartloop = $_SESSION["placeholdcart"];


?>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<div id="session-data">

</div>

<body class="mt-3 font-poppins overflow-x-auto dark:bg-black">
    <a href="./profileMenu.php"><ion-icon name="arrow-back-outline" class="text-2xl text-black dark:text-white"></ion-icon></a>

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
    <section class="relative">
        <section class="w-screen  h-screen rounded-tl-[30px] rounded-tr-[30px] 
              bg-gradient-to-tl from-[#d5a0e6] - to-[#9f80f4] dark:bg-linear_dark  min-h-screen flex justify-center flex-col items-center ">
            <p class=" font-philosopher pr-[70%] md:pr-[55%] md:pb-4 font-bold text-[28px] md:text-[32px] text-3xl dark:text-white">Cart</p>
            <div class="w-[369px] lg:w-[948px] lg:h-[70px] mt-3 md:mt-0 bg-[#314755] rounded-tl-2xl rounded-tr-2xl flex flex-col items-center justify-center">
                <img class=" w-10 pt-3" src="../View/resources/img/logo.png" alt="">
                <p class="pb-2 lg:text-xl text-white font-philosopher font-bold">Beyond</p>
            </div>
            <div class="w-[369px] lg:w-[948px] h-auto lg:h-[350px]  bg-[#D9D9D9] mb-40 md:mb-32  shadow-inner flex flex-col-reverse md:flex-row  md:items-center justify-evenly rounded-bl-2xl rounded-br-2xl">

                <div class="  md:mb-10 mt-8 md:mt-0  space-x-0">
                    <div class="flex justify-evenly space-x-10 font-poppins">
                        <p class="font-bold text-[12px] md:text-[16px]">Description</p>
                        <p class="font-bold text-[12px] md:text-[16px]">Name</p>
                        <p class="font-bold text-[12px] md:text-[16px]">Quantity</p>
                        <p class="font-bold text-[12px] md:text-[16px]">Price</p>
                        <p class="font-bold text-[12px] md:text-[16px]">Total</p>
                    </div>

                    <?php $total_price = 0;
                    foreach ($cartloop as $key => $value) { ?>
                        <form action="./userCart.php" method="post">
                            <div class="flex items-center text-[12px] md:text-[16px] font-bold justify-evenly w-[361px]  md:w-[384px]
                     md:h-[58px] mt-5 border border-transparent border-t-black border-b-black md:ml-6 font-poppins space-x-16">
                                <img class=" w-16" src="../..<?= $value['p_one'] ?>" alt="">
                                <div class="w-[35px] h-[32px]  rounded-md flex items-center justify-center"><?= $value['name'] ?></div>
                                <div class="flex w-[60px] md:w-[80px] h-[26px]  border-gray-600 rounded-md items-center justify-evenly">
                                    <input class="w-20 rounded-md" type="number" value="1">
                                </div>
                                <p>$<?= $value['sellprice'] ?></p>
                                <?php $total_price = $total_price + (int)$value["sellprice"]; ?>
                                <p cl>$<?= $value['sellprice'] ?></p>
                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                <input type="submit" value="X" class="absolute left-[88%] cursor-pointer md:left-[52.7%] rounded-full  w-[20px] h-[20px] bg-[#EBEBEB]  text-[#777777] flex items-center justify-center"></input>
                            </div>
                        </form>
                    <?php } ?>

                    <!-- <div class="flex items-center text-[12px] md:text-[16px] font-bold justify-evenly w-[361px] md:w-[384px] h-[58px] border border-transparent
                         border-b-black md:ml-6 font-poppins">
                        <img class=" w-16" src="../View/resources/img/one string blouse.png" alt="">
                        <div class="w-[35px] h-[32px] border border-gray-600 rounded-md flex items-center justify-center">M</div>
                        <div class="flex w-[60px] md:w-[80px] h-[26px] border border-gray-600 rounded-md items-center justify-evenly">
                            <p>+</p>
                            <p>2</p>
                            <p>-</p>
                        </div>
                        <p>$100</p>
                        <p>$200</p>
                        <div class="absolute left-[88%] md:left-[52.7%] rounded-full w-[20px] h-[20px] bg-[#EBEBEB]  text-[#777777] flex items-center justify-center">x</div>
                    </div> -->

                    <!-- <div class="flex items-center text-[12px] md:text-[16px] font-bold justify-evenly w-[361px] md:w-[384px] h-[58px] 
                    border border-transparent md:ml-6 font-poppins">
                        <img class=" w-16" src="../View/resources/img/crop top.png" alt="">
                        <div class="w-[35px] h-[32px] border border-gray-600 rounded-md flex items-center justify-center">M</div>
                        <div class="flex w-[60px] md:w-[80px] h-[26px] border border-gray-600 rounded-md items-center justify-evenly">
                            <p>+</p>
                            <p>2</p>
                            <p>-</p>
                        </div>
                        <p>$100</p>
                        <p>$200</p>
                        <div class="absolute left-[88%] md:left-[52.7%] rounded-full w-[20px] h-[20px] bg-[#EBEBEB]  text-[#777777] flex items-center justify-center">x</div>
                    </div> -->

                    <div class="ml-[240px] block md:hidden">
                        <a href="./cart2.php">
                            <button type="button" class="w-[90px] h-[28px] bg-[#314755] font-bold text-xs rounded-lg text-white font-Playfair Display">Checkout</button>
                        </a>
                        <div class="mt-2"><button class="w-[100px] h-[40px] bg-[#3147558b] font-bold text-xs rounded-lg text-white font-Playfair Display">Continue Shopping</button></div>
                    </div>

                </div>
                <div>
                    <div class="w-[180px] md:w-[202px] h-[100px] md:h-[113px] bg-[#FDFDFD] rounded-tl-md rounded-tr-md ml-5 md:ml-0">
                        <div class="py-[2%] ml-[15px] border-b-black border-2 border-transparent w-[136px] h-[30px] font-bold text-[10px] md:text-[15px] ">Order Summary</div>
                        <div class="flex item py-[4%]">
                            <p class="ml-[15px] font-bold text-xs md:text-sm">Sub Total</p>
                            <p class="ml-[44px] font-bold text-xs md:text-sm"><?= $total_price ?></p>
                        </div>
                        <div class="flex">
                            <p class="ml-[15px] font-bold text-xs md:text-sm">Shipping fee</p>
                            <p class="ml-[25px] font-bold text-xs md:text-sm">10</p>
                        </div>
                    </div>

                    <div class="flex w-[180px] md:w-[202px] h-[40px] items-center md:justify-around rounded-bl-md rounded-br-md bg-[#D9D9D9] 
                       border-2 space-x-12 md:space-x-0 ml-5 md:ml-0 font-bold">
                        <p class="text-xs md:text-sm ml-9 md:ml-0">Total</p>
                        <p class="text-xs md:text-sm"><?= $total_price + 10 ?></p>
                    </div>
                    <div class="ml-[110px] mt-3 hidden md:block">
                        <a href="./cart2.php"><button type="button" class="w-[90px] h-[28px] bg-[#314755] font-bold text-xs rounded-lg text-white">Checkout</button></a>
                        <div class="mt-2"><button class="w-[100px] h-[40px] bg-[#3147558b] font-bold text-xs rounded-lg text-white">Continue Shopping</button></div>
                    </div>

                </div>
            </div>
        </section>

    </section>
    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>



</body>

</html>