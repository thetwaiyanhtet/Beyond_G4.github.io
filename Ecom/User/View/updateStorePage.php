<?php
include "../Controller/storePageController.php";
include "../Controller/storePageCategoryController.php";
?>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script src="./resources/js/searchStoreProduct.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/js/bannerSlideShow.js" defer></script>
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

</head>

<body class=" dark:bg-gray-950">
    <nav class="m-10">
        <div class="flex justify-between items-center">
            <a href="./mainPage.php"><ion-icon name="chevron-back-outline" class=" text-2xl"></ion-icon></a>

            <button id="theme-toggle" type="button" class="text-gray-900 dark:text-white focus:outline-none  rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </nav>
    <section>

        <div class="banner flex justify-between w-full">
            <div class=" flex-col space-y-3 mx-auto w-[10%] pl-5">
                <p class="font-PlayfairSC font-semibold md:text-2xl text-sm dark:text-white">
                    <?php
                    $storeName = $storeData[0]['store_name'];
                    echo $storeName;
                    ?>
                </p>
                <?php if (isset($storeData[0]["logo"])) { ?>
                    <img src="../../Storage/profile/<?= $storeData[0]["logo"] ?>" class=" w-16 h-16 rounded-md">
                <?php } ?>
            </div>
            <?php if (isset($storeData[0]["banner"])) { ?>
                <img src="../../Storage/banner/<?= $storeData[0]["banner"] ?>" alt="img" class="rounded-lg w-[90%] m-auto">
            <?php } ?>
        </div>

        <section class=" pt-5 md:flex flex-col space-x-3">
            <div class=" pl-3 pt-3">
                <div class="flex items-center mx-auto">
                    <div class="relative md:w-[250px] w-[150px]">
                        <input type="text" id="search" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by Product Name..." required>
                    </div>
                    <button id="sbtn" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
                <ul class="md:w-48 w-40 text-sm font-medium text-gray-900  md:m-0 m-10">
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <label for="vue-checkbox" class="w-full py-3 text-lg font-medium text-gray-900 dark:text-gray-300">Categories</label>
                        </div>
                    </li>
                    <?php foreach ($categories as $category) { ?>
                        <li class="w-full border-b py-2 border-gray-200 rounded-t-lg dark:border-gray-600 category dark:text-white" data-category-id="<?= $category["id"] ?>">
                            <div class="flex items-center pl-3"><?= $category["c_name"] ?></div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="flex pb-6 h-96">
                <div class="flex flex-wrap w-full  justify-around" id="searchResult">
                    <!-- <form action="../Controller/newcartController.php" method="post"> -->
                    <?php foreach ($AllProducts as $Product) { ?>
                        <div class="inline p-3">
                            <div class=" h-auto w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                                <form action="./mainPage.php" method="post">
                                    <div class="relative overflow-hidden  bg-slate-300 dark:bg-slate-700 rounded-xl ">
                                        <div class="w-56 m-auto p-2 h-44">
                                            <img class="w-48 h-40 m-auto" src="../../Storage/product/<?= $Product["p_one"] ?>" alt="">
                                        </div>
                                        <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                            <a href="./mainPage.php?pid=<?= $Product["id"]; ?>"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="heart-outline"></ion-icon></button></a>
                                            <a href="../View/itemDetail.php?pid=<?= $Product["id"]; ?>"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="list-outline"></ion-icon></button></a>

                                        </div>
                                    </div>
                                    <div class="relative dark:text-white">
                                        <h2 class="mt-3 ml-5 text-sm md:text-md capitalize font-bold w-full"><?php echo $Product['name'] ?></h2>
                                        <!-- <del class="text-red-700 text-lg">$999</del> -->
                                        <p class="text-xs mt-2 ml-5 block "><?php echo $Product['description'] ?></p>
                                        <p class="text-md font-bold mt-2 ml-5 block "><?php echo $Product['sellprice'] ?> Ks</p>
                                        <button type="submit" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto justify-end items-baseline">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                                        <input type="hidden" name="product_id" value="<?= $Product["id"] ?>">
                                    </div>

                            </div>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </section>

    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>