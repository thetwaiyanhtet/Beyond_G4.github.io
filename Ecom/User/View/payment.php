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
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/js/payment.js" defer></script>
    <title>Payment</title>
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
                        <div class="w-1/3 bg-btn-color h-3 flex items-center relative">
                            <div class="absolute right-0 -mr-2">
                                <div class="relative px-2 py-1 rounded mt-20 -mr-12">
                                    <p tabindex="0" class="focus:outline-none text-xl font-semibold max-lg:text-sm">Delivery</p>
                                </div>
                            </div>

                            <div class=" bg-gray-200 h-10 w-10 rounded-full border shadow flex items-center justify-center">
                                <ion-icon class="text-3xl" name="cart-outline"></ion-icon>
                            </div>

                        </div>

                        <div class="w-1/3 flex justify-between bg-btn-color h-3 items-center relative">
                            <div class="absolute right-0 -mr-2">
                                <div class="relative  px-2 py-1 rounded mt-20 -mr-3">
                                    <p tabindex="0" class="focus:outline-none  text-xl font-semibold max-lg:text-sm">Card</p>
                                </div>
                            </div>
                            <a href="./deliver.php">
                                <div class="bg-gray-200 h-10 w-10 rounded-full shadow flex items-center justify-center -ml-2">
                                    <ion-icon class="text-3xl" name="car-outline"></ion-icon>
                                </div>
                            </a>
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
    <form action="./confirmation.php" method="post">
    <div class=" font-poppins relative mt-10 mx-auto container">
        <div class="flex justif-center items-center flex-col">
            <div class="w-11/12 h-12 p-5 flex  bg-btn-color rounded-lg shadow-md">
                <label class="flex items-center space-x-2 mb-5">
                    <input type="radio" name="deli" value="0" class="form-checkbox w-6 h-6 ">
                    <span class="text-white font-bold">Visa</span>
                </label>
            </div>

            <div class="bg-gray-200 w-11/12 h-96 max-lg:h-1/2 shadow-lg">
                <div class="  flex max-lg:flex-col ">
                    <div class=" m-5 h-64 w-1/2 max-lg:w-11/12">
                        <div id="input_canva" class=" h-80 bg-white px-3 py-5 space-y-3">
                            <div class=" flex flex-col items-start ">
                                <span>Card number</span>
                                <input id="cardNo" type="number" maxlength="16" class="outline-none h-10 w-full border-b-2 border-btn-color ">
                            </div>
                            <div class="  flex flex-col items-start ">
                                <span>Card holder</span>
                                <input id="cardHolder" type="text" class="outline-none bg-transparent h-10 w-full border-b-2 border-btn-color">
                            </div>
                            <div class="flexbox flex justify-between">
                                <div class=" flex flex-col items-start ">
                                    <span>expire MM</span>
                                    <input id="expMonth" type="number" min="1" max="12" maxlength="2" class="outline-none h-10 w-[100%] border-b-2 border-btn-color">
                                </div>
                                <div class=" flex flex-col items-start ">
                                    <span>expire YY</span>
                                    <input id="expYear" type="number" max="2030" min="2023" class="outline-none h-10 w-[100%] border-b-2 border-btn-color ">
                                </div>
                                <div class=" flex flex-col -mr-24 ml-5 items-start">
                                    <span>CVV</span>
                                    <input id="cvv" type="text" maxlength="4" class="outline-none h-10 w-[70%]   border-b-2 border-btn-color " placeholder="only 4 digit">
                                </div>
                                <div class="items-start">

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                        <div id="flipper" class="card-container w-1/2  max-lg:w-11/12 max-lg:- m-5 max-lg:mt-20 rounded-md bg-gray-500 ">
                            <div id="front" class="  inset-0 ">
                                <div class="image flex mt-2 justify-around">
                                    <img src="./resources/img/chip.png" class="chip w-16 h-10">
                                    <img src="./resources/img/visa.png" class="w-20 h-8" alt="">
                                </div>
                                <div id="cardno" class="card-number-box font-bold text-gray-300 tracking-wide m-5 mt-10">**** **** **** ****</div>
                                <div class="flex justify-between">
                                    <div class="box m-5 mt-16">
                                        <span>Card holder</span>
                                        <div id="cardholder" class="card-holder-name">_</div>
                                    </div>
                                    <div class="box m-5 mt-16">
                                        <span>Expires</span>
                                        <div class="expiration">
                                            <span id="expmonth" class="exp-month">MM</span>
                                            <span>/</span>
                                            <span id="expyear" class="exp-year">YY</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="cvvs" class="back hidden transform-front">
                                <div class="stripe"></div>
                                <div class="box flex flex-col p-5 justify-center mt-16">
                                    <span id="cvvi" class="text-2xl font-bold">Cvv</span>
                                    <div id="cvvpw" class="cvv-box w-[100%] pl-3 items-center h-10 rounded-md bg-white py-2"></div>
                                </div>
                                <img src="image/visa.png" alt="">
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center relative">
        <div class="flex w-[80%]  mt-10">
  
            <div class=" bg-btn-color w-full  mx-3 pt-3 rounded-md">
                <label class="flex items-center rounded-md h-5 space-x-2 ml-5 mb-5">
                    <input type="radio" name="deli" value="1" class="form-checkbox w-6 h-6 ">
                    <span class="text-white font-bold">KBZ pay</span>
                </label>
            </div>
        </div>
        <div class="absolute -bottom-20 mr-10 max-lg:right-3  right-0 max-lg:-bottom-20">
            <a href="./confirmation.php"> <button class=" text-white  py-2 px-7 rounded-md bg-[#314755]">Next Step ></button></a>
        </div>
    </div>
    </form>
    </div>
</body>

</html>