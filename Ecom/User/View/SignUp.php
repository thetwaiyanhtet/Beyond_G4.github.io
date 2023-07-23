<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
</head>

<body>
    <img src="./resources/img/logo.png" alt="logo" class="w-24 m-2">

    <section class="relative">
    <div class="flex flex-col items-center z-10">
    <img src="./resources/img/Triangle.png" alt="1" class="md:w-64 w-36 absolute left-2/3 top-40 md:scale-100 scale-125">
    <img src="./resources/img/Triangle-2.png" alt="1" class="md:w-64 w-36 absolute right-2/3 scale-125">
    </div>
        <div class="md:w-1/2 w-96 md:h-fit h-96 border border-solid  bg-transparent mt-5 rounded-lg  drop-shadow-2xl opacity-75 m-auto z-10">
            <div class="m-5 flex flex-col items-center">
                <div class="border border-solid rounded-lg bg-white w-64 h-12 p-4 mb-5 font-poppins drop-shadow-md bg-blend-normal">Full Name</div>
                <div class="border border-solid rounded-lg bg-white w-64 h-12 p-4 mb-5 font-poppins drop-shadow-md bg-blend-normal">Email</div>
                <div class="border border-solid rounded-lg bg-white w-64 h-12 p-4 mb-5 font-poppins drop-shadow-md bg-blend-normal">Password</div>
                <button class="text-white bg-btn-color rounded-xl w-32 h-10 ml-18 mt-6">Log in</button>
                <p class="underline font-poppins text-text-color text-center p-2 ml-18 md:block hidden">Terms and Conditions</p>
            </div>
        </div>
        </div>
        <div class="flex flex-col items-center mt-3 md:hidden">
            <p class="font-poppins p-2">Don't have account?</p>
            <p class=" text-blue-700 underline font-poppins p-2">Create New Account</p>
            <p class="underline font-poppins text-text-color text-center p-2">Terms and Conditions</p>
        </div>
    </section>
</body>

</html>