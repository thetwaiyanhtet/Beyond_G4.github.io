<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./resources/lib/tailwind/output.css" rel="stylesheet" />
  <title>Contact Us</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-white lg:bg-[#DDD4FF] relative overflow-hidden">
  <section class="lg:absolute lg:top-[15px] lg:left-[35px] flex justify-between items-center">
    <img class=" w-16 ml-5 mt-5 lg:w-24" src="../View/resources/img/logo.png" />
    <span><ion-icon class=" w-28 lg:w-36 h-14 lg:h-20 lg:hidden" name="menu-outline"></ion-icon></span>
  </section>
  <section class="hidden lg:block">
    <div class="w-[57px] h-[49px] bg-[#9448F6] left-[47px] absolute top-[171px] z-50"></div>
  </section>
  <section>
    <div class="w-[401px] h-[449px] bg-[#F0F0F0] left-[66px] absolute top-[196px] rounded-md hidden lg:block">
      <p class="text-[32px] font-bold my-[10%] mx-[10%] font-poppins">Info</p>
      <span class="flex items-center mx-[10%]">
        <ion-icon class="w-[36px] h-[36px]" name="mail-open-outline"></ion-icon>
        <p class="text-[16px] font-medium mx-[7%]">beyond@gmail.com</p>
      </span>
      <span class="flex items-center mx-[10%] my-[6%]">
        <ion-icon class="w-[36px] h-[36px]" name="call-outline"></ion-icon>
        <p class="text-[16px] font-medium mx-[7%]">+9523879001</p>
      </span>
      <span class="flex items-center mx-[10%] my-[6%]">
        <ion-icon class="w-[36px] h-[36px]" name="business-outline"></ion-icon>
        <p class="text-[16px] font-medium mx-[7%]">14 Green-road st.</p>
      </span>
      <span class="flex items-center mx-[10%] my-[6%]">
        <ion-icon class="w-[36px] h-[36px]" name="time-outline"></ion-icon>
        <p class="text-[16px] font-medium mx-[7%]">09:00- 05:00</p>
      </span>
    </div>
    <section>
      <div class="lg:absolute h-screen w-full left-[620px] top-0 bg-white rounded-tl-[50px] rounded-bl-[50px]">
        <div class= "my-[20%] lg:my-[6%]">
          <span class="font-bold text-[36px] mx-[10%] lg:mx-[2%]">Contact Us</span>
          <p class="font-medium  text-[15px] lg:text-[20px] my-[9%] lg:my-[2%] w-[350px] lg:w-[500px]  mx-[10%] lg:mx-[2%]">Feel free to contact us any time.We will get back
            to you as soon as we can!</p>
          <p class="font-medium text-[15px] my-[2%] lg:my-[1%]  mx-[10%] lg:mx-[4%]">Name</p>
          <div class="my-[3%] lg:my-[2%] mx-[10%] lg:mx-[4%]"><input type="text" class="border border-b-black border-transparent w-[292px]"></div>

          <p class="font-medium text-[15px] my-[2%] lg:my-[1%]  mx-[10%] lg:mx-[4%]">Email</p>
          <div class="my-[3%] lg:my-[2%] mx-[10%] lg:mx-[4%]"><input type="text" class="border border-b-black border-transparent w-[292px]"></div>

          <p class="font-medium text-[15px] my-[2%] lg:my-[1%]  mx-[10%] lg:mx-[4%]">Message</p>
          <div class="my-[3%] lg:my-[2%] mx-[10%] lg:mx-[4%]"><input type="text" class="border border-b-black border-transparent w-[292px]"></div>

          <div class="absolute top-[67%] lg:top-[83%] left-[27%] lg:left-[20%] ">
            <button class="bg-[#314755] rounded-md text-white w-[169px] lg:w-[373px] h-[44px] lg:h-[61px]
             font-extrabold lg:font-bold text-[15px] lg:text-[24px] ">Send Message</button>
          </div>
        </div>
      </div>
    </section>

  </section>
</body>

</html>