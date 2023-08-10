<?php
include "../Controller/headerController.php";
$data = $_SESSION["verifyData"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class=" ml-56">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p id="date_time"></p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <?php if ($data["verify"] == 0) { ?>
                        <li><img src="../../Storage/profile/profile.png ?>" alt="..." class=" rounded-full w-16"></li>
                    <?php } elseif ($data["verify"] == 1) { ?>
                        <li><img src="../..<?= $merchant_data["logo"]?>" alt="..." class=" rounded-full w-16"></li>
                    <?php } ?>
                </ul>
            </div>
        </header>
    </div>
</body>

</html>