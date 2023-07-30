<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@700&display=swap" rel="stylesheet">
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class=" dark:bg-black font-poppins">

    <nav class="bg-gradient-to-r from-fuchsia-300 to-purple-400 dark:bg-linear_dark  border-gray-200 ">
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
                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 bg-transparent" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="./mainPage.php" class=" font-poppins block py-2 pl-3 pr-4 text-gray-900 bg-blue-700 rounded md:bg-transparent md:text-white md:p-0  font-bold dark:text-white" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="./aboutUs.php" class=" font-poppins block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold md:dark:text-blue-500">About Us</a>
                    </li>
                    <li>
                        <a href="./contactUs.php" class="  block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Title-->
    <section class="w-3/4 m-auto">
        <p class=" font-PlayfairSC underline text-center mt-5 m-2 text-2xl text-black dark:text-white">About Us</p>
        <p class="mt-10 text-2xl font-PlayfairSC text-center text-black dark:text-white">Our Project Overview And Story</p>
        <div class="md:flex m-5 md:justify-evenly">
            <img src="./resources/img/logo2.png" alt="logo" class="md:m-0 m-auto md:w-auto w-56">
            <p class="text-justify  md:w-96 mt-10 md:text-base text-sm text-black dark:text-white">At Beyond, we are a tight-knit team of five dedicated individuals who share a common passion for transforming your shopping experience. Our mission is to go above and beyond to exceed your expectations and bring joy to your life.<br>
                Beyond was born out of the desire to provide you with a curated selection of lifestyle products that enhance your everyday life. With just five team members, we have built a brand that reflects our shared values and commitment to excellence.</p>
        </div>
        <div class="md:flex md:justify-evenly">
            <div>
                <p class="md:text-xl text-lg font-PlayfairSC text-center text-black dark:text-white">CURATED SELECTION</p>
                <p class="  text-justify md:w-72 md:mt-5 md:text-base text-sm p-3 text-black dark:text-white">
                    As we launch, our team of product enthusiasts has carefully curated a diverse range of items, spanning fashion, home decor, tech gadgets, and more. Each product has been chosen with utmost care, meeting our high standards of quality and innovation.</p>
            </div>
            <div>
                <img src="./resources/img/teamphoto.png" alt="" class="md:w-64 w-48 md:m-0 m-auto">
            </div>
            <div>
                <p class="md:text-xl text-lg font-PlayfairSC text-center text-black dark:text-white">OUR CORE VALUES</p>
                <p class="text-justify md:w-72 md:mt-5  md:text-base text-sm p-3 font-p text-black dark:text-white">Integrity, innovation, and your satisfaction are at the core of our values. As a small team, we take pride in offering personalized attention to every detail of your shopping journey.</p>
            </div>
        </div>
        <p class="md:text-xl text-lg font-PlayfairSC text-center m-5 text-black dark:text-white">EMPOWERING MERCHANTS</p>
        <p class="m-auto  text-center  md:text-base text-sm md:w-1/2 w-3/4  text-black dark:text-white">
            While we are starting our journey, we are also excited to empower merchants and creators by providing them with a platform to showcase their unique creations. Together, we can build a community that celebrates creativity and craftsmanship.
        </p>
        <p class="md:text-xl text-lg font-PlayfairSC text-center m-3 text-black dark:text-white">MEET OUR TEAM</p>
        <!-- <div class="flex  items-center justify-center md:space-x-5 space-x-1 m-5">
        <div class="md:w-[180px] w-[96px] md:h-[180px] h-[150px] rounded-lg border border-solid bg-verify-color p-6">
            <img src="./resources/img/team5.png" alt="p1" class=" rounded-3xl md:h-28 sm:h-20 m-auto">
            <p class="font-PlayfairSC md:text-base text-xs font-bold md:mt-4 mt-2 text-center">Thet Wai Yan Htet</p>
        </div>
        <div class="md:w-[180px] w-[96px] md:h-[180px] h-[150px] rounded-lg border border-solid bg-verify-color p-6">
            <img src="./resources/img/team3.png" alt="p2" class=" rounded-3xl md:h-28 m-auto">
            <p class="font-PlayfairSC md:text-base text-xs font-bold md:mt-4 mt-2 text-center">Kyaw Sawr lynn</p>
        </div>
        <div class="md:w-[180px] w-[96px] md:h-[180px] h-[150px] rounded-lg border border-solid bg-verify-color p-6">
            <img src="./resources/img/team1.png" alt="p3" class=" rounded-3xl md:h-28 m-auto">
            <p class="font-PlayfairSC md:text-base text-xs  font-bold md:mt-4 mt-2  text-center">Nyan Win Myo</p>
        </div>
        <div class="md:w-[180px] w-[96px] md:h-[180px] h-[150px]  rounded-lg border border-solid bg-verify-color p-6">
            <img src="./resources/img/team4.png" alt="p4" class=" rounded-3xl md:h-28 m-auto">
            <p class="font-PlayfairSC md:text-base text-xs font-bold md:mt-4 mt-2  text-center">Yunn Shwe Yi Win</p>
        </div>
        <div class="md:w-[180px] w-[96px] md:h-[180px] h-[150px] rounded-lg border border-solid bg-verify-color p-6">
            <img src="./resources/img/team2.png" alt="p5" class="rounded-3xl md:h-28 m-auto">
            <p class="font-PlayfairSC md:text-base text-xs font-bold md:mt-4 mt-2  text-center">Hnin Eain latt</p>
        </div>
    </div> -->




        <div class="mt-8">
            <div class="flex items-center justify-center flex-wrap">
                <img src="./resources/img/team2.png" alt="" class="h-24 w-24  shadow-xl  rounded-full p-1 m-3 cursor-pointer user-pic active-pic" onclick="showReview()">
                <img src="./resources/img/team4.png" alt="" class="h-24 w-24  shadow-xl  rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                <img src="./resources/img/team3.png" alt="" class="h-24 w-24  shadow-xl  rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                <img src="./resources/img/team1.png" alt="" class="h-24 w-24  shadow-xl  rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                <img src="./resources/img/team5.png" alt="" class="h-24 w-24  shadow-xl  rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
            </div>

            <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                <div class="user-text active-text">
                    <p class="md:text-base text-sm mb-6 ">"TLorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus asperiores in voluptas quia tempora. Ex quam vero maxime nihil impedit alias sapiente, nostrum possimus labore vel cum aliquid cupiditate ab."!</p>
                    <h4 class="font-bold text-purple-800 mb-1">Hnin Eain Latt</h4>
                    <p>Team member</p>
                </div>

                <div class="user-text">
                    <p class="md:text-base text-sm mb-6 ">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus asperiores in voluptas quia tempora. Ex quam vero maxime nihil impedit alias sapiente, nostrum possimus labore vel cum aliquid cupiditate ab.!</p>
                    <h4 class="font-bold text-purple-800 mb-1">Yunn Shwe Yi Win</h4>
                    <p>Team member</p>
                </div>

                <div class="user-text">
                    <p class="md:text-base text-sm mb-6 ">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus asperiores in voluptas quia tempora. Ex quam vero maxime nihil impedit alias sapiente, nostrum possimus labore vel cum aliquid cupiditate ab.</p>
                    <h4 class="font-bold text-purple-800 mb-1">Kyaw Swar Lynn</h4>
                    <p>Team member</p>
                </div>

                <div class="user-text">
                    <p class="md:text-base text-sm mb-6 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus suscipit delectus nam nostrum eius repudiandae porro iure, aut quaerat id. Iusto beatae cupiditate deleniti! Adipisci molestiae reprehenderit aliquid iusto vero.</p>
                    <h4 class="font-bold text-purple-800 mb-1">Nyan Win Myo</h4>
                    <p>Team member</p>
                </div>

                <div class="user-text">
                    <p class="md:text-base text-sm mb-6 ">"TDuring this amazing journey, I've been involved in optimizing the website for responsive design. It's been both exciting and rewarding to contribute to our first full project"!</p>
                    <h4 class="font-bold text-purple-800 mb-1">Thet Wai Yan Htet</h4>
                    <p>Team member</p>
                </div>
            </div>
        </div>





















        <p class="md:text-xl text-lg font-PlayfairSC text-center m-3 text-black dark:text-white">BEYOND'S PROMISE</p>
        <p class="  p-4 text-center md:text-base text-sm m-auto md:w-1/2 w-3/4 text-black dark:text-white">At Beyond, we promise to deliver a seamless and enjoyable shopping experience for you. Our user-friendly website ensures that browsing and discovering products is effortless, while our attentive customer support is always here to assist you. As a small team, we love connecting with our customers on a personal level. If you have any questions, feedback, or inquiries, feel free to contact us:</p>
        <div class="flex flex-col items-center text-black dark:text-white">
            <span class="font-bold">Email:Beyond@gmail.com</span><br>
            <span class="font-bold">Phone:092322198322</span>
        </div>
        <p class="  m-5 text-center  md:text-base text-sm text-black dark:text-white">Thank you for being part of Beyond's inaugural launch. Together, let's go beyond the ordinary and create memorable experiences through exceptional products.</p>



    </section>

    <script>
        // testimonial
        const userTexts = document.getElementsByClassName('user-text');
        const userPics = document.getElementsByClassName('user-pic');

        function showReview() {
            for (userPic of userPics) {
                userPic.classList.remove("active-pic");
            }
            for (userText of userTexts) {
                userText.classList.remove("active-text");
            }

            let i = Array.from(userPics).indexOf(event.target);

            userPics[i].classList.add('active-pic');
            userTexts[i].classList.add('active-text');
        }
    </script>


    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>

</html>