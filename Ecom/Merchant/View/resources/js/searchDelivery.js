$(document).ready(function () {
  $("#search").keyup(function () {
    $.ajax({
      url: "../Controller/searchDeliveryController.php",
      type: "POST",
      data: {
        searchText: $(this).val(),
      },
      success: function (res) {
        $("#searchResult").empty();
        let deliveries = JSON.parse(res);

        for (let i = 0; i < deliveries.length; i++) {
          const delivery = deliveries[i];
          const rowNumber = i + 1;

          $("#searchResult").append(
            `<tr class=" border-b hover:bg-gray-200 border-gray-500">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">${rowNumber}.</th>
              <td class="px-6 py-4">${delivery.generate_id}</td>
              <td class="px-6 py-4">${delivery.username}</td>
              <td class="px-6 py-4">${delivery.order_date}</td>
              <td class="px-6 py-4">${delivery.total_amt}</td>
              <td class="px-6 py-4">${delivery.delivery_name}</td>
              <td class="px-6 py-4">View Details</td>
            </tr>`
          );
        }
      },
      error: function (error) {
        console.log(error);
      },
    });
  });
});
