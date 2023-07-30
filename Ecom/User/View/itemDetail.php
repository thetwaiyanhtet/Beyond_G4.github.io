<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Detail</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class=" font-poppins w-full">
    <div>
        <nav class="flex justify-between">
            <img src="./resources/img/logo.png" alt="..." class="h-10 ml-5 mt-3">
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none  rounded-lg text-sm p-2.5 z-30">
                <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
        </nav>
        <header class=" w-full justify-evenly items-center lg:grid lg:grid-cols-3 relative flex flex-wrap">
            <div class=" border bg-transparent rounded-tl-xl rounded-bl-xl space-y-3 lg:m-16 lg:absolute lg:left-[210px] lg:m shadow-2xl lg:w-[350px]">
                <div>
                    <img src="./resources/img/image 1.png" alt="...">
                </div>
                <div class="flex items-center justify-center space-x-3">
                    <img src="./resources/img/image 2.png" alt="...">
                    <img src="./resources/img/image 3.png" alt="...">
                </div>
            </div>
            <div class=" border lg:w-[700px] w-5/6 lg:h-[530px] h-[390px] bg-transparent rounded-xl lg:p-20 p-5 lg:ml-20 flex-col lg:space-y-5 space-y-3 col-start-2 col-span-2 shadow-2xl z-50">
                <h2 class="lg:text-4xl text-2xl font-semibold font-philosopher">Wide-leg Pants</h2>
                <p class=" lg:text-base text-xs">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae pariatur nulla atque nisi magnam deleniti
                    illo provident a exercitationem sunt.
                </p>
                <h3 class="flex justify-start items-center gap-2 font-philosopher">
                    <a href="./storepage.php">
                        <div class=" flex items-center space-x-3">
                            <div class=" lg:w-10 lg:h-10 w-7 h-7 bg-slate-500 rounded-full flex items-center justify-center ">H</div>
                            <p>H&M</p>
                        </div>
                    </a>
                </h3>
                <h1 class=" font-philosopher">$749</h1>
                <div class="flex space-x-3">
                    <div class="w-5 h-5 bg-black text-white"></div>
                    <div class="w-5 h-5 bg-stone-600"></div>
                    <div class="w-5 h-5 bg-red-600"></div>
                    <div class="w-5 h-5 bg-blue-800"></div>
                    <div class="w-5 h-5 bg-green"></div>
                </div>
                <div class="flex space-x-7">
                    <h3>Quantity</h3>
                    <input type="number" class="border w-20 h-6 indent-12 shadow-xl rounded-md" value="1">
                </div>
                <div class="flex space-x-16 font-philosopher">
                    <h3>Size</h3>
                    <ul class="flex space-x-2">
                        <li class=" text-red-700">XS</li>
                        <li>S</li>
                        <li>M</li>
                        <li>L</li>
                        <li>XL</li>
                    </ul>
                </div>
                <div>
                    <button class="btn mr-3">Add To Cart</button>
                    <button class="btn">Add To Wishlist</button>
                </div>
            </div>
        </header>
        <div class="grid grid-cols-6">
            <div class="lg:block hidden absolute bottom-[90px] left-[220px] col-start-2 text-start"><ion-icon name="caret-back-outline" class="w-10 h-10"></ion-icon></div>
        </div>
        <div id="chatBoxButton" class=" w-14 h-14 fixed lg:right-[50px] right-[20px] bottom-10 col-start-5 ml-36 bg-white rounded-lg flex justify-center items-center z-50 shadow-inner"><ion-icon name="chatbubble-ellipses-outline" class="w-10 h-10"></ion-icon></div>

        <main class="flex justify-center">
            <div class=" lg:w-[1050px] lg:h-[800px] p-5 lg:mt-20 mt-2 lg:min-h-screen flex-col justify-center items-center border-2 shadow-xl  rounded-xl bg-transparent">
                <div class="flex justify-center items-center flex-col space-y-3">
                    <p class=" lg:text-3xl text-lg mt-3">Overall Rating</p>
                    <h1>4.0</h1>
                    <div class="flex">
                        <img src="./resources/img/star.svg" alt="..." class=" lg:w-[50px] w-[30px]">
                        <img src="./resources/img/star.svg" alt="..." class=" lg:w-[50px] w-[30px]">
                        <img src="./resources/img/star.svg" alt="..." class=" lg:w-[50px] w-[30px]">
                        <img src="./resources/img/star.svg" alt="..." class=" lg:w-[50px] w-[30px]">
                        <img src="./resources/img/star.svg" alt="..." class=" lg:w-[50px] w-[30px]">
                    </div>
                    <p class=" font-philosopher">Based on 23 Reviews</p>
                </div>

                <div class=" w-full lg:flex-col lg:text-base text-sm">
                    <div class=" lg:flex justify-evenly items-center">
                        <div class="reviewCard ">
                            <div class="flex">
                                <img src="./resources/img/profile.png" alt="..." class=" lg:w-[70px] w-12 mr-10">
                                <div class="">
                                    <h2 class=" font-semibold lg:text-xl text-lg">Ruby Jane</h2>
                                    <div class=" flex space-x-2">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                    </div>
                                </div>
                            </div>
                            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia accusamus tenetur velit, aliquid autem nobis natus ipsam laboriosam unde earum.</p>
                        </div>
                        <div class="reviewCard">
                            <div class="flex">
                                <img src="./resources/img/profile.png" alt="..." class=" lg:w-[70px] w-12 mr-10">
                                <div>
                                    <h2 class=" font-semibold lg:text-xl text-lg">Ruby Jane</h2>
                                    <div class=" flex space-x-2">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia accusamus tenetur velit, aliquid autem nobis natus ipsam laboriosam unde earum.</p>
                        </div>
                    </div>
                    <div class=" lg:flex justify-evenly items-center">
                        <div class="reviewCard">
                            <div class="flex">
                                <img src="./resources/img/profile.png" alt="..." class=" lg:w-[70px] w-12 mr-10">
                                <div>
                                    <h2 class=" font-semibold lg:text-xl text-lg">Ruby Jane</h2>
                                    <div class=" flex space-x-2">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia accusamus tenetur velit, aliquid autem nobis natus ipsam laboriosam unde earum.</p>
                        </div>
                        <div class="reviewCard">
                            <div class="flex">
                                <img src="./resources/img/profile.png" alt="..." class=" lg:w-[70px] w-12 mr-10">
                                <div>
                                    <h2 class=" font-semibold lg:text-xl text-lg">Ruby Jane</h2>
                                    <div class=" flex space-x-2">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                        <img src="./resources/img/star.svg" alt="..." width="15px">
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia accusamus tenetur velit, aliquid autem nobis natus ipsam laboriosam unde earum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="./resources/js/toggle.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>


        <div id="chatBoxPopup" class=" flex flex-col items-center justify-center w-[600px] h-full text-gray-800 p-10 fixed top-[1%] left-[33%] z-50 ">
            <div class="flex flex-col flex-grow w-full max-w-xl bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="flex flex-col flex-grow h-0 p-4 overflow-auto">
                    <div class="flex w-full mt-2 space-x-3 max-w-xs">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
                        <div>
                            <div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                        </div>
                    </div>
                    <div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
                        <div>
                            <div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                            <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                        </div>
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
                    </div>
                    <div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
                        <div>
                            <div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
                                <p class="text-sm">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                        </div>
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
                    </div>
                    <div class="flex w-full mt-2 space-x-3 max-w-xs">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
                        <div>
                            <div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                            <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                        </div>
                    </div>
                    <div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
                        <div>
                            <div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                            <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                        </div>
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
                    </div>
                    <div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
                        <div>
                            <div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                            <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                        </div>
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
                    </div>
                    <div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
                        <div>
                            <div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
                                <p class="text-sm">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                        </div>
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
                    </div>
                    <div class="flex w-full mt-2 space-x-3 max-w-xs">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
                        <div>
                            <div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                            <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                        </div>
                    </div>
                    <div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
                        <div>
                            <div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
                                <p class="text-sm">Lorem ipsum dolor sit.</p>
                            </div>
                            <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                        </div>
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
                    </div>
                </div>

                <div class="bg-gray-300 p-4 flex items-center justify-around">
                    <input class="flex items-center h-10 md:w-96 w-64 rounded px-3 text-sm focus:outline-none" type="text" placeholder="Type your message…">
                    <img src="./resources/img/send.png" alt="sent" class="h-5">
                </div>
            </div>
        </div>


        <script>
            // Get references to the popup and buttons
            const chatBoxPopup = document.getElementById("chatBoxPopup");
            const chatBoxButton = document.getElementById("chatBoxButton");

            // Function to toggle the visibility of the popup and blur the background
            function toggleLogoutPopup() {
                chatBoxPopup.classList.toggle("hidden");
            }

            // Attach click event listeners to the logout button and cancel button
            chatBoxButton.addEventListener("click", toggleLogoutPopup);
        </script>
</body>

</html>