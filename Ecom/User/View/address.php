<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
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

<body class="mt-3 font-poppins overflow-hidden dark:bg-black">
    <a href="./userProfileEdit.php"><ion-icon name="arrow-back-outline" class="text-2xl dark:text-white"></ion-icon></a>
    <nav>
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="./mainPage.php" class="flex items-center">
                <img src="./resources/img/logo_slowdown.gif" class="mr-3 h-10" alt="beyond Logo" />
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

    <main class="relative w-screen h-screen rounded-tl-[35px] rounded-tr-[35px]  bg-gradient-to-tl from-[#d5a0e6] - to-[#9f80f4] dark:bg-linear_dark ">
        <div class=" flex justify-between items-center">
            <h1 class="font-philosopher md:text-3xl text-xl  ml-10 mt-10 font-bold dark:text-white">My Address</h1>
            <a href="#">
                <div class=" flex justify-center items-center text-white shadow-2xl border-black w-[250px bg-purple-400 mr-10 mt-10 lg:px-5 px-2 lg:py-3 py-2">
                    <span class=" font-Playfair Display"><ion-icon name="add-outline" class=" lg:text-2xl text-base"></ion-icon></span>
                    <button id="addButton" class=" lg:text-lg text-xs"> Add Address</button>
                </div>
            </a>
        </div>
        <div class=" flex justify-center items-center lg:mt-6 mt-16">
            <div class="flex flex-col items-center">
                <img src="../View/resources/img/location.png" alt="...">
                <p id="adText" class=" font-poppins dark:text-white">You don't have any address yet!</p>
            </div>
        </div>

        <!-- popup add address -->
        <div id="addAddressPopup" class="hidden absolute lg:top-[15%] lg:left-[35%] top-[15%] left-[7%] md:w-[450px] md:h-[420px] w-[360px] h-[520px] bg-white bg-opacity-50 rounded-lg shadow-2xl z-50">
            <div class="flex-col md:space-y-6 space-y-4 p-5">
                <div class="lg:flex lg:justify-around justify-center items-center md:space-x-5 md:space-y-0 space-y-3">
                    <input type="text" placeholder="Name" class=" inputBox focus:outline-none rounded-md">
                    <input type="text" placeholder="Phone" class=" inputBox focus:outline-none rounded-md">
                </div>
                <div class=" lg:flex justify-around items-center">
                    <input type="text" placeholder="Building,Street etc.." class=" inputBox focus:outline-none rounded-md">
                </div>
                <div class=" lg:flex lg:justify-around justify-center items-center md:space-x-5 md:space-y-0 space-y-3">
                    <input type="text" placeholder="City" class=" inputBox focus:outline-none rounded-md">
                    <input type="text" placeholder="Division/State" class=" inputBox focus:outline-none rounded-md">
                </div>
            </div>
            <div class=" flex-col ml-6 space-y-5">
                <h2 class=" font-bold">Type</h2>
                <div class=" ml-5">
                    <span class=" w-auto bg-white text-black p-1  rounded-md dark:rounded-md  mr-2 text-sm">Home</span>
                    <span class=" w-auto bg-white text-black p-1 rounded-md text-sm">Work</span>
                </div>
                <div><input type="checkbox"> <span class="text-md">Set as Default</span></div>
            </div>
            <div class=" flex space-x-3 float-right mr-5 mt-3 mb-5 ">
                <button id="cancelButton" class="flex justify-center items-center w-20 px-4 py-2 bg-white rounded-md text-black font-Playfair Display">Cancel</button>
                <button class="flex justify-center items-center w-20 px-4 py-2 bg-white rounded-md text-black font-Playfair Display">Sent</button>
            </div>
        </div>
    </main>
    <script src=" ./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>


    <script>
        // Get references to the popup and buttons
        const addAddressPopup = document.getElementById("addAddressPopup");
        const addButton = document.getElementById("addButton");
        const cancelButton = document.getElementById("cancelButton");
        const adText = document.getElementById("adText");
        // Function to toggle the visibility of the popup 
        function toggleLogoutPopup() {
            addAddressPopup.classList.toggle("hidden");
            adText.style.visibility = "hidden";
        }

        // Attach click event listeners to the sent button and cancel button
        addButton.addEventListener("click", toggleLogoutPopup);
        cancelButton.addEventListener("click", toggleLogoutPopup);
    </script>

</body>

</html>