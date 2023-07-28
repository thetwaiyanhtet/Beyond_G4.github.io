<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
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
    <div class="flex justify-around items-center">
        <div class="font-PlayfairSC m-10">
            <p class="font-PlayfairSC text-5xl">OH NO!!</p>
            <span class="font-PlayfairSC text-5xl">ERROR</span>
            <span>Page not found</span><br><br>
            <a href="./mainPage.php"><button class="w-40 h-10 rounded-xl border border-solid text-text-color bg-white m-5 md:text-base text-sm">Go To Home</button></a>
        </div>
        <img src="./resources/img/404.png" alt="404" class="md:w-96 w-48">
    </div>
</body>

</html>