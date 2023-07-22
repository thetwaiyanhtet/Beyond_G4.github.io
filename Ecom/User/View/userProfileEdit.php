<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Edit</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="mt-3 font-poppins overflow-hidden">

    <nav class=" flex items-center justify-between mx-[3%]">
        <span class="flex items-center  mb-[1%]">
            <img class="w-16" src="./resources/img/logo.png" alt="...">
            <p class="text-3xl ml-[1%] max-md:text-2xl font-philosopher ">Beyond</p>
        </span>
        <span>
            <ion-icon class="text-4xl" name="person-circle-outline"></ion-icon> 
        </span>
    </nav>
    <main class=" bg-purple-300 min-h-screen">
        <div class=" ml-8 text-white">
            <h1>My Profile</h1>
            <p class=" text-sm">Manage and protect your account</p>
        </div>
        <section class=" grid grid-cols-5">
            <div class=" col-start-1 col-span-3 border-r-2 space-y-5 w-[700px] mx-28">
                <div class=" grid grid-cols-2">
                    <p class=" text-white text-start text-xl">Username</p>
                    <input type="text" placeholder="Username" class="profileInputBox col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class=" text-white text-start text-xl">Name</p>
                    <input type="text" placeholder="Name" class="profileInputBox col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class=" text-white text-start text-xl">Email</p>
                    <input type="text" placeholder="user****@mail.com" class="profileInputBox col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class=" text-white text-start text-xl">Phone Number</p>
                    <input type="text" placeholder="09********" class="profileInputBox col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class=" text-xl text-white">Gender</p>
                    <div class="">
                        <input type="radio" id="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female">
                        <label for="female">Female</label>
                        <input type="radio" id="other">
                        <label for="other">Other</label>

                    </div>
                </div>
                <div class="grid grid-cols-2 items-center justify-center">
                    <p class=" text-white">Date of Birth</p>
                    <input type="date" class=" w-72 p-3 rounded-md">
                </div>
            </div>
        </section>
    </main>


</body>

</html>