<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Payment Successful</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="w-80 h-[500px] border border-solid rounded-md shadow-lg m-auto mt-20">
        <img src="./resources/img/Confirm Icon.png" alt="" class="w-28 m-auto mt-16">
        <p class="font-poppins font-semibold m-16 ml-20">Payment successful</p>
          <form action="../Controller/insertMerchantController.php" method="post">
          <button type="submit" name="confirmPayment" class="shadow-md w-28 border border-solid rounded-md bg-blue-600 p-2 text-white hover:text-black hover:bg-white ml-24 mt-14 font-philosopher">Get Started</button>
          </form>
    </div>
</body>

</html>