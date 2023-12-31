<?php

include "./adminsidebar.php";
$categories = $_SESSION["m_category"];

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Add Category</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./resources/css/categorya.css">

</head>

<body>
    <main id="main" class="ml-60 h-screen pt-20  w-[80%]">

        <div class="ml-10">
            <!-- <div class=" flex items-center mt-5">
                <span class="text-xl">Search : </span>
                <input class="bg-gray-300 ml-3 w-52 outline-none rounded-lg h-8 indent-2" type="search" name="" id="">
            </div> -->
            <form action="../Controller/addCategoryController.php" method="POST">
                <div class="border shadow-2xl h-72 mt-5 rounded-xl">
                    <div class="p-5">
                        <p class="font-bold text-xl font-philosopher">Add New Category</p>
                        <div class="flex justify-around">
                            <div class="">
                                <div class="space-y-3 mt-5">
                                    <p>Category</p>
                                    <input class=" outline-none border rounded-md cursor-text h-8 w-72 indent-2" type="text" name="cname" required>
                                    <div class=" text-red-800 font-thin">
                                        <?php if (isset($_SESSION["categoryError"])) {
                                            echo $_SESSION["categoryError"];
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col justify-start space-y-3 mt-5">
                                    <p>Description</p>
                                    <input type="text" class="border h-8 w-72 rounded-md outline-none indent-2" id="text" name="cdescription" rows="4" cols="50"></input>
                                </div>
                                <div class=" pl-10 pt-14">
                                    <button class="py-1 px-4 float-right text-white rounded-md bg-blue-600 mr-16 font-philosopher">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
            <form action="../Controller/addSubCategoryController.php" method="post">
                <div class="border shadow-2xl h-72 mt-5 rounded-xl pb-5">
                    <div class="p-5">
                        <p class="font-bold text-xl font-philosopher">Add New Sub Category</p>
                        <div class="">
                            <div class=" flex justify-around">
                                <div class="space-y-3 mt-5">
                                    <p>Category</p>
                                    <div>
                                        <select name="category" id="" class=" outline-none border rounded-md cursor-text h-8 w-72 indent-2">
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?= $category["id"] ?>"><?= $category["c_name"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="space-y-3 mt-5">
                                    <p>Sub Category</p>
                                    <input class=" outline-none border rounded-md cursor-text h-8 w-72 indent-2" type="text" name="scname" required>
                                     <div class=" text-red-800 font-thin">
                                        <?php if (isset($_SESSION["subCategoryError"])) {
                                            echo $_SESSION["subCategoryError"];
                                        } ?>
                                    </div> 
                                </div>
                            </div>
                            <div>
                                <div class=" pl-10 pt-14">
                                    <button type="submit" class="py-1 px-4 float-right text-white rounded-md bg-blue-600 mr-16 font-philosopher">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </main>
</body>

</html>
<?php $_SESSION["categoryError"] = "" ?>
<?php $_SESSION["subCategoryError"] = "" ?>