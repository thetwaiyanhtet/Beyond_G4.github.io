<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Beyond</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=BioRhyme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./resources/css/scroll.css">
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gradient-to-r from-fuchsia-300 to-purple-500 dark:bg-black font-serif flex w-screen h-screen overflow-x-hidden ">

    <div class="main_bdy z-1 ">
        <div class="left_side">
            <img src="./resources/img/logo_slowdown.gif" class=" absolute top-0 w-16 md:w-20 m-4 md:m-8" alt="">
            <div class="absolute top-3/4 md:top-36 left-12 md:left-36 text-sm font-Rhyme font-semibold w-3/4 md:w-2/5 text-purple-950 leading-loose "><span class=" text-2xl">At Beyond,</span> we believe that the ordinary is just the starting point. Our platform is designed to empower both users and merchants, offering a seamless experience that transcends conventions.
                <br>
                Discover a curated shopping haven with
                <span class="btn_s z-20 my-4">
                    <a href="./mainPage.php">
                        <button class="relative inline-flex items-center justify-center p-0.5 mb-4 mr-4 text-base md:text-md font-semibold rounded-lg group bg-gradient-to-br from-purple-800 to-pink-800 group-hover:from-purple-800 group-hover:to-pink-800 dark:text-pink focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                            <span class="relative px-3 md:px-8 p-1.5 md:py-3.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0  text-pink-900  hover:text-white" data-popover-target="popover-right" data-popover-placement="right">
                                Shop Now
                            </span>
                        </button>
                    </a>
                    where your desires meet their perfect match.
                    Or venture into the realm of entrepreneurship with
                    <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-400 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 h-auto dark:text-gray-500 dark:bg-gray-800 dark:border-gray-600">
                        <div class="grid grid-cols-1">
                            <div class="p-3">
                                <div class="space-y-2">
                                    <h3 class="font-semibold">Beyond Evolution</h3>
                                    <p>A passionate team of 5 members on a mission to elevate your lifestyle. Seamless shopping, secure transactions, and dedicated support. Empowering merchants and constant innovation for you.</p>
                                    <a href="./aboutUs.php" class="flex items-center font-medium text-pink dark:hover:text-black hover:text-pink-900">Read more <svg class="w-2 h-2 ml-1.5" aria-hidden="true" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg></a>
                                </div>
                            </div>
                            <img src="./resources/img/team.png" class="h-full rounded-br-lg rounded-bl-lg p-2" alt="beyond" />
                        </div>
                    </div>



                    <a href="../../Merchant/View/signUp.php">
                        <button class="relative inline-flex items-center justify-center p-0.5 mb-4 mr-4 text-base md:text-md font-semibold text-pink-900 rounded-lg group bg-gradient-to-br from-purple-800 to-pink-800 group-hover:from-purple-800 group-hover:to-pink-800 hover:text-white dark:text-pink focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                            <span class="relative px-3 md:px-8 p-1.5 md:py-3.5 transition-all ease-in duration-75 bg-white  rounded-md group-hover:bg-opacity-0">
                                Start Your Business
                            </span>
                        </button>
                    </a>
                </span>
                <br>
                Join us in rewriting the narrative of possibilities.
                <br> Beyond awaits you.
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