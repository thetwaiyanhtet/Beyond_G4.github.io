$(document).ready(function () {
  function fetchReviewDetails(Id) {
    $.ajax({
      url: "../Controller/revieandratingdetailcontroller.php",
      type: "GET",
      data: {
        id: Id,
      },
        success: function (reviewData) {
          console.log(reviewData);
        const reviewDetails = JSON.parse(reviewData);
        const popupContent = `
          <div>
                <img src="${reviewDetails.p_one}" alt="" class=" hover:transition-all hover:duration-300 hover:scale-125">
                <div class=" p-3 space-y-3">
                    <p class=" font-semibold"> ${reviewDetails.name} </p>
                    <p class=" text-yellow-500 text-xl">
                        <?php

                        function numberToStars($number)
                        {
                            $roundedNumber = round($number);
                            $maxStars = 5;
                            $fullStars = str_repeat('★', $roundedNumber);
                            $emptyStars = str_repeat('☆', $maxStars - $roundedNumber);
                            return $fullStars . $emptyStars;
                        }
                        echo numberToStars($reviewdetail[0]["rating"]);
                        ?>
                        <span class="text-black">/</span>
                        <span class="text-black">${reviewDetails.username}</span>
                    </p>
                    <p class=" text-gray-500">${reviewDetails.comment}</p>
                    <div>
                        <span class=" text-gray-500 pt-5">Category : </span>
                        <span>${reviewDetails.c_name}</span>
                    </div>
                    <div class=" border-t-2 border-blue-500 py-3">
                        <div><button id="cancelRNRButton" class="mb-3 text-white rounded-md float-right bg-blue-500 py-1 px-3">Close</button></div>
                    </div>
                </div>
            </div>
        `;

        // Append the popup content and show the popup
        $("#detailPopup").empty().append(popupContent).removeClass("hidden");

        // Attach event listener for the "Cancel" button
        $("#cancelRNRButton").on("click", function () {
          $("#detailPopup").addClass("hidden");
        });
      },
      error: function (error) {
        console.log(error);
      },
    });
  }

  $(".view-details-button").on("click", function () {
    const Id = $(this).data("id");
    fetchReviewDetails(Id);
  });
});
