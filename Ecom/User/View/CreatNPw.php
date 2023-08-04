<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Password</title>
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
    <a href="./Verify.php"><ion-icon name="chevron-back-outline" class="m-5 font-semibold"></ion-icon></a>
    <div class="flex flex-col items-center">
        <p class="font-philosopher font-medium text-xl">Create New Password</p>
        <img src="./resources/img/forget.png" class="mt-10">
        <p class="text-center font-poppins font-medium mt-5">Your New Password Must Be Different from <br>
            Previously Used Password.</p>
        <form action="../Controller/updatePasswordController.php" method="post" class="m-auto">
            <label for="" class="font-poppins  text-lg dark:text-black text-white md:ml-6">New Password</label><br><br>
            <input type="email" name="newPw" id="" class="dark:border-black  border-0 border-b-2 border-black w-72 outline-none hover:outline-none md:ml-6 " placeholder="************"><br><br>
            <label for="" class="font-poppins  text-lg dark:text-black text-white md:ml-6">Confirm Password</label><br><br>
            <input type="email" name="confirmPw" id="" class="dark:border-black  border-0 border-b-2 border-black w-72 outline-none hover:outline-none md:ml-6 " placeholder="************">
        </form>
        <button type="submit" name="verify" class="bg-btn-color text-white font-poppins md:w-44 w-32 p-2 rounded-lg mt-10 font-semibold text-lg">Verify</button>
    </div>
</body>

</html>