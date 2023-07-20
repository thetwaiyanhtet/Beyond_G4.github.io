<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Detail</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-my-purple1 font-serif">
    <nav>
        <img src="./resources/img/logo.png" alt="..." class="w-16 ml-5 mt-3">
    </nav>
    <header class="  justify-evenly items-center grid grid-cols-3 relative">
        <div class=" bg-slate-100 rounded-tl-xl rounded-bl-xl space-y-3 m-16 absolute left-60 shadow-2xl">
            <div>
                <img src="./resources/img/image 1.png" alt="...">
            </div>
            <div class="flex items-center justify-center space-x-3">
                <img src="./resources/img/image 2.png" alt="...">
                <img src="./resources/img/image 3.png" alt="...">
            </div>
        </div>
        <div class="w-[600px] bg-slate-100 rounded-xl p-10 ml-20 flex-col space-y-5 col-start-2 col-span-2 shadow-2xl z-50">
            <h2 class="text-4xl font-semibold">Wide-leg Pants</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae pariatur nulla atque nisi magnam deleniti
                illo provident a exercitationem sunt.
            </p>
            <h3 class="flex justify-start items-center gap-2">
                <div class=" w-10 h-10 bg-slate-500 rounded-full flex items-center justify-center">H</div> H&M
            </h3>
            <h1>$749</h1>
            <div class="flex space-x-3">
                <div class="w-5 h-5 bg-black text-white"></div>
                <div class="w-5 h-5 bg-stone-600"></div>
                <div class="w-5 h-5 bg-red-600"></div>
                <div class="w-5 h-5 bg-blue-800"></div>
                <div class="w-5 h-5 bg-green-500"></div>
            </div>
            <div class="flex space-x-7">
                <h3>Quantity</h3>
                <input type="number" class="border w-20 h-6 indent-12 shadow-xl" value="1">
            </div>
            <div class="flex space-x-16">
                <h3>Size</h3>
                <ul class="flex space-x-2">
                    <li>XS</li>
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
        <div class=" absolute bottom-[115px] left-64 col-start-2 text-start"><ion-icon name="caret-back-outline" class="w-10 h-10"></ion-icon></div>
        <div class=" absolute right-[300px] bottom-28 col-start-5 ml-36 w-14 h-14 bg-white rounded-lg flex justify-center items-center"><ion-icon name="chatbubble-ellipses-outline" class="w-10 h-10"></ion-icon></div>
    </div>

    <main class=" mt-20 min-h-screen flex-col justify-center items-center">
        <div class="flex justify-center items-center flex-col space-y-3">
            <p class=" text-3xl">Overall Rating</p>
            <h1>4.0</h1>
            <div class="flex">
                <img src="./resources/img/star.svg" alt="..." width="50px">
                <img src="./resources/img/star.svg" alt="..." width="50px">
                <img src="./resources/img/star.svg" alt="..." width="50px">
                <img src="./resources/img/star.svg" alt="..." width="50px">
                <img src="./resources/img/star.svg" alt="..." width="50px">
            </div>
            <p class="">Based on 23 Reviews</p>
        </div>

        <div class=" w-full flex items-center justify-center">
            <div class=" flex justify-around items-center flex-wrap w-[900px] border">
                <div class=" flex justify-center items-center w-[400px] h-[250px] bg-teal-300 mt-5">
                    <img src="./resources/img/profile.png" alt="..." width="50px">
                    <div>
                        <h2>Ruby Jane</h2>
                        <div class=" flex">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia accusamus tenetur velit, aliquid autem nobis natus ipsam laboriosam unde earum.</p>
                    </div>
                </div>
                <div class=" flex justify-center items-center w-[400px] h-[250px] bg-teal-300 mt-5 p-5">
                    <img src="./resources/img/profile.png" alt="..." width="50px">
                    <div>
                        <h2>Ruby Jane</h2>
                        <div class=" flex">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia accusamus tenetur velit, aliquid autem nobis natus ipsam laboriosam unde earum.</p>
                    </div>
                </div>
                <div class=" flex justify-center items-center w-[400px] h-[250px] bg-teal-300 mt-5">
                    <img src="./resources/img/profile.png" alt="..." width="50px">
                    <div>
                        <h2>Ruby Jane</h2>
                        <div class=" flex">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia accusamus tenetur velit, aliquid autem nobis natus ipsam laboriosam unde earum.</p>
                    </div>
                </div>
                <div class=" flex justify-center items-center w-[400px] h-[250px] bg-teal-300 mt-5">
                    <img src="./resources/img/profile.png" alt="..." width="50px">
                    <div>
                        <h2>Ruby Jane</h2>
                        <div class=" flex">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                            <img src="./resources/img/star.svg" alt="..." width="15px">
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia accusamus tenetur velit, aliquid autem nobis natus ipsam laboriosam unde earum.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
<div></div>

</body>

</html>