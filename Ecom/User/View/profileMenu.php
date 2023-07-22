<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Menu</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body class=" bg-violet-200 font-philosopher letter relative overflow-hidden outline-dashed">
    <main class=" min-h-screen flex items-center justify-center">

        <div class="lg:flex justify-center items-center lg:space-x-5 lg:w-[800px] w-[380px] h-min-screen bg-transparent border shadow-2xl lg:py-10 lg:px-20 py-5 px-16 rounded-3xl z-50">

            <div class=" font-poppins lg:w-[380px] w-[250px] h-[420px] bg-white flex flex-col justify-center items-center space-y-7 rounded-lg lg:text-sm lg:p-5 p-2 text-xs">
                <img src="./resources/img/bille.png" alt="..." class=" w-16 rounded-lg mt-5">
                <div class="text-center">
                    <p class=" text-2xl font-philosopher">NAME</p>
                    <p>Username</p>
                </div>
                <div class=" p-2 flex-col space-y-6 w-full">
                    <div class=" grid grid-cols-2">
                        <p>Email</p>
                        <p class=" col-start-2">user***@gmail.com</p>
                    </div>
                    <div class=" grid grid-cols-2">
                        <p>Ph_no</p>
                        <p class=" col-start-2">09*******</p>
                    </div>
                    <div class=" grid grid-cols-2">
                        <p>Current Address</p>
                        <p class=" col-start-2">Yangon</p>
                    </div>
                </div>
                <button class=" text-black px-5 py-3 lg:text-lg text-base shadow-xl rounded-md bg-white font-PlayfairSC">Log out</button>
            </div>

            <div class=" lg:w-[350px] lg:h-[400px] lg:flex-col justify-center items-center flex flex-wrap space-y-3 lg:text-base text-xs lg:space-x-0 space-x-3 font-semibold">
                <div class=" flex justify-around items-center lg:py-4 lg:px-2 py-2 border bg-white rounded-xl shadow-xl mt-4 lg:w-[290px] w-[160px]">
                    <img src="./resources/img/manage-accounts.svg" alt="..." class=" lg:w-[30px] w-[20px]">
                    <p class=" uppercase">manage profile</p>
                    <ion-icon name="chevron-forward-outline" class=" lg:text-2xl text-base"></ion-icon>
                </div>
                <div class=" settingBar">
                    <img src="./resources/img/cart-outline.svg" alt="..." class=" lg:w-[30px] w-[20px]">
                    <p class=" uppercase">cart</p>
                    <ion-icon name="chevron-forward-outline" class=" lg:text-2xl text-base"></ion-icon>
                </div>
                <div class=" settingBar">
                    <img src="./resources/img/heart-line.svg" alt="..." class=" lg:w-[30px] w-[20px]">
                    <p class=" uppercase">wishlist</p>
                    <ion-icon name="chevron-forward-outline" class=" lg:text-2xl text-base"></ion-icon>
                </div>
                <div class=" settingBar">
                    <img src="./resources/img/history.svg" alt="..." class=" lg:w-[30px] w-[20px]">
                    <p class=" uppercase">history</p>
                    <ion-icon name="chevron-forward-outline" class=" lg:text-2xl text-base"></ion-icon>
                </div>
                <div class=" settingBar">
                    <img src="./resources/img/notifications-outline.svg" alt="..." class=" lg:w-[30px] w-[20px]">
                    <p class=" uppercase">notification</p>
                    <ion-icon name="chevron-forward-outline" class=" lg:text-2xl text-base"></ion-icon>
                </div>
            </div>

        </div>

        <div class=" absolute bottom-[10px] lg:left-[220px] left-2 col-start-2 text-start"><ion-icon name="caret-back-outline" class="w-10 h-10"></ion-icon></div>
        <img src="./resources/img/bg.png" alt="..." class=" absolute lg:-right-44 bottom-0 lg:w-[600px] w-96">
    </main>
</body>

</html>