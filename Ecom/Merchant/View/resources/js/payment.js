// document.getElementById("paymentForm").addEventListener("submit", function (event) {
//         // Validate the form fields here
//         var cardHolderName = document.querySelector('input[name="user"]');
//         var cardNumber = document.querySelector('input[name="cardNumber"]');
//         var cardDate = document.querySelector('input[name="cardDate"]');
//         var cardCVV = document.querySelector('input[name="cardCVV"]');

//         if (!cardHolderName.value || !cardNumber.value || !cardDate.value || !cardCVV.value) {
//             event.preventDefault(); // Prevent form submission
//             alert("Please fill in all payment details before proceeding.");
//         }
//     });



document.getElementById("paymentForm").addEventListener("submit", function (event) {
    // Get all payment method radio inputs
    var paymentMethodInputs = document.querySelectorAll('input[name="payment"]');
    

    // Initialize a variable to track whether validation should be performed
    var performValidation = true;

    // Loop through the payment method inputs to find the selected one
    for (var i = 0; i < paymentMethodInputs.length; i++) {
        if (paymentMethodInputs[i].checked) {
            // If "Kpay" is selected, no validation needed, so set performValidation to false
            if (paymentMethodInputs[i].value === "KBZ") {
                performValidation = false;
                break;
            }
        }
    }

    // If performValidation is true, validate the credit card details
    if (performValidation) {
        var cardHolderName = document.querySelector('input[name="user"]');
        var cardNumber = document.querySelector('input[name="cardNumber"]');
        var cardDate = document.querySelector('input[name="cardDate"]');
        var cardCVV = document.querySelector('input[name="cardCVV"]');
        console.log(cardHolderName);
        console.log(cardNumber);
        console.log(cardDate);
        console.log(cardCVV);


        if (!cardHolderName.value || !cardNumber.value || !cardDate.value || !cardCVV.value) {
            event.preventDefault(); // Prevent form submission
            alert("Please fill in all payment details before proceeding.");
        }
    }
});

