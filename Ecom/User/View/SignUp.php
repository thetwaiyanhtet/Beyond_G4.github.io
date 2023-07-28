<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display:wght@500&family=Poppins:wght@200&display=swap" rel="stylesheet">
  
</head>

<body>
    <img src="./resources/img/logo.png" alt="logo" class="w-24 m-2">
    <p class=" font-philosopher text-4xl text-center">Sign Up</p>

    <section class="relative">
    <div class="flex flex-col items-center z-10">
    <img src="./resources/img/Triangle.png" alt="1" class="md:w-64 w-36 absolute left-2/3 top-40 md:scale-100 scale-125">
    <img src="./resources/img/Triangle-2.png" alt="1" class="md:w-64 w-36 absolute right-2/3 scale-125">
    </div>
        <div class="md:w-1/2 w-96 md:h-fit h-96 border border-solid  bg-transparent mt-5 rounded-lg  drop-shadow-2xl opacity-75 m-auto z-10">
            <div class="m-5 flex flex-col items-center">
                <input class="border border-solid rounded-lg bg-white w-64 h-12 p-4 mb-5 font-poppins drop-shadow-md bg-blend-normal" placeholder="Full Name"></input>
                <input class="border border-solid rounded-lg bg-white w-64 h-12 p-4 mb-5 font-poppins drop-shadow-md bg-blend-normal" placeholder="Email"></input>
                <input class="border border-solid rounded-lg bg-white w-64 h-12 p-4 mb-5 font-poppins drop-shadow-md bg-blend-normal" placeholder="Password"></input>
                <a href="./login.php">
                    <button type="button" class="text-white bg-btn-color rounded-xl w-32 h-10 ml-18 mt-6 font-Playfair Display">Log in</button>
                </a>
                <p class="underline font-poppins text-text-color text-center p-2 ml-18 md:block hidden font-Playfair Display">Terms and Conditions</p>
            </div>
        </div>
        </div>
        <div class="flex flex-col items-center mt-3 md:hidden">
            <p class="font-poppins p-2 font-Playfair Display">Already have an account ?</p>
            <a href="./login.php" class=" text-blue-700 underline font-Playfair Display p-2">Login</a>
            <p class="underline font-poppins text-text-color text-center p-2 font-Playfair Display">Terms and Conditions</p>
        </div>
    </section>
</body>

</html>