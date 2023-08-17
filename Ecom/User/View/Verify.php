<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>VerifyEmail</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/verify.css">
</head>

<body>
    <a href="./forgetPw.php"> <ion-icon name="chevron-back-outline" class="m-5 font-semibold"></ion-icon></a>
    <div class="flex flex-col items-center">
        <p class=" font-philosopher font-medium text-xl">Verify your email </p>
        <img src="./resources/img/verify.png" alt="verify" class="w-56 mt-10 ml-5">
        <p class="text-center font-poppins font-semibold mt-5 ml-10 mb-9">Please Enter The 4 Digit Code Sent To <br>
            user@gmail.com </p>
        <form action="../Controller/verifyController.php" method="post">
            <div class="pin-code">
                <input type="number" name="number1" maxlength="1" autofocus>
                <input type="number" name="number2" maxlength="1">
                <input type="number" name="number3"  maxlength="1">
                <input type="number" name="number4" maxlength="1">
            </div>
            <div class="flex flex-col ml-20">
                <button type="submit" name="resend" type="submit" class=" text-red-800 underline font-poppins mt-10 mr-10">Resend Code</button>
                <a href="../Controller/verifyController.php">
                    <button type="submit" name="verify" class="bg-btn-color text-white font-Playfair Display md:w-44 w-32 p-2 rounded-lg mt-10 font-semibold text-lg mr-10">Send</button>
                </a>
            </div>
        </form>
    </div>
    <script>
        var pinContainer = document.querySelector(".pin-code");
        console.log('There is ' + pinContainer.length + ' Pin Container on the page.');

        pinContainer.addEventListener('keyup', function (event) {
            var target = event.target;
            
            var maxLength = parseInt(target.getAttribute("maxlength"), 10);
            var myLength = target.value.length;

            if (myLength >= maxLength) {
                var next = target.nextElementSibling;
                if (next !== null && next.tagName.toLowerCase() === "input") {
                    next.focus();
                }
            }

            if (myLength === 0) {
                var prev = target.previousElementSibling;
                if (prev !== null && prev.tagName.toLowerCase() === "input") {
                    prev.focus();
                }
            }
        });

        pinContainer.addEventListener('keydown', function (event) {
            var target = event.target;
            target.value = "";
        });
    </script>
</body>

</html>