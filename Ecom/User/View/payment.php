<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/css/Visacard.css">
    <script src="./resources/js/payment.js" defer></script>
    <title>Payment</title>
</head>

<body class="bg-purple-200">

    <!-- component -->
    <div class="h-full w-full py-12">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

        <div class="">
            <!--Code Block for progress bar Starts-->
            <dh-component>
                <div class=" w-11/12 lg:w-2/6 mx-auto">
                    <div class="bg-white h-1 flex items-center justify-between relative">
                        <div class="absolute left-0 -mr-4">
                            <div class="relative px-2 py-1 rounded mt-20 -mr-12">
                                <p tabindex="0" class="focus:outline-none text-md font-semibold max-lg:text-sm ">Cart</p>
                            </div>
                        </div>
                        <div class="w-1/3 bg-purple-500 h-3 flex items-center relative">
                            <div class="absolute right-0 -mr-2">
                                <div class="relative px-2 py-1 rounded mt-20 -mr-12">
                                    <p tabindex="0" class="focus:outline-none text-md font-semibold max-lg:text-sm">Delivery</p>
                                </div>
                            </div>
                            <a href="./cart2.php">
                                <div class=" bg-white h-10 w-10 rounded-full border shadow flex items-center justify-center">
                                    <ion-icon class="text-3xl z-50 p-2" name="cart-outline"></ion-icon>
                                </div>
                            </a>
                        </div>

                        <div class="w-1/3 flex bg-purple-500 justify-between h-3 items-center relative">
                            <div class="absolute right-0 -mr-2">
                                <div class="relative  px-2 py-1 rounded mt-20 -mr-3">
                                    <p tabindex="0" class="focus:outline-none  text-md font-semibold max-lg:text-sm">Card</p>
                                </div>
                            </div>
                            <div class="bg-white h-10 w-10 rounded-full shadow flex items-center justify-center -ml-2">
                                <ion-icon class="text-3xl z-50 p-2" name="car-outline"></ion-icon>
                            </div>
                            <div class="w-1/5 bg-white h-3 flex items-center relative">
                                <div class="bg-white h-10 w-10 rounded-full shadow flex items-center justify-center -mr-3 relative">
                                    <ion-icon class="text-3xl z-50 p-2" name="card-outline"></ion-icon>
                                </div>
                            </div>

                        </div>

                        <div class="w-1/3 flex h-3 bg-white items-center justify-end relative">
                            <div class="bg-white h-10 w-10 rounded-full shadow flex items-center justify-center">
                                <ion-icon class="text-3xl " name="checkmark-circle-outline"></ion-icon>
                            </div>
                            <div class="absolute right-0 -mr-2">
                                <div class="relative  px-2 py-1 rounded mt-20 max-lg:-mr-3 -mr-10">
                                    <p tabindex="0" class="focus:outline-none  text-md font-semibold max-lg:text-sm">Confirmation</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </dh-component>
            <!--Code Block for progress bar Starts-->
        </div>

    </div>
    <form id="myForm" action="./confirmation.php" method="post">
        <div class=" relative w-[70%] mt-10 mx-auto container">
            <div class="flex justify-center items-center flex-col">
                <div class="w-11/12 h-12 p-5 flex  bg-purple-600 rounded-lg shadow-md">
                    <label class="flex items-center space-x-2 mb-5">
                        <input type="radio" name="deli" value="0" class="form-checkbox w-6 h-6 accent-purple-600">
                        <span class="text-white font-bold">Visa</span>
                    </label>
                </div>

                <div class="bg-purple-200 w-11/12 h-96 max-lg:h-1/2 shadow-lg">
                    <div class="  flex max-lg:flex-col ">
                        <div class=" m-5 h-64 w-1/2 max-lg:w-11/12">
                            <div id="input_canva" class=" h-80 bg-white px-3 py-5 space-y-3 rounded-lg">
                                <div class=" flex flex-col items-start ">
                                    <span>Card number</span>
                                    <input id="cardNo" type="number" name="cardNumber" maxlength="16" class="outline-none h-10 w-full border-b-2 border-btn-color ">
                                </div>
                                <div class="  flex flex-col items-start ">
                                    <span>Card holder</span>
                                    <input id="cardHolder" type="text" name="cardholder" class="outline-none bg-transparent h-10 w-full border-b-2 border-btn-color">
                                </div>
                                <div class="flexbox flex justify-between">
                                    <div class=" flex flex-col items-start ">
                                        <span>expire MM</span>
                                        <input id="expMonth" type="number" name="expm" min="1" max="12" maxlength="2" class="outline-none h-10 w-[100%] border-b-2 border-btn-color">
                                    </div>
                                    <div class=" flex flex-col items-start ">
                                        <span>expire YY</span>
                                        <input id="expYear" type="number" name="expy" max="2030" min="2023" class="outline-none h-10 w-[100%] border-b-2 border-btn-color ">
                                    </div>
                                    <div class=" flex flex-col -mr-24 ml-5 items-start">
                                        <span>CVV</span>
                                        <input id="cvv" name="cardCVV" type="number" maxlength="4" class="outline-none h-10 w-[70%]   border-b-2 border-btn-color " placeholder="only 4 digit">
                                    </div>
                                    <div class="items-start">

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-container w-1/2  max-lg:w-11/12 max-lg:- m-5 max-lg:mt-20 rounded-md bg-purple-500 p-5">
                            <div class="front">
                                <div class="image">
                                    <img src="./resources/img/chip.png" class="chip">
                                    <img src="./resources/img/visa.png" alt="">
                                </div>
                                <div id="cardno" class="card-number-box">**** **** **** ****</div>
                                <div class="flexbox">
                                    <span id="cardholder">card holder</span>
                                    <div class="card-holder-name">_</div>
                                </div>
                                <div class="box">
                                    <span>expires</span>
                                    <div class="expiration">
                                        <span id="expmonth" class="exp-month">MM</span>
                                        <span id="expyear" class="exp-year">YY</span>
                                    </div>
                                </div>
                            </div>

                            <div id="cvvs" class="back">
                                <div class="stripe"></div>
                                <div class="box">
                                    <span id="cvvpw">cvv</span>
                                    <img src="image/visa.png" alt="">
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- <div class=" bg-purple-600 w-full pt-3 rounded-md">
                    <label class="flex items-center rounded-md h-5 space-x-2 ml-5 mb-5">
                        <input type="radio" name="deli" value="1" class="form-checkbox w-6 h-6 ">
                        <span class="text-white font-bold">KBZ pay</span>
                    </label>
                </div> -->
                <div class="w-11/12 h-12 p-5 flex  bg-purple-600 rounded-lg shadow-md">
                    <label class="flex items-center space-x-2 mb-5">
                        <input type="radio" name="deli" value="1" class="form-checkbox w-6 h-6 accent-purple-600 ">
                        <span class="text-white font-bold">KPay</span>
                    </label>
                </div>
            </div>

        </div>
        <div class="flex justify-center items-center relative">

            <div class="absolute -bottom-20 mr-10 max-lg:right-3  right-0 max-lg:-bottom-20">
                <a href="./confirmation.php"> <input type="submit" id="myButton" class=" text-white  py-2 px-7  rounded-md bg-[#314755]" value="Next Step"></a>
            </div>
        </div>
    </form>
    </div>
    <script>
        const form = document.getElementById("myForm");
        form.addEventListener("submit", function(event) {
            const selectedOptions = form.querySelectorAll('input[name="deli"]:checked');

            if (selectedOptions.length !== 1) {
                event.preventDefault(); // Prevent form submission
                alert("Please select exactly one payment option.");
            }



        });


        document.getElementById("myButton").addEventListener("click", function(event) {

            var paymentMethodInputs = document.querySelectorAll('input[name="deli"]');
            var performValidation = true;
            for (var i = 0; i < paymentMethodInputs.length; i++) {
                if (paymentMethodInputs[i].checked) {
                    if (paymentMethodInputs[i].value === "1") {
                        performValidation = false;
                        break;
                    }
                }
            }
            if (performValidation) {
                var cardHolderName = document.querySelector('input[name="cardholder"]');
                var cardNumber = document.querySelector('input[name="cardNumber"]');
                var expMonth = document.querySelector('input[name="expm"]');
                var expYear = document.querySelector('input[name="expy"]');
                var cardCVV = document.querySelector('input[name="cardCVV"]');
                console.log(cardHolderName);
                console.log(cardNumber);
                console.log(expMonth);
                console.log(cardCVV);


                if (!cardHolderName.value || !expYear.value || !expMonth.value || !cardNumber.value || !cardDate.value || !cardCVV.value) {
                    event.preventDefault(); // Prevent form submission
                    alert("Please fill in all payment details before proceeding.");
                }
            }


        });


        var cardno = document.getElementById('cardNo');
        cardno.addEventListener('input', function() {
            var inputValue = cardno.value;
            var maxLength = 16;

            if (inputValue.length > maxLength) {
                cardno.value = inputValue.slice(0, maxLength);
            }
        });


        var month = document.getElementById('expMonth');
        month.addEventListener('input', function() {
            var inputValue = month.value;
            var maxLength = 2;

            if (inputValue.length > maxLength) {
                month.value = inputValue.slice(0, maxLength);
            }
        });
        var year = document.getElementById('expYear');
        year.addEventListener('input', function() {
            var inputValue = year.value;
            var maxLength = 4;

            if (inputValue.length > maxLength) {
                year.value = inputValue.slice(0, maxLength);
            }
        });
        var cv = document.getElementById('cvv');
        cv.addEventListener('input', function() {
            var inputValue = cv.value;
            var maxLength = 4;

            if (inputValue.length > maxLength) {
                cv.value = inputValue.slice(0, maxLength);
            }
        });
    </script>

</body>

</html>