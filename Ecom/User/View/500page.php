<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 Page</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <script>
        // Add event listener to the button
        document.getElementById('refreshBtn').addEventListener('click', function() {
            // Reload the current page
            location.reload();
        });
    </script>
</head>

<body class=" bg-background-404">
    <nav class=" flex items-center justify-between mx-[3%]">
        <span class="flex items-center mb-[1%]">
            <img class="w-16" src="./resources/img/logo.png" alt="...">
            <p class="text-3xl ml-[1%] max-md:text-2xl font-philosopher ">Beyond</p>
        </span>
        <span>
            <ion-icon class="text-4xl" name="person-circle-outline"></ion-icon>
        </span>
    </nav>
    <div class="flex flex-col items-center m-10 justify-center">
        <img src="./resources/img/500.png" alt="404">
        <div class="font-PlayfairSC m-5">
            <p class="font-PlayfairSC text-4xl text-center">UN HO!!</p>
            <p class="text-center md:text-base text-sm">Something went wrong at our end.Don't worry, it's not you_ it's us. Sorry about that.</p><br><br>
            <div class="flex justify-center w-screen"><button type="button" class="w-56 h-14 rounded-xl border border-solid text-text-color bg-white"  id="refreshBtn"><img src="./resources/img/Vector.png" class="w-5 inline">REFRESH THE PAGE</button></div>
        </div>

    </div>

</body>

</html>