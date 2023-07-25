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
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="mt-3 font-poppins overflow-hidden">
    <nav class=" flex items-center justify-between mx-[3%]">
        <span class="flex items-center mb-[1%]">
            <img class="w-16" src="./resources/img/logo.png" alt="...">
            <p class="text-3xl ml-[1%] max-md:text-2xl font-philosopher ">Beyond</p>
        </span>
        <span>
            <ion-icon name="cart-outline" class=" text-4xl"></ion-icon>
        </span>
    </nav>
    <main class="relative w-screen h-screen rounded-tl-[35px] rounded-tr-[35px] bg-purple-300">
        <div class=" flex justify-between items-center">
            <h1 class=" lg:text-3xl text-base ml-10 mt-10 font-bold underline">My Address</h1>
            <div class=" flex justify-center items-center text-white shadow-2xl border-black w-[250px bg-purple-400 mr-10 mt-10 lg:px-5 px-2 lg:py-3 py-2">
                <span><ion-icon name="add-outline" class=" lg:text-2xl text-base"></ion-icon></span><button class=" lg:text-lg text-xs"> Add Address</button>
            </div>
        </div>

        <div class=" mt-5 flex-col space-y-5 lg:w-[600px] w-[380px] justify-center items-center mx-auto lg:text-base text-sm">
            <div class=" addressCard">
                <img src="./resources/img/work.png" alt="..." class=" lg:w-[70px] w-11">
                <p>Tanitayi kawthaung, Zabinice 12 <br>
                    0921929191 </p>
                <img src="./resources/img/delivery_map_tracking.png" alt="..." class=" lg:w-[55px] w-11">
            </div>
            <div class=" addressCard">
                <img src="./resources/img/home.png" alt="..." class=" lg:w-[70px] w-11">
                <p>Tanitayi kawthaung, Zabinice 12 <br>
                    0921929191 </p>
                <img src="./resources/img/delivery_map_tracking.png" alt="..." class=" lg:w-[55px] w-11">
            </div>
            <div class=" addressCard">
                <img src="./resources/img/home.png" alt="..." class=" lg:w-[70px] w-11">
                <p>Tanitayi kawthaung, Zabinice 12 <br>
                    0921929191 </p>
                <img src="./resources/img/delivery_map_tracking.png" alt="..." class=" lg:w-[55px] w-11">
            </div>
        </div>

        <ion-icon class="text-5xl absolute left-14 bottom-20 cursor-pointer max-md:text-3xl max-md:left-8 max-md:bottom-24" name="caret-back-outline"></ion-icon>
    </main>
</body>

</html>