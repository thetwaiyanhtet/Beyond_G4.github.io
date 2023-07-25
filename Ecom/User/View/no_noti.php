<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="mt-3 font-Philosopher overflow-hidden">
  <section class=" flex items-center justify-between mx-[5%]">
    <span class="flex items-center  mb-[1%]">
      <img class="w-16" src="./resources/img/logo.png" alt="">
      <p class="text-3xl ml-[1%] max-md:text-2xl font-philosopher ">Beyond</p>
    </span>
    <span>
      <ion-icon class="text-4xl float-right " name="person-circle-outline"></ion-icon>
    </span>
  </section>
  <section class="relative">
    <section class="w-screen  h-screen rounded-tl-[5%] flex justify-center align-middle items-center bg-gradient-to-tl from-purple-400 via-purple-400 to-purple-500">
      <section class="flex flex-col items-center">
        <ion-icon class="text-9xl " name="notifications-outline"></ion-icon>
        <p class="font-semibold text-3xl max-md:text-xl ">NO Notification Here</p>
      </section>

    </section>
    <ion-icon class="text-5xl absolute left-14 bottom-36 cursor-pointer max-md:text-3xl max-md:left-8 max-md:bottom-24" name="caret-back-outline"></ion-icon>
  </section>
</body>

</html>