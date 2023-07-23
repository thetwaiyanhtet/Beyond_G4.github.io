<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="w-full h-16 bg-gradient-to-bl from-linear-color2 to-linear-color">
        <div class="flex flex-wrap items-center justify-between p-2">
            <a href="" class="flex justify-center p-2">
                <img src="./resources/img/logo.png" alt="Logo" class="h-8">
                <span class="font-poppins text-2xl">Beyond</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="md:block hidden">
                <ul class="flex space-x-10 font-poppins" id="navbar-default">
                    <li class="hover:text-blue-600">Home</li>
                    <li class="hover:text-blue-600">About us</li>
                    <li class="hover:text-blue-600">Contact</li>
                </ul>
            </div>
            <ul class="flex items-center space-x-5">
                <li class="md:block hidden"><img src="./resources/img/shopping-cart 2.png" alt="shopping"></li>
                <li class="md:block hidden"> <img src="./resources/img/noti.png" alt="noti"></li>
                <li> <img src="./resources/img/pf.png" alt="profile"></li>

            </ul>
        </div>
    </nav>
    <!--Title-->
    <p class="font-poppins underline text-center mt-5 m-2 text-2xl">About Us</p>
    <p class="mt-10 text-2xl font-thin text-center font-PlayfairSC">Our Project Overview And Story</p>
    <div class="md:flex m-5 md:justify-evenly">
        <img src="./resources/img/logo2.png" alt="logo" class="md:m-0 m-auto md:w-auto w-56">
        <p class="text-justify font-poppins md:w-96 mt-10 md:text-base text-sm">At Beyond, we are a tight-knit team of five dedicated individuals who share a common passion for transforming your shopping experience. Our mission is to go above and beyond to exceed your expectations and bring joy to your life.<br>
            Beyond was born out of the desire to provide you with a curated selection of lifestyle products that enhance your everyday life. With just five team members, we have built a brand that reflects our shared values and commitment to excellence.</p>
    </div>
    <div class="md:flex md:justify-evenly">
        <div>
            <p class="md:text-xl text-lg font-PlayfairSC text-center">CURATED SELECTION</p>
            <p class="text-justify md:w-72 md:mt-5 md:text-base text-sm p-3">
                As we launch, our team of product enthusiasts has carefully curated a diverse range of items, spanning fashion, home decor, tech gadgets, and more. Each product has been chosen with utmost care, meeting our high standards of quality and innovation.</p>
        </div>
        <div>
            <img src="./resources/img/teamphoto.png" alt="" class="md:w-64 w-48 md:m-0 m-auto">
        </div>
        <div>
            <p class="md:text-xl text-lg font-PlayfairSC text-center">OUR CORE VALUES</p>
            <p class="text-justify md:w-72 md:mt-5  md:text-base text-sm p-3">Integrity, innovation, and your satisfaction are at the core of our values. As a small team, we take pride in offering personalized attention to every detail of your shopping journey.</p>
        </div>
    </div>
    <p class="md:text-xl text-lg font-PlayfairSC text-center m-5">EMPOWERING MERCHANTS</p>
    <p class="md:ml-5 m-2 text-center  md:text-base text-sm ">
        While we are starting our journey, we are also excited to empower merchants and creators by providing them with a platform to showcase their unique creations. Together, we can build a community that celebrates creativity and craftsmanship.
    </p>
    <p class="md:text-xl text-lg font-PlayfairSC text-center m-3">MEET OUT TEAM</p>
    <div class="md:flex flex-col items-center justify-center space-x-5 m-5">
        <div class="w-[180px] h-[160px] rounded-lg border border-solid bg-verify-color p-6">
            <img src="./resources/img/p1.png" alt="p1" class="rounded-full">
        </div>
        <div class="w-[180px] h-[160px] rounded-lg border border-solid bg-verify-color p-6">
            <img src="./resources/img/p2.png" alt="p2" class="rounded-full">
        </div>
        <div class="w-[180px] h-[160px] rounded-lg border border-solid bg-verify-color p-6">
            <img src="./resources/img/p3.png" alt="p3" class="rounded-full">
        </div>
        <div class="w-[180px] h-[160px] rounded-lg border border-solid bg-verify-color p-6">
            <img src="./resources/img/p4.png" alt="p4"class="rounded-full" >
        </div>
        <div class="w-[180px] h-[160px] rounded-lg border border-solid bg-verify-color p-6">
            <img src="./resources/img/p5.png" alt="p5" class="rounded-full">
        </div>
    </div>
    <p class="md:text-xl text-lg font-PlayfairSC text-center m-3">BEYOND'S PROMISE</p>
    <p class="font-PlayfairSC p-4 text-centermd:text-base text-sm ">At Beyond, we promise to deliver a seamless and enjoyable shopping experience for you. Our user-friendly website ensures that browsing and discovering products is effortless, while our attentive customer support is always here to assist you. As a small team, we love connecting with our customers on a personal level. If you have any questions, feedback, or inquiries, feel free to contact us:</p>
    <div class="flex flex-col items-center">
        <span class="font-bold">Email:Beyond@gmail.com</span><br>
        <span class="font-bold">Phone:092322198322</span>
    </div>
    <p class="font-PlayfairSC m-5 text-center  md:text-base text-sm ">Thank you for being part of Beyond's inaugural launch. Together, let's go beyond the ordinary and create memorable experiences through exceptional products.</p>
</body>

</html>