<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="./resources/lib/tailwind/output.css?id=<?=time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="container mx-auto">

    <nav class="bg-white">
        <div class=" flex flex-wrap items-center justify-between mx-auto p-4">

            <div class="flex items-center">
                <img class="w-7 lg:w-14" src="../View/resources/img/logo.png" alt="">
                <span class="self-center text-xl lg:text-2xl font-semibold whitespace-nowrap dark:text-white font-philosopher">Beyond</span>
            </div>

            <div class="flex items-center justify-evenly lg:w-[380px] h-[31px] lg:h-[44px] border border-[#f3f5f761] rounded-md bg-[#F3F5F7] shadow-md">
                <ion-icon name="search-outline" class="lg:w-[25px] lg:h-[25px]"></ion-icon>
                <input type="text" placeholder="Search" class="bg-[#F3F5F7] outline-none w-[120px] lg:w-[200px]">
                <ion-icon name="mic-outline" class="lg:w-[25px] lg:h-[25px]"></ion-icon>
            </div>

            <div class="flex items-center md:order-2 space-x-2 lg:space-x-8">
                <ion-icon name="cart-outline" class="w-5 h-5 lg:w-10 lg:h-10"></ion-icon>
                <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <img class="w-5 lg:w-10 h-5 lg:h-10 rounded-full" src="./resources/img/bille.png" alt="user photo">
                </button>
            </div>
        </div>
    </nav>

    <img class="h-auto w-screen" src="../View/resources/img/Tranding product image.png" alt="image description">
    <ion-icon class="text-3xl lg:text-6xl cursor-pointer max-md:text-6xl max-md:left-8 max-md:bottom-24 pt-4" name="caret-back-outline"></ion-icon>
    <div class="flex items-center space-x-2 lg:space-x-4">
        <p class=" ml-4 lg:ml-0 font-philosopher Display font-semibold text-2xl lg:text-4xl ">Trending Products</p>
        <img src="../View/resources/img/fire.svg" alt="" class=" w-[40px] h-[40px]">
    </div>
    <div class="flex justify-around font-poppins pt-12 pl-12 pr-12 lg:pl-0 lg:pr-0 space-x-3">
        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>
</div>

<div class="flex justify-around pt-12 pl-12 pr-12 lg:pl-0 lg:pr-0 font-poppins space-x-3">
        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#f5edf8] - to-[#c2aaca7e] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>
</div>
        <div class="flex justify-evenly text-center pt-5 md:pt-12">
            <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Furniture</div>
            <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Clothes</div>
            <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Furniture</div>
            <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Clothes</div>
            <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Furniture</div>
            <div class="w-[50px] text-[5px] lg:text-lg lg:w-[127px] lg:h-[33px] flex items-center justify-center rounded-xl border border-transparent bg-[#E5E5E5]">Clothes</div>
        </div>

<div class="flex justify-around font-poppins pt-5 md:pt-12 pl-12 pr-12 lg:pl-0 lg:pr-0 space-x-3">
        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>
</div>

<div class="flex justify-around pt-12 pb-12 pl-12 pr-12 lg:pl-0 lg:pr-0 font-poppins space-x-3">
        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>

        <div>
            <div class="w-[121px] lg:w-[300px] h-[145px] lg:h-[320px]  border border-[#f3f5f768] flex flex-col justify-center items-center
         bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                <img src="../View/resources/img/camera.png" alt="" class="w-20 lg:w-60 transition-all duration-200 hover:scale-110">
                <p class="font-semibold text-[7px] lg:text-base">Joystick Game Controller</p>
                <p class="text-xs lg:text-base  text-[#637381]">E Spot</p>
                <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
                <div class="flex space-x-1 lg:space-x-2">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                    <img src="../View/resources/img/star.svg" alt="">
                </div>
            </div>
            <div class="flex border cursor-pointer border-[#f3f5f768] items-center justify-center p-3 rounded-bl-md rounded-br-md shadow-md space-x-1 lg:space-x-3">
                <p class="font-bold text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
            </div>
        </div>
</div>
</body>



</html>