<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Menu</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
</head>

<body class=" bg-violet-200 font-philosopher letter overflow-hidden relative">
    <main class=" min-h-screen flex items-center justify-center">
        <div class="flex justify-center items-center space-x-5 w-[800px] bgtransparent border shadow-2xl py-10 px-20 rounded-3xl z-50">
            <div class=" font-poppins w-[380px] h-[400px] bg-white flex flex-col justify-center items-center space-y-7 rounded-lg text-sm p-5">
                <img src="./resources/img/bille.png" alt="..." class=" w-16 rounded-lg">
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
                <button class=" text-black px-5 py-2 shadow-xl rounded-md bg-white">Log out</button>
            </div>
            <div class=" w-[350px] h-[400px] flex-col space-y-3">
                <div class=" settingBar mt-4">
                    <img src="./resources/img/manage-accounts.svg" alt="..." width="30px">
                    <p class=" uppercase">manage profile</p>
                    <ion-icon name="chevron-forward-outline" class=" text-2xl"></ion-icon>
                </div>
                <div class=" settingBar">
                    <img src="./resources/img/cart-outline.svg" alt="..." width="30px">
                    <p class=" uppercase">manage profile</p>
                    <ion-icon name="chevron-forward-outline" class=" text-2xl"></ion-icon>
                </div>
                <div class=" settingBar">
                    <img src="./resources/img/heart-line.svg" alt="..." width="30px">
                    <p class=" uppercase">manage profile</p>
                    <ion-icon name="chevron-forward-outline" class=" text-2xl"></ion-icon>
                </div>
                <div class=" settingBar">
                    <img src="./resources/img/history.svg" alt="..." width="30px">
                    <p class=" uppercase">manage profile</p>
                    <ion-icon name="chevron-forward-outline" class=" text-2xl"></ion-icon>
                </div>
                <div class=" settingBar">
                    <img src="./resources/img/notifications-outline.svg" alt="..." width="30px">
                    <p class=" uppercase">manage profile</p>
                    <ion-icon name="chevron-forward-outline" class=" text-2xl"></ion-icon>
                </div>
            </div>
        </div>
        <div class="lg:block hidden absolute bottom-[10px] left-[220px] col-start-2 text-start"><ion-icon name="caret-back-outline" class="w-10 h-10"></ion-icon></div>

        <!-- <div class=" bg-purple-400 w-52 h-52 rounded-lg border-2"></div>
        <div class=" bg-purple-400 w-36 h-36 rounded-lg border-2"></div>
        <div class=" bg-purple-400 w-14 h-14 rounded-lg border-2"></div> -->

        <img src="./resources/img/bg.png" alt="..." class=" absolute -right-44 bottom-0">
    </main>
</body>

</html>