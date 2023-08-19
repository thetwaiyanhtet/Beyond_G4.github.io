<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Payment Method</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class=" font-poppins">
    <a href="./ChoosePlan.php"><ion-icon name="arrow-back-outline" class="m-2 text-4xl p-3"></ion-icon></a>
    <form action="../Controller/paymentController.php" method="post">
        <div class="flex justify-center space-x-5">
            <!--Payment Method-->
            <div class="flex flex-col">
                <p class="font-poppins mb-4">Payment Method</p>
                <div class=" w-[700px] h-[420px] border border-solid rounded-lg border-black drop-shadow-2xl">
                    <!-- <label class="flex m-5">
                        <input type="radio" name="payment" class="form-checkbox w-6 h-6">
                        <p class="mt-0.5 ml-2"><img src="./resources/img/pngwing 1.png" alt="PayPal"></p>
                    </label>
                    <p class=" w-94  border border-solid border-black"></p> -->
                    <div class="float-left inline-flex m-2">
                        <input type="radio" name="payment" value="Credit or debit card" class="form-checkbox w-6 h-6">
                        <p class="ml-2 font-poppins">Credit or debit card</p>
                    </div>
                    <div class="float-right inline-flex m-2">
                        <img src="./resources/img/pngwing 2.png" alt="VISA" class="h-5">
                        <img src="./resources/img/pngwing 3.png" alt="Master" class="h-5">
                    </div>
                    <div class="clear-both m-5">
                        <p>Cardholder Name</p>
                        <input type="text" name="user" placeholder="user" class=" w-[340px] border border-solid border-black rounded-md p-1 m-2 outline-none">
                        <div class="flex justify-between">
                            <div>
                                <label>Card Number</label><br>
                                <input type="text" name="user" placeholder="user" class=" w-[200px] border border-solid border-black rounded-md p-1 m-2 outline-none" required>
                            </div>
                            <div>
                                <label>Date</label><br>
                                <input type="text" name="user" class=" w-[120px] border border-solid border-black rounded-md p-1 m-2 outline-none" placeholder="03/23" required>
                            </div>
                            <div>
                                <label>CVV</label><br>
                                <input type="text" name="user" placeholder="123" class=" w-[120px] border border-solid border-black rounded-md p-1 m-2 outline-none" required>
                            </div>
                        </div>
                        <ion-icon name="lock-closed-outline" class="mt-2"></ion-icon>
                        <span>Your transition is secure with SSL encryption.</span><br>
                        <ion-icon name="alert-circle" class="mt-2"></ion-icon>
                        <span>Credit card payment may take up to 24h to be proceed.</span><br>
                        <input type="checkbox" name="" id="" class="mt-2 outline-none">
                        <span>Save my payment details for future transactions</span><br>
                    </div>
                    <p class=" w-94  border border-solid border-black"></p>
                    <div class="float-left inline-flex m-4">
                        <input type="radio" name="payment" value="KBZ" class="form-checkbox w-6 h-6 outline-none">
                        <p class="ml-2 font-poppins">Kpay</p>
                    </div>
                    <div class="float-right inline-flex m-4">
                        <img src="./resources/img/Kpay.png" alt="VISA" class=" w-12">
                    </div>
                </div>
            </div>
            <!--Summary-->
            <div class="flex flex-col m-5">
                <p class="font-poppins mb-4">Summary</p>
                <div class=" w-[450px] h-[350px] border border-solid rounded-lg border-black drop-shadow-2xl">
                    <div class="m-2">
                        <span class="font-light">Name:</span>
                        <span class="font-light">
                            <?php
                            $name =  $_SESSION['merchantName'];
                            echo $name;
                            ?>
                        </span>
                    </div>
                    <div class="m-2">
                        <span class="font-light">Email</span>
                        <span class="font-light">
                            <?php
                            $email = $_SESSION["merchant_ID"];
                            echo ': ' . $email;
                            ?>

                        </span>
                    </div>
                    <p class=" w-94  border border-solid border-black"></p>
                    <button class=" w-80 h-10 border border-solid border-black text-sm rounded-lg ml-24 m-2"><img src="./resources/img/warning2.png" alt="warning" class="inline-flex mr-2 mb-1">Verify the information before proceeding.</button>
                    <div class="flex justify-between m-4">
                        <p>Plan Method</p>
                        <p class="">
                            <?php
                            $plan = $_SESSION['choosePlan'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT * FROM m_plan WHERE id=:id");
                            $sql->bindValue(":id", $plan);
                            $sql->execute();

                            $Data = $sql->fetch(PDO::FETCH_ASSOC); // Fetch a single row as an associative array

                            if ($Data) {
                                echo $Data['plan_name']; // Output the 'plan_name' column value
                            } else {
                                echo "No data found";
                            }

                            ?>
                        </p>
                    </div>
                    <div class="flex justify-between m-4">
                        <p>Subscription</p>
                        <p>
                            <?php
                            echo  '$' . $Data['price'];
                            ?>
                        </p>
                    </div>
                    <p class=" w-94  border border-solid border-black"></p>
                    <div class="flex justify-between m-4">
                        <p>Subtotal</p>
                        <p> <?php
                            echo  '$' . $Data['price'];
                            ?></p>
                    </div>
                    <button name="payNow" type="submit" data-modal-target="defaultModal1" data-modal-toggle="defaultModal1" type="button" class=" w-28 border border-solid border-black rounded-md bg-blue-600 text-white hover:text-black hover:bg-white p-2 m-2 ml-40 font-philosopher">Pay Now</button>
                </div>
    </form>
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
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="defaultModal1" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">I agree</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>