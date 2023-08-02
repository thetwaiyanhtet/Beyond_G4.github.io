<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart list</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div>
        <div class="flex justify-between">
            <p class=" font-philosopher text-xl m-5">cart<span class="font-philosopher">5items</span></p>
            <ion-icon name="close-outline" class="mt-4 mr-2 h-10 text-2xl"></ion-icon>
        </div>
        <!--Cart-->
        <div>
            <div class=" w-96 h-auto border border-solid border-black">
               <div class="flex justify-between">
               <div class="flex space-y-5">
                    <img src="./resources/img/photo.png" alt="" class="w-20">
                    <span class="font-poppins">Crop Top - </span>
                    <span class=" font-poppins">$79</span>
                </div>
                <div>
                    <p class="underline font-poppins">remove</p>
                    <div class="flex justify-between w-24 h-5 rounded-md border border-solid border-black">
                        <ion-icon name="add-outline"></ion-icon>
                        <p class=" text-center font-Playfair Display">2</p>
                        <ion-icon name="remove-outline"></ion-icon>
                    </div>
                </div>
               </div>

            </div>
        </div>
    </div>
</body>

</html>