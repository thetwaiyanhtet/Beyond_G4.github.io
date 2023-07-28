<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Address</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display:wght@500&family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body class="mt-3 font-poppins ">

    <nav class=" flex items-center justify-between mx-[3%]">
        <span class="flex items-center mb-[1%]">
            <img class="w-16" src="./resources/img/logo.png" alt="...">
            <p class="text-3xl ml-[1%] max-md:text-2xl font-philosopher ">Beyond</p>
        </span>
        <span>
            <ion-icon class="text-4xl" name="person-circle-outline"></ion-icon>
        </span>
    </nav>

    <main class="relative w-full h-screen rounded-tl-[35px] rounded-tr-[35px] bg-purple-300">

        <div class=" absolute lg:top-[15%] lg:left-[35%] top-[15%] left-[7%] md:w-[450px] md:h-[420px] w-[360px] h-[520px] bg-white bg-opacity-50 rounded-lg shadow-2xl z-50">
            <div class=" flex-col md:space-y-6 space-y-4 p-5">
                <div class=" lg:flex lg:justify-around justify-center items-center lg:space-x-5 lg:space-y-0 space-y-4">
                    <input type="text" placeholder="Name" class=" inputBox focus:outline-none">
                    <input type="text" placeholder="Phone" class=" inputBox focus:outline-none">
                </div>
                <div class=" lg:flex justify-around items-center">
                    <input type="text" placeholder="Building,Street etc.." class=" inputBox focus:outline-none">
                </div>
                <div class=" lg:flex lg:justify-around justify-center items-center lg:space-x-5 lg:space-y-0 space-y-4">
                    <input type="text" placeholder="City" class=" inputBox focus:outline-none">
                    <input type="text" placeholder="Division/State" class=" inputBox focus:outline-none">
                </div>
            </div>
            <div class=" flex-col ml-6 space-y-5">
                <h2 class=" font-bold">Type</h2>
                <div class=" ml-5">
                    <span class=" w-auto bg-white text-black p-1 rounded-md mr-2">Home</span>
                    <span class=" w-auto bg-white text-black p-1 rounded-md">Work</span>
                </div>
                <input type="checkbox"> <span>Set as Default</span>
            </div>
            <div class=" flex space-x-3 float-right mr-5 mt-3 mb-5 ">
                <button class="flex justify-center items-center w-20 px-4 py-2 bg-white rounded-md text-black font-Playfair Display">Cancel</button>
                <button class="flex justify-center items-center w-20 px-4 py-2 bg-white rounded-md text-black font-Playfair Display">Sent</button>
            </div>
        </div>

        <div class=" flex justify-between items-center">
            <h1 class=" lg:text-3xl text-base ml-10 mt-10 font-bold  font-philosopher">My Address</h1>
            <div class=" flex justify-center items-center text-white shadow-2xl border-black w-[250px bg-purple-400 mr-10 mt-10 lg:px-5 px-2 lg:py-3 py-2">
                <span><ion-icon name="add-outline" class=" lg:text-2xl text-base"></ion-icon></span><button class=" lg:text-lg text-xs"> Add Address</button>
            </div>
        </div>
        <div class=" flex justify-center items-center lg:mt-6 mt-16">
            <div class="flex flex-col items-center">
                <img src="../View/resources/img/location.png" alt="...">
            </div>
        </div>
        <a href="./address.php">
        <ion-icon class="text-5xl absolute left-14 bottom-20 cursor-pointer max-md:text-3xl max-md:left-8 max-md:bottom-24" name="caret-back-outline"></ion-icon>
        </a>
    </main>
</body>

</html>