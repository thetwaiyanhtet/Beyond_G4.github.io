$(document).ready(function () {
  function searchCustomers() {
    $.ajax({
      url: "../Controller/searchCustomerController.php",
      type: "POST",
      data: {
        searchText: $("#search").val(),
      },
      success: function (res) {
        $("#searchResult").empty();
        let customers = JSON.parse(res);

        const filterText = $("#search").val().toLowerCase();
        const filteredCustomers = customers.filter((customer) =>
          customer.username.toLowerCase().includes(filterText)
        );

        for (let i = 0; i < filteredCustomers.length; i++) {
          const customer = filteredCustomers[i];

          $("#searchResult").append(
            `<tr class="border-b hover:bg-gray-200 border-gray-500">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">${customer.username}</th>
              <td class="px-6 py-4">${customer.email}</td>
              <td class="px-6 py-4">${customer.street},${customer.t_name},${customer.r_name}</td>
              <td class="px-6 py-4">${customer.phone}</td>
              <td class="px-6 py-4 flex space-x-3">
                <a href="./customerDetail.php?id=${customer.id}" class="font-medium text-blue-600 hover:underline"><img src="./resources/img/eye.svg" alt="..."></a>
                <img id="del" class=" cursor-pointer" src="./resources/img/bin.svg" alt="...">
              </td>
            </tr>`
          );
        }
      },
      error: function (error) {
        console.log(error);
      },
    });
  }

  $("#search").on("keyup input", function () {
    searchCustomers();
  });

  // Initial search on page load
  // searchCustomers();
});
