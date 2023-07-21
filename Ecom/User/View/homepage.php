<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <script src="./toggle.js" defer></script>
</head>

<body class="bg-gradient-to-r from-fuchsia-300 to-purple-500 dark:bg-black font-serif flex w-screen h-screen overflow-hidden">

    <div class="main_bdy z-1 ">
        <div class="left_side">
            <img src="./resources/img/logo.png" class=" absolute top-0 w-10 md:w-20 m-4 md:m-8" alt="">
            <div class="absolute top-2/3 md:top-52 left-16 md:left-36 text-xl md:text-3xl font-bold leading-relaxed md:leading-loose w-2/3 md:w-1/3 ">Experience beyond ordinary where shopping meets inspiration</div>
            <div class="btn_s absolute bottom-10 md:bottom-40 left-16 md:left-36">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-4 mr-4 text-xl font-semibold text-pink-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-pink focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                    <span class="relative px-4 md:px-8 p-1.5 md:py-3.5 transition-all ease-in duration-75 bg-white  rounded-md group-hover:bg-opacity-0">
                        Shop Now
                    </span>
                </button>
                <button class="relative inline-flex items-center justify-center p-0.5 mb-4 mr-4 text-xl font-semibold text-pink-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-pink focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                    <span class="relative px-4 md:px-8 p-1.5 md:py-3.5 transition-all ease-in duration-75 bg-white  rounded-md group-hover:bg-opacity-0">
                        Start Your Business
                    </span>
                </button>
            </div>
            <img src="./resources/img/home_hero/Circle.png" alt="" class="absolute top-0 right-0 md:right-10 transform scale-50 md:scale-110">
            <div class="right_side absolute top-16 right-0 m-auto md:top-3 md:right-16 flex justify-center">
                <img src="./resources/img/home_hero/hm_ligt.png" class="h-1/2 md:h-screen w-3/4 md:w-auto" alt="">
            </div>
            <button id="theme-toggle" type="button" class="absolute top-6 right-5 text-white-500 dark:text-black-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>

</body>

</html>