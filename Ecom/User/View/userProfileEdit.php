<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Edit</title>
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

<body class="mt-3 font-poppins dark:bg-black">

    <a href="./profileMenu.php"><ion-icon name="arrow-back-outline" class="text-2xl dark: text-white"></ion-icon></a>
    <nav>
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="./mainPage.php" class="flex items-center">
                <img src="./resources/img/logo.png" class="mr-3 h-10" alt="beyond Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-black dark:text-white font-philosopher">Beyond</span>
            </a>

            <div class="flex items-center md:order-2">
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none  rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 ml-4" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="./resources/img/bille.png" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">User's name</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@something.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="./profileMenu.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="./userCart.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cart</a>
                        </li>
                        <li>
                            <a href="./orderNotification.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Notification</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </li>
                    </ul>
                </div>

    </nav>
    <main class="bg-gradient-to-tl from-[#d5a0e6] - to-[#9f80f4] dark:bg-linear_dark min-h-screen rounded-tl-[35px] rounded-tr-[35px]">
        <div class=" text-white my-5 ml-8">
            <p class=" font-philosopher text-3xl p-5">My Profile</p>
            <p class=" font-poppins">Manage and protect your account</p>
        </div>
        <section class=" lg:grid lg:grid-cols-5">
            <div class=" col-start-1 col-span-3 space-y-5 lg:w-[700px] lg:mx-20 mx-10">
                <div class=" grid grid-cols-2 justify-around font-poppins">
                    <p class=" text-white text-start lg:text-xl text-sm">Username</p>
                    <input type="text" placeholder="Username" class="profileInputBox rounded-md col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class="font-poppins text-white text-start lg:text-xl text-sm">Name</p>
                    <input type="text" placeholder="Name" class="profileInputBox rounded-md col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class="font-poppins text-white text-start lg:text-xl text-sm">Email</p>
                    <input type="text" placeholder="user****@mail.com" class="profileInputBox rounded-md col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class="font-poppins text-white text-start lg:text-xl text-sm">Phone Number</p>
                    <input type="text" placeholder="09********" class="profileInputBox rounded-md col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class="font-poppins lg:text-xl text-sm text-white">Gender</p>
                    <div>
                        <input type="radio" id="male" name="gender">
                        <label for="male" class=" lg:text-base text-sm font-poppins dark:text-white">Male</label>
                        <input type="radio" id="female" name="gender">
                        <label for="female" class=" lg:text-base text-sm font-poppins dark:text-white">Female</label>
                        <input type="radio" id="other" name="gender">
                        <label for="other" class=" lg:text-base text-sm font-poppins dark:text-white">Other</label>
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center justify-center">
                    <p class=" text-white lg:text-xl text-sm font-poppins">Date of Birth</p>
                    <input type="date" class=" lg:w-72 w-66 lg:p-3 p-2 rounded-lg lg:text-base text-sm">
                </div>
            </div>

            <div class=" col-start-4 col-span-2 flex justify-center lg:border-l-2 border-0 lg:mt-0 mt-6">
                <div class=" flex-col space-y-3">
                    <div class=" lg:w-32 lg:h-32 w-24 h-24 bg-slate-500 rounded-full shadow-xl"></div>
                    <button class=" lg:py-2 lg:px-4 py-1 px-2 bg-white rounded-md shadow-md lg:text-base text-sm">Select Image</button>
                </div>
            </div>
        </section>

        <section class="flex justify-center space-x-6 lg:float-right lg:my-20 lg:mr-48 my-3 mr-7 lg:mt-0 mt-12">
            <a href="./address.php">
                <button class=" font-Playfair Display lg:px-3 lg:py-3 px-2 py-2 bg-white rounded-lg">Add Address</button>
            </a>
            <button class=" font-Playfair Display lg:px-4 lg:py-3 px-3 py-2 bg-white rounded-lg">Save</button>
        </section>
        <!-- <a href="./profileMenu.php">  <ion-icon class="text-5xl absolute left-14 bottom-36 cursor-pointer max-md:text-3xl max-md:left-8 max-md:bottom-16" name="caret-back-outline"></ion-icon></a> -->


    </main>
    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>


</body>

</html>