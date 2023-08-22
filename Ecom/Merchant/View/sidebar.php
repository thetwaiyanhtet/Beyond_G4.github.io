<?php
include "./header.php";
include "../Controller/planupgrade.php";
$plandate = $_SESSION["plancheck"];
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./resources/css/sidebar.css">
  <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="./resources/js/dateandtime.js "></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./resources/js/chattoggle.js" defer></script>
  <link rel="stylesheet" href="./resources/css/chat_design.css">
</head>

<body class=" font-poppins">
  <!-- component -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
  <div class="fixed top-0 left-0 z-40 min-h-screen text-ellipsis flex justify-around">

    <div class="flex flex-col w-56 bg-blue-600 rounded-r-3xl overflow-hidden">
      <div class="flex items-center justify-center h-20 shadow-md">
        <div class="flex justify-items-center items-center justify-center space-x-3">
          <img class=" w-16" src="./resources/img/logo_slowdown.gif" alt="...">
          <p class="font-bold text-white text-2xl font-philosopher italic">Beyond</p>
        </div>
      </div>
      <ul class="flex flex-col py-2">
        <li class=" w-52">
          <a href="./dashboard.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white dashboard">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-home"></i></span>
            <span class="text-sm font-medium">Dashboard</span>
          </a>
        </li>
        <li class=" w-52">
          <a href="./productList.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white inventory">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-store-alt'></i></span>
            <span class="text-sm font-medium">Inventory</span>
          </a>
        </li>
        <!-- <li class=" w-52">
          <a href="./transaction.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white transaction">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-dollar-circle'></i></span>
            <span class="text-sm font-medium">Transaction</span>
          </a>
        </li> -->

        <li class=" w-52">
          <a href="./order_manage.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white order">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-package'></i></span>
            <span class="text-sm font-medium">Orders</span>
          </a>
        </li>
        <li class=" w-52">
          <a href="./delivery.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white delivery">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-car'></i></span>
            <span class="text-sm font-medium">Delivery</span>
          </a>
        </li>
        <li class=" w-52">
          <a href="./reviewandrating.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white reviewNRating">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-message-alt-edit'></i></span>
            <span class="text-sm font-medium">Review & Rating</span>
          </a>
        </li>
        <li class=" w-52">
          <a href="./saleReport.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white report">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bxs-report'></i></span>
            <span class="text-sm font-medium">Report</span>
          </a>
        </li>
        <?php $currentdate = strtotime(date('Y-m-d'));
        $planexp = strtotime($plandate[0]["plan_end_date"]);
        if ($currentdate > $planexp - 604800) { ?>
          <li class=" w-52">
            <a href="./upgradeplan.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white">
              <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"></span>
              <button class=" bg-gray-200 px-4 py-1 rounded-md text-black">Upgrade Plan</button>
            </a>
          </li>
        <?php  } ?>

        <li class=" w-52 ">
          <a href="./Setting.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white setting">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-cog'></i></span>
            <span class="text-sm font-medium">Setting</span>
          </a>
        </li>
        <li id="logoutButton" class=" w-52">
          <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white logout">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-log-out"></i></span>
            <span class="text-sm font-medium">Log out</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <button class="chat-btn z-50 scale-110" id="chatBoxButton">
    <img src="./resources/img/chat.png" alt="" class="w-20 h-auto animate-[wiggle_700ms_ease-in-out_infinite] ">
  </button>
  <div class="chat-popup z-50 bg-red-900">
   <!-- <?php 
     if(include "./users.php"){
      //  echo "go";
     }else{
      echo "fuck";
     }
   ?> -->
  </div>
  <script>
    // Add an event listener to the logout button
    document.getElementById('logoutButton').addEventListener('click', function() {
      // Display the Swal confirmation dialog with custom content
      Swal.fire({
        title: '',
        html: `
      <div>
        <img src="../../Storage/monkey.gif" alt="..." class="rounded-md mx-auto" style="max-width: 300px;">
        <p class="pt-3">Are you sure? You will be logged out.</p> 
      </div>`,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, logout',
        backdrop: false, // Disable the backdrop blur effect
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = 'login.php';
        }
      });
    });
  </script>
</body>

</html>
