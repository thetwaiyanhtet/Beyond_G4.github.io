<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>cart</title>
</head>

<body>
    <!-- component -->
    <div class="h-full w-full py-16">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

        <div class="">
            <!--Code Block for progress bar Starts-->
            <dh-component>
                <div class=" w-11/12 lg:w-2/6 mx-auto">
                    <div class="bg-gray-200 h-1 flex items-center justify-between relative">
                        <div class="absolute left-0 -mr-4">
                            <div class="relative px-2 py-1 rounded mt-20 -mr-12">
                                <p tabindex="0" class="focus:outline-none text-xl font-semibold max-lg:text-sm ">Cart</p>
                            </div>
                        </div>
                        <div class="w-1/3 bg-gray-200 h-3 flex items-center relative">
                            <div class="absolute right-0 -mr-2">
                                <div class="relative px-2 py-1 rounded mt-20 -mr-12">
                                    <p tabindex="0" class="focus:outline-none text-xl font-semibold max-lg:text-sm">Delivery</p>
                                </div>
                            </div>
                            <div class=" bg-gray-200 h-10 w-10 rounded-full border shadow flex items-center justify-center">
                                <ion-icon class="text-3xl" name="cart-outline"></ion-icon>
                            </div>
                        </div>

                        <div class="w-1/3 flex justify-between bg-gray-200 h-3 items-center relative">
                            <div class="absolute right-0 -mr-2">
                                <div class="relative  px-2 py-1 rounded mt-20 -mr-3">
                                    <p tabindex="0" class="focus:outline-none  text-xl font-semibold max-lg:text-sm">Card</p>
                                </div>
                            </div>
                            <div class="bg-gray-200 h-10 w-10 rounded-full shadow flex items-center justify-center -ml-2">
                                <ion-icon class="text-3xl" name="car-outline"></ion-icon>
                            </div>
                            <div class="w-1/5 bg-gray-200 h-3 flex items-center relative">
                                <div class="bg-gray-200 h-10 w-10 rounded-full shadow flex items-center justify-center -mr-3 relative">
                                    <ion-icon class="text-3xl" name="card-outline"></ion-icon>
                                </div>
                            </div>

                        </div>

                        <div class="w-1/3 flex h-3 bg-gray-200 items-center justify-end relative">
                            <div class="bg-gray-200 h-10 w-10 rounded-full shadow flex items-center justify-center">
                                <ion-icon class="text-3xl " name="checkmark-circle-outline"></ion-icon>
                            </div>
                            <div class="absolute right-0 -mr-2">
                                <div class="relative  px-2 py-1 rounded mt-20 max-lg:-mr-3 -mr-10">
                                    <p tabindex="0" class="focus:outline-none  text-xl font-semibold max-lg:text-sm">Confirmation</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </dh-component>
            <!--Code Block for progress bar Starts-->
        </div>

    </div>
    <div class=" relative mt-10 mx-auto container">
        <p class=" font-philosopher text-3xl max-lg:ml-5">Shopping Bag</p>
        <div class="flex items-center justify-around ">
            <div class=" relative mt-8 ">
                <img class="w-40" src="./resources/img/cart shopping.png" alt="">
                <ion-icon  class="absolute top-0 right-0 text-3xl cursor-pointer bg-pink-300 rounded-3xl" name="close-outline"></ion-icon>
            </div>
            <div class="flex flex-col items-center font-philosopher">
                <p >1 items</p>
                <div class="flex mt-10  justify-center align-middle justify-items-center">
                    <div class="mr-10 ">
                        <p class="mb-5">Size</p>
                        <p class="mb-5">Color</p>
                        <p class="mb-5">Amount</p>
                        <p class="mb-5">Price</p>
                        <p class="mb-5">Total Price</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <p class="mb-5">M</p>
                        <p class="mb-5">Natural</p>
                        <div  class="w-16 h-8 flex justify-center items-center">
                        <ion-icon class="bg-gray-200  cursor-pointer"  name="remove-outline"></ion-icon>
                        <p class=" px-2">2</p>
                        <ion-icon class="bg-gray-200 cursor-pointer " name="add-outline"></ion-icon>
                        </div>
                        <p class="mb-5 mt-5">$250</p>
                        <p class="mb-5">$250</p>
                    </div>


                </div>
            </div>
           
        </div>
        <div class="absolute bottom-0 right-0 max-lg:-bottom-10 max-lg:right-5">
                <button class=" py-1 px-5 rounded-md bg-green" >Next Step></button>
            </div>
    </div>

</body>

</html>