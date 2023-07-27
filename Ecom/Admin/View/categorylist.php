<?php
include "./adminsidebar.php";
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <main id="main" class="ml-60 h-screen pt-20  w-[80%]">
    
        <div class="ml-10">
            <p class=" text-2xl ml-5 font-bold">Category List</p>
            <div class=" flex items-center mt-5">
                <span class="text-xl">Search : </span>
                <input class="bg-gray-300 outline-none ml-3 w-52 rounded-lg h-8" type="search" name="" id="">
            </div>
            <div class="border shadow-2xl mt-10 rounded-xl">
            <div class="  p-5">
                <p class="font-bold text-xl">Edit Categories</p>
                <div class="flex justify-around">
                    <div class="space-y-3 mt-5">
                        <p>Category</p>
                        <input class=" outline-none border rounded-md cursor-text h-8 w-72" type="text">
                    </div>
                    <div class="flex flex-col justify-start space-y-3 mt-5">
                        <p>Description</p>
                        <textarea class="border outline-none" id="text" name="text" rows="4" cols="50">
</textarea>
                    </div>
                </div>
            </div>
            <button class="py-1 px-4 float-right text-white rounded-md bg-blue-600 mr-16">Update</button>
        
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
                           text-lg
                           font-semibold
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
                           text-lg
                           font-semibold
                           text-white
                           py-0
                           lg:py-2
                           px-3
                           lg:px-4
                           ">
                                            Creat By 
                                        </th>
                                        <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
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
                           text-lg
                           font-semibold
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
                                    <tr>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           "> Fashion
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
                           ">
                                           14/07/2023
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
                                                <a class=" text-blue-600 text-3xl py-2 px-3 rounded-md" href="#"><i class='bx bx-edit'></i></a>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           "> Fashion
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
                           ">
                                           14/07/2023
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
                                                <a class=" text-blue-600 text-3xl py-2 px-3 rounded-md" href="#"><i class='bx bx-edit'></i></a>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           "> Fashion
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
                           ">
                                           14/07/2023
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
                                                <a class=" text-blue-600 text-3xl py-2 px-3 rounded-md" href="#"><i class='bx bx-edit'></i></a>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>
</body>

</html>