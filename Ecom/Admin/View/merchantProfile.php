 <?php
    include "./adminsidebar.php";
    include "../Controller/merchantDetailController.php";
    ?>
 <!doctype html>
 <html>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
     <title>Merchant Profile</title>
     <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./resources/css/merchantProfile.css">
 </head>

 <body>
     <main id="main" class=" ml-72 mt-24">
         <div class=" px-5 space-y-5 pb-3">
             <p class=" text-xl font-semibold font-philosopher">"Merchant Name" Profile</p>

             <section class=" border border-gray-400 rounded-lg shadow-lg p-3 h-44 relative">
                 <div class=" bg-violet-300 rounded-md w-auto border h-20"></div>
                 <div class=" flex items-center space-x-5 absolute top-[19%] left-[5%]">
                    <?php if(isset($merchantDetail["logo"])){ ?>
                     <img src="../../Storage/profile/<?=$merchantDetail["logo"]?>" alt="..." width="150px" class=" rounded-md">
                     <?php }else{ ?>
                        <img src="../../Storage/profile/403022_business man_male_user_avatar_profile_icon.png" alt="..." width="100px" class=" rounded-md">
                        <?php }?>
                     <div class=" pt-14">
                         <p class=" font-semibold text-lg"><?= $merchantDetail["store_name"] ?></p>
                         <p><?= $merchantDetail["address"] ?></p>
                     </div>
                 </div>
             </section>

             <div class=" flex space-x-5 ">
                 <section class="border border-gray-400 rounded-lg shadow-lg p-3 w-[40%]">
                     <div class=" pl-10">
                         <p class=" font-semibold text-lg ">Current Business Plan</p>
                         <div class=" w-full space-y-2 pt-3">
                             <div class=" flex justify-between">
                                 <p class=" w-20">Plan</p>
                                 <p>-</p>
                                 <p class=" w-40"><?= $merchantDetail["plan_name"] ?></p>
                             </div>
                             <div class=" flex justify-between">
                                 <p class=" w-20">Start Date</p>
                                 <p>-</p>
                                 <p class=" w-40"><?= $merchantDetail["plan_start_date"] ?></p>
                             </div>
                             <div class=" flex justify-between">
                                 <p class=" w-20">End Date</p>
                                 <p>-</p>
                                 <p class=" w-40"><?= $merchantDetail["plan_end_date"] ?></p>
                             </div>
                         </div>
                     </div>
                 </section>

                 <section class="border border-gray-400 rounded-lg shadow-lg p-5 w-full">
                     <div class=" flex justify-around">
                         <div class=" flex items-center py-5 space-x-3 border border-gray-400 rounded-lg shadow-lg p-4">
                             <img src="./resources/img/order.png" alt="...">
                             <div class=" font-semibold text-center">
                                 <p>Orders</p>
                                 <?php if (isset($orderCount["order_count"])) { ?>
                                     <p><?= $orderCount["order_count"] ?></p>
                                 <?php } else { ?>
                                     <p>0</p>
                                 <?php } ?>
                             </div>
                         </div>
                         <div class=" flex items-center py-5 space-x-3 border border-gray-400 rounded-lg shadow-lg p-4">
                             <img src="./resources/img/purchased.png" alt="...">
                             <div class=" font-semibold text-center">
                                 <p>Products</p>
                                 <?php if (isset($productCount["product_count"])) { ?>
                                     <p><?= $productCount["product_count"] ?></p>
                                 <?php } else { ?>
                                     <p>0</p>
                                 <?php } ?>


                             </div>
                         </div>
                         <div class=" flex items-center py-5 space-x-3 border border-gray-400 rounded-lg shadow-lg p-4">
                             <img src="./resources/img/instock.png" alt="...">
                             <div class=" font-semibold text-center">
                                 <p>In-Stock</p>
                                 <p>
                                     <?php if (isset($productSum["total_product_sum"])) { ?>
                                 <p><?= $productSum["total_product_sum"] ?></p>
                             <?php } else { ?>
                                 <p>0</p>
                             <?php } ?>

                             </div>
                         </div>
                     </div>
                 </section>
             </div>


             <section class="border border-gray-400 rounded-lg shadow-lg p-5 w-full">
                 <p class=" font-semibold">All Products</p>
                 <div class=" flex flex-wrap space-x-5 p-5">
                     <?php foreach ($productList as $productListDetail) { ?>
                         <div class=" flex flex-col  w-[200px] h-[250px] rounded-lg  shadow-xl border border-gray-400 text-center">
                             <div class=" h-24">
                                <img src="../../Storage/product/<?= $productListDetail["p_one"] ?>" alt="..." class=" w-24 mx-auto pt-2">
                            </div>
                             <div class="pt-10">
                                 <p><?= $productListDetail["name"] ?></p>
                                 <p><?= $productListDetail["sellprice"] ?> Ks</p>
                             </div>
                         </div>
                     <?php } ?>
                 </div>
             </section>

         </div>
     </main>
 </body>

 </html>