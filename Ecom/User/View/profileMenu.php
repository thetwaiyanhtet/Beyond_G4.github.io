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
    <link rel="preconnect"href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
</head>

<body class=" bg-violet-200 font-philosopher letter">
    <main class=" min-h-screen flex items-center justify-center">
        <div class="flex justify-center items-center space-x-5 w-[800px] bg-transparent border shadow-2xl py-10 px-20 rounded-3xl">
            <div class=" font-poppins w-[350px] h-[400px] bg-white flex flex-col justify-center items-center space-y-7 rounded-lg">
                <img src="./resources/img/bille.png" alt="..." class=" w-18 rounded-lg">
                <div class="text-center">
                    <p>NAME</p>
                    <p>Username</p>
                </div>
                <div class=" border p-2">
                    <div class=" flex  justify-evenly">
                        <p>Email</p>
                        <p>user***@gmail.com</p>
                    </div>
                    <div class=" flex justify-around items-start">
                        <p>Ph_no</p>
                        <p>09*******</p>
                    </div>
                    <div class=" flex justify-around items-start">
                        <p>Current Address</p>
                        <p>Yangon</p>
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
    </main>
</body>

</html>