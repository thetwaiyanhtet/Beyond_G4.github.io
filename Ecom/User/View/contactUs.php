<?php include "../../Admin/Controller/contactusController.php";
$contact = $_SESSION["m_contactus"];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
  <title>Beyond</title>
  <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark')
    }
  </script>
</head>

<body class=" bg-purple-300 dark:bg-purple-400 relative overflow-hidden font-poppins">
  <nav>
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="./mainPage.php" class="flex items-center">
        <img src="./resources/img/logo_slowdown.gif" class="mr-3 h-10" alt="beyond Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap font-philosopher">Beyond</span>
      </a>

      <div class="flex items-center md:order-2">
        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none  rounded-lg text-sm p-2.5 z-30">
          <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
          </svg>
          <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
          </svg>
        </button>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 bg-transparent" id="navbar-user">
        <div class="w-[300px] h-[320px] bg-white/10 rounded-lg md:hidden absolute right-2 mt-2 backdrop-blur-md">
          <p class="text-[32px] font-bold my-[10%] mx-[10%] font-poppins">Info</p>
          <span class="flex items-center mx-[10%]">
            <ion-icon class="w-[36px] h-[36px]  dark:text-white" name="mail-open-outline"></ion-icon>
            <p class="text-[16px] font-medium mx-[7%]  dark:text-white"><?= $contact[0]['email'] ?></p>
          </span>
          <span class="flex items-center mx-[10%] my-[6%]">
            <ion-icon class="w-[36px] h-[36px]  dark:text-white" name="call-outline"></ion-icon>
            <p class="text-[16px] font-medium mx-[7%]  dark:text-white"><?= $contact[0]['phone'] ?></p>
          </span>
          <span class="flex items-center mx-[10%] my-[6%]">
            <ion-icon class="w-[36px] h-[36px]  dark:text-white" name="business-outline"></ion-icon>
            <p class="text-[16px] font-medium mx-[7%]  dark:text-white"><?= $contact[0]['address'] ?></p>
          </span>
          <span class="flex items-center mx-[10%] my-[6%]">
            <ion-icon class="w-[36px] h-[36px]  dark:text-white" name="time-outline"></ion-icon>
            <p class="text-[16px] font-medium mx-[7%]  dark:text-white"><?= $contact[0]['available_time'] ?></p>
          </span>
        </div>
      </div>
    </div>
  </nav>
  <section class="hidden lg:block">
    <div class="w-[57px] h-[49px] bg-[#9448F6] left-[47px] top-[150px] absolute z-50"></div>
  </section>
  <section>
    <div class="w-[401px] h-[420px] bg-[#F0F0F0] left-[66px] absolute top-[150px] rounded-md hidden lg:block" id="navbar-user">
      <p class="text-2xl font-bold my-[10%] mx-[10%] font-poppins">Info</p>
      <span class="flex items-center mx-[10%]">
        <ion-icon class="w-[36px] h-[36px]" name="mail-open-outline"></ion-icon>
        <p class="text-[16px] font-medium mx-[7%]"><?= $contact[0]['email'] ?></p>
      </span>
      <span class="flex items-center mx-[10%] my-[6%]">
        <ion-icon class="w-[36px] h-[36px]" name="call-outline"></ion-icon>
        <p class="text-[16px] font-medium mx-[7%]"><?= $contact[0]['phone'] ?></p>
      </span>
      <span class="flex items-center mx-[10%] my-[6%]">
        <ion-icon class="w-[36px] h-[36px]" name="business-outline"></ion-icon>
        <p class="text-[16px] font-medium mx-[7%]"><?= $contact[0]['address'] ?></p>
      </span>
      <span class="flex items-center mx-[10%] my-[6%]">
        <ion-icon class="w-[36px] h-[36px]" name="time-outline"></ion-icon>
        <p class="text-[16px] font-medium mx-[7%]"><?= $contact[0]['available_time'] ?></p>
      </span>
    </div>
    <section>
      <form action="../Controller/contactUsController.php" method="post">
        <div class="lg:absolute h-screen w-full left-[620px] top-0 bg-[#F0F0F0] 
          rounded-tr-[50px] rounded-bl-none md:rounded-tr-none rounded-tl-[50px] md:rounded-bl-[50px] dark:bg-gray-800">
          <div class="my-[2%] pt-[6%]">
            <span class="font-bold text-2xl mx-[10%] lg:mx-[2%] dark:text-white ">Contact Us</span>
            <p class="text-md my-[9%] lg:my-[2%] w-[350px] lg:w-[500px]  mx-[10%] lg:mx-[2%] dark:text-white">Feel free to contact us any time.We will get back
              to you as soon as we can!</p>
            <p class="font-medium text-[15px] mt-[2%] lg:mt-[1%]  mx-[10%] lg:mx-[4%] dark:text-white">Name</p>
            <div class=" mx-[10%] lg:mx-[4%]"><input type="text" name="name" class="border border-b-black border-transparent w-[292px] dark:hover:border-purple-500 focus:outline-none bg-[#F0F0F0] dark:rounded-md py-2 "></div>

            <p class="font-medium text-[15px] mt-[2%] lg:mt-[1%]  mx-[10%] lg:mx-[4%] dark:text-white">Email</p>
            <div class=" mx-[10%] lg:mx-[4%]"><input type="text" name="email" class="border border-b-black border-transparent w-[292px] dark:hover:border-purple-500 focus:outline-none bg-[#F0F0F0] dark:rounded-md py-2"></div>

            <p class="font-medium text-[15px] mt-[2%] lg:mt-[1%]  mx-[10%] lg:mx-[4%] dark:text-white">Message</p>
            <div class=" mx-[10%] lg:mx-[4%]"><input type="text" name="message" class="border border-b-black border-transparent w-[292px] dark:hover:border-purple-500 focus:outline-none bg-[#F0F0F0] dark:rounded-md py-2"></div>
            <button type="submit" name="send" class="bg-[#314755] rounded-md text-white font-Playfair Display text-base dark:text-white mx-10 my-5 px-4 py-2">Send Message</button>
            <!-- <div class="absolute top-[67%] lg:top-[83%] left-[27%] lg:left-[20%]"> -->

          </div>
        </div>
        </div>
      </form>
    </section>

  </section>
  <script src="./resources/js/toggle.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>