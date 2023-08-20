<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Choose Plan</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">

</head>

<body class=" font-poppins bg-gradient-to-r from-blue-200 to-cyan-200">
    <div class="flex justify-between items-center">
        <a href=" ./signUp.php"><ion-icon name="arrow-back-outline" class="m-2 text-4xl p-3"></ion-icon></a>
        <a href="./dashboard.php"><ion-icon name="close" class="m-2 text-4xl p-3"></ion-icon></a>
    </div>
    <p class=" font-philosopher text-center text-4xl pb-2">Choose Your Plan</p>
    <p class=" font-poppins text-center font-normal">Free for small businesses. Paid for bigger companies.</p>
    <form action="../Controller/planController.php" method="post">
        <div class="flex items-center justify-center space-x-10 m-10">
            <!--Card1-->
            <div class="w-64 h-80 border border-solid drop p-4 rounded-lg border-black shadow-xl transition-all duration-100 hover:scale-110 hover:border-red-600">
                <p class=" text-center text-lg font-poppins m-2">
                    <?php
                    include "../Model/model.php";
                    $sql = $pdo->prepare(
                        "SELECT * from m_plan WHERE id=6"
                    );
                    $sql->execute();
                    $row = $sql->fetch(PDO::FETCH_ASSOC);
                    echo $row["plan_name"].' Plan';
                    ?>
                </p>
                <hr>
                <span class=" ml-16 text-text1 text-2xl font-semibold">
                    <?php
                    echo "MMK " . $row["price"];
                    ?><span class="text-sm text-black">/month</span></span>
                <hr>
                <ul class=" list-disc m-2 text-gray-600 text-sm space-y-2">
                    <li>sell limit items 50 </li>
                    <li>products item can upload 2 times each
                        day.</li>
                    <li>can add new 2 products each day.</li>
                </ul>
                <a href="">
                    <div class=" flex justify-center">
                        <button type="submit" name="plan" value="<?php echo $row['id']?>" class="bg-btn w-32 h-10 rounded-xl shadow-xl m-5 text-black hover:bg-text1 hover:text-white font-philosopher">Choose Plan</button>
                    </div>
                </a>
            </div>
            <!--Card 2-->
            <div class=" text-center w-80 h-[450px] border border-solid drop p-4 rounded-lg shadow-xl transition-all duration-100 hover:scale-110 border-black hover:border-red-600">
                <p class=" text-center text-lg font-poppins m-2">
                    <?php
                    include "../Model/model.php";
                    $sql = $pdo->prepare(
                        "SELECT * from m_plan WHERE id = 7 "
                    );
                    $sql->execute();
                    $row = $sql->fetch(PDO::FETCH_ASSOC);
                    echo $row["plan_name"] . ' Plan';
                    ?>
                </p>
                <hr>
                <span class=" text-text1 text-2xl font-semibold"> <?php
                                                                    echo " MMK " . $row["price"];
                                                                    ?><span class="text-sm text-btn">/month</span></span>
                <hr>
                <ul class=" list-disc  text-gray-600 text-sm space-y-2 m-2 text-left">
                    <li>unlimited sell limit items </li>
                    <li>products item can upload unlimited each
                        day.</li>
                    <li>can add unlimited new products each day.</li>
                    <li>can add unlimited new products each day.</li>
                    <li>lorem upsum lorem</li>
                    <li>lorem upsum lorem</li>
                </ul>
                <a href="">
                    <div class=" flex justify-center">
                        <button type="submit" name="plan" value="<?php echo $row['id']
                                                                    ?>" class="bg-btn w-32 h-10 rounded-xl shadow-xl m-5 text-black hover:bg-text1 hover:text-white font-philosopher">Choose Plan</button>
                    </div>
                </a>
            </div>
            <!--Card 3-->
            <div class="w-64 h-80 border border-solid drop p-4 rounded-lg border-black shadow-xl transition-all duration-100 hover:scale-110 hover:border-red-600">
                <p class=" text-center text-lg font-poppins m-2">
                    <?php
                    include "../Model/model.php";
                    $sql = $pdo->prepare(
                        "SELECT * from m_plan WHERE id = 8"
                    );
                    $sql->execute();
                    $row = $sql->fetch(PDO::FETCH_ASSOC);
                    echo $row["plan_name"] . ' Plan';
                    ?>
                </p>
                <hr>
                <span class=" ml-16 text-text1 text-2xl font-semibold"><?php
                                                                        echo " MMK " . $row["price"];
                                                                        ?><span class="text-sm text-btn">/month</span></span>
                <hr>
                <ul class=" list-disc m-2 text-gray-600 text-sm space-y-2">
                    <li>sell limit items 100 </li>
                    <li>products item can upload 5 times each
                        day.</li>
                    <li>can add new 5 products each day.</li>
                </ul>
                <a href="">
                    <div class=" flex justify-center">
                        <button type="submit" name="plan" value="<?php echo $row['id']?>" class="bg-btn w-32 h-10 rounded-xl shadow-xl m-5 text-black hover:bg-text1 hover:text-white font-philosopher">Choose Plan</button>
                    </div>
                </a>
            </div>
    </form>
    </div>
</body>

</html>