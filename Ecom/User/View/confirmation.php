<?php
include("../Controller/merchantaddressController.php");
$addressandname = $_SESSION['m_cusaddress'];
$tot = $_SESSION["placeholdcart"];
$_SESSION["payment_method"] = $_POST['deli'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Confirm Order</title>
</head>

<body>
    <!-- component -->
    <div class="h-full w-full py-16">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

        <div class="">
            <!--Code Block for progress bar Starts-->
            <dh-component>
                <div class=" w-11/12 lg:w-2/6 mx-auto">
                    <div class="bg-gray-200 h-1 flex items-center justify-between relative">
                        <div class="absolute left-0 -mr-4">
                            <div class="relative px-2 py-1 rounded mt-20 -mr-12">
                                <p tabindex="0" class="focus:outline-none text-xl font-semibold max-lg:text-sm ">Cart</p>
                            </div>
                        </div>
                        <div class="w-1/3 bg-[#314755] h-3 flex items-center relative">
                            <div class="absolute right-0 -mr-2">
                                <div class="relative px-2 py-1 rounded mt-20 -mr-12">
                                    <p tabindex="0" class="focus:outline-none text-xl font-semibold max-lg:text-sm">Delivery</p>
                                </div>
                            </div>
                            <div class=" bg-gray-200 h-10 w-10 rounded-full border shadow flex items-center justify-center">
                                <ion-icon class="text-3xl" name="cart-outline"></ion-icon>
                            </div>
                        </div>

                        <div class="w-1/3 flex justify-between bg-[#314755] h-3 items-center relative">
                            <div class="absolute right-0 -mr-2">
                                <div class="relative  px-2 py-1 rounded mt-20 -mr-3">
                                    <p tabindex="0" class="focus:outline-none  text-xl font-semibold max-lg:text-sm">Card</p>
                                </div>
                            </div>
                            <div class="bg-gray-200 h-10 w-10 rounded-full shadow flex items-center justify-center -ml-2">
                                <ion-icon class="text-3xl" name="car-outline"></ion-icon>
                            </div>
                            <div class="w-1/5 bg-gray-200 h-3 flex items-center relative">
                                <div class="bg-gray-200 h-10 w-10 rounded-full shadow flex items-center justify-center -mr-3 relative">
                                    <ion-icon class="text-3xl" name="card-outline"></ion-icon>
                                </div>
                            </div>

                        </div>

                        <div class=" w-1/3 flex h-3 bg-[#314755] items-center justify-end relative">
                            <div class="bg-gray-200 h-10 w-10 rounded-full shadow flex items-center justify-center">
                                <ion-icon class="text-3xl " name="checkmark-circle-outline"></ion-icon>
                            </div>
                            <div class="absolute right-0 -mr-2">
                                <div class="relative  px-2 py-1 rounded mt-20 max-lg:-mr-3 -mr-10">
                                    <p tabindex="0" class="focus:outline-none  text-xl font-semibold max-lg:text-sm">Confirmation</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </dh-component>
            <!--Code Block for progress bar Starts-->
        </div>

    </div>
    <div class=" font-poppins relative mt-10 mx-auto container">
        <div class="flex justify-around ">
            <div class="w-2/4 h-80 max-lg:h-72 max-lg:hidden bg-gray-200 p-5 rounded-lg space-y-5 shadow-md">
                <p class=" font-bold text-center ">Checkout Details</p>
                <div class="mt-5 font-semibold max-lg:text-sm ">
                    <p><?= $addressandname[0]['name'] ?></p>
                    <p><?= $addressandname[0]['street'] ?></p>
                    <span class="border-b-2 border-[#314755] pb-2"><?= $addressandname[0]['email'] ?></span>
                </div>
                <div class="flex align-middle items-center mt-5">
                    <span class=" font-bold ">Royal Express</span>
                    <p class=" text-xs">(Expected delivery on <?php
                                                                $currentDate = new DateTime();
                                                                $currentDate->add(new DateInterval('P3D'));
                                                                $newDate = $currentDate->format('d/m/Y');
                                                                echo $newDate;
                                                                ?>)</p>
                </div>
                <button class="px-4 py-3 mt-2 bg-[#314755] rounded-md flex justify-center items-center">
                    <label class="flex text-white space-x-2">
                        <!-- <input type="radio" name="deli" class="form-checkbox w-6 h-6  "> -->
                        <?php if ($_POST['deli'] == 0) { ?>
                            <span>Visa</span>
                        <?php  } ?>
                        <?php if ($_POST['deli'] == 1) { ?>
                            <span>KBZ Pay</span>
                        <?php  } ?>
                    </label>
                </button>
            </div>
            <div class="flex flex-col max-lg:hidden  font-poppins">
                <p class=" border-b-4 border-[#314755] pb-5 text-3xl text-center max-lg:text-xl font-bold">Your order</p>
                <?php

                foreach ($_SESSION["placeholdcart"] as $index => $chunk) { ?>

                    <form  action="../Controller/orderController.php" method="post">
                        <div class="flex mt-10 border-b-4 border-[#314755]   justify-center items-center">
                            <div class="mb-10 ">
                                <img class="w-32" src="../../Storage/product/<?= $chunk["p_one"] ?>" alt="">
                            </div>
                            <div class=" mx-5 flex flex-col  ">
                                <div class="flex justify-between mb-5 space-x-5">
                                    <span><?= $chunk["name"] ?></span>
                                    <span></span>
                                </div>
                                <div>
                                    <!-- <span><?= $chunk["quantity_" . $index] ?>pcs</span> -->
                                    <span> $<?= $chunk["sellprice"] ?></span>
                                </div>
                            </div>
                        </div>

                        ;
                    <?php }

                    ?>

                    

                    <div class="flex mt-5 max-lg:text-sm justify-between text-xl font-semibold">
                        <div>
                            <p class="mb-5">Total Amount</p>
                        </div>
                        <div>
                            <p class="mb-5"><?= $_SESSION['delitotalamt'] ?></p>
                        </div>
                    </div>
            </div>
            <div class="absolute max-lg:hidden -bottom-10 right-0 max-lg:-bottom-10 max-lg:right-5 mb-16">
                <a> <input type="submit" value="Check Out" class=" cursor-pointer mt-5 text-white py-1 px-5 rounded-md font-PlayfairSC bg-[#314755]"></input></a>
            </div>
            </form>
        </div>

    </div>

    <div class="flex flex-col relative">
        <div class="hidden max-lg:flex w-4/5 max-lg:flex-col max-lg:mx-auto max-lg:items-center max-lg:justify-center  font-poppins">
            <div class=" border-b-4 border-button-color w-11/12 pb-5 text-3xl  max-lg:text-xl font-bold">Your order</div>
            <?php foreach ($_SESSION["placeholdcart"] as $index => $chunk) { ?>

                <form action="../Controller/orderController.php" method="post">
                    <div class="flex w-11/12 mt-10 border-b-4 border-button-color  justify-center items-center">
                        <div class="mb-10 ">
                            <img class="w-32" src="../../Storage/product/<?= $chunk["p_one"] ?>" alt="">
                        </div>
                        <div class=" mx-5 flex flex-col ">
                            <div class="flex justify-between mb-5">
                                <span><?= $chunk["name"] ?></span>
                                <!-- <span>$250</span> -->
                            </div>
                            <div >
                                <!-- <span>M</span> -->
                                <span> $<?= $chunk["sellprice"] ?></span>
                                <!-- <span>1pc</span> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="flex mt-5 max-lg:text-sm  text-xl font-semibold">
                    <div class="flex justify-start mb-20">
                        <span class=" mr-28">Total Amount</span>
                        <span><?= $_SESSION['delitotalamt'] ?></span>
                    </div>
                </div>
        </div>

        <div class="w-11/12 h-80 max-lg:h-72 hidden max-lg:flex max-lg:flex-col max-lg:mx-auto max-lg:items-start max-lg:justify-center bg-gray-200 p-5 rounded-lg shadow-md">
            <p class=" font-bold ml-20 ">Checkout Details</p>
            <div class="mt-5 font-semibold max-lg:text-sm ">
                <p><?= $addressandname[0]['name'] ?></p>
                <p><?= $addressandname[0]['street'] ?></p>
                <span class="border-b-2 border-button-color pb-2"><?= $addressandname[0]['email'] ?></span>
            </div>
            <div class="flex align-middle items-center mt-5">
                <span class="border-b-2 border-button-color font-bold pb-3">Royal Express</span>
                <p class=" text-xs">(Expected delivery on <?php
                                                            $currentDate = new DateTime();
                                                            $currentDate->add(new DateInterval('P3D'));
                                                            $newDate = $currentDate->format('d/m/Y');
                                                            echo $newDate;
                                                            ?>)</p>
            </div>
            <button class="px-4 py-3 mt-2 bg-[#314755]  rounded-md flex justify-center items-center">
                <label class="flex text-white space-x-2">
                    <?php if ($_POST['deli'] == 0) { ?>
                        <span>Visa</span>
                    <?php  } ?>
                    <?php if ($_POST['deli'] == 1) { ?>
                        <span>KBZ Pay</span>
                    <?php  } ?>
                </label>
            </button>
        </div>
        <div class=" absolute hidden max-lg:flex -bottom-20 right-0 max-lg:-bottom-10 max-lg:right-5">
            <input type="submit" value="Check Out" class=" text-white py-1 px-5 rounded-md bg-[#314755] "></input>
        </div>
        </form>
    </div>
</body>

</html>