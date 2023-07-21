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

<body class=" bg-violet-200 font-serif w-full">
    <div>
        <nav>
            <img src="./resources/img/logo.png" alt="..." class="w-16 ml-5 mt-3">
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
            <div class=" border lg:w-[700px] w-5/6 lg:h-[530px] h-[370px] bg-transparent rounded-xl lg:p-20 p-5 lg:ml-20 flex-col lg:space-y-5 space-y-3 col-start-2 col-span-2 shadow-2xl z-50">
                <h2 class="lg:text-4xl text-2xl font-semibold">Wide-leg Pants</h2>
                <p class=" lg:text-base text-xs">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae pariatur nulla atque nisi magnam deleniti
                    illo provident a exercitationem sunt.
                </p>
                <h3 class="flex justify-start items-center gap-2">
                    <div class=" lg:w-10 lg:h-10 w-7 h-7 bg-slate-500 rounded-full flex items-center justify-center">H</div> H&M
                </h3>
                <h1>$749</h1>
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
                <div class="flex space-x-16">
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
            <div class=" absolute bottom-[90px] left-[220px] col-start-2 text-start"><ion-icon name="caret-back-outline" class="w-10 h-10"></ion-icon></div>
            <div class=" fixed right-[50px] bottom-10 col-start-5 ml-36 w-14 h-14 bg-white rounded-lg flex justify-center items-center z-50 shadow-inner"><ion-icon name="chatbubble-ellipses-outline" class="w-10 h-10"></ion-icon></div>
        </div>

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
                    <p class="">Based on 23 Reviews</p>
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

</body>

</html>