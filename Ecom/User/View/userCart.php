<?php



require_once("../Controller/newcartController.php");
require_once "../Model/model.php";
$user = $_SESSION["user_ID"];

// $selectedColor=$_SESSION['selectedItem'];
// echo "<pre>";
// print_r($selectedColor);
// echo "</pre>";
// print_r($_SESSION['usercart']);
if (!empty($_SESSION['carttle'])) {


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
                unset($_SESSION['carttle'][$key]);
                header("Location: ../View/userCart.php");
            }
        }
    }

    $sql = $pdo->prepare(
        "SELECT id,p_one,name,sellprice,instock FROM m_product WHERE id IN ($placeholdersString)"
    );
    $sql->execute();

    $_SESSION['placeholdcart'] = $sql->fetchAll(PDO::FETCH_ASSOC);

    $cartloop = $_SESSION["placeholdcart"];


    $delifees = $pdo->prepare(
        "SELECT delivery_fees FROM `m_delivery` JOIN m_customer ON m_delivery.region_id = m_customer.region_id
         WHERE m_customer.id = (SELECT id FROM m_customer WHERE email = :email) "
    );

    $delifees->bindValue(":email", $user);
    $delifees->execute();
    $_SESSION['delifees'] = $delifees->fetchAll(PDO::FETCH_ASSOC);
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
    <!-- <style>
        * {
            outline: 1px solid red;
        }
    </style> -->
</head>
<div id="session-data">

</div>

<body class="bg-purple-200 dark:bg-color-primary-dark ">
    <?php include "./navigation.php"; ?>
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
            <?php if (!empty($_SESSION['carttle'])) { ?>


                <div class="w-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Shopping Cart</h5>
                    </div>

                    <section class="">

                        <div class=" h-auto bg-purple-200 dark:bg-color-primary-dark dark:text-white rounded-lg flex flex-wrap w-[100%]">

                            <div class=" w-[100%] md:w-3/4">
                                <div class="flex justify-around space-x-16 py-2">
                                    <p class="font-semibold text-[12px] md:text-[16px]">Description</p>
                                    <p class="font-semibold text-[12px] md:text-[16px]">Name</p>
                                    <p class="font-semibold text-[12px] md:text-[16px]">Quantity</p>
                                    <p class="font-semibold text-[12px] md:text-[16px]">Price</p>
                                    <p class="font-semibold text-[12px] md:text-[16px]">Total</p>
                                </div>

                                <?php $total_price = 0; {
                                    # code...
                                ?>

                                    <?php foreach ($cartloop as $key => $value) {  ?>
                                        <form action="./userCart.php" method="post">
                                            <div class="flex items-center text-sm md:text-[16px] font-semibold space-x-10 justify-evenly pb-4">
                                                <div class="bg-white/30 w-20 h-20 p-2 flex items-center justify-center rounded-md">
                                                    <img class="w-12" src="../../Storage/product/<?= $value['p_one'] ?>" alt="">
                                                </div>
                                                <div name="pname" class="w-24"><?= $value['name'] ?></div>

                                                <input class="w-16 h-8 bg-white/30 rounded-md iquantity" id="iquantity" name="pquantity" onchange="subTotal()" min="1" max="<?= $value['instock'] ?>" type="number" value="1">
                                                <p><?= $value['sellprice'] ?> Ks </p>
                                                <input type="hidden" class="iprice " name="psellprice" value="<?= $value['sellprice'] ?>">

                                                <p class="itotal"></p>
                                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                                <input type="submit" value="x" class="cursor-pointer rounded-full font-black bg-[#EBEBEB] flex items-center justify-center"></input>

                                            </div>
                                        </form>
                                <?php }
                                } ?>
                                <script>
                                    const inputElement = document.getElementsByClassName('iquantity');

                                    Array.from(inputElement).forEach(element => {
                                        element.addEventListener('input', function() {
                                            let enteredValue = parseFloat(element.value);

                                            if (enteredValue < parseFloat(element.min)) {
                                                element.value = element.min;
                                            } else if (enteredValue > parseFloat(element.max)) {
                                                element.value = element.max;
                                            }
                                        });
                                    })
                                </script>

                                <!-- <div class="ml-[240px] block md:hidden">
                                <a href="./cart2.php">
                                    <button type="button" class="w-[90px] h-[28px] bg-[#314755] font-bold text-xs rounded-lg text-white font-Playfair Display">Checkout</button>
                                </a>
                                <div class="mt-2"><button class="w-[100px] h-[40px] bg-[#3147558b] font-bold text-xs rounded-lg text-white font-Playfair Display">Continue Shopping</button></div>
                            </div> -->

                            </div>



                            <div class="bg-purple-300 dark:bg-purple-500 w-[100%] md:w-1/4 rounded-lg">
                                <form action="../View/deliver.php" method="post">
                                    <div class="">
                                        <div class="py-[2%] ml-[15px] border-b-black border-2 border-transparent w-full h-[30px] font-bold text-[10px] md:text-[15px] ">Order Summary</div>
                                        <div class="flex justify-around py-[4%]">
                                            <p class="ml-[15px] font-bold text-xs md:text-sm">Sub Total</p>
                                            <input readonly class="ml-[44px] w-28 font-bold text-xs md:text-sm bg-transparent " id="gtotal" name="stotal"></input>
                                            <input type="hidden" name="quantiarr" id="quantiarray">
                                        </div>
                                        <div class="flex justify-around ">
                                            <p class="ml-[44px]  font-bold text-xs md:text-sm">Delivery fee</p>
                                            <input readonly class="ml-[44px] w-20 font-bold border-transparent text-xs md:text-sm bg-transparent " value="<?= $_SESSION['delifees'][0]['delivery_fees']  ?> Ks" id="delifees" name="deli">
                                        </div>
                                    </div>

                                    <div class="flex h-[40px] items-center md:justify-around mt-2  border-t-2 space-x-12 md:space-x-0  font-bold">
                                        <p class="text-xs md:text-sm ml-9 md:ml-0">Total</p>
                                        <input readonly class="text-xs md:text-sm bg-transparent" id="delitotal" name="delitotal">
                                    </div>

                                    <div class="ml-[110px] my-3">
                                        <input type="submit" class="cursor-pointer block text-white bg-purple-500 scale-100 hover:scale-90 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600  dark:focus:ring-purple-800" value="Checkout">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="w-full flex items-center justify-end h-auto"> <a href="./mainPage.php"> <button type="button" class="font-bold text-xs rounded-lg text-gray-800">Continue Shopping</button> <ion-icon name="arrow-redo-circle-outline"></ion-icon></a>
                        </div>
                    </section>

                </div>
            <?php } else { ?>
                <div class="w-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        Empty Cart
                        <?php unset($_SESSION['usercart']) ?>
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
        var delifees = document.getElementById("delifees").value;

        function subTotal() {
            gt = 0;
            quanti = [];
            for (let i = 0; i < iprice.length; i++) {
                itotal[i].innerHTML = (iprice[i].value) * (iquantity[i].value) + " Ks";
                gt = gt + (iprice[i].value) * (iquantity[i].value);
                quanti.push(iquantity[i].value);

            }
            var sliceddelifees = delifees.slice(0, -3);
            console.log(typeof(sliceddelifees));
            gtotal.value = gt + " Ks";
            var tot = gt + Number(sliceddelifees);
            delitotal.value = tot + " Ks";
            quantiarray.value = quanti;
        }
        subTotal();
    </script>
    <script src="./resources/js/toggle.js" defer></script>
</body>

</html>