<?php
session_start();
$productdata = $_SESSION["editproduct"];
include "../Controller/categoryListController.php";
// print_r($productdata);
include "./sidebar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/js/dateandtime.js " defer></script>
    <link rel="stylesheet" href="./resources/css/inventory.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <script>

        function fetch(){
            var get=document.getElementById("get1").value;
            document.getElementById("put1").value=get;

            var get=document.getElementById("get2").value;
            document.getElementById("put2").value=get;

            var get=document.getElementById("get3").value;
            document.getElementById("put3").value=get;
        }
    </script> -->
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main class=" ml-56 h-screen">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p id="date_time"></p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="55px"></li>
                </ul>
            </div>
        </header>
        <section>
            <p class=" p-3"><a href="./productList.php">Inventory</a> > <span class=" font-semibold">Edit Product</span></p>

            <div class=" flex justify-center px-5 py-1">
                <div class=" w-screen h-full rounded-lg px-24 py-3 shadow-xl border-2 border-blue-950">
                    <form action="../Controller/updateProductController.php" method="POST">
                        <div class=" pb-5">
                            <h1 class=" text-lg font-bold font-philosopher">Edit Product</h1>
                        </div>
                        <div>
                            <ul class=" flex space-x-3">
                                <li>
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo">
                                            <img src="../View/resources/img/product image.jpg" id="photoimg" alt="">
                                        </label>
                                        <input type="file" class=" hidden" id="photo" accept=".png,.jpeg" value="<?php echo $productdata[0]["p_one"] ?>" name="photo1">
                                    </div>
                                </li>
                                <li>
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo">
                                            <img src="../View/resources/img/product image.jpg" id="photoimg" alt="">
                                        </label>
                                        <input type="file" class=" hidden" id="photo" accept=".png,.jpeg" value="<?php echo $productdata[0]["p_two"] ?>" name="photo2">
                                    </div>
                                </li>
                                <li>
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo">
                                            <img src="../View/resources/img/product image.jpg" id="photoimg" alt="">
                                        </label>
                                        <input type="file" class=" hidden" id="photo" accept=".png,.jpeg" value="<?php echo $productdata[0]["p_three"] ?>" name="photo3">
                                    </div>
                                </li>
                                <li>
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo">
                                            <img src="../View/resources/img/product image.jpg" id="photoimg" alt="">
                                        </label>
                                        <input type="file" class=" hidden" id="photo" accept=".png,.jpeg" value="<?php echo $productdata[0]["p_four"] ?>" name="photo4">
                                    </div>
                                </li>
                                <li>
                                    <div class=" w-20 h-20 flex justify-center items-center text-blue-500">Upload images</div>
                                </li>
                            </ul>
                        </div>

                        <div class=" flex justify-between pt-5">
                            <div class="flex-col space-y-5">
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                            <input type="hidden" name="id" id="username" autocomplete="username" value="<?php echo $productdata[0]["id"] ?>" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div>
                                        <p>Product Name</p>
                                    </div>
                                    <div><input type="text" name="pname" value="<?php echo $productdata[0]["name"] ?>" class="inputBox" placeholder="Enter Product Name"></div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Product ID</p>
                                    </div>
                                    <div><input type="text" name="pid" value="<?php echo $productdata[0]["product_id"] ?>" class="inputBox" placeholder="#001"></div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Category</p>
                                    </div>
                                    <div><select name="category" class=" w-[203px] h-10 bg-transparent border border-gray-400 py-2 rounded-md ">
                                        <?php foreach ($categories as $category) { ?>
                                            <option value="<?= $category["id"] ?>"><?= $category["c_name"] ?></option>
                                            <?php } ?>
                                            
                                        
                                        </select></div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div><label>Color 1</label></div>
                                    <div><input type="color" name="color1" value="<?php echo $productdata[0]["color_1"] ?>">
                                        <!-- <input type="text" id="put1" name="color1" value="<?php echo $productdata[0]["color_1"] ?>" class="inputBox"></div> -->
                                    </div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div><label>Color 2</label></div>
                                    <div><input type="color" name="color2" value="<?php echo $productdata[0]["color_2"] ?>">
                                        <!-- <input type="text" id="put2" name="color2" value="<?php echo $productdata[0]["color_2"] ?>" class="inputBox"></div> -->
                                    </div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div><label>Color 2</label></div>
                                    <div><input type="color" name="color3" value="<?php echo $productdata[0]["color_3"] ?>">
                                        <!-- <input type="text" id="put3" name="color3" value="<?php echo $productdata[0]["color_3"] ?>" class="inputBox"></div> -->
                                    </div>
                                </div>
                                <!-- <div class=" flex justify-between space-x-10 items-center">
                                <div>
                                    <p>Colors</p>
                                </div>
                                <div>
                                    <div class=" pb-3">
                                        <input type="checkbox" class=" w-5 h-5" id="red">
                                        <label for="red">Red</label>
                                        <input type="checkbox" class=" w-5 h-5" id="blue">
                                        <label for="blue">Blue</label>
                                        <input type="checkbox" class=" w-5 h-5" id="green">
                                        <label for="green">Green</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" class=" w-5 h-5" id="yellow">
                                        <label for="yellow">Yellow</label>
                                        <input type="checkbox" class=" w-5 h-5" id="black">
                                        <label for="black">Black</label>
                                        <input type="checkbox" class=" w-5 h-5" id="white">
                                        <label for="white">White</label>
                                    </div>
                                </div>
                            </div>
                            <div class=" flex justify-between space-x-10 items-center">
                                <div>
                                    <p>Sizes</p>
                                </div>
                                <div>
                                    <div class=" pb-3 space-x-1">
                                        <input type="checkbox" class=" w-5 h-5" id="red">
                                        <label for="red">XS</label>
                                        <input type="checkbox" class=" w-5 h-5" id="blue">
                                        <label for="blue">S</label>
                                        <input type="checkbox" class=" w-5 h-5" id="green">
                                        <label for="green">M</label>
                                        <input type="checkbox" class=" w-5 h-5" id="yellow">
                                        <label for="yellow">L</label>

                                    </div>
                                    <div>
                                        <input type="checkbox" class=" w-5 h-5" id="black">
                                        <label for="black">XL</label>
                                        <input type="checkbox" class=" w-5 h-5" id="white">
                                        <label for="white">Free Size</label>
                                    </div>
                                </div>
                            </div> -->
                            </div>

                            <div class="flex-col space-y-5">
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Buying Price</p>
                                    </div>
                                    <div><input type="text" name="buyprice" value="<?php echo $productdata[0]["buyprice"] ?>" class=" inputBox"></div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Selling Price</p>
                                    </div>
                                    <div><input type="text" name="sellprice" value="<?php echo $productdata[0]["sellprice"] ?>" class="inputBox"></div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Quantity</p>
                                    </div>
                                    <div><input type="text" name="quantity" value="<?php echo $productdata[0]["instock"] ?>" class="inputBox"></div>
                                </div>
                                <div class=" flex justify-between space-x-10">
                                    <div>
                                        <p>Description</p>
                                    </div>
                                    <div><input type="text" cols="23" name="description" rows="3" value="<?php echo $productdata[0]["description"] ?>" class="inputBox"></input></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                        </div>
                    </form>
                    <a href="../Controller/deleteProductController.php?id=<?php echo $productdata[0]["id"] ?>">
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
                        </div>
                </div>
            </div>



        </section>
    </main>
</body>

</html>