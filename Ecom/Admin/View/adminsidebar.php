<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="./resources/js/sidebar.js" defer></script>
</head>

<body class=" font-poppins overflow-x-hidden">
    <style>
        #sidebar,
        #navbar,
        #navs {
            -webkit-transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
            transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
        }

        #sidebar.show,
        #havbar.show,
        #navs {
            transform: translateX(0);
        }
    </style>
    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div id="navbar" class="flex items-center justify-between bg-table w-full fixed top-0 left-0 z-40 h-[80px]">
        <div class="flex items-center pl-4">
            <img class="w-20" src="./resources/img/logo.png" alt="...">
            <span class=" text-2xl font-bold text-white">Beyond</span>
        </div>
        <div>
            <ul class="flex space-x-5 items-center pr-5 text-white">
                <li><ion-icon name="moon-outline" class=" text-xl"></ion-icon></li>
                <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                <li><img src="./resources/img/amazfit.png" alt="..." width="40px"></li>
                <li class=" font-medium">John Derek</li>
            </ul>
        </div>
    </div>

    <div id="sidebar" class="bg-white font-poppins fixed top-0 min-h-screen border shadow-xl text-ellipsis flex justify-around overflow-y-auto">
        <div class="flex flex-col sm:flex-row relative sm:justify-around">
            <div id="navs" class="w-64  h-screen ">
                <nav class=" mt-28">
                    <div x-data="{ open: false }">
                        <a href="#">
                            <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white  focus:outline-none">
                                <span class="flex items-center">
                                    <ion-icon class="h-5 w-5" name="home-outline"></ion-icon>
                                    <span class="mx-4 font-medium">Dashboard</span>
                                </span>
                            </button>
                        </a>
                    </div>              
                        <div x-data="{ open: false }">
                            <button @click="open = !open" class="w-full  flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white focus:outline-none category">
                                <span class="flex items-center">
                                    <ion-icon class="h-5 w-5" name="person-outline"></ion-icon>
                                    <span class="mx-4 font-medium">Category</span>
                                </span>

                                <span>
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                        <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                            <div x-show="open" class="bg-gray-100">
                                <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white categoryList" href="./categorylist.php">Category List</a>
                                <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white addCategory" href="./addcategory.php">Add Category</a>
                            </div>
                        </div>    
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="w-full  flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white focus:outline-none merchant">
                            <span class="flex items-center ">
                                <ion-icon class="h-5 w-5" name="person-outline"></ion-icon>
                                <span class="mx-4 font-medium">Merchant</span>
                            </span>

                            <span>
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                    <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </button>

                        <div x-show="open" class="bg-gray-100">
                            <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white merchantList" href="./merchant_list.php">Merchant List and Profile</a>
                            <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white" href="#">Merchant Approve</a>
                        </div>
                    </div>
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white focus:outline-none customer">
                            <span class="flex items-center">
                                <ion-icon class="h-5 w-5" name="person-outline"></ion-icon>
                                <span class="mx-4 font-medium">Customer</span>
                            </span>
                        </button>
                    </div>

                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white focus:outline-none products">
                            <span class="flex items-center">
                                <box-icon type='logo' name='product-hunt'></box-icon>
                                <span class="mx-4 font-medium">Products</span>
                            </span>

                            <span>
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                    <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </button>

                        <div x-show="open" class="bg-gray-100">
                            <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white productList" href="./productList.php">Products List</a>
                            <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white productDetails" href="./productDetails.php">Products Details</a>
                        </div>
                    </div>
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white focus:outline-none">
                            <span class="flex items-center">
                                <box-icon name='package' class=""></box-icon>
                                <span class="mx-4 font-medium">Order Lists</span>
                            </span>
                        </button>
                    </div>
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white focus:outline-none">
                            <span class="flex items-center space-x-3">
                                <ion-icon class="h-5 w-5" name="chatbubble-ellipses-outline"></ion-icon>
                                <span clbg-blue-600ass="mx-4 font-medium">Chat Box</span>
                            </span>
                        </button>
                    </div>
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white focus:outline-none">
                            <span class="flex items-center">
                                <ion-icon class="h-5 w-5" name="star-half-outline"></ion-icon>
                                <span class="mx-4 font-medium">Review and Rating</span>
                            </span>
                        </button>
                    </div>
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white focus:outline-none report">
                            <span class="flex items-center">
                                <box-icon type='solid' name='report'></box-icon>
                                <span class="mx-4 font-medium">Report</span>
                            </span>
                        </button>
                    </div>
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="w-full  flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white focus:outline-none setting">
                            <span class="flex items-center ">
                                <ion-icon class="h-5 w-5" name="settings-outline"></ion-icon>
                                <span class="mx-4 font-medium">Setting</span>
                            </span>

                            <span>
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                    <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </button>

                        <div x-show="open" class="bg-gray-100">
                            <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white" href="#">Service and Contact</a>
                            <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white updateProfile" href="./updateProfileNPassword.php">Update Profile</a>
                            <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white updateLogoName" href="./updatelogoAndName.php">Update Logo and Name</a>
                            <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white updateBanners" href="./updatebanner.php">Update Banners</a>
                            <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white termNCondition" href="./terms&cond.php">Term and Condition</a>
                            <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-table hover:text-white" href="">FAQs</a>
                        </div>
                    </div>
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-black cursor-pointer rounded-r-3xl hover:bg-table hover:text-white focus:outline-none">
                            <span class="flex items-center">
                                <ion-icon class="h-5 w-5" name="log-in-outline"></ion-icon>
                                <span class="mx-4 font-medium">Logout</span>
                            </span>
                        </button>
                    </div>
                </nav>
            </div>

        </div>
    </div>
    <button id="btnSidebarToggler" type="button" class=" bg-gray-200 hover:bg-gray-300 rounded-full border shadow-xl fixed p-1 left-60 top-20 text-xl ">
        <ion-icon id="navClosed" class="h-6 bg-table rounded-full m-1 -mb-1 text-white w-6" name="chevron-back-outline"></ion-icon>
        <ion-icon id="navOpen" class="h-6 bg-table rounded-full m-1 hidden -mb-1 text-white w-6" name="chevron-forward-outline"></ion-icon>
    </button>





</body>

</html>