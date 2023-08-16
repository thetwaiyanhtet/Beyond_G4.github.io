<?php

include "../Controller/categoryListController.php";
$result = $_SESSION["m_category"];

$categorydata = $_SESSION["editcategory"];

//  print_r($categorydata);
include "./adminsidebar.php";
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="./resources/css/categoryl.css">

</head>

<body class=" relative">
    <main id="main" class="ml-60 h-screen pt-20  w-[80%]">

        <div class="ml-10 pr-10 pb-5">
            <p class=" text-xl ml-5 font-bold font-philosopher pt-10">Category List</p>
            <!-- <div class=" flex items-center mt-5 ml-5">
                <span class="text-xl">Search : </span>
                <input class="bg-gray-300 outline-none ml-3 w-52 rounded-lg h-8 indent-2" type="search" name="" id="">
            </div> -->
            <div class="border shadow-2xl mt-10 rounded-xl">

                <form action="../Controller/updateCategoryController.php" method="POST">
                    <div class="  p-5">
                        <p class="font-bold text-xl">Edit Categories</p>
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                            <input type="hidden" name="id" id="username" autocomplete="username" value="<?php echo $categorydata[0]["id"] ?>" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                        </div>
                        <div class="flex justify-around">
                            <div class="space-y-3 mt-5">
                                <p>Category</p>
                                <input class=" outline-none border rounded-md cursor-text h-8 w-72 indent-2" type="text" value="<?php echo $categorydata[0]["c_name"] ?>" name="cname">
                            </div>
                            <div class="flex flex-col justify-start space-y-3 mt-5">
                                <p>Description</p>
                                <input type="text" class="border rounded-md outline-none h-8 w-72 indent-2" id="text" rows="4" cols="50" value="<?php echo $categorydata[0]["description"] ?>" name="cdescription">
                                </input>
                            </div>
                        </div>
                    </div>
                    <button id="update" class="py-2 px-4 float-right text-white rounded-md bg-blue-600 mr-16">Update</button>
                    
                </form>
                <a href="../View/categorylist.php">
                    <button id="" class="py-2 px-4 float-right text-white rounded-md bg-blue-600 left-[70%] absolute ">Back</button>
                    </a>

                <section class="bg-white w-auto mt-10 ml-10 py-0 lg:py-[20px]">
                    <div class="container">
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full px-4">
                                <div class="max-w-full overflow-x-auto">
                                    <table class="table-auto w-full">
                                        <thead>
                                            <tr class="bg-primary text-center">
                                                <th class="
                           w-1/6
                           min-w-[160px]
                           text-white
                           py-0
                           lg:py-2
                           px-3
                           lg:px-4
                           border-l border-transparent rounded-tl-md
                           ">
                                                    Category Name
                                                </th>
                                                <th class="
                           w-1/6
                           min-w-[160px]
                           text-white
                           py-0
                           lg:py-2
                           px-3
                           lg:px-4
                           ">
                                                    Create By
                                                </th>
                                                <th class="
                           w-1/6
                           min-w-[160px]
                           text-white
                           py-0
                           lg:py-2
                           px-3
                           lg:px-4
                           ">
                                                    Date

                                                <th class="
                           w-1/6
                           min-w-[160px]
                           text-white
                           py-0
                           lg:py-2
                           px-3
                           lg:px-4 rounded-tr-md
                           ">
                                                    Details
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($result as $category) { ?>
                                                <tr>
                                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           "> <?= $category["c_name"]; ?>
                                                    </td>
                                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                                                        Admin
                                                    </td>
                                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           "><?= $category["create_date"]; ?>

                                                    </td>

                                                    <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                                                        <button>
                                                            <a class=" text-blue-600 text-3xl py-2 px-3 rounded-md"><i class='bx bx-edit'></i></a>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="hs" class=" absolute top-20 mt-40 ml-60 hidden">
                <?php
                include "./savepop-up.php";
                ?>
            </div>
    </main>
    <!-- <script>
        document.getElementById('update').addEventListener('click', (e) => {
            document.getElementById('hs').classList.add('show');
            document.getElementById('hs').classList.remove('hidden');
        })
        document.getElementById('no').addEventListener('click', (e) => {
            document.getElementById('hs').classList.add('hidden');
            document.getElementById('hs').classList.remove('show');
        })
    </script> -->
</body>

</html>