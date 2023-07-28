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
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display:wght@500&family=Poppins:wght@200&display=swap" rel="stylesheet">


</head>

<body>
    <a href="./login.php"><ion-icon name="chevron-back-outline" class="m-5 font-semibold"></ion-icon></a>
    <div class="flex flex-col items-center">
        <p class="m-2 font-philosopher text-lg font-extrabold text-black">Forgot Password</p>
        <img src="./resources/img/forget.png" alt="forget" class="md:w-2/12 w-56 mt-5">
        <p class="mt-16 text-center font-semibold text-black">Please Enter Your Email Address To <br>
            Receive a Verification Card </p>
        <form action="" class="md:mr-20 mr-28 mt-16">
            <label for="" class="font-poppins font-semibold text-lg text-black ">Email</label><br><br>
            <input type="email" name="" id="" class="dark:border-black  border-0 border-b-2 border-black shadow-md w-64 outline-none hover:outline-none" placeholder="user@gmail.com">
        </form>
        <a href="./Verify.php">
            <button type="button" class="bg-btn-color text-white font-Playfair Display md:w-44 w-32 p-2 rounded-lg mt-10 font-semibold text-lg">Send</button>
        </a>
    </div>


</body>

</html>