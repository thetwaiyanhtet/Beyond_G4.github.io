<?php
include "../Controller/storePageController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Store Page</title>
</head>

<body class=" overflow-x-hidden">

    <!-- <div class=" ml-10 mt-10">
        <ion-icon class="text-3xl" name="menu"></ion-icon>
    </div> -->
    <div class="flex flex-col w-screen items-center justify-center justify-items-center">
        <img class=" w-40" src="../../<?= $storeData[0]["logo"] ?>" alt="">
        <p class=" text-5xl font-bold">
            <?php
            $storeName = $storeData[0]['store_name'];
            echo $storeName;

            ?>
        </p>
        <p class=" mt-3 w-96 text-center"><?php
                                            $slogan = $storeData[0]['slogan'];
                                            echo $slogan;
                                            ?></p>
        <!-- <div class="flex space-x-3 mt-5">
          <button class="flex border px-4 py-2 rounded-md bg-gray-300 items-center">
              <ion-icon class="mr-3 text-3xl" name="heart-circle-outline"></ion-icon>
              <p class="font-semibold">Add Favorite</p>
          </button>
          <button class="flex border px-4 py-2 rounded-md bg-gray-300 items-center">
              <ion-icon class="mr-3 text-3xl" name="chatbubble-ellipses-outline"></ion-icon>
              <p class="font-semibold">Send Message</p>
          </button>
      </div> -->
    </div>
    <div class="flex relative  justify-center">
        <img class=" w-11/12 mt-5 " src="./resources/img/storebg.png" alt="">
        <img class=" w-72 max-md:w-20 max-md:right-8 max-lg:w-40 absolute right-20  top-10 " src="./resources/img/bbg.png" alt="">
        <p class=" font-Playfair Display max-lg:text-xl text-4xl max-md:top-10 max-md:left-10 max-md:text-lg left-40 absolute top-32">YOU'VE PUT IN THE WORK. <br> NOW SHOW OFF THE <br> RESULTS.</p>
        <button class=" absolute max-lg:top-48 max-lg:left-72 left-96 max-md:top-28 max-md:left-36 px-3 py-1 font-bold max-md:text-sm  rounded-md bg-white top-72 font-Playfair Display">SHOP NOW</button>
        <!-- <ion-icon class=" text-5xl max-md:text-3xl left-5 absolute -bottom-16 max-md:bottom-3" name="caret-back-outline"></ion-icon> -->
    </div>
    <!-- component -->
    <div class="flex items-center justify-center mt-8 mb-16 max-md:mb-5">
        <div class="relative text-gray-600 focus-within:text-gray-400">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </span>
            <input type="search" name="q" class="py-2 text-sm w-72 text-white bg-gray-200 rounded-md pl-10 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Search..." autocomplete="off">
        </div>
    </div>
    <div class="flex ml-3 justify-around w-screen">
        <?php foreach ($AllProducts as $AllProduct) { ?>
            <div class="  flex flex-col justify-center mb-10 ">
                <div class="w-[100%] max-lg:w-[80%]   border border-[#f3f5f768] flex flex-col justify-center items-center
       bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
                    <img src="../../<?= $AllProduct["p_one"] ?>" alt="" class="w-[100%] lg:w-60 transition-all duration-200 hover:scale-110">
                    <p class="font-semibold text-[9px] max-md:text-sm"><?php echo $AllProduct['name'] ?></p>
                    <p class=" font-extrabold text-xs lg:text-2xl"><?php echo $AllProduct['sellprice'] ?></p>
                    <div class="flex space-x-1 lg:space-x-0 pb-5">
                        <img src="../View/resources/img/star.svg" alt="">
                        <img src="../View/resources/img/star.svg" alt="">
                        <img src="../View/resources/img/star.svg" alt="">
                        <img src="../View/resources/img/star.svg" alt="">
                        <img src="../View/resources/img/star.svg" alt="">
                    </div>
                </div>
                <div class="flex border w-[100%] max-lg:w-[80%]  cursor-pointer border-[#517ca868] items-center justify-center p-3 rounded-bl-md shadow-lg rounded-br-md space-x-1  lg:space-x-3">
                    <p class="font-bold text-center text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
                    <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
                </div>
            </div>
        <?php } ?>
        <!-- <div class="  flex flex-col justify-center mb-10 ">
          <div class="w-[100%] max-lg:w-[80%]   border border-[#f3f5f768] flex flex-col justify-center items-center
       bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
              <img src="../View/resources/img/crop.png" alt="" class="w-[100%] lg:w-60 transition-all duration-200 hover:scale-110">
              <p class="font-semibold text-[9px] max-md:text-sm">Crop Top</p>
              <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
              <div class="flex space-x-1 lg:space-x-0 pb-5">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
              </div>
          </div>
          <div class="flex border w-[100%] max-lg:w-[80%]  cursor-pointer border-[#517ca868] items-center justify-center p-3 rounded-bl-md shadow-lg rounded-br-md space-x-1  lg:space-x-3">
              <p class="font-bold text-center text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
              <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
          </div>
      </div>
      <div class="  flex flex-col justify-center mb-10 ">
          <div class="w-[100%] max-lg:w-[80%]   border border-[#f3f5f768] flex flex-col justify-center items-center
       bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
              <img src="../View/resources/img/crop.png" alt="" class="w-[100%] lg:w-60 transition-all duration-200 hover:scale-110">
              <p class="font-semibold text-[9px] max-md:text-sm">Crop Top</p>
              <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
              <div class="flex space-x-1 lg:space-x-0 pb-5">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
              </div>
          </div>
          <div class="flex border w-[100%] max-lg:w-[80%]  cursor-pointer border-[#517ca868] items-center justify-center p-3 rounded-bl-md shadow-lg rounded-br-md space-x-1  lg:space-x-3">
              <p class="font-bold text-center text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
              <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
          </div>
      </div>
  </div>

  <div class="flex ml-3 justify-around w-screen">
      <div class="  flex flex-col justify-center mb-10 ">
          <div class="w-[100%] max-lg:w-[80%]   border border-[#f3f5f768] flex flex-col justify-center items-center
       bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
              <img src="../View/resources/img/crop.png" alt="" class="w-[100%] lg:w-60 transition-all duration-200 hover:scale-110">
              <p class="font-semibold text-[9px] max-md:text-sm">Crop Top</p>
              <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
              <div class="flex space-x-1 lg:space-x-0 pb-5">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
              </div>
          </div>
          <div class="flex border w-[100%] max-lg:w-[80%]  cursor-pointer border-[#517ca868] items-center justify-center p-3 rounded-bl-md shadow-lg rounded-br-md space-x-1  lg:space-x-3">
              <p class="font-bold text-center text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
              <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
          </div>
      </div>
      <div class="  flex flex-col justify-center mb-10 ">
          <div class="w-[100%] max-lg:w-[80%]   border border-[#f3f5f768] flex flex-col justify-center items-center
       bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
              <img src="../View/resources/img/crop.png" alt="" class="w-[100%] lg:w-60 transition-all duration-200 hover:scale-110">
              <p class="font-semibold text-[9px] max-md:text-sm">Crop Top</p>
              <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
              <div class="flex space-x-1 lg:space-x-0 pb-5">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
              </div>
          </div>
          <div class="flex border w-[100%] max-lg:w-[80%]  cursor-pointer border-[#517ca868] items-center justify-center p-3 rounded-bl-md shadow-lg rounded-br-md space-x-1  lg:space-x-3">
              <p class="font-bold text-center text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
              <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
          </div>
      </div>
      <div class=" flex flex-col justify-center mb-10 ">
          <div class="w-[100%] max-lg:w-[80%]   border border-[#f3f5f768] flex flex-col justify-center items-center
       bg-gradient-to-t from-[#e5e8ea] - to-[#949ba0] rounded-tl-md rounded-tr-md space-y-1 shadow-md">
              <img src="../View/resources/img/crop.png" alt="" class="w-[100%] lg:w-60 transition-all duration-200 hover:scale-110">
              <p class="font-semibold text-[9px] max-md:text-sm">Crop Top</p>
              <p class=" font-extrabold text-xs lg:text-2xl">$999.00</p>
              <div class="flex space-x-1 lg:space-x-0 pb-5">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
                  <img src="../View/resources/img/star.svg" alt="">
              </div>
          </div>
          <div class="flex border w-[100%] max-lg:w-[80%]  cursor-pointer border-[#517ca868] items-center justify-center p-3 rounded-bl-md shadow-lg rounded-br-md space-x-1  lg:space-x-3">
              <p class="font-bold text-center text-[10px] lg:text-xl text-[#A61473]">Add to Cart</p>
              <ion-icon name="cart-outline" class="text-[#A61473] lg:w-8 lg:h-8"></ion-icon>
          </div>
      </div> -->
    </div>
    <p class="text-2xl text-center mb-5">Contact Info</p>
    <div class="flex justify-center">
        <div class="flex flex-col  font-semibold mb-8 font-Playfair Display">
            <div class="flex   space-x-8">
                <p>Email</p>
                <p>gymshark123@gmail.com</p>
            </div>
            <div class="flex   space-x-8">
                <p>Phone</p>
                <p>+95123456789</p>
            </div>
            <div class="flex   space-x-8">
                <p>Address</p>
                <p>Tarmwe,Yangon</p>
            </div>
        </div>
    </div>
</body>

</html>