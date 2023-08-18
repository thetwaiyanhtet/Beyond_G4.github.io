<?php
session_start();
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Sign Up</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">


</head>

<body class=" font-poppins bg-gradient-to-r from-blue-200 to-cyan-200">
    <div class="flex justify-evenly items-center">
        <div>
            <img src="../View/resources/img/welcome.png" alt="" class=" w-fit">
        </div>
        <form action="../Controller/registerController.php" method="post">
            <div class="flex flex-col space-y-4 pt-14">
                <div class=" text-center items-center flex flex-col justify-center space-y-5">
                    <div><img src="./resources/img/logo_slowdown.gif" alt="" class=" w-16"></div>
                    <div class=" font-quantico italic font-bold text-3xl text-[#3786FB]">BEYOND</div>
                    <div class=" font-philosopher font-bold text-2xl">Create an account</div>
                </div>
                <div class="text-[#667085]">
                    <div>Name<span class=" text-red-600">*</span></div>
                    <input type="text" name="name" class="w-[360px] h-[44px] border-[#d0d5dd67] border-2 rounded-md bg-white outline-none indent-2" placeholder="" required>
                </div>
                <div class="text-[#667085]">
                    <div>Email<span class=" text-red-600">*
                            <?php
                            echo $_SESSION["registerError"]
                            ?></span></div>
                    <input type="text" name="email" class="w-[360px] h-[44px] border-[#d0d5dd67] border-2 rounded-md bg-white outline-none indent-2" placeholder="" required>
                </div>
                <div class="text-[#667085]">
                    <div>Password<span class=" text-red-600">* <?php
                                                                echo $_SESSION["registerError2"]
                                                                ?></span></div>
                    <input type="password" id="pwd" name="password" class="w-[360px] h-[44px] border-[#d0d5dd67] border-2 rounded-md bg-white outline-none indent-2" placeholder="" required>
                    <div class="text-[#667085] pt-2">Must be at least 8 characters.</div>
                </div>
                <div class="flex justify-between pt-2">
                    <div>
                        <input type="checkbox" name="" id="chk">Show Password
                    </div>
                </div>
                <a href="./ChoosePlan.php">
                    <button name="register" class="w-[360px] h-[44px] rounded-md bg-[#1366D9] flex items-center justify-center 
            font-PlayfairSC text-white">Get Started</button>
                </a>
                <div class=" text-center text-[#667085]">Already have an account? <a href="./logIn.php" class="text-[#1366D9] hover:underline">Log in</a></div>
            </div>
        </form>
    </div>
</body>

<script>
    const pwd = document.getElementById("pwd");
    const chk = document.getElementById("chk");
    chk.onchange = function(e) {
        pwd.type = chk.checked ? "text" : "password";
    };
</script>

</html>
<?php $_SESSION["registerError"] = "";
$_SESSION["registerError2"] = "";

?>