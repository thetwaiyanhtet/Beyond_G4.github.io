<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="./resources/lib/tailwind/output.css?id=<?=time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">


</head>

<body>
    <div class="flex justify-around items-center">
        <div>
            <img src="../View/resources/img/welcome.png" alt="" class=" w-fit">
        </div>
        <div class="flex flex-col space-y-5 pt-14">
            <div class=" text-center items-center flex flex-col justify-center space-y-4">
            <div><img src="../View/resources/img/logo.png" alt=""></div>
            <div class=" font-quantico italic font-bold text-3xl text-[#3786FB]">BEYOND</div>
            <div class=" font-philosopher font-bold text-2xl">Log in to your account</div>
            <div class=" text-[#667085] text-sm font-poppins">Welcome back! Please enter your details.</div>
            </div>
            
            <div class="text-[#667085]">
                <div>Email*</div>
                <input type="text" class="w-[360px] h-[44px] border-[#d0d5dd67] border-2 rounded-md bg-white outline-none" placeholder="Enter your email">
            </div>
            <div class="text-[#667085] pb-4">
                <div>Password*</div>
                <input type="text" class="w-[360px] h-[44px] border-[#d0d5dd67] border-2 rounded-md bg-white outline-none">
                <div class="flex justify-between">
                    <div>
                    <input type="checkbox" name="" id="">Remember me
                    </div>                
                    <a href="#" class=" font-poppins font-medium text-sm underline text-[#1366D9]">Forget password</a>
                </div>
            </div>
            
            <button class="w-[360px] h-[44px] rounded-md bg-[#1366D9] flex items-center justify-center 
            font-PlayfairSC text-white">Sign in</button>
            <div class=" text-center text-[#667085]">Don’t have an account? <a href="#" class="text-[#1366D9]" >Sign up</a></div>
        </div>
    </div>
</body>


</html>