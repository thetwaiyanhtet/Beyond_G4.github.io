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
        <div class="flex justif-center items-center flex-col">
            <div class="w-11/12 h-10 p-5 flex  bg-btn-color rounded-lg shadow-md">
                <label class="flex items-center space-x-2 mb-5">
                    <input type="radio" name="deli" class="form-checkbox w-6 h-6 ">
                    <span class="text-white font-bold">Visa</span>
                </label>
            </div>

            <div class="bg-gray-200 w-11/12 h-96 max-lg:h-1/2 shadow-lg">
                <div class="  flex max-lg:flex-col ">
                    <div class=" m-5 h-64 w-1/2 max-lg:w-11/12">
                        <div class="h-96">
                            <div class="inputBox flex flex-col items-start px-3">
                                <span>Card number</span>
                                <input type="text" maxlength="16" class=" h-10 w-11/12 border-b-2 border-btn-color ">
                            </div>
                            <div class="inputBox flex flex-col items-start px-3 ">
                                <span>Card holder</span>
                                <input type="text" class="card-holder-input h-10 w-11/12 border-b-2 border-btn-color">
                            </div>
                            <div class="flexbox flex">
                                <div class="inputBox flex flex-col items-start pl-3">
                                    <span>expire MM</span>
                                    <input type="text" class="card-holder-input h-10 w-2/3 border-b-2 border-btn-color">
                                </div>
                                <div class="inputBox flex flex-col items-start ">
                                    <span>expire YY</span>
                                    <input type="text" class="card-holder-input h-10 w-2/3 border-b-2 border-btn-color ">
                                </div>
                                <div class="inputBox">
                                    <span>CVV</span>
                                    <input type="text" maxlength="4" class="card-holder-input h-10 w-2/3 border-b-2 border-btn-color " placeholder="only 4 digit">
                                </div>
                                <div class="items-start">

                                </div>
                            </div>
                            <div class="flex text-center align-middle justify-center rounded-md m-1/2 ml-2 w-1/5 mt-10 bg-btn-color">
                                <input type="submit" value="submit" class=" text-white px-10 py-2  submit-btn">
                            </div>
                        </div>
                    </div>

                    <div class="card-container w-1/2  max-lg:w-11/12 max-lg:- m-5 max-lg:mt-20 rounded-md bg-gray-500 ">
                        <div class="front">
                            <div class="image flex mt-2 justify-around">
                                <img src="./resources/img/chip.png" class="chip w-16 h-10">
                                <img src="./resources/img/visa.png" class="w-20 h-8" alt="">
                            </div>
                            <div class="card-number-box m-5 mt-10">**** **** **** ****</div>
                            <div class="flex justify-between">
                                <div class="box m-5 mt-16">
                                    <span>Card holder</span>
                                    <div class="card-holder-name">_</div>
                                </div>
                                <div class="box m-5 mt-16">
                                    <span>Expires</span>
                                    <div class="expiration">
                                        <span class="exp-month">MM</span>
                                        <span class="exp-year">YY</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="back hidden">
                            <div class="stripe"></div>
                            <div class="box">
                                <span>cvv</span>
                                <div class="cvv-box"></div>
                                <img src="image/visa.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center relative">
        <div class="flex w-[80%]  mt-10">
            <div class=" bg-btn-color w-1/2 mx-4 pt-3 rounded-md">
                <label class="flex items-center align-middle rounded-md ml-6 space-x-2 mb-5">
                    <input type="radio" name="deli" class="form-checkbox w-6 h-6 ">
                    <span class="text-white font-bold">PayPal</span>
                </label>
            </div>
            <div class=" bg-btn-color w-1/2 mx-3 pt-3 rounded-md">
                <label class="flex items-center rounded-md h-5 space-x-2 ml-5 mb-5">
                    <input type="radio" name="deli" class="form-checkbox w-6 h-6 ">
                    <span class="text-white font-bold">KBZ pay</span>
                </label>
            </div>
        </div>
        <div class="absolute -bottom-20 mr-10 max-lg:right-3  right-0 max-lg:-bottom-20">
                <button class=" text-white  py-2 px-7 rounded-md bg-btn-color" >Next Step ></button>
            </div>
        </div>
    </div>
</body>

</html>