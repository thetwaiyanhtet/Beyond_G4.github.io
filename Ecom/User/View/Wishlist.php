<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<style>
    @media (max-width: 768px) {
        .flex-wrap {
            flex-direction: column;
        }
    }
</style>

<body class="mt-3 font-Philosopher overflow-hidden">
    <section class=" flex items-center justify-between mx-[5%]">
        <span class="flex items-center  mb-[1%]">
            <img class="w-16" src="./resources/img/logo.png" alt="">
            <p class="text-3xl ml-[1%] max-md:text-2xl font-philosopher">Beyond</p>
        </span>
        <span>
            <ion-icon class="text-4xl float-right " name="person-circle-outline"></ion-icon>
        </span>
    </section>

    <section class="relative">
        <section class="w-screen h-screen rounded-t-[5%] bg-gradient-to-tl from-purple-400 via-purple-400 to-purple-500">
            <p class="font-medium font-poppins text-lg md:p-10 p-5">WishList</p>
            <!--Card-->
            <div class="grid md:grid-cols-3 grid-cols-2 md:gap-5 gap-2 md:flex md:flex-wrap md:space-x-5 md:justify-center">
                <!-- Card 1 -->
                <div class="md:w-96 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 md:ml-0 ml-2">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="md:ml-72 ml-40 m-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <button class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button>
                </div>

                <!-- Card 2 -->
                <div class="md:w-96 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 md:ml-0 ml-2">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="md:ml-72 ml-40 m-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <button class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button>
                </div>

                <!-- Card 3 -->
                <div class="md:w-96 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 md:ml-0 ml-2">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="md:ml-72 ml-40 m-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <button class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button>
                </div>

                <!-- Card 4 -->
                <div class="md:w-96 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 md:ml-0 ml-2">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="md:ml-72 ml-40 m-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <button class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button>
                </div>

                <!-- Card 5 -->
                <div class="md:w-96 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 md:ml-0 ml-2">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="md:ml-72 ml-40 m-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <button class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button>
                </div>

                <!-- Card 6 -->
                <div class="md:w-96 w-56 md:h-72 h-48 rounded-lg bg-cart-color flex flex-col items-center drop-shadow-2xl bg-opacity-75 border-border-color border-1 md:ml-0 ml-2">
                    <img src="./resources/img/uiw_delete.png" alt="delete" class="md:ml-72 ml-40 m-2">
                    <img src="./resources/img/clothes.png" alt="clothes" class=" md:w-32 w-16">
                    <p class="font-poppins font-medium md:text-lg text-sm mt-2">Crop Tube Mesh Top</p>
                    <img src="./resources/img/Rating.png" alt="star" class="ml-8 mt-0.5 md:w-36 w-16">
                    <div class="mt-0.5">
                        <span class="text-blue-700 font-poppins mr-3 md:text-lg text-xs">STORE NAME</span>
                        <span class="md:text-lg text-sm">$1000</span>
                    </div>
                    <button class="w-26 h-18 rounded-lg bg-btn2-color p-2 font-Playfair Display drop-shadow-lg mt-2 md:text-lg text-xs">Add to cart</button>
                </div>
            </div>
            <ion-icon class="text-5xl absolute left-14 bottom-36 cursor-pointer max-md:text-3xl max-md:left-8 max-md:bottom-16" name="caret-back-outline"></ion-icon>

    </section>
</body>

</html>