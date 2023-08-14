<?php
include "./sidebar.php";
include "../Controller/reviewandratingController.php";
$reviewdata = $_SESSION["getReviewandRating"];
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./resources/css/reviewNRating.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/navbar.css">
    <script src="./resources/js/dateandtime.js " defer></script>
    <script src="./resources/js/star.js"></script>
</head>

<body class=" font-poppins">
    <main class=" ml-56">
        <section class=" p-5">
            <div class="flex font-semibold pb-2">
                <span class="text-2xl pr-3"><i class='bx bx-star'></i></span>
                <span class="text-lg">Review & Rating</span>
            </div>
            <div class=" w-full h-full  rounded-lg p-5 shadow-xl border-2 border-blue-950">
                <!-- ====== Table Section Start -->
                <section class="bg-white">
                    <div class="container">
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full px-4">
                                <div class="max-w-full overflow-x-auto">
                                    <table class="table-auto w-full">
                                        <thead class=" text-sm">
                                            <tr class="bg-blue-200 text-center">
                                                <th class="w-1/6 min-w-[160px] py-0 lg:py-2 px-3 lg:px-4 text-start">
                                                    Customer Name
                                                </th>
                                                <th class="w-1/6 min-w-[160px] py-0 lg:py-2 px-3 lg:px-4 text-start">
                                                    Product Name
                                                </th>
                                                <th class="w-1/6 min-w-[160px] py-0 lg:py-2 px-3 lg:px-4">
                                                    Rating
                                                </th>
                                                <th class="w-1/6 min-w-[160px] py-0 lg:py-2 px-3 lg:px-4">
                                                    Comments
                                                </th>
                                                <th class="w-1/6 min-w-[160px] py-0 lg:py-2 px-3 lg:px-4">
                                                    Details
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($reviewdata as $data) { ?>
                                                <tr>
                                                    <td class="text-dark font-medium text-sm py-5 pl-4 border-b border-gray-500 text-start">
                                                        <?= $data["username"] ?>
                                                    </td>

                                                    <td class=" text-start text-dark font-medium text-sm py-5 pl-4 border-b border-gray-500">
                                                        <?= $data["name"] ?>
                                                    </td>
                                                    <td class=" text-center text-dark font-medium text-sm py-5 px-2 border-b border-gray-500">
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
                                                            <?= numberToStars($data["rating"]) ?>

                                                        </div>
                                                    </td>
                                                    <td class=" text-center text-dark font-medium text-sm py-5 px-2 border-b border-gray-500">
                                                        <?= $data["comment"] ?>
                                                    </td>
                                                    <td class=" text-center text-dark font-medium text-sm py-5 px-2 border-b border-gray-500">
                                                        <button class="font-medium  hover:underline text-blue-600">
                                                            <a href="../Controller/revieandratingdetailcontroller.php?id=<?= $data["id"] ?>" class="font-medium text-blue-600  hover:underline">View details</a>
                                                        </button>
                                                    </td>
                                                </tr>

                                            <?php   } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ====== Table Section End -->
                <div class="flex justify-between items-center py-2 px-3 pt-5">
                    <a href="#"><button class=" border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline">Previous</button></a>
                    <div>Page 1 of 10</div>
                    <a href="#"><button class="  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline">Next</button></a>
                </div>
            </div>
        </section>

        <script>
            // Get references to the popup and buttons
            const detailPopup = document.getElementById("detailPopup");
            const popupButton = document.getElementById("popupButton");
            const cancelRNRButton = document.getElementById("cancelRNRButton");

            // Function to toggle the visibility of the popup and blur the background
            function toggleDetailPopup() {
                detailPopup.classList.toggle("hidden");
            }

            // Attach click event listeners to the logout button and cancel button
            popupButton.addEventListener("click", toggleDetailPopup);
            cancelRNRButton.addEventListener("click", toggleDetailPopup);
        </script>

    </main>
</body>

</html>