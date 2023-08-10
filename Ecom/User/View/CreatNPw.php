<?php
session_start();
?>
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
        <form action="../Controller/updateNewPasswordController.php" method="post" class="mt-10">
            <label for="newPw" class="font-poppins text-base dark:text-black text-black md:ml-5">New Password
                <span class="text-red-600 text-sm">
                    <?php
                    echo $_SESSION['ERRORMESSAGE'];
                    ?>
                </span>
            </label><br><br>
            <input type="password" name="newPw" id="newPw" class="dark:border-black border-0 border-b-2 border-black w-72 outline-none hover:outline-none md:ml-6" placeholder="************"><br><br>
            <label for="confirmPw" class="font-poppins text-base dark:text-black text-black md:ml-6">Confirm Password</label><br><br>
            <input type="password" name="confirmPw" id="confirmPw" class="dark:border-black border-0 border-b-2 border-black w-72 outline-none hover:outline-none md:ml-6" placeholder="************"><br>
            <div class="md:w-64 w-56 h-40 relative">
                <button type="submit" name="update" class="bg-btn-color text-white font-poppins md:w-40 w-32 p-2 rounded-lg mt-10 font-semibold text-lg absolute md:right-5 right-8">Verify</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php
echo $_SESSION['ERRORMESSAGE'] = "";
?>