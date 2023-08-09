<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget Password </title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">


</head>

<body>
    <a href="./login.php"><ion-icon name="chevron-back-outline" class="m-5 font-semibold"></ion-icon></a>
    <div class="flex flex-col items-center">
        <p class="m-2 font-philosopher text-lg font-extrabold text-black">Forgot Password</p>
        <img src="./resources/img/forget.png" alt="forget" class="md:w-2/12 w-56 mt-5">
        <p class="mt-16 text-center font-semibold text-black">Please Enter Your Email Address To <br>
            Receive a Verification Card </p>
        <form action="../Controller/forgetPwController.php" method="post" class="md:mr-20 mr-28 mt-16">
            <div class="flex flex-col">
                <label class="font-poppins font-semibold text-lg text-black">Email
                    <?php echo
                    '<span class=" text-red-600 ">' .  $_SESSION['error'] . '</span>'
                    ?>
                </label> <br><br>
                <input type="email" name="email" class="dark:border-black  border-0 border-b-2 border-black shadow-md w-64 outline-none hover:outline-none" placeholder="user@gmail.com">
                <a href="">
                    <button type="submit" name="send" class="bg-btn-color text-white font-Playfair Display md:w-44 w-32 p-2 rounded-lg mt-10 font-semibold text-lg ml-10">Send</button>
                </a>
            </div>
        </form>
    </div>
</body>

</html>
<?php echo
'<span class=" text-red-600 ">' .  $_SESSION['error'] = "". '</span>'
?>