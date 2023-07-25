<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
</head>

<body>
    <img src="./resources/img/logo.png" alt="logo" class="w-24 m-2">
    <p class="font-poppins font-semibold text-center text-4xl mb-10">Login</p>
    <img src="./resources/img/Triangle.png" alt="1" class="md:w-72 w-48 scale-125 absolute ml-8 md:bottom-5">
    
    <section class="relative">
    <div class="float-right w-72 h-96 z-10">
        <img src="./resources/img/Triangle-2.png" alt="2" class="md:w-64 w-40 absolute md:rotate-180 -rotate-180 md:top-0 top-72 mt-2">
    </div>
        <div class="md:w-4/5 w-56 md:h-fit h-96  border-2 border-solid  m-auto rounded-lg drop-shadow-xl bg-transparent z-10">
            <div class="flex md:m-2 md:justify-center space-x-10 z-20">
                <div class="md:mt-5 mt-10">
                    <input class="border border-solid rounded-lg bg-white md:w-56 w-44 h-12 p-4 ml-3 mb-5 font-poppins drop-shadow-md bg-blend-normal md:text-base text-sm" placeholder="UserName"></input>
                    <input class="border border-solid rounded-lg bg-white md:w-56 w-44 h-12 p-4 ml-3 mb-5 font-poppins drop-shadow-md bg-blend-normal md:text-base text-sm " placeholder="Password"></input>
                    <a href="./forgetPw.php" class="underline font-poppins md:ml-52 ml-20 md:text-base text-sm mb-8">Forget Password</a>
                    <button class="text-white bg-btn-color rounded-xl w-32 h-10 ml-10 mt-6 opacity-100">Log in</button>
                </div>
                <p class="font-poppins font-semibold mt-36 md:block hidden">Or</p>
                <div class="font-poppins mb-4 pb-10 font-light md:block hidden">
                    <p class="mb-5">New CUSTOMER?</p>
                    <ul class="list-disc">Create an account with us and you'll be able to:
                        <li class="p-2">Check out faster</li>
                        <li class="p-2">Save multiple shipping address</li>
                        <li class="p-2">Access your order history</li>
                        <li>Track new orders</li>
                    </ul>
                    <button class="text-white bg-btn-color rounded-xl h-10 w-48 mt-10">Create New Account</button>
                </div>
            </div>
            <p class="underline font-poppins text-text-color text-center p-2 md:block hidden">Terms and Conditions</p>
        </div>
        <div class="flex flex-col items-center m-10 md:hidden">
            <p class="font-poppins p-2">Don't have account?</p>
            <a href="./SignUp.php" class=" text-blue-700 underline font-poppins p-2">Create New Account</a>
            <p class="underline font-poppins text-text-color text-center p-2">Terms and Conditions</p>
        </div>
    </section>

</body>

</html>