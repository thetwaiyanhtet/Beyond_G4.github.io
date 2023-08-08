
$(document).ready(function () {
  $("#search").keyup(function () {
    $.ajax({
      url: "../Controller/searchOrderController.php",
      type: "POST",
      data: {
        searchText: $(this).val(),
      },
      success: function (res) {
        $("#searchResult").empty();
        let orders = JSON.parse(res);
        console.log(orders);
        for (const order of orders) {
          $("#searchResult").append(
            `<tr class="border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">1</th>
                            <td class="px-6 py-4">${order.generate_id}</td>
                            <td class="px-6 py-4">${order.username}</td>
                            <td class="px-6 py-4">${order.order_date}</td>
                            <td class="px-6 py-4">${order.payment_status}</td>
                            <td class="px-6 py-4">${order.payment_id}</td>
                            <td class="px-6 py-4"><a href="./orderDetail.php?id=${order.generate_id}">View</a></td>
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
