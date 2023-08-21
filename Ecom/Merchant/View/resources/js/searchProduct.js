$(document).ready(function () {
  function searchProducts() {
    $.ajax({
      url: "../Controller/searchProductController.php",
      type: "POST",
      data: {
        searchText: $("#search").val(),
      },
      success: function (res) {
        $("#searchResult").empty();
        let products = JSON.parse(res);

        const filterText = $("#search").val().toLowerCase();
        const filteredProducts = products.filter(
          (product) =>
            product.name.toLowerCase().includes(filterText) ||
            product.productID.toString().includes(filterText) ||
            product.c_name.toLowerCase().includes(filterText)
        );

        for (let i = 0; i < filteredProducts.length; i++) {
          const product = filteredProducts[i];
          let stockStatus = "";

          if (product.instock > 10) {
            stockStatus = '<td class="px-6 py-4 text-green-500">Instock</td>';
          } else if (product.instock >= 1) {
            stockStatus =
              '<td class="px-6 py-4 text-orange-500">Low stock</td>';
          } else {
            stockStatus =
              '<td class="px-6 py-4 text-red-500">Out of Stock</td>';
          }

          $("#searchResult").append(
            `<tr class="border-b hover:bg-gray-200 border-gray-500">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">${product.name}</th>
              <td class="px-6 py-4">${product.productID}</td>
              <td class="px-6 py-4">${product.c_name}</td>
              <td class="px-6 py-4">${product.buyprice}</td>
              <td class="px-6 py-4">${product.sellprice}</td>
              <td class="px-6 py-4">${product.instock}</td>
              <td class="px-6 py-4">${product.create_date}</td>
              ${stockStatus}
              <td class="px-6 py-4 text-right">
                <a href="../Controller/editProductController.php?id=${product.productID}" class="font-medium text-blue-600 hover:underline">Edit</a>
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
    searchProducts();
  });

  // Initial search on page load
  // searchProducts();
});
