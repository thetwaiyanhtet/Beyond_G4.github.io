document.getElementById("paymentForm").addEventListener("submit", function (event) {
        // Validate the form fields here
        var cardHolderName = document.querySelector('input[name="user"]');
        var cardNumber = document.querySelector('input[name="cardNumber"]');
        var cardDate = document.querySelector('input[name="cardDate"]');
        var cardCVV = document.querySelector('input[name="cardCVV"]');

        if (!cardHolderName.value || !cardNumber.value || !cardDate.value || !cardCVV.value) {
            event.preventDefault(); // Prevent form submission
            alert("Please fill in all payment details before proceeding.");
        }
    });
