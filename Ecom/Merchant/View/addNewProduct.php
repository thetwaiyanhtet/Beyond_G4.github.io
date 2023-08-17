<?php

include "./sidebar.php";
include "../Controller/categoryListController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/css/inventory.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="../View/resources/js/product.js" defer></script>
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
    <main class=" ml-56">
        <section>
            <p class=" p-3"><a href="./productList.php">Inventory</a> > <span class=" font-semibold">New Product</span></p>
            <form action="../Controller/addNewProductController.php" method="POST" enctype="multipart/form-data">
                <div class=" flex justify-center px-5 py-1">
                    <div class=" w-screen h-full rounded-lg px-24 py-3 shadow-xl border-2 border-blue-950">
                        <div class=" pb-5">
                            <h1 class=" text-lg font-bold font-philosopher">New Product</h1>
                        </div>
                        <div>
                            <ul class=" flex space-x-3">
                                <li>
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo1">
                                            <img src="../View/resources/img/gallery-add.png" id="photoimg1" alt="">
                                        </label>
                                        <input type="file" class=" hidden" id="photo1" accept=".png,.jpeg" name="photo1">
                                    </div>
                                </li>
                                <li>
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo2">
                                            <img src="../View/resources/img/gallery-add.png" id="photoimg2" alt="">
                                        </label>
                                        <input type="file" class=" hidden" id="photo2" accept=".png,.jpeg" name="photo2">
                                    </div>
                                </li>
                                <li>
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo3">
                                            <img src="../View/resources/img/gallery-add.png" id="photoimg3" alt="">
                                        </label>
                                        <input type="file" class=" hidden" id="photo3" accept=".png,.jpeg" name="photo3">
                                    </div>
                                </li>
                                <li>
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo4">
                                            <img src="../View/resources/img/gallery-add.png" id="photoimg4" alt="">
                                        </label>
                                        <input type="file" class=" hidden" id="photo4" accept=".png,.jpeg" name="photo4">
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class=" flex justify-between pt-5">
                            <div class="flex-col space-y-5">
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Product Name</p>
                                    </div>
                                    <div><input type="text" name="pname" class="inputBox" placeholder="Enter Product Name"></div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Code</p>
                                    </div>
                                    <div><input type="text" name="pid" class="inputBox" placeholder="00">
                                        <div class="text-red-800 font-thin">
                                            <?php
                                            if (isset($_SESSION["productIdError"])) {
                                                echo $_SESSION["productIdError"];
                                            }
                                            ?>
                                        </div>
                                    </div>
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
                                    <div><label>Color</label></div>
                                    <div>
                                        <span><input type="color" name="color1" class=" rounded-full w-9 h-9">
                                            <!-- <input type="text" id="put1" name="color1" class="inputBox"></div> -->
                                        </span>
                                        <span><input type="color" name="color2" class=" rounded-full w-9 h-9">
                                            <!-- <input type="text" id="put1" name="color1" class="inputBox"></div> -->
                                        </span>
                                        <span><input type="color" name="color3" class=" rounded-full w-9 h-9">
                                            <!-- <input type="text" id="put1" name="color1" class="inputBox"></div> -->
                                        </span>
                                    </div>
                                </div>

                                <div class=" flex justify-between space-x-10 items-center">
                                    <p>Size</p>
                                    <div>
                                        <input type="checkbox" id="male" name="size1" value="1">
                                        <label for="s" class=" md:text-base text-sm ">S</label>
                                        <input type="checkbox" id="female" name="size2" value="1">
                                        <label for="m" class=" md:text-base text-sm ">M</label>
                                        <input type="checkbox" id="other" name="size3" value="1">
                                        <label for="L" class=" md:text-base text-sm  ">L</label>
                                        <input type="checkbox" id="female" name="size4" value="1">
                                        <label for="xl" class=" md:text-base text-sm ">XL</label>
                                        <input type="checkbox" id="other" name="size5" value="1">
                                        <label for="2xl" class=" md:text-base text-sm ">2XL</label>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-col space-y-5">
                                <!-- <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Buying Price</p>
                                    </div>
                                    <div><input type="text" name="buyprice" class=" inputBox"></div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Selling Price</p>
                                    </div>
                                    <div><input type="text" name="sellprice" class="inputBox"></div>
                                </div> -->

                                <div class="flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Buying Price</p>
                                    </div>
                                    <div><input type="text" id="buyprice" name="buyprice" class="inputBox"></div>
                                </div>

                                <div class="flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Selling Price</p>
                                    </div>
                                    <div><input type="text" id="sellprice" name="sellprice" class="inputBox">
                                    </div>

                                </div>
                                <div class="text-red-800 font-thin ">
                                    <?php
                                    if (isset($_SESSION["sellpriceError"])) {
                                        echo $_SESSION["sellpriceError"];
                                    }
                                    ?>
                                </div>

                                <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Quantity</p>
                                    </div>
                                    <div><input type="text" name="quantity" class="inputBox"></div>
                                </div>

                                <div class=" flex justify-between space-x-10">
                                    <div>
                                        <p>Description</p>
                                    </div>
                                    <div><textarea cols="23" name="description" rows="5" class="inputBox"></textarea></div>
                                </div>
                            </div>
                        </div>
                        <div class=" justify-end space-x-3 flex pt-4">
                            <button class=" btn">Add Product</button>
                        </div>
                    </div>
                </div>
            </form>

        </section>
    </main>
</body>

</html>
<?php   $_SESSION["productIdError"] = "";
        $_SESSION["sellpriceError"] = ""
  
  
  ?>