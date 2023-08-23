<?php
include "./navigation.php";
// include "../Controller/categoryListController.php";
// include "../Controller/newcartController.php";
// include "../Controller/wishlistcart.php";
// include "../Controller/trendingProductController.php";
// include  "../../User/Controller/bannerController.php";
// include  "../../Admin/Controller/readfaqController.php";
// include "../Controller/userProfileController.php";
// include "../Controller/testinguserProfileController.php";
// $faq = $_SESSION["m_faq"];
// include "../Controller/bannerController.php";
// $banner = $_SESSION["banner"];
// $userData = $_SESSION["user_data"];
// $verifyData = $_SESSION['verifyData'];
// $customer = $_SESSION['checkEmail']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Beyond</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/scroll.css">
    <link rel="stylesheet" href="./resources/css/bannerSlideShow.css">
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script src="./resources/js/bannerSlideShow.js" defer></script>
    <script src="./resources/js/searchProduct.js" defer></script>
    <script src="./resources/js/userMainPage.js" defer></script>
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class=" bg-purple-50 dark:bg-gray-950 hide-scroll-bar scroll-smooth">


    <form action="" method="post" class="bg-violet-300 dark:bg-color-primary-dark border-b border-gray-200 dark:border-gray-600  w-full z-30  md:mt-8 py-4">
        <div class="flex w-3/4 m-auto">
            <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">All categories <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg></button>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button relative">
                    <?php foreach ($categories as $category) { ?>
                        <li class="relative">
                            <div class="category inline-flex w-full px-4 py-1 text-gray-900 hover:bg-purple-100 hover:text-purple-600 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-800 dark:hover:text-purple-200 font-semibold text-start" data-category-id="<?= $category["id"] ?>">
                                <?= $category["c_name"] ?>
                            </div>
                            <div class="category-subcategories fixed top-0 w-64 h-auto left-44 hidden py-3 bg-white shadow dark:bg-gray-700 rounded-md">
                                <?php foreach ($subCategories as $subcategory) {
                                    if ($subcategory["category_id"] === $category["id"]) { ?>
                                        <div class="py-1 pl-3 subCategory text-gray-900 hover:bg-purple-100 hover:text-purple-600 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-800 dark:hover:text-purple-200" data-subcategory-id="<?= $subcategory["id"] ?>">
                                            <?= $subcategory["s_c_name"] ?>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="relative w-full">
                <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-purple-500 focus:border-purple-500 " placeholder="Search Here..." required>
                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium w-12 h-full text-white bg-purple-700 rounded-r-lg border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                    <svg class="w-4 h-4 m-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>














    <section class="sec h-screen" id="searchResult">
        <section class="w-[100%] md:w-[90%] m-auto">

            <div class="banner-container md:h-[450px] h-40 rounded-none">
                <!-- Banner_1 section -->
                <img src="../../Storage/banner/<?= $banner[0]['banner_one_img'] ?>" alt="" class="banner-image">
                <!-- Additional banners go here -->
                <img src="../../Storage/banner/<?= $banner[0]['banner_two_img'] ?>" alt="" class="banner-image">
                <img src="../../Storage/banner/<?= $banner[0]['banner_three_img'] ?>" alt="" class="banner-image">
            </div>


            <!--Trending product section  -->
            <div class=" flex flex-col m-auto p-auto">

                <h1 class="m-2 text-2xl md:text-3xl text-center font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-philosopher">Trending Product</span></h1>
                <hr class="w-20 m-auto bg-purple-800 dark:bg-white h-1 ">

                <div class="flex overflow-x-scroll pb-3 hide-scroll-bar mt-4">
                    <div class="flex flex-nowrap">
                        <div id="product-grid">
                            <?php
                            // $product_array = $db_handle->runQuery("SELECT * FROM m_cart ORDER BY id ASC");
                            if (!empty($_SESSION["trandingProduct"])) {
                                foreach ($_SESSION["trandingProduct"] as $tranding) {
                            ?>
                                    <div class="product-item">
                                        <!-- <form method="post" action="../Controller/cartController.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>"> -->
                                        <div class="mx-4">
                                            <div class="h-80 w-52 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                                                <form action="./mainPage.php" method="post">
                                                    <div class="relative overflow-hidden bg-slate-300 dark:bg-slate-700 rounded-xl ">
                                                        <input type="hidden" name="image" value="../../<?php echo $tranding["p_one"]; ?>">
                                                        <input type="hidden" name="price" value="/<?= $tranding["sellprice"] ?>">
                                                        <div class=" flex justify-center items-center h-44">
                                                            <img class=" w-3/5 scale-110 md:scale-105 h-auto m-auto p-4" src="../../Storage/product/<?php echo $tranding["p_one"]; ?>" alt="">
                                                        </div>
                                                        <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                                            <a href="./mainPage.php?pid=<?= $tranding["product_id"]; ?>"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="heart-outline"></ion-icon></button></a>

                                                            <a href="../View/itemDetail.php?pid=<?= $tranding["product_id"]; ?>"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="list-outline"></ion-icon></button></a>
                                                        </div>
                                                    </div>

                                                    <div class=" dark:text-white ">
                                                        <h2 class="mt-3 ml-5 text-sm md:text-md capitalize font-bold w-full overflow-hidden "><?php echo $tranding["name"]; ?></h2>
                                                        <p class="text-xs mt-2 ml-5 block overflow-hidden h-4"><?php echo $tranding["description"]; ?></p>
                                                        <!-- <del class="text-red-700 text-md">$999</del> -->
                                                        <p name="price" class="text-md font-bold mt-2 mb-1 ml-5 block "><?php echo $tranding["sellprice"] . " Ks"; ?></p>
                                                        <div class="cart-action relative">
                                                            <input type="submit" value="Add to Cart" class="btnAddAction bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto " />
                                                            <ion-icon name="cart-outline" class="absolute top-3 right-6 md:right-10 text-xl"></ion-icon>
                                                            <input type="hidden" name="product_id" value="<?= $tranding["product_id"]; ?>">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                        </div>
                <?php
                                }
                            }
                ?>

                    </div>

                </div>
            </div>
            </div>

            <a href="./trandingProduct.php" class="relative inline-flex items-center justify-center p-4 px-6 py-1 overflow-hidden font-medium text-my-purple1 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group float-right m-2">
                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-purple-500 group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
                <span class="absolute flex items-center justify-center w-full h-full p-3 text-purple-500 transition-all duration-300 transform group-hover:translate-x-full ease">View All</span>
                <span class="relative invisible ">View All</span>
            </a>
            <!--End of Trending product section  -->
            <!-- Banner 2 -->
            <div class="banner-container md:h-96 h-40 rounded-none">
                <img src="../../Storage/banner/<?= $banner[0]['banner_four_img'] ?>" alt="" class="banner-image">
                <img src="../../Storage/banner/<?= $banner[0]['banner_five_img'] ?>" alt="" class="banner-image">
                <img src="../../Storage/banner/<?= $banner[0]['banner_six_img'] ?>" alt="" class="banner-image">
                <!-- More images for this banner section -->
            </div>
            <!--End of Banner 2 -->
            <!-- All Product session start -->
            <div class=" pdt m-2">
                <h1 class="m-2 text-2xl md:text-3xl text-center font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-philosopher">All Product</span></h1>
                <hr class="w-20 m-auto bg-purple-800 dark:bg-white h-1 ">
            </div>
            <div>
                <div class="flex overflow-y-scroll pb-6 ">
                    <div class="flex flex-wrap w-full ">
                        <!-- <form action="../Controller/newcartController.php" method="post"> -->
                        <?php foreach ($AllProduct as $productDetail) { ?>
                            <span class="h-auto p-1">
                                <div class="h-80 w-[185px] md:w-[240px] rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                                    <form action="./mainPage.php" method="post">
                                        <div class="relative overflow-hidden  bg-slate-300 dark:bg-slate-700 rounded-xl ">
                                            <div class="flex justify-center items-center h-44">
                                                <img class="w-3/5 scale-110 md:scale-105 h-auto m-auto p-4" src="../../Storage/product/<?= $productDetail["p_one"] ?>" alt="">
                                            </div>
                                            <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                                <a href="./mainPage.php?pid=<?= $productDetail["id"]; ?>"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="heart-outline"></ion-icon></button></a>
                                                <a href="../View/itemDetail.php?pid=<?= $productDetail["id"]; ?>"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="list-outline"></ion-icon></button></a>

                                            </div>
                                        </div>
                                        <div class="relative dark:text-white">
                                            <h2 class="mt-3 mx-5 text-sm md:text-md capitalize font-bold w-full overflow-hidden h-4"><?= $productDetail["name"] ?></h2>
                                            <!-- <del class="text-red-700 text-lg">$999</del> -->
                                            <p class="text-xs mt-2 mx-5 block overflow-hidden h-4"><?= $productDetail["description"] ?></p>
                                            <p class="text-md font-bold mt-2 mb-1 ml-5 block "><?= $productDetail["sellprice"] ?> Ks</p>
                                            <button type="submit" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto justify-end items-baseline">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                                            <input type="hidden" name="product_id" value="<?= $productDetail["id"] ?>">
                                        </div>

                                </div>
                                </form>
                            </span>
                        <?php } ?>
                    </div>

                </div>

            </div>
            <a href="./trandingProduct.php" class="relative inline-flex items-center justify-center p-4 px-6 py-1 overflow-hidden font-medium text-my-purple1 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group float-right m-2">
                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-purple-500 group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
                <span class="absolute flex items-center justify-center w-full h-full text-purple-500 transition-all duration-300 transform group-hover:translate-x-full ease">View All</span>
                <span class="relative invisible ">View All</span>
            </a>

            <div class="banner-container md:h-96 h-40">
                <img src="../../Storage/banner/<?= $banner[0]['banner_seven_img'] ?>" alt="" class="banner-image">
                <img src="../../Storage/banner/<?= $banner[0]['banner_eight_img'] ?>" alt="" class="banner-image">
                <img src="../../Storage/banner/<?= $banner[0]['banner_nine_img'] ?>" alt="" class="banner-image">
                <!-- More images for this banner section -->
            </div>
            <h1 class="m-2 text-2xl md:text-3xl text-center font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-philosopher">Trending Shops</span></h1>
            <hr class="w-20 m-auto bg-purple-800 dark:bg-white h-1 mb-4">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 m-10">
                <!-- Product Card 1 -->
                <?php foreach ($latestMerchants as $latestShop) { ?>
                    <div class="w-full sm:w-1/2 lg:w-1/3 mb-4">
                        <div class=" w-auto h-60 p-4 bg-white dark:bg-gray-800 rounded-xl shadow-xl z-10">
                            <div class="relative">
                                <img src="../../Storage/profile/<?= $latestShop["logo"] ?>" class=" w-20 h-20 object-cover rounded-full ml-2" alt="">
                                <div class="bottom-0 right-0 mb-2 mr-2 px-4 rounded-lg absolute bg-yellow-500 text-gray-100 text-xs font-medium">Myanmar</div>
                            </div>
                            <div class="px-2 py-1">
                                <!-- Product Title -->
                                <div class="text-sm md:text-base font-bold pr-2"><?= $latestShop["store_name"] ?></div>
                                <div class="flex py-2">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
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
                                                <?= numberToStars($latestShop["review_rating"]) ?>

                                            </div>
                                            <p class="text-gray-600 font-bold text-xs md:text-sm ml-1">
                                                <?= $latestShop["review_rating"] ?>
                                                <span class="text-gray-500 font-normal">(<?= $latestShop["review_count"] ?> reviews)</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="bg-black dark:bg-slate-300 rounded-xl py-4 m-2 flex">
                                <div>
                                    <a href="#" target="_blank"><img alt="" height="auto" src="./resources/img/crop.png" /></a>
                                </div>
                                <div class="text-white w-72">
                                    <h2 class="mt-3 text-sm md:text-md capitalize font-bold">Long Sleeve Crop Top</h2>
                                  
                                    <p class="text-xs mt-2 ml-1 block ">E-spot</p>
                                    <p class="text-md font-bold mt-2 ml-1 block ">$999</p>
                                    <div class="flex justify-end">
                                        <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="heart-outline"></ion-icon></button>
                                        <div class="">
                                            <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="list-outline"></ion-icon></button>
                                        </div>
                                        <div class="">
                                            <button class="bg-pink-900 text-white p-1.5 text-2xl rounded-full m-1 w-9 h-9 shadow-xl"><ion-icon name="cart-outline"></ion-icon></button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                                <a class="inset-x-0 bottom-0 flex justify-center bg-purple-500 hover:bg-white text-sm md:text-base border hover:border-2 hover:border-purple-500 rounded-xl p-2 text-gray-100 hover:text-purple-900 w-24 float-right mb-4" href="./updateStorePage.php?id=<?= $latestShop['id'] ?>">View Shop</a>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>




            <section class=" m-auto z-0">
                <div class="banner-container md:h-96 h-40">
                    <img src="../../Storage/banner/<?= $banner[0]['banner_ten_img'] ?>" alt="" class="banner-image">
                    <img src="../../Storage/banner/<?= $banner[0]['banner_eleven_img'] ?>" alt="" class="banner-image">
                    <img src="../../Storage/banner/<?= $banner[0]['banner_twelve_img'] ?>" alt="" class="banner-image">
                    <!-- More images for this banner section -->
                </div>

                <div class=" w-full h-auto py-5 z-0">
                    <h1 class="m-2 text-2xl md:text-3xl text-center font-bold"><span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-red-400 font-philosopher">Frequently Ask Questions</span></h1>
                    <hr class="w-20 m-auto bg-purple-800 dark:bg-white h-1 mb-4">



                    <div class="w-[90%] md:w-[80%] m-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 backdrop-blur-lg">

                        <div class="p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white rounded-lg" data-inactive-classes="text-gray-500 dark:text-gray-400">
                                <h2 id="accordion-flush-heading-1">
                                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1">
                                        <span><?= $faq[0]['question_one'] ?></span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400"><?= $faq[0]['answer_one'] ?>
                                        </p>

                                    </div>
                                </div>
                                <h2 id="accordion-flush-heading-2">
                                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                                        <span><?= $faq[0]['question_two'] ?></span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400"><?= $faq[0]['answer_two'] ?></p>

                                    </div>
                                </div>
                                <h2 id="accordion-flush-heading-3">
                                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                                        <span><?= $faq[0]['question_three'] ?></span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400"><?= $faq[0]['answer_three'] ?></p>

                                    </div>
                                </div>
                                <h2 id="accordion-flush-heading-4">
                                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
                                        <span><?= $faq[0]['question_four'] ?></span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400"><?= $faq[0]['answer_four'] ?></p>
                                        </ul>
                                    </div>
                                </div>
                                <h2 id="accordion-flush-heading-5">
                                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-5">
                                        <span><?= $faq[0]['question_fivre'] ?>
                                        </span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400"><?= $faq[0]['answer_five'] ?></p>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
            </section>
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



    </section>


</body>




</html>