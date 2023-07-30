<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Delivery</title>
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
                        <div class="w-1/3 bg-[#314755] h-3 flex items-center relative">
                            <div class="absolute right-0 -mr-2">
                                <div class="relative px-2 py-1 rounded mt-20 -mr-12">
                                    <p tabindex="0" class="focus:outline-none text-xl font-semibold max-lg:text-sm">Delivery</p>
                                </div>
                            </div>
                            <a href="./cart2.php">
                            <div class=" bg-gray-200 h-10 w-10 rounded-full border shadow flex items-center justify-center">
                                <ion-icon class="text-3xl" name="cart-outline"></ion-icon>
                            </div>
                            </a>
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
    <div class=" font-poppins relative mt-10 mx-auto container">
        <div class="flex justify-around">
            <div class="w-2/4 h-80 max-lg:h-72 bg-gray-200 p-5 rounded-lg shadow-md">
                <p class=" font-bold text-center ">Select Your Delivery Method</p>
                <div class="mt-5 font-semibold max-lg:text-sm">
                    <label class="flex items-center space-x-2 mb-5">
                        <input type="radio" name="deli" class="form-checkbox w-6 h-6  ">
                        <span>Royal Express</span>
                    </label>
                    <label class="flex items-center space-x-2 mb-5">
                        <input type="radio" name="deli" class="form-checkbox w-6 h-6 ">
                        <span>Bee Express</span>
                    </label>
                    <label class="flex items-center space-x-2 mb-5">
                        <input type="radio" name="deli" class="form-checkbox w-6 h-6">
                        <span>Jack Express</span>
                    </label>
                    <label class="flex items-center space-x-2 mb-5">
                        <input type="radio" name="deli" class="form-checkbox w-6 h-6">
                        <span>Hello Express</span>
                    </label>

                </div>
            </div>
            <div class="flex flex-col  font-poppins">
                <p class=" text-3xl text-center max-lg:text-xl font-bold">Your order</p>
                <div class="flex mt-10 border-b-4 border-button-color  justify-center align-middle justify-items-center">
                    <div class="mr-10 text-xl max-lg:text-sm font-semibold">
                        <p class="mb-5">Subtotal</p>
                        <p class="mb-5 ">Delivery Fee</p>

                    </div>
                    <div class="flex flex-col max-lg:text-base items-end text-xl font-semibold">
                        <p class="mb-5">$250</p>
                        <p class="mb-5">$10</p>

                    </div>
                </div>
                <div class="flex mt-5 max-lg:text-sm justify-between text-xl font-semibold">
                    <div>
                        <p class="mb-5">Total Amount</p>
                    </div>
                    <div>
                        <p class="mb-5">$260</p>
                    </div>
                </div>
            
           
        </div>
        <div class="absolute bottom-0 right-5 mr-8 max-lg:-bottom-10 max-lg:right-5">
               <a href="./payment.php"><button class=" text-white py-1 px-5 rounded-md bg-[#314755] " >Next Step ></button>
               </a> 
            </div>
        </div>

    </div>

</body>

</html>