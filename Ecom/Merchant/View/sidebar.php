<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
  <style>
    body::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>

<body class=" font-poppins">
  <!-- component -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
  <div class="fixed top-0 left-0 z-40 min-h-screen text-ellipsis flex justify-around">

    <div class="flex flex-col w-56 bg-blue-600 rounded-r-3xl overflow-hidden">
      <div class="flex items-center justify-center h-20 shadow-md">
        <div class="flex justify-items-center items-center justify-center space-x-3">
          <img class=" w-16" src="./resources/img/logo_slowdown.gif" alt="...">
          <p class="font-bold text-white text-2xl">Beyond</p>
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
        <li class=" w-52">
          <a href="./transaction.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white transaction">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-dollar-circle'></i></span>
            <span class="text-sm font-medium">Transaction</span>
          </a>
        </li>

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
          <a href="./chatbox.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white chatbox">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-chat'></i></span>
            <span class="text-sm font-medium">Chat Box</span>
            <span class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">5</span>
          </a>
        </li>
        <li class=" w-52">
          <a href="./review and rating.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white reviewNRating">
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
        <li class=" w-52">
          <a href="./ChoosePlan.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"></span>
            <button class=" bg-gray-200 px-4 py-1 rounded-md text-black">Upgrade Plan</button>
          </a>
        </li>
        <li class=" w-52 mt-3">
          <a href="./Setting.php" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white setting">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-cog'></i></span>
            <span class="text-sm font-medium">Setting</span>
          </a>
        </li>
        <li id="logoutButton" class=" w-52">
          <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-100 text-white hover:text-white logout">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-log-out"></i></span>
            <span class="text-sm font-medium">Logout</span>
          </a>
        </li>
      </ul>
    </div>

  </div>
  <section id="logoutPopup" class="fixed left-[45%] top-[35%] border bg-gray-600 rounded-md shadow-lg w-60 p-5 text-white hidden z-50">
    <div>
      <div class=" border-b-2 border-gray-500">
        <p class="pb-3">Log out of your account?</p>
      </div>
      <div class=" flex justify-center items-center space-x-5 pt-3">
        <p id="cancelButton" class=" text-blue-500 border-r-2 border-gray-500 pr-4">Cancel</p>
        <a href="./logIn.php">
          <p class=" text-red-500">Log out</p>
        </a>
      </div>
    </div>
  </section>


</body>
<script>
  // Get references to the popup and buttons
  const logoutPopup = document.getElementById("logoutPopup");
  const cancelButton = document.getElementById("cancelButton");
  const logoutButton = document.getElementById("logoutButton");

  // Function to toggle the visibility of the popup and blur the background
  function toggleLogoutPopup() {
    logoutPopup.classList.toggle("hidden");
  }

  // Attach click event listeners to the logout button and cancel button
  logoutButton.addEventListener("click", toggleLogoutPopup);
  cancelButton.addEventListener("click", toggleLogoutPopup);
</script>

</html>