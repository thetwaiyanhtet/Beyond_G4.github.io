<?php
include "./navigation.php";
?>
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

<body class=" dark:bg-gray-900">



    <!--Title-->
    <section class=" m-auto w-3/4 md:w-2/3 font-poppins mt-16">
        <p class=" font-PlayfairSC underline text-center mt-5 m-2 text-2xl text-black dark:text-gray-200 ">About Us</p>
        <p class="mt-10 text-2xl font-PlayfairSC text-center text-black dark:text-gray-200">Our Project Overview And Story</p>
        <div class="md:flex m-5 md:justify-around">
            <img src="./resources/img/logo_slowdown.gif" alt="logo" class="md:m-0 m-auto h-auto w-56 md:w-64">
            <p class="text-justify  md:w-96 mt-10 md:text-base text-sm text-black dark:text-gray-200">At Beyond, we are a tight-knit team of five dedicated individuals who share a common passion for transforming your shopping experience. Our mission is to go above and beyond to exceed your expectations and bring joy to your life.<br>
                Beyond was born out of the desire to provide you with a curated selection of lifestyle products that enhance your everyday life. With just five team members, we have built a brand that reflects our shared values and commitment to excellence.</p>
        </div>
        <div class="md:flex md:justify-evenly">
            <div>
                <p class="md:text-xl text-lg font-PlayfairSC text-center text-black dark:text-gray-200">CURATED SELECTION</p>
                <p class="  text-justify md:w-72 md:mt-5 md:text-base text-sm p-3 text-black dark:text-gray-200">
                    As we launch, our team of product enthusiasts has carefully curated a diverse range of items, spanning fashion, home decor, tech gadgets, and more. Each product has been chosen with utmost care, meeting our high standards of quality and innovation.</p>
            </div>
            <div>
                <img src="./resources/img/teamphoto.png" alt="" class="md:w-64 w-48 md:m-0 m-auto">
            </div>
            <div>
                <p class="md:text-xl text-lg font-PlayfairSC text-center text-black dark:text-gray-200">OUR CORE VALUES</p>
                <p class="text-justify md:w-72 md:mt-5  md:text-base text-sm p-3 font-p text-black dark:text-gray-200">Integrity, innovation, and your satisfaction are at the core of our values. As a small team, we take pride in offering personalized attention to every detail of your shopping journey.</p>
            </div>
        </div>
        <p class="md:text-xl text-lg font-PlayfairSC text-center m-5 text-black dark:text-gray-200">EMPOWERING MERCHANTS</p>
        <p class="m-auto  text-center  md:text-base text-sm text-black dark:text-gray-200">
            While we are starting our journey, we are also excited to empower merchants and creators by providing them with a platform to showcase their unique creations. Together, we can build a community that celebrates creativity and craftsmanship.
        </p>
        <p class="md:text-xl text-lg font-PlayfairSC text-center mt-12 text-black dark:text-gray-200">MEET OUR TEAM</p>
        <div class="">
            <div class="flex items-center justify-center flex-wrap">
                <img src="./resources/img/team2.png" alt="" class="h-24 w-24  shadow-xl  rounded-full p-1 m-3 cursor-pointer user-pic active-pic" onclick="showReview()">
                <img src="./resources/img/team4.png" alt="" class="h-24 w-24  shadow-xl  rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                <img src="./resources/img/team3.png" alt="" class="h-24 w-24  shadow-xl  rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                <img src="./resources/img/team1.png" alt="" class="h-24 w-24  shadow-xl  rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                <img src="./resources/img/team5.png" alt="" class="h-24 w-24  shadow-xl  rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
            </div>

            <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                <div class="user-text active-text">
                    <p class="md:text-base text-sm mb-6 dark:text-gray-200 ">"TLorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus asperiores in voluptas quia tempora. Ex quam vero maxime nihil impedit alias sapiente, nostrum possimus labore vel cum aliquid cupiditate ab."!</p>
                    <h4 class="font-bold text-purple-800 dark:text-purple-400  mb-1">Hnin Eain Latt</h4>
                    <p class="dark:text-gray-200 ">Team member</p>
                </div>

                <div class="user-text">
                    <p class="md:text-base text-sm mb-6 dark:text-gray-200 ">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus asperiores in voluptas quia tempora. Ex quam vero maxime nihil impedit alias sapiente, nostrum possimus labore vel cum aliquid cupiditate ab.!</p>
                    <h4 class="font-bold text-purple-800 dark:text-purple-400  mb-1">Yunn Shwe Yi Win</h4>
                    <p class="dark:text-gray-200 ">Team member</p>
                </div>

                <div class="user-text">
                    <p class="md:text-base text-sm mb-6 dark:text-gray-200 ">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus asperiores in voluptas quia tempora. Ex quam vero maxime nihil impedit alias sapiente, nostrum possimus labore vel cum aliquid cupiditate ab.</p>
                    <h4 class="font-bold text-purple-800 dark:text-purple-400  mb-1">Kyaw Swar Lynn</h4>
                    <p class="dark:text-gray-200 ">Team member</p>
                </div>

                <div class="user-text">
                    <p class="md:text-base text-sm mb-6 dark:text-gray-200 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus suscipit delectus nam nostrum eius repudiandae porro iure, aut quaerat id. Iusto beatae cupiditate deleniti! Adipisci molestiae reprehenderit aliquid iusto vero.</p>
                    <h4 class="font-bold text-purple-800 dark:text-purple-400  mb-1">Nyan Win Myo</h4>
                    <p class="dark:text-gray-200 ">Team member</p>
                </div>

                <div class="user-text">
                    <p class="md:text-base text-sm mb-6 dark:text-gray-200 ">"TDuring this amazing journey, I've been involved in optimizing the website for responsive design. It's been both exciting and rewarding to contribute to our first full project"!</p>
                    <h4 class="font-bold text-purple-800 dark:text-purple-400  mb-1">Thet Wai Yan Htet</h4>
                    <p class="dark:text-gray-200 ">Team member</p>
                </div>
            </div>
        </div>
        <p class="md:text-xl text-lg font-PlayfairSC text-center m-3 text-black dark:text-gray-200">BEYOND'S PROMISE</p>
        <p class="  p-4 text-center md:text-base text-sm m-auto text-black dark:text-gray-200">At Beyond, we promise to deliver a seamless and enjoyable shopping experience for you. Our user-friendly website ensures that browsing and discovering products is effortless, while our attentive customer support is always here to assist you. As a small team, we love connecting with our customers on a personal level. If you have any questions, feedback, or inquiries, feel free to contact us:</p>
        <div class="flex flex-col items-center text-black dark:text-gray-200">
            <span class="font-bold">Email:Beyond@gmail.com</span><br>
            <span class="font-bold">Phone:092322198322</span>
        </div>
        <p class="m-5 text-center pb-10 md:text-base text-sm text-black dark:text-gray-200">Thank you for being part of Beyond's inaugural launch. Together, let's go beyond the ordinary and create memorable experiences through exceptional products.</p>
    </section>
    <section id="footer">
        <div class="relative bg-purple-300 dark:bg-color-primary-dark dark:text-white">
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
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="#blog">Return policy</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="#blog">Terms and Conditions</a></li>

                            </ul>
                        </div>

                    </div>
                    <div class="space-y-6">
                        <h4 class="font-bold text-lg">Newsletter</h4>
                        <p class="leading-relaxed">Subscribe With Email And Loads Of News Will Be Sent To You</p>
                        <div class="flex items-center">
                            <input type="text" class=" text-black w-3/4 text-color-gray bg-color-white p-2 lg:p-3 rounded-l-md focus:outline-none" placeholder="Enter Your Email">

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
    </section>
    <script script src="//cdn.conveythis.com/javascript/conveythis-initializer.js">
    </script>
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

        document.addEventListener("DOMContentLoaded", function(e) {
            ConveyThis_Initializer.init({
                api_key: "pub_f0dadebebe17f7b23e125a0a04edb015"
            });
        });
    </script>


    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>

</html>