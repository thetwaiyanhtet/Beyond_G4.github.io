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
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Reviews</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./resources/css/reviewNRating.css">
    <link rel="stylesheet" href="./resources/css/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/js/reviewRatingDetail.js" defer></script>
    <script src="./resources/js/dateandtime.js " defer></script>
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
                                                    No
                                                </th>
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
                                            <?php $count = ($currentPage - 1) * $itemsPerPage ?>
                                            <?php foreach ($paginatedData as $data) { ?>
                                                <tr>
                                                    <td class="text-dark font-medium text-sm py-5 pl-4 border-b border-gray-500 text-start">
                                                        <?= ++$count ?>.
                                                    </td>
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
                                                        <div class="font-medium  hover:underline text-blue-600 view-details-button" data-id="<?= $data["id"] ?>">View details</div>
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
                <!-- ====== Table Section End -->
                <div class="flex justify-center items-end pt-5">
                    <nav aria-label="Page navigation example">
                        <ul class=" flex space-x-3 pagination justify-content-center">
                            <?php if ($currentPage > 1) { ?>
                                <li class="page-item p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline"><a class="page-link " href="?page=<?= $currentPage - 1 ?>">Previous</a></li>
                            <?php } else { ?>
                                <li class="page-item disabled p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline"><a class="page-link  opacity-50">Previous</a></li>
                            <?php } ?>
                            <?php for ($i = 1; $i <= ceil(count($reviewdata) / $itemsPerPage); $i++) { ?>
                                <li class="page-item p-2 rounded-md px-3 <?= $i === $currentPage ? 'active font-semibold bg-blue-500 text-white' : '' ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                            <?php } ?>
                            <?php if ($startIndex + $itemsPerPage < count($reviewdata)) { ?><a class="page-link p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline" href="?page=<?= $currentPage + 1 ?>">Next</a></li>
                            <?php } else { ?>
                                <li class="page-item disabled p-2  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline"><a class="page-link opacity-50">Next</a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <div id="detailPopup" class=" fixed left-[45%] top-[20%] border bg-gray-200 rounded-md shadow-lg">
            <!-- Dynamically generated content will be populated here -->
        </div>
    </main>
</body>

</html>