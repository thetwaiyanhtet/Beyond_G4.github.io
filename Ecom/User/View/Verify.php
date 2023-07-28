<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerifyEmail</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display:wght@500&family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body>
   <a href="./forgetPw.php"> <ion-icon name="chevron-back-outline" class="m-5 font-semibold"></ion-icon></a>
    <div class="flex flex-col items-center">
        <p class=" font-philosopher font-medium text-xl">Verify your email </p>
        <img src="./resources/img/verify.png" alt="verify" class="w-56 mt-10">
        <p class="text-center font-poppins font-medium mt-5">Please Enter The 4 Digit Code Sent To <br>
            user@gmail.com </p>
           <div class="flex p-5 ml-4 mt-5">
            <div class="border border-solid w-10 h-10 p-2 bg-verify-color ml-4"></div>
            <div class="border border-solid w-10 h-10 p-2 bg-verify-color ml-4"></div>
            <div class="border border-solid w-10 h-10 p-2 bg-verify-color ml-4"></div>
            <div class="border border-solid w-10 h-10 p-2 bg-verify-color ml-4 "></div>
           </div>
           <a href="" class=" text-red-800 underline font-poppins mt-10">Resend Code</a>
           <a href="./CreatNPw.php">
           <button type="button" class="bg-btn-color text-white font-Playfair Display md:w-44 w-32 p-2 rounded-lg mt-10 font-semibold text-lg">Send</button>
           </a>
    </div>
</body>

</html>