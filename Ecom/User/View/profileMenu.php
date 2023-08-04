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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class=" bg-violet-200 dark:bg-linear_dark font-philosopher letter relative overflow-hidden outline-dashed">
    <a href="./mainPage.php"><ion-icon name="arrow-back-outline" class="text-2xl dark:text-white"></ion-icon></a>
    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none  rounded-lg text-sm p-2.5 float-right">
        <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
        <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>
    </button>
    <main class=" min-h-screen flex items-center justify-center">

        <div class="lg:flex justify-center items-center lg:space-x-5 lg:w-[800px] w-[380px] h-min-screen bg-transparent border shadow-2xl lg:py-10 lg:px-20 py-5 px-16 rounded-3xl z-50 dark:border-black">
            <div class=" relative font-poppins lg:w-[380px] w-[250px] h-[420px] bg-white dark:bg-gray-900 flex flex-col justify-center items-center space-y-5 rounded-lg lg:text-sm lg:p-5 p-2 text-xs">
                <img src="./resources/img/bille.png" alt="..." class=" w-16 rounded-lg z-50">
                <div class="text-center">
                    <p class=" text-2xl font-philosopher dark:text-white">NAME</p>
                    <p class="dark:text-white">Username</p>
                </div>
                <div class=" p-2 flex-col space-y-6 w-full">
                    <div class=" grid grid-cols-2">
                        <p class="dark:text-white">Email</p>
                        <p class=" col-start-2 dark:text-white">user***@gmail.com</p>
                    </div>
                    <div class=" grid grid-cols-2">
                        <p class="dark:text-white">Ph_no</p>
                        <p class=" col-start-2 dark:text-white">09*******</p>
                    </div>
                    <div class=" grid grid-cols-2">
                        <p class="dark:text-white">Current Address</p>
                        <p class=" col-start-2 dark:text-white">Yangon</p>
                    </div>
                </div>
                <button class=" text-black px-5 py-2 lg:text-lg text-base drop-shadow-xl rounded-md bg-white dark:bg-gray-500 font-PlayfairSC dark:text-white">Log out</button>
            </div>
        
            <a href="../Controller/userProfileController.php">
                <div class=" lg:w-[350px] lg:h-[400px] lg:flex-col justify-center items-center flex flex-wrap space-y-3 lg:text-base text-xs font-semibold">
                    <div class=" flex justify-around items-center lg:py-4 lg:px-2 py-2 border bg-white dark:bg-gray-500 dark:border-gray-500 rounded-xl shadow-xl mt-4 lg:w-[290px] w-[160px]">
                        <img src="./resources/img/manage-accounts.svg" alt="..." class=" lg:w-[30px] w-[20px]">
                        <p class=" lg:w-40 w-20 text-center uppercase dark:text-white">manage profile</p>
                        <ion-icon name="chevron-forward-outline" class=" lg:text-2xl text-base"></ion-icon>
                    </div>
            </a>
         
            <a href="./userCart.php">
                <div class=" settingBar lg:mr-0 mr-3 dark:bg-gray-500 dark:border-gray-500 ">
                    <img src="./resources/img/cart-outline.svg" alt="..." class=" lg:w-[30px] w-[20px]">
                    <p class=" lg:w-40 w-10 text-center uppercase dark:text-white">cart</p>
                    <ion-icon name="chevron-forward-outline" class=" lg:text-2xl text-base"></ion-icon>
                </div>
            </a>
            <a href="./Wishlist.php">
                <div class=" settingBar dark:bg-gray-500 dark:border-gray-500 ">
                    <img src="./resources/img/heart-line.svg" alt="..." class=" lg:w-[30px] w-[20px]">
                    <p class="lg:w-40 w-20 text-center uppercase dark:text-white">wishlist</p>
                    <ion-icon name="chevron-forward-outline" class=" lg:text-2xl text-base"></ion-icon>
                </div>
            </a>
            <a href="./history.php">
                <div class=" settingBar lg:mr-0 mr-3 dark:bg-gray-500 dark:border-gray-500 ">
                    <img src="./resources/img/history.svg" alt="..." class=" lg:w-[30px] w-[20px]">
                    <p class=" lg:w-40 w-10 text-center uppercase dark:text-white">history</p>
                    <ion-icon name="chevron-forward-outline" class=" lg:text-2xl text-base"></ion-icon>
                </div>
            </a>
            <a href="./orderNotification.php">
                <div class=" settingBar  dark:bg-gray-500 dark:border-gray-500 ">
                    <img src="./resources/img/notifications-outline.svg" alt="..." class=" lg:w-[30px] w-[20px]">
                    <p class=" lg:w-40 w-20 text-center uppercase dark:text-white">notification</p>
                    <ion-icon name="chevron-forward-outline" class=" lg:text-2xl text-base"></ion-icon>
                </div>
            </a>
        </div>

        </div>

        <!-- <div class=" absolute bottom-10 lg:left-[220px] left-2 col-start-2 text-start"><ion-icon name="caret-back-outline" class="w-10 h-10"></ion-icon></div> -->
        <img src="./resources/img/bg.png" alt="..." class=" absolute lg:-right-10 bottom-0 w-[700px]">
    </main>
    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>