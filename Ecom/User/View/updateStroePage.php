<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateStorePage</title>
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=BioRhyme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,900;1,700&display=swap" rel="stylesheet">
    <script src="./resources/js/bannerSlideShow.js" defer></script>
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class=" dark:bg-gray-950">
    <nav class="m-10">
        <div class="flex justify-around items-center">
            <p class="font-PlayfairSC font-semibold md:text-2xl text-sm dark:text-white">Store Name</p>
            <form class="flex items-center mx-auto">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative md:w-[600px] w-[150px]">
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>
                </div>
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
            <button id="theme-toggle" type="button" class="text-gray-900 dark:text-white focus:outline-none  rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
            <img src="../../Storage/profile/h&m.jpg" class="h-16">
        </div>
    </nav>
    <section>
        <div class="banner">
            <img src="../../Storage/banner/10.png" alt="img" class="rounded-lg w-[90%] m-auto">
        </div>
        <ul class="md:w-48 w-40 text-sm font-medium text-gray-900  md:m-20 m-10">
            <li class="w-full">
                <div class="flex items-center pl-3">
                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-lg font-medium text-gray-900 dark:text-gray-300">Categories</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center pl-3">
                   
                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center pl-3">
                  
                    <label for="react-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">React</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center pl-3">
                   
                    <label for="angular-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Angular</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center pl-3">
                  
                    <label for="laravel-checkbox" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laravel</label>
                </div>
            </li>
        </ul>
        

    </section>
    <section id="footer">
            <div class="relative bg-purple-300 dark:bg-color-primary-dark dark:text-white border-t border-t-transparent dark:border-t-slate-200">
                <div class="container pl-12 py-5 ">
                    <div class="grid gap-10 md:grid-cols-3 pb-10">
                        <div class="space-y-6">
                            <img src="./resources/img/logo.png" class="h-20" alt="beyond Logo" />
                            <h4 class="font-bold text-lg">About Beyond</h4>
                            <p class="leading-relaxed"> Discover a curated collection of unique products that transcend the ordinary. Join us as we redefine the art of shopping, delivering seamless journeys that inspire and delight. Unleash the extraordinary with Beyond.</p>
                            <div class="flex gap-5 items-center">
                                <p>Follow Us</p>
                                <i class="fa-brands fa-facebook-f cursor-pointer hover:text-purple-700"></i>
                                <i class="fa-brands fa-twitter cursor-pointer hover:text-purple-700"></i>
                                <i class="fa-brands fa-youtube cursor-pointer hover:text-purple-700"></i>
                                <i class="fa-brands fa-instagram cursor-pointer hover:text-purple-700"></i>
                            </div>
                        </div>
                        <div class="flex justify-between md:justify-around">
                            <div class="space-y-6">
                                <h4 class="font-bold text-lg">Quick Links</h4>
                                <ul class="space-y-3">
                                    <li class="underline hover:no-underline hover:text-purple-700"><a href="./mainPage.php">Home</a></li>
                                    <li class="underline hover:no-underline hover:text-purple-700"><a href="./aboutUs.php">About us</a></li>
                                    <li class="underline hover:no-underline hover:text-purple-700"><a href="./contactUs.php">Contact Us</a></li>
                                    <li class="underline hover:no-underline hover:text-purple-700"><a href="./profileMenu.php">Profile</a></li>
                                    <li class="underline hover:no-underline hover:text-purple-700"><button data-modal-target="defaultModal1" data-modal-toggle="defaultModal1" class="block" type="button">
                                            Return Policy
                                        </button></li>
                                    <li class="underline hover:no-underline hover:text-purple-700"><button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block" type="button">
                                            Terms and Conditions
                                        </button></li>
                                </ul>
                            </div>

                        </div>
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">Newsletter</h4>
                            <p class="leading-relaxed">Subscribe With Email And Loads Of News Will Be Sent To You</p>
                            <div class="flex items-center">
                                <input type="text" class="w-3/4 text-black bg-color-white p-2 lg:p-3 rounded-l-md focus:outline-none" placeholder="Enter Your Email">

                                <button type="submit" class="px-4 py-2 lg:px-5 lg:py-3 rounded-r-md hover:opacity-90 border border-solid bg-slate-900">
                                    <i class="fa-solid fa-chevron-right text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center pt-10 border-t border-color-gray">
                        <p>2023 &copy; Beyond. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Terms and Conditions
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 h-96 overflow-y-scroll">
                                <img src="./resources/img/terms.jpg" alt="" class="m-auto w-64 h-auto">
                                <b>1. User Accounts</b> <br>
                                a. Registration: To access certain features of the Website, you may be required to create a user account. You agree to provide accurate and complete information during the registration process. <br>
                                b. Account Security: You are responsible for maintaining the confidentiality of your account login credentials and for any activities that occur under your account. Notify us immediately of any unauthorized use or security breach. <br><br>

                                <b>2. Use of the Website</b> <br>
                                a. General Use: You may use the Website for personal and non-commercial purposes only. You agree not to use the Website for any illegal, harmful, or abusive activities that may disrupt or interfere with the proper functioning of the Website or infringe on the rights of others. <br>
                                b. Content: Any content you upload or submit to the Website must not violate any applicable laws or infringe on the rights of any third parties.<br><br>

                                <b>3. Intellectual Property</b>
                                a. Ownership: The Website and its content, including text, graphics, images, logos, and software, are the property of Beyond or its licensors and are protected by intellectual property laws. <br>
                                b. Limited License: Beyond grants you a limited, non-exclusive, non-transferable license to access and use the Website for its intended purposes. <br><br>

                                <b>4. Privacy</b>
                                Your privacy is important to us. Please review our Privacy Policy to understand how we collect, use, and disclose your personal information. <br><br>

                                <b>5. Third-Party Links</b>
                                The Website may contain links to third-party websites or services. Beyond is not responsible for the content or actions of any third-party websites or services. These links are provided for convenience and do not imply endorsement or affiliation. <br><br>

                                <b>6. Limitation of Liability</b>
                                Beyond shall not be liable for any direct, indirect, incidental, special, or consequential damages arising from your use of the Website. <br><br>

                                <b>7. Modifications to the Terms</b>
                                We reserve the right to update or modify these Terms at any time without prior notice. Your continued use of the Website after such changes constitutes your acceptance of the revised Terms. <br><br>

                                <b>8. Termination</b>
                                Beyond may terminate or suspend your access to the Website at any time and for any reason without prior notice. <br><br>


                                <b>9. Contact Us</b>
                                If you have any questions or concerns about these Terms or the Website, please contact us at beyondecommerce634@gmail.com. <br><br>

                                <b>By using the Beyond website, you agree to abide by these Terms and Conditions. Please read them carefully before proceeding with your use of the Website.</b>
                            </p>

                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="defaultModal" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-md px-5 py-2.5  text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Agree</button>
                        </div>
                    </div>
                </div>
            </div>


            <div id="defaultModal1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Return Policy
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal1">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 h-96 overflow-y-scroll">
                                <img src="./resources/img/return.png" alt="" class="m-auto w-auto h-44 pb-2">
                                <b>At Beyond, we strive to provide you with the best shopping experience possible. If you're not completely satisfied with your purchase, we're here to help. Our return policy is designed to be fair and transparent, ensuring your peace of mind.</b> <br> <br>

                                <b>30-Day Return Window:</b> You have up to 30 days from the date of delivery to return eligible items. <br>

                                <b>Eligibility Criteria:</b> To be eligible for a return, the item must be in its original condition and packaging. It should be unused, unworn, and free from any signs of damage or alteration. <br>

                                <b>Easy Returns Process:</b> Initiating a return is simple. Just log in to your account, go to the order history, and select the items you want to return. Our system will guide you through the process step by step. <br>

                                <b>Non-Returnable Items:</b> Some items, such as personalized or intimate goods, are non-returnable for hygiene and safety reasons. <br>

                                <b>Exchanges:</b> Currently, we don't offer direct exchanges. You can return the unwanted item and place a new order for the desired item. <br>

                                <b>Processing Time:</b> Once we receive your returned item, we'll inspect it and process your refund within merchants business days. <br>

                                <b>Contact Us:</b> If you have any questions or concerns about our return policy, feel free to reach out to our customer support team. We're here to assist you every step of the way. <br>

                                <b>Please note that this policy is subject to change, and we recommend reviewing it periodically. Your satisfaction is our priority, and we want your shopping experience with Beyond to be exceptional.</b>
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="defaultModal1" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-md px-5 py-2.5  text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Agree</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>