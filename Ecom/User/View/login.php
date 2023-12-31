<?php
session_start();
include "../Controller/readtermandconditionController.php";
$tcondition = $_SESSION["m_tc"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Login Page</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/154f79af60.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/scroll.css">


    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="overflow-hidden">
    <img src="./resources/img/logo_slowdown.gif" alt="logo" class="w-24 m-2">
    <p class=" font-philosopher font-semibold text-center text-4xl mb-4">Login</p>
    <img src="./resources/img/Triangle.png" alt="1" class="md:w-72 w-48 scale-125 absolute ml-44 md:bottom-5">

    <section class="relative">
        <div class="float-right w-72 h-96 z-10">
            <img src="./resources/img/Triangle-2.png" alt="2" class="md:w-64 w-32 absolute md:rotate-180 -rotate-180 md:top-0 top-72 mt-2">
        </div>
        <div class="w-3/4 md:w-1/2  border-2 border-solid m-auto rounded-lg drop-shadow-xl bg-white/50 blur-xs z-10">
            <div class="form flex md:m-2 md:justify-center space-x-20 p-5 z-20 ">
                <form action="../Controller/loginController.php" method="post">
                    <p class="text-red-700 text-center">
                        <?php
                        if (isset($_SESSION["loginerror"])) {
                            echo  $_SESSION["loginerror"];
                        }
                        ?></p>
                    <div class="m-10 w-[100%]">
                        <input name="email" type="email" class="border border-solid rounded-lg bg-white w-full h-12 p-4  mb-5  drop-shadow-md bg-blend-normal md:text-base text-sm focus:outline-none" placeholder="Email"></input> <br>
                        <div class="field input relative">
                            <input type="password" name="password" class="border border-solid rounded-lg bg-white w-full h-12 p-4  mb-5  drop-shadow-md bg-blend-normal md:text-base text-sm focus:outline-none" placeholder="Password"></input><br>
                            <!-- <ion-icon name="eye-outline" class="a"></ion-icon> -->
                            <i class="fas fa-eye absolute top-6 right-4 cursor-pointer -translate-y-1/2"></i>
                        </div>
                        <a href="./forgetPw.php" class="underline md:text-sm text-xs mb-8 float-right font-bold">Forget Password</a>
                        <br>
                        <div class=" ml-12">
                            <button name="login" class=" text-white bg-btn-color rounded-xl w-32 md:mt-12 mt-2 h-10 opacity-100">Login</button>
                        </div>
                    </div>
                </form>
                <p class=" font-semibold mt-36 md:block hidden">Or</p>
                <div class="w-full md:block hidden">
                    <p class="mb-5">New CUSTOMER?</p>
                    <p class="">Create an account with us & you'll be able to:</p>
                    <ul class="list-disc">
                        <li class="p-2">Check out faster</li>
                        <li class="p-2">Save multiple shipping address</li>
                        <li class="p-2">Access your order history</li>
                        <li class="p-2">Track new orders</li>
                    </ul>
                    <a href="./SignUp.php">
                        <button class="text-white bg-btn-color rounded-xl h-10 w-48 mt-10 font-Playfair Display ">Create New Account</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center m-10 md:hidden">
            <p class=" px-2 font-Playfair Display mt-6 pb-4">Don't have account?</p>
            <a href="./SignUp.php" class=" text-purple-700 underline px-2 font-Playfair Display pb-4">Create New Account</a>
        </div>
        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block m-auto underline text-btn-color text-center p-2 font-Playfair Display" type="button">
            Terms and Conditions
        </button>

    </section>

    <!-- Modal toggle -->


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
                        <?php foreach ($tcondition as $key => $value) { ?>


                            <b>1. User Accounts</b> <br>
                            a. <?= $value['onea'] ?> <br>
                            b. <?= $value['oneb'] ?> <br><br>

                            <b>2. Use of the Website</b> <br>
                            a. <?= $value['twoa'] ?><br>
                            b. <?= $value['twob'] ?><br><br>

                            <b>3. Intellectual Property</b><br>
                            a. <?= $value['threea'] ?><br>
                            b. <?= $value['threeb'] ?> <br><br>

                            <b>4. Privacy</b><br>
                            <?= $value['four'] ?> <br><br>

                            <b>5. Third-Party Links</b><br>
                            <?= $value['five'] ?> <br><br>

                            <b>6. Limitation of Liability</b><br>
                            <?= $value['six'] ?> <br><br>

                            <b>7. Modifications to the Terms</b><br>
                            <?= $value['seven'] ?> <br><br>

                            <b>8. Termination</b><br>
                            <?= $value['eight'] ?> <br><br>


                            <b>9. Contact Us</b><br>
                            <?= $value['nine'] ?> <br><br>

                            <b>By using the Beyond website, you agree to abide by these Terms and Conditions. Please read them carefully before proceeding with your use of the Website.</b>
                        <?php  } ?>
                    </p>

                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="defaultModal" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-md px-5 py-2.5  text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Agree</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        const pswrdField = document.querySelector(".form input[type='password']");
        const Icon = document.querySelector(".form .field i");

        Icon.onclick = () => {
            if (pswrdField.type === "password") {
                pswrdField.type = "text";
                Icon.classList.add("active");
            } else {
                pswrdField.type = "password";
                Icon.classList.remove("active");
            }
        }
    </script>
    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>
<?php
echo  $_SESSION["loginerror"] = "";
?></p>