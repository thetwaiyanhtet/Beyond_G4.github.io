$(document).ready(function () {
  function searchMerchants() {
    $.ajax({
      url: "../Controller/searchMerchantController.php",
      type: "POST",
      data: {
        searchText: $("#search").val(),
      },
      success: function (res) {
        $("#searchResult").empty();
        let merchants = JSON.parse(res);

        const filterText = $("#search").val().toLowerCase();
        const filteredMerchants = merchants.filter((merchant) =>
          merchant.m_name.toLowerCase().includes(filterText)
        );

        for (let i = 0; i < filteredMerchants.length; i++) {
          const merchant = filteredMerchants[i];

          $("#searchResult").append(
            `<tr class="border-b hover:bg-gray-200 border-gray-500">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">${merchant.m_name}</th>
              <td class="px-6 py-4">${merchant.email}</td>
              <td class="px-6 py-4">${merchant.create_date}</td>
              <td class="px-6 py-4">${merchant.plan_name}</td>
              <td class="px-6 py-4 text-right">
                <a href="./merchantProfile.php?id=${merchant.id}" class="font-medium text-blue-600 hover:underline">Edit</a>
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
    searchMerchants();
  });

});
