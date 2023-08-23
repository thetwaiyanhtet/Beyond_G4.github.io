<?php
include "./sidebar.php";
include "../Controller/categoryListController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Add New Product</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script src="../View/resources/js/subCategory.js"></script>
    <link rel="stylesheet" href="./resources/css/inventory.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <script src="../View/resources/js/product.js" defer></script>

</head>

<body>
    <main class=" ml-56">
        <section class="relative">
            <p class=" p-3"><a href="./productList.php">Inventory</a> > <span class=" font-semibold">New Product</span></p>
            <form action="../Controller/addNewProductController.php" method="POST" enctype="multipart/form-data">
                <div class=" flex justify-center px-5 py-1">
                    <div class=" w-screen h-full rounded-lg px-24 py-3 shadow-xl border-2 border-blue-950">
                        <div class=" pb-5">
                            <h1 class=" text-lg font-bold font-philosopher">New Product</h1>
                        </div>
                        <div>
                            <ul class=" flex space-x-3">
                                <li class="text-center">
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo1">
                                            <img src="../View/resources/img/gallery-add.png" id="photoimg1" alt="..." >
                                        </label>
                                        <input type="file" class=" hidden" id="photo1" accept=".png,.jpeg" name="photo1" >
                                    </div>
                                    <p class="mt-2 text-blue-500 cursor-pointer cancel-btn hidden text-sm " data-input-id="photo1">Remove</p>
                                </li>
                                <li class="text-center">
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo2">
                                            <img src="../View/resources/img/gallery-add.png" id="photoimg2" alt="..." >
                                        </label>
                                        <input type="file" class=" hidden" id="photo2" accept=".png,.jpeg" name="photo2">
                                    </div>
                                    <p class="mt-2 text-blue-500 cursor-pointer cancel-btn hidden text-sm " data-input-id="photo2">Remove</p>
                                </li>
                                <li class="text-center">
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo3">
                                            <img src="../View/resources/img/gallery-add.png" id="photoimg3" alt="..." >
                                        </label>
                                        <input type="file" class=" hidden" id="photo3" accept=".png,.jpeg" name="photo3" >
                                    </div>
                                    <p class="mt-2 text-blue-500 cursor-pointer cancel-btn hidden text-sm " data-input-id="photo3">Remove</p>
                                </li>
                                <li class="text-center">
                                    <div class=" w-20 h-20 border border-dashed rounded-md border-gray-400 flex justify-center items-center">
                                        <label for="photo4">
                                            <img src="../View/resources/img/gallery-add.png" id="photoimg4" alt="..." >
                                        </label>
                                        <input type="file" class=" hidden" id="photo4" accept=".png,.jpeg" name="photo4">
                                    </div>
                                    <p class="mt-2 text-blue-500 cursor-pointer cancel-btn hidden text-sm " data-input-id="photo4">Remove</p>
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
                                    <div>
                                        <select name="category" class=" w-[203px] h-10 bg-transparent border border-gray-400 py-2 rounded-md ">
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?= $category["id"] ?>"><?= $category["c_name"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div>
                                        <p>Sub Category</p>
                                    </div>
                                    <div>
                                        <select name="subCategory" class=" w-[203px] h-10 bg-transparent border border-gray-400 py-2 rounded-md ">
                                            <?php foreach ($subCategories as $subCategory) { ?>
                                                <option value="<?= $subCategory["category_id"] ?>"><?= $subCategory["s_c_name"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class=" flex justify-between space-x-10 items-center">
                                    <div><label>Color</label></div>
                                    <div>
                                        <span><input type="color" name="color1" class=" w-9 h-9">                                          
                                        </span>
                                        <span><input type="color" name="color2" class=" w-9 h-9">                                           
                                        </span>
                                        <span><input type="color" name="color3" class=" w-9 h-9">                                          
                                        </span>
                                        <span><input type="color" name="color4" class=" w-9 h-9">                                          
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
                                        <input type="checkbox" id="other" name="size6" value="1">
                                        <label for="free" class=" md:text-base text-sm ">Free Size</label>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-col space-y-5">

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

                                <!-- <div class="flex justify-between space-x-10 items-center">
                                    <div><label>Specifications</label></div>
                                    <div class=" w-52">
                                        <form id="inputForm">
                                            <div id="inputFields">
                                                <span class=" mb-3">
                                                    <input type="text" name="input1" class="inputBox">
                                                </span>
                                            </div>
                                        </form>
                                        <p id="addInputField">+</p>
                                    </div>
                                </div> -->
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

    <script>
    const cancelButtons = document.querySelectorAll('.cancel-btn');

    cancelButtons.forEach(button => {
        button.addEventListener('click', () => {
            const inputId = button.getAttribute('data-input-id');
            const inputElement = document.getElementById(inputId);
            const imgElement = document.getElementById(`photoimg${inputId.slice(-1)}`);
            
            inputElement.value = ''; // Reset the input value
            imgElement.src = '../View/resources/img/gallery-add.png'; // Reset the image source
            
            button.classList.add('hidden'); // Hide the cancel button
        });
    });

    // Show cancel buttons when a file is selected
    const fileInputs = document.querySelectorAll('input[type="file"]');
    fileInputs.forEach(input => {
        input.addEventListener('change', () => {
            const inputId = input.getAttribute('id');
            const cancelBtn = document.querySelector(`[data-input-id="${inputId}"]`);
            const imgElement = document.getElementById(`photoimg${inputId.slice(-1)}`);
            
            cancelBtn.classList.remove('hidden');
            
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    imgElement.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

</body>
</html>
<?php $_SESSION["productIdError"] = "";
$_SESSION["sellpriceError"] = ""
?>