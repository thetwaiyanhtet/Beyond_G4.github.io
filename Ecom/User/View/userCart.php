<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="mt-3 font-poppins overflow-x-auto">
    <section class=" flex items-center justify-between mx-[3%]">
        <span class="flex items-center  my-[1%]">
            <img class=" w-12 lg:w-20" src="../View/resources/img/logo.png" alt="">
            <p class="text-2xl lg:text-4xl ml-[1%] max-md:text-2xl font-philosopher font-bold ">Beyond</p>
        </span>
        <span>
            <ion-icon class="text-4xl float-right " name="person-circle-outline"></ion-icon>
        </span>
    </section>
    <section class="relative">
        <section class="w-screen  h-screen rounded-tl-[30px] rounded-tr-[30px] 
              bg-gradient-to-tl from-[#d5a0e6] - to-[#9f80f4] min-h-screen flex justify-center flex-col items-center ">
            <p class=" font-philosopher absolute left-[5%] top-[2%] font-bold text-[28px] md:text-[32px] text-3xl">Cart</p>
            <div class="w-[369px] lg:w-[948px] lg:h-[70px] mt-3 md:mt-0 bg-[#314755] rounded-tl-2xl rounded-tr-2xl flex flex-col items-center justify-center">
                <img class=" w-10 pt-3" src="../View/resources/img/logo.png" alt="">
                <p class="pb-2 lg:text-xl text-white font-philosopher font-bold">Beyond</p>
            </div>
            <div class="w-[369px] lg:w-[948px] h-[500px] lg:h-[350px] bg-[#D9D9D9] mb-32  shadow-inner flex flex-col-reverse md:flex-row  md:items-center justify-evenly rounded-bl-2xl rounded-br-2xl">

                <div class="  md:mb-10 mt-3 md:mt-0">
                    <div class="flex justify-evenly font-poppins">
                        <p class="font-bold text-[12px] md:text-[16px]">Description</p>
                        <p class="font-bold text-[12px] md:text-[16px]">Size</p>
                        <p class="font-bold text-[12px] md:text-[16px]">Quantity</p>
                        <p class="font-bold text-[12px] md:text-[16px]">Price</p>
                        <p class="font-bold text-[12px] md:text-[16px]">Total</p>
                    </div>
                    <div class="flex items-center text-[12px] md:text-[16px] font-bold justify-evenly w-[361px]  md:w-[384px]
                     md:h-[58px] mt-5 border border-transparent border-t-black border-b-black md:ml-6 font-poppins">
                        <img class=" w-16" src="../View/resources/img/skirt.png" alt="">
                        <div class="w-[35px] h-[32px] border border-gray-600 rounded-md flex items-center justify-center">M</div>
                        <div class="flex w-[60px] md:w-[80px] h-[26px] border border-gray-600 rounded-md items-center justify-evenly">
                            <p>+</p>
                            <p>2</p>
                            <p>-</p>
                        </div>
                        <p>$100</p>
                        <p>$200</p>
                        <div class="absolute left-[89%] md:left-[51.7%] rounded-full w-[20px] h-[20px] bg-[#EBEBEB]  text-[#777777] flex items-center justify-center">x</div>
                    </div>

                    <div class="flex items-center text-[12px] md:text-[16px] font-bold justify-evenly w-[361px] md:w-[384px] h-[58px] border border-transparent
                         border-b-black md:ml-6 font-poppins">
                        <img class=" w-16" src="../View/resources/img/one string blouse.png" alt="">
                        <div class="w-[35px] h-[32px] border border-gray-600 rounded-md flex items-center justify-center">M</div>
                        <div class="flex w-[60px] md:w-[80px] h-[26px] border border-gray-600 rounded-md items-center justify-evenly">
                            <p>+</p>
                            <p>2</p>
                            <p>-</p>
                        </div>
                        <p>$100</p>
                        <p>$200</p>
                        <div class="absolute left-[89%] md:left-[51.7%] rounded-full w-[20px] h-[20px] bg-[#EBEBEB]  text-[#777777] flex items-center justify-center">x</div>
                    </div>

                    <div class="flex items-center text-[12px] md:text-[16px] font-bold justify-evenly w-[361px] md:w-[384px] h-[58px] 
                    border border-transparent md:ml-6 font-poppins">
                        <img class=" w-16" src="../View/resources/img/crop top.png" alt="">
                        <div class="w-[35px] h-[32px] border border-gray-600 rounded-md flex items-center justify-center">M</div>
                        <div class="flex w-[60px] md:w-[80px] h-[26px] border border-gray-600 rounded-md items-center justify-evenly">
                            <p>+</p>
                            <p>2</p>
                            <p>-</p>
                        </div>
                        <p>$100</p>
                        <p>$200</p>
                        <div class="absolute left-[89%] md:left-[51.7%] rounded-full w-[20px] h-[20px] bg-[#EBEBEB]  text-[#777777] flex items-center justify-center">x</div>
                    </div>

                    <div class="ml-[240px] block md:hidden">
                        <a href="./cart2.php">
                        <button type="button" class="w-[90px] h-[28px] bg-[#314755] font-bold text-xs rounded-lg text-white font-Playfair Display">Checkout</button>
                        </a>
                        <div class="mt-2"><button class="w-[100px] h-[40px] bg-[#3147558b] font-bold text-xs rounded-lg text-white font-Playfair Display">Continue Shopping</button></div>
                    </div>

                </div>
                <div>
                    <div class="w-[180px] md:w-[202px] h-[100px] md:h-[113px] bg-[#FDFDFD] rounded-tl-md rounded-tr-md ml-5 md:ml-0">
                        <div class="py-[2%] ml-[15px] border-b-black border-2 border-transparent w-[136px] h-[30px] font-bold text-[10px] md:text-[15px] ">Order Summary</div>
                        <div class="flex item py-[4%]">
                            <p class="ml-[15px] font-bold text-xs md:text-sm">Sub Total</p>
                            <p class="ml-[44px] font-bold text-xs md:text-sm">1456</p>
                        </div>
                        <div class="flex">
                            <p class="ml-[15px] font-bold text-xs md:text-sm">Shipping fee</p>
                            <p class="ml-[25px] font-bold text-xs md:text-sm">1456</p>
                        </div>
                    </div>

                    <div class="flex w-[180px] md:w-[202px] h-[40px] items-center md:justify-around rounded-bl-md rounded-br-md bg-[#D9D9D9] 
                       border-2 space-x-12 md:space-x-0 ml-5 md:ml-0 font-bold">
                        <p class="text-xs md:text-sm ml-9 md:ml-0">Total</p>
                        <p class="text-xs md:text-sm">1456</p>
                    </div>
                    <div class="ml-[110px] mt-3 hidden md:block">
                        <a href="./cart2.php"><button type="button" class="w-[90px] h-[28px] bg-[#314755] font-bold text-xs rounded-lg text-white">Checkout</button></a>
                        <div class="mt-2"><button class="w-[100px] h-[40px] bg-[#3147558b] font-bold text-xs rounded-lg text-white">Continue Shopping</button></div>
                    </div>

                </div>
            </div>
        </section>
        <a href="./profileMenu.php">
        <ion-icon class=" lg:text-7xl absolute left-[1%] md:left-[4%] top-[90%] lg:top-[75%] cursor-pointer max-md:text-6xl max-md:left-8 max-md:bottom-24" name="caret-back-outline"></ion-icon>
        </a>
    </section>

</body>

</html>