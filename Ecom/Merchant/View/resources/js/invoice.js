
    document.getElementById('invoiceForm').addEventListener('submit', function(event) {
        const invoiceCheckbox = document.getElementById('invoice');

        // Check if the checkbox is checked
        if (invoiceCheckbox.checked) {
            // Send an email (replace with your email sending logic)
            sendEmail();
        }
    });

