<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beyond</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="./toggle.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gradient-to-r from-fuchsia-300 to-purple-500 dark:bg-black font-serif flex w-screen h-screen overflow-hidden">

    <div class="main_bdy z-1 ">
        <div class="left_side">
            <img src="./resources/img/logo_slowdown.gif" class=" absolute top-0 w-10 md:w-32 m-4 md:m-8" alt="">
            <div class="absolute top-2/3 md:top-44 left-16 md:left-36 text-xl md:text-4xl italic font-normal md:font-semibold tracking-wide w-2/3 md:w-80">Experience beyond ordinary where shopping meets inspiration</div>
            <div class="btn_s absolute bottom-20 md:bottom-48 left-16 md:left-36 z-20">
                <a href="./mainPage.php">
                    <button class="relative inline-flex items-center justify-center p-0.5 mb-4 mr-4 text-base md:text-lg font-semibold rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 dark:text-pink focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                        <span class="relative px-3 md:px-8 p-1.5 md:py-3.5 transition-all ease-in duration-75 bg-white  rounded-md group-hover:bg-opacity-0  text-pink-900  hover:text-white" data-popover-target="popover-image">
                            Shop Now
                        </span>
                    </button>
                </a>
                <div data-popover id="popover-image" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-400 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-96 dark:text-gray-500 dark:bg-gray-800 dark:border-gray-600">
                    <div class="grid grid-cols-5">
                        <div class="col-span-5 p-3">
                            <div class="space-y-2">
                                <h3 class="font-semibold text-white dark:text-black">Beyond Evolution</h3>
                                <p>A passionate team of 5 members on a mission to elevate your lifestyle. Handpicked unique products, seamless shopping, secure transactions, and dedicated support. Empowering merchants and constant innovation for you.</p>
                                <a href="./aboutUs.php" class="flex items-center font-medium text-pink dark:hover:text-black hover:text-pink-900">Read more <svg class="w-2 h-2 ml-1.5" aria-hidden="true" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg></a>
                            </div>
                        </div>
                        <img src="./resources/img/team.png" class="h-full col-span-5" alt="beyond" />
                    </div>
                </div>
                <a href="../../Merchant/View/signUp.php">
                    <button class="relative inline-flex items-center justify-center p-0.5 mb-4 mr-4 text-base md:text-lg font-semibold text-pink-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-pink focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                        <span class="relative px-3 md:px-8 p-1.5 md:py-3.5 transition-all ease-in duration-75 bg-white  rounded-md group-hover:bg-opacity-0">
                            Start Your Business
                        </span>
                    </button>
                </a>
            </div>
            <img src="./resources/img/home_hero/Circle.png" alt="" class="absolute top-0 right-0 md:right-10 transform scale-50 md:scale-75 md:animate-[shake_7000ms_ease-in-out_infinite]">

            <div class="right_side absolute top-16 right-0 m-auto md:top-3 md:right-16 flex justify-center">
                <img src="./resources/img/home_hero/hm_ligt.png" class="h-1/2 md:h-screen w-3/4 md:w-auto animate-[wiggle_10000ms_ease-in-out_infinite]" alt="">
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>