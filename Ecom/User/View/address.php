<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
</head>

<body class="mt-3 font-poppins overflow-hidden">
<a href="./userProfileEdit.php"><ion-icon name="arrow-back-outline" class="text-2xl"></ion-icon></a>
    <nav class=" flex items-center justify-between mx-[3%]">
        <span class="flex items-center  mb-[1%]">
            <a href="./mainPage.php"><img class="h-10" src="./resources/img/logo.png" alt="..."></a>
            <p class="text-2xl ml-[1%] max-md:text-2xl font-philosopher ">Beyond</p>
        </span>
        <span>
            <ion-icon class="text-4xl" name="person-circle-outline"></ion-icon>
        </span>
    </nav>
    <main class="relative w-screen h-screen rounded-tl-[35px] rounded-tr-[35px] bg-purple-300">
        <div class=" flex justify-between items-center">
            <h1 class=" font-philosopher lg:text-3xl text-base ml-10 mt-10 font-bold">My Address</h1>
            <a href="./addAddress.php">
            <div class=" flex justify-center items-center text-white shadow-2xl border-black w-[250px bg-purple-400 mr-10 mt-10 lg:px-5 px-2 lg:py-3 py-2">
                <span class=" font-Playfair Display"><ion-icon name="add-outline" class=" lg:text-2xl text-base"></ion-icon></span><button class=" lg:text-lg text-xs"> Add Address</button>
            </div>
            </a>
        </div>
        <div class=" flex justify-center items-center lg:mt-6 mt-16">
            <div class="flex flex-col items-center">
                <img src="../View/resources/img/location.png" alt="...">
                <p class=" font-poppins">You don't have any address yet!</p>
            </div>
        </div>
        <!-- <a href="./userProfileEdit.php">
        <ion-icon class="text-5xl absolute left-14 bottom-20 cursor-pointer max-md:text-3xl max-md:left-8 max-md:bottom-24" name="caret-back-outline"></ion-icon>
        </a> -->
    </main>
</body>

</html>