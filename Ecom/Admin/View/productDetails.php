<?php
include "../Controller/productDetailController.php";
include "./adminsidebar.php";

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Product Detail</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/productsDetails.css">
</head>

<body>
    <main id="main" class="ml-60 h-screen pt-20  w-[80%] font-Inter">

        <div class=" ml-16">
            <p class=" text-2xl font-bold py-3">Products Details</p>

            <div class="py-10 w-full flex">
                <div class="flex flex-col space-y-4 items-center">
                    <div><img src="../../Storage/product/<?= $productDetail["p_one"] ?>" alt="..." width="100px"></div>
                    <div class="flex space-x-5 justify-between">
                        <?php if (!empty($productDetail["p_two"])) { ?>
                            <div><img src="../../Storage/product/<?= $productDetail["p_two"] ?>" alt="..." width="100px"></div>
                        <?php } else { ?>
                            <div></div>
                        <?php } ?>
                        <?php if (!empty($productDetail["p_three"])) { ?>
                            <div><img src="../../Storage/product/<?= $productDetail["p_three"] ?>" alt="..." width="100px"></div>
                        <?php } else { ?>
                            <div></div>
                        <?php } ?>
                        <?php if (!empty($productDetail["p_four"])) { ?>
                            <div><img src="../../Storage/product/<?= $productDetail["p_four"] ?>" alt="..." width="100px"></div>
                        <?php } else { ?>
                            <div></div>
                        <?php } ?>

                    </div>
                </div>
                <div class=" ml-40">
                    <div class=" flex-col space-y-3 w-full py-4 text-lg">
                        <div class=" flex">
                            <p class="w-40">Store Name</p>
                            <p class="w-32">-</p>
                            <p><?= $productDetail["store_name"]; ?></p>
                        </div>
                        <div class=" flex">
                            <p class="w-40">Category</p>
                            <p class="w-32">-</p>
                            <p><?= $productDetail["c_name"]; ?></p>
                        </div>
                        <div class="flex">
                            <p class="w-40">Create Date</p>
                            <p class="w-32">-</p>
                            <p class=""><?= $productDetail["create_date"]; ?></p>
                        </div>
                        <div class="flex">
                            <p class="w-40">Stock</p>
                            <p class="w-32">-</p>
                            <p class=""><?= $productDetail["instock"]; ?> Units</p>
                        </div>
                        <div class="flex">
                            <p class="w-40">Color</p>
                            <p class="w-32">-</p>
                            <div class="flex space-x-2">
                                <div class="w-7 h-7 rounded-full" style="background-color: <?= $productDetail["color_1"]; ?>"></div>
                                <div class="w-7 h-7 rounded-full" style="background-color: <?= $productDetail["color_2"]; ?>"></div>
                                <div class="w-7 h-7 rounded-full" style="background-color: <?= $productDetail["color_3"]; ?>"></div>
                            </div>
                        </div>
                        <div class="flex">
                            <p class="w-40">Price</p>
                            <p class="w-32">-</p>
                            <p class="">$<?= $productDetail["sellprice"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="font-semibold text-4xl"><?= $productDetail["name"]; ?></p>
            <div class="flex space-x-4">
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
                <p class=" font-medium"><?= $totalCustomerCount ?> Reviews</p>
            </div>
        </div>
    </main>
</body>

</html>