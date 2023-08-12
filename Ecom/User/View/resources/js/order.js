$(document).ready(function () {
  $(".rating-button").click(function () {
    var orderId = $(this).data("order-id");
    $("#order-id-input").val(orderId);

    // Hide the thank you message (if it was shown from a previous submission)
    $("#thank-you-message").hide();

    // console.log(orderId);

    //   $("#review-form").submit(function (e) {
    //     e.preventDefault(); // Prevent the default form submission

    //     // Get the review text and order ID
    //     var reviewText = $("#review-textarea").val();
    //       var orderId = $("#order-id-input").val();
    //         console.log(orderId);
    //         console.log(reviewText);

    //   });
  });
});
