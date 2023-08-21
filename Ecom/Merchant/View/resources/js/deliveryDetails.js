$(document).ready(function () {
  function fetchDeliveryDetails(generateId) {
    $.ajax({
      url: "../Controller/deliveryDetailController.php",
      type: "GET",
      data: {
        generate_id: generateId,
      },
      success: function (details) {
        const orderDetails = JSON.parse(details);
        const totalAmount = orderDetails.total_amt + orderDetails.delivery_fees;
        const popupContent = `
          <div class=" flex space-x-3">
            <div class=" w-40">Customer Name: </div>
            <div>${orderDetails.username}</div>
          </div>
          <div class=" flex space-x-3">
            <div class=" w-40">Address: </div>
            <div>${orderDetails.street},${orderDetails.t_name},</br>${orderDetails.r_name}</div>
          </div>
          <div class=" flex space-x-3">
            <div class=" w-40">Phone No: </div>
            <div>${orderDetails.phone}</div>
          </div>
          <div class=" flex space-x-3">
            <div class=" w-40">Order Date: </div>
            <div>${orderDetails.order_date}</div>
          </div>
          <div class=" flex space-x-3">
            <div class=" w-40">Total Price: </div>
            <div>${orderDetails.total_amt} MMK</div>
          </div>
          <div class=" flex space-x-3">
            <div class=" w-40">Delivery Service: </div>
            <div>${orderDetails.delivery_name}</div>
          </div>
          <div class=" flex space-x-3">
            <div class=" w-40">Delivery Charges: </div>
            <div>${orderDetails.delivery_fees} MMK</div>
          </div>
          <div class=" flex space-x-3">
            <div class=" w-40">Total Amount: </div>
            <div>${totalAmount} MMK</div>
          </div>
          <div class=" flex justify-center">
          <button id="cancelPopupButton" class=" border px-3 py-2 bg-blue-500 rounded-md text-white font-playfairDisplay">Cancel</button>
          </div>
        `;

        // Append the popup content and show the popup
        $("#popupContainer").empty().append(popupContent).removeClass("hidden");

        // Attach event listener for the "Cancel" button
        $("#cancelPopupButton").on("click", function () {
          $("#popupContainer").addClass("hidden");
        });
      },
      error: function (error) {
        console.log(error);
      },
    });
  }

  $(".view-details-button").on("click", function () {
    const generateId = $(this).data("generate-id");
    fetchDeliveryDetails(generateId);
  });
});
