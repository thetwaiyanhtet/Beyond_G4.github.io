<?php

include "../Controller/itemDetailsController.php";
include "../Controller/overRatingController.php";
include "../Controller/newcartController.php";
ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Item Detail</title>
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

<body class="font-poppins w-full dark:bg-gray-800">
    <div>
        <nav class="flex justify-between">
            <img src="./resources/img/logo_slowdown.gif" alt="..." class="h-10 ml-5 mt-3">
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none  rounded-lg text-sm p-2.5 z-30">
                <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
        </nav>
        <form action="./mainPage.php" method="post">
            <header class=" w-full justify-evenly items-center lg:grid lg:grid-cols-3 relative flex flex-wrap">
                <div class="border bg-transparent rounded-tl-xl rounded-bl-xl space-y-3 lg:m-16 lg:absolute lg:left-[210px] w-2/4 shadow-2xl lg:w-[350px] p-5">
                    <?php if (!empty($ItemDetails[0]["p_one"])) { ?>
                        <div class="flex items-center justify-center">
                            <img id="productImage" src="../../Storage//product/<?= $ItemDetails[0]["p_one"] ?>" alt="..." class="w-96 h-auto">
                        </div>
                    <?php } else { ?>
                        <div></div>
                    <?php } ?>
                    <div class="flex items-center justify-center space-x-3">
                        <?php if (!empty($ItemDetails[0]["p_two"])) { ?>
                            <div><img src="../../Storage/product/<?= $ItemDetails[0]["p_two"] ?>" alt="..." class="w-40 h-auto"></div>
                        <?php } else { ?>
                            <div></div>
                        <?php } ?>
                        <?php if (!empty($ItemDetails[0]["p_three"])) { ?>
                            <div><img src="../../Storage/product/<?= $ItemDetails[0]["p_three"] ?>" alt="..." class="w-40 h-auto"></div>
                        <?php } else { ?>
                            <div></div>
                        <?php } ?>
                        <input type="hidden" id="selectedImage" name="image" value="../../<?= $ItemDetails[0]["p_one"] ?>">
                    </div>
                </div>
                <div class=" border lg:w-[700px] w-5/6 lg:h-[530px] h-[390px] bg-transparent rounded-xl lg:p-20 p-5 lg:ml-20 flex-col lg:space-y-5 space-y-3 col-start-2 col-span-2 shadow-2xl z-50">
                    <h2 class="lg:text-4xl text-2xl font-semibold font-philosopher"><?= $ItemDetails[0]["name"] ?></h2>
                    <p class=" lg:text-base text-xs">
                        <?= $ItemDetails[0]["description"] ?>
                    </p>
                    <h3 class="flex justify-start items-center gap-2 font-philosopher">
                        <a href="./storepage.php">
                            <div class=" flex items-center space-x-3">
                                <!-- <div class=" lg:w-10 lg:h-10 w-7 h-7 bg-slate-500 rounded-full flex items-center justify-center ">H</div> -->
                                <p><?= $ItemDetails[0]["store_name"] ?></p>
                            </div>
                        </a>
                    </h3>
                    <h1 class=" font-philosopher"><?= $ItemDetails[0]["sellprice"] ?> Ks</h1>
                    <input type="hidden" name="price" value="<?= $ItemDetails[0]["sellprice"] ?>">
                    <input type="hidden" name="product_id" value="<?= $id  ?>">

                    <!-- Color choose -->
                    <div class="flex space-x-3">
                        <div class="w-5 h-5 rounded-full user-pic active-pic" onclick="showReview(0)" style="background-color: <?= $ItemDetails[0]["color_1"]; ?>"></div>
                        <div class="w-5 h-5 rounded-full user-pic" onclick="showReview(1)" style="background-color: <?= $ItemDetails[0]["color_2"]; ?>"></div>
                        <div class="w-5 h-5 rounded-full user-pic" onclick="showReview(2)" style="background-color: <?= $ItemDetails[0]["color_3"]; ?>"></div>
                    </div>



                    <script>
                        const userPics = document.getElementsByClassName('user-pic');
                        const productImage = document.getElementById('productImage');
                        const selectedImageInput = document.getElementById('selectedImage');
                        const imageSources = [
                            "<?= $ItemDetails[0]["p_one"] ?>",
                            "<?= $ItemDetails[0]["p_two"] ?>",
                            "<?= $ItemDetails[0]["p_three"] ?>"
                        ];

                        function showReview(index) {
                            for (userPic of userPics) {
                                userPic.classList.remove("active-pic");
                            }
                            userPics[index].classList.add('active-pic');
                            productImage.src = "../../Storage//product/" + imageSources[index];
                            selectedImageInput.value = imageSources[index];
                            console.log(selectedImageInput.value);


                        }
                    </script>

                    <!-- end -->

                    <!-- if size hava data,size select box are shown.If not,nondisplay -->
                    <?php if (
                        isset(
                            $ItemDetails[0]["size_s"],
                            $ItemDetails[0]["size_m"],
                            $ItemDetails[0]["size_l"],
                            $ItemDetails[0]["size_xl"],
                            $ItemDetails[0]["size_2xl"]
                        )
                    ) { ?>
                        <div class="flex space-x-16 hidden">
                            <h3>Size</h3>
                            <select name="" id="" class=" border  rounded-md outline-none">
                                <?php if ($ItemDetails[0]["size_s"] == 1) { ?>
                                    <option value="" selected>S</option>
                                <?php } ?>
                                <?php if ($ItemDetails[0]["size_m"] == 1) { ?>
                                    <option value="" selected>M</option>
                                <?php } ?>
                                <?php if ($ItemDetails[0]["size_l"] == 1) { ?>
                                    <option value="" selected>L</option>
                                <?php } ?>
                                <?php if ($ItemDetails[0]["size_xl"] == 1) { ?>
                                    <option value="" selected>XL</option>
                                <?php } ?>
                                <?php if ($ItemDetails[0]["size_2xl"] == 1) { ?>
                                    <option value="" selected>2XL</option>
                                <?php } ?>

                            </select>
                        </div>
                    <?php } else { ?>
                        <div class="flex space-x-16 ">
                            <h3>Size</h3>
                            <select name="" id="" class=" border  rounded-md outline-none">
                                <?php if ($ItemDetails[0]["size_s"] == 1) { ?>
                                    <option value="" selected>S</option>
                                <?php } ?>
                                <?php if ($ItemDetails[0]["size_m"] == 1) { ?>
                                    <option value="" selected>M</option>
                                <?php } ?>
                                <?php if ($ItemDetails[0]["size_l"] == 1) { ?>
                                    <option value="" selected>L</option>
                                <?php } ?>
                                <?php if ($ItemDetails[0]["size_xl"] == 1) { ?>
                                    <option value="" selected>XL</option>
                                <?php } ?>
                                <?php if ($ItemDetails[0]["size_2xl"] == 1) { ?>
                                    <option value="" selected>2XL</option>
                                <?php } ?>

                            </select>
                        </div>
                    <?php } ?>
                    <!-- end -->

                    <div class=" flex space-x-5 items-center">
                        <div class="flex space-x-7">
                            <h3>Quantity</h3>
                            <input type="number" class="border w-20 h-6 indent-12 shadow-xl rounded-md" value="1" min="1">
                        </div>
                        <?php if ($ItemDetails[0]["instock"] <= 10) { ?>
                            <p class=" opacity-70 text-sm">Only <span class=" text-red-500 font-semibold"><?= $ItemDetails[0]["instock"] ?></span> items left</p>
                        <?php } ?>
                    </div>
                    <div class=" flex">
                        <div>
                            <button type="submit" class="btn mr-3">Add To Cart</button>
                        </div>
                        <a href="./mainPage.php?pid=<?= $id ?>">
                            <p class="btn">Add To Wishlist</p>
                        </a>
                    </div>
                </div>
            </header>
        </form>
        <main class="flex justify-center">
            <div class=" lg:w-[1050px] lg:h-[800px] p-5 lg:mt-20 mt-2 lg:min-h-screen flex-col justify-center items-center border-2 shadow-xl  rounded-xl bg-transparent">
                <div class="flex justify-center items-center flex-col space-y-3">
                    <p class=" lg:text-3xl text-lg mt-3">Overall Rating</p>
                    <h1><?= number_format($overallAverageRating, 1) ?></h1>
                    <div class=" text-yellow-500 text-xl">
                        <?php
                        if (!function_exists('numberToStars')) {
                            function numberToStars($number)
                            {
                                $roundedNumber = round($number);
                                $maxStars = 5;
                                $fullStars = str_repeat('★', $roundedNumber);
                                $emptyStars = str_repeat('☆', $maxStars - $roundedNumber);
                                return $fullStars . $emptyStars;
                            }

                        ?>
                        <?php }  ?>
                        <?= numberToStars($overallAverageRating) ?>

                    </div>
                    <p class=" font-philosopher">Based on <?= $totalCustomerCount ?> Reviews</p>
                </div>

                <div class=" w-full lg:flex-col lg:text-base text-sm">
                    <div class=" lg:flex flex-wrap justify-evenly items-center h-20">
                        <?php foreach ($topComments as $CustomerReviews) { ?>
                            <div class="reviewCard flex  ">
                                <div class="flex">
                                    <img src="../../Storage/profile/<?= $CustomerReviews["p_picture"] ?>" alt="..." class=" lg:w-[70px] w-12 mr-10 rounded-full">
                                    <div class="">
                                        <h2 class=" font-semibold lg:text-xl text-lg"><?= $CustomerReviews["username"] ?></h2>
                                        <div class=" text-yellow-500 text-xl">
                                            <?php
                                            if (!function_exists('numberToStars')) {
                                                function numberToStars($number)
                                                {
                                                    $roundedNumber = round($number);
                                                    $maxStars = 5;
                                                    $fullStars = str_repeat('★', $roundedNumber);
                                                    $emptyStars = str_repeat('☆', $maxStars - $roundedNumber);
                                                    return $fullStars . $emptyStars;
                                                }

                                            ?>
                                            <?php }  ?>
                                            <?= numberToStars($CustomerReviews["review_rating"]) ?>

                                        </div>
                                    </div>
                                </div>
                                <p class=""><?= $CustomerReviews["comment"] ?></p>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </main>

         <script>
            // Get references to the popup and buttons
            const chatBoxPopup = document.getElementById("chatBoxPopup");
            const chatBoxButton = document.getElementById("chatBoxButton");

            // Function to toggle the visibility of the popup 
            function toggleLogoutPopup() {
                chatBoxPopup.classList.toggle("hidden");
            }

            // Attach click event listeners to the chatbox button 
            chatBoxButton.addEventListener("click", toggleLogoutPopup);
        </script>
        <script src="./resources/js/toggle.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>


</body>

</html>