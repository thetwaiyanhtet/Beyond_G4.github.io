<?php
session_start();
include "../Controller/logoandbusinessController.php";
$logoandname = $_SESSION["m_logo"];
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Login</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="font-poppins flex justify-center items-center">
        <div class=" space-y-5 pt-14 shadow-xl p-10 mt-10 rounded-md">

            <div class="items-center flex-col justify-center space-y-4">
                <div><img src="<?php echo $logoandname[0]['logo'] ?>" class=" mx-auto w-20"></div>
                
                <div class="text-center font-quantico italic font-bold text-2xl text-blue-500 font-philosopher"><?= $logoandname[0]['business_name'] ?> </div>
            </div>
            <form action="../Controller/loginController.php" method="post">
                <div class=" pt-5">
                    <div>Email Address*
                        <span class=" text-red-800">
                            <?php if (isset($_SESSION["ErrorMessage"])) {
                                echo $_SESSION["ErrorMessage"];
                            } ?>
                        </span>
                    </div>
                    <input type="text" name="email" class="w-[360px] h-[44px] border-gray-200 border-2 rounded-md bg-white outline-none indent-3 mt-2 shadow-lg" placeholder="Enter your email">
                </div>
                <div class="pb-4">
                    <div>Password*</div>
                    <input type="password" name="password" class="w-[360px] h-[44px] border-gray-200 border-2 rounded-md bg-white outline-none indent-3 mt-2 shadow-lg" placeholder="********">
                    <div class=" flex justify-between pt-4">
                        <div>
                            <input type="checkbox">Remember me
                        </div>
                        <a href="./updatePassword.php" class="underline text-sm">
                            Forget password?</button>
                        </a>
                    </div>
                </div>

                <a href="./dashboard.php">
                    <button type="submit" name="login" class="w-[360px] h-[44px] rounded-lg bg-yellow-500 flex items-center justify-center font-playfairDisplay text-white text-lg shadow-xl">Login</button>
                </a>
            </form>
        </div>
    </div>
</body>

</html>
<?php
echo  $_SESSION['ErrorMessage'] = "";
?>