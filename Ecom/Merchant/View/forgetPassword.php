<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">


</head>

<body>
    <a href=" ./signUp.php"><ion-icon name="arrow-back-outline" class="m-2 text-4xl p-3"></ion-icon></a>
    <div class="flex justify-evenly items-center pt-28">
        <div>
            <img src="../View/resources/img/forget password img.png" alt="" class=" w-fit">
        </div>
        <div class="flex flex-col space-y-6">
            <div class=" text-center items-center flex flex-col justify-center space-y-5">
                <div><img src="../View/resources/img/forget_password_people image.png" alt=""></div>
                <div class=" font-poppins font-bold text-2xl w-[340px]">We will send you an email To reset your password.</div>
            </div>
            <form action="../Controller/forgetPasswordController.php" method = "post">
                <div class="text-[#667085] pt-5">
                    <input type="text" name="email" class="w-[360px] h-[44px] border-[#d0d5dd67] border-2 rounded-md bg-white outline-none indent-2" placeholder="User@gmail.com">
                </div>
                <a>
                    <button name="resetPw" class="w-[360px] h-[44px] rounded-md bg-[#1366D9] flex items-center justify-center mt-5
            font-PlayfairSC text-white">Get Started</button>
                </a>
            </form>

        </div>
    </div>
</body>


</html>