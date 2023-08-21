<?php
include "../Controller/headerController.php";
$data = $_SESSION["verifyData"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant</title>
</head>

<body>
    <div class=" ml-56">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-5">
            <?php if(isset($merchant_data["store_name"])){ ?> 
                <p class=" font-semibold"><?= $merchant_data["store_name"] ?></p>
                <?php } else{ ?> 
                    <p class=" font-semibold"></p>
                    <?php } ?>
                <p class=" text-sm" id="date_time"></p>
            </div>
            <div>
                <ul class="pr-5">
                    <?php if ($data["verify"] == 0) { ?>
                        <li><img src="../../Storage/profile/profile.png" alt="..." class="rounded-full w-14 h-14 object-cover"></li>
                    <?php } elseif ($data["verify"] == 1) { ?>
                        <li><img src="../../Storage/profile/<?= $merchant_data["logo"] ?>" alt="..." class="rounded-full w-14 h-14 object-cover"></li>
                    <?php } ?>
                </ul>
            </div>

        </header>
    </div>
</body>

</html>