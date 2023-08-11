$(document).ready(function () {
  // Create a new <style> element and append it to the <head> section
  const styleElement = document.createElement("style");
  document.head.appendChild(styleElement);

  // Add CSS rules to the <style> element to underline when hover
  styleElement.innerHTML = `
    .view-link:hover {
      color: blue;
      text-decoration: underline;
    }
  `;
  
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

        for (let i = 0; i < orders.length; i++) {
          const order = orders[i];
          const rowNumber = i + 1;

          let paymentStatus = "";
          let colorClass = "";
          let paymentID = "";

          if (order.payment_status === 0) {
            paymentStatus = "Pending";
            colorClass = "text-yellow-500"; //  CSS class for yellow color
          } else if (order.payment_status === 1) {
            paymentStatus = "Complete";
            colorClass = "text-green-500"; //   CSS class for green color
          }
          if (order.payment_id === 0) {
            paymentID = "Visa";
          } else if (order.payment_id === 1) {
            paymentID = "KBZ Pay";
          }

          $("#searchResult").append(
            `<tr class="border-b hover:bg-gray-200 border-gray-500">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">${rowNumber}.</th>
              <td class="px-6 py-4">${order.generate_id}</td>
              <td class="px-6 py-4">${order.username}</td>
              <td class="px-6 py-4">${order.order_date}</td>
              <td class="px-6 py-4 ${colorClass}">${paymentStatus}</td>
              <td class="px-6 py-4">${paymentID}</td>
              <td class="px-6 py-4"><a href="./orderDetail.php?id=${order.generate_id}" class="view-link">View</a></td>
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

