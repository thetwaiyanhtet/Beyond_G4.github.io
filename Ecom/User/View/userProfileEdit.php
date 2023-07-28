<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Edit</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display:wght@500&family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body class="mt-3 font-poppins">

    <nav class=" flex items-center justify-between mx-[3%]">
        <span class="flex items-center">
            <img class="w-16" src="./resources/img/logo.png" alt="...">
            <p class="text-3xl ml-[1%] max-md:text-2xl font-philosopher ">Beyond</p>
        </span>
        <span>
            <ion-icon class="text-4xl" name="person-circle-outline"></ion-icon>
        </span>
    </nav>
    <main class=" bg-purple-300 min-h-screen rounded-tl-[35px] rounded-tr-[35px]">
        <div class=" text-white my-5 ml-8">
            <p class=" font-philosopher text-3xl m-3">My Profile</p>
            <p class=" font-poppins">Manage and protect your account</p>
        </div>
        <section class=" lg:grid lg:grid-cols-5">
            <div class=" col-start-1 col-span-3 space-y-5 lg:w-[700px] lg:mx-20 mx-10">
                <div class=" grid grid-cols-2 justify-around font-poppins">
                    <p class=" text-white text-start lg:text-xl text-sm">Username</p>
                    <input type="text" placeholder="Username" class="profileInputBox col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class="font-poppins text-white text-start lg:text-xl text-sm">Name</p>
                    <input type="text" placeholder="Name" class="profileInputBox col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class="font-poppins text-white text-start lg:text-xl text-sm">Email</p>
                    <input type="text" placeholder="user****@mail.com" class="profileInputBox col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class="font-poppins text-white text-start lg:text-xl text-sm">Phone Number</p>
                    <input type="text" placeholder="09********" class="profileInputBox col-start-2">
                </div>
                <div class=" grid grid-cols-2">
                    <p class="font-poppins lg:text-xl text-sm text-white">Gender</p>
                    <div>
                        <input type="radio" id="male" name="gender">
                        <label for="male" class=" lg:text-base text-sm font-poppins">Male</label>
                        <input type="radio" id="female" name="gender">
                        <label for="female" class=" lg:text-base text-sm font-poppins">Female</label>
                        <input type="radio" id="other" name="gender">
                        <label for="other" class=" lg:text-base text-sm font-poppins">Other</label>
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center justify-center">
                    <p class=" text-white lg:text-xl text-sm font-poppins">Date of Birth</p>
                    <input type="date" class=" lg:w-72 w-44 lg:p-3 p-2 rounded-lg lg:text-base text-sm">
                </div>
            </div>
            <div class=" col-start-4 col-span-2 flex justify-center lg:border-l-2 border-0 lg:mt-0 mt-6">
                <div class=" flex-col space-y-3">
                    <div class=" lg:w-32 lg:h-32 w-24 h-24 bg-slate-500 rounded-full shadow-xl"></div>
                    <button class=" lg:py-2 lg:px-4 py-1 px-2 bg-white rounded-md shadow-md lg:text-base text-sm">Select Image</button>
                </div>
            </div>
        </section>

        <section class="flex justify-center space-x-6 lg:float-right lg:my-20 lg:mr-48 my-3 mr-7 lg:mt-0 mt-12">
            <a href="./address.php">
                <button class=" font-Playfair Display lg:px-3 lg:py-3 px-2 py-2 bg-white rounded-lg">Add Address</button>
            </a>
            <button class=" font-Playfair Display lg:px-4 lg:py-3 px-3 py-2 bg-white rounded-lg">Save</button>
        </section>

    </main>


</body>

</html>