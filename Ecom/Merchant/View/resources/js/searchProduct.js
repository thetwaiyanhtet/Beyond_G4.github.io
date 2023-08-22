$(document).ready(function () {
  let currentPage = 1;
  const itemsPerPage = 7;
  let products = []; // To store all product data

  function fetchData() {
    $.ajax({
      url: "../Controller/searchProductController.php",
      type: "POST",
      data: {
        searchText: $("#search").val(),
      },
      success: function (res) {
        products = JSON.parse(res);
        console.log(products);
        updateDisplayedProducts(currentPage);
      },
      error: function (error) {
        console.log(error);
      },
    });
  }

  function updateDisplayedProducts(page) {
    const startIndex = (page - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const filterText = $("#search").val().toLowerCase();
    const filteredProducts = products.filter(
      (product) =>
        product.name.toLowerCase().includes(filterText) ||
        product.productID.toString().includes(filterText) ||
        product.c_name.toLowerCase().includes(filterText)
    );

    const paginatedProducts = filteredProducts.slice(startIndex, endIndex);

    $("#searchResult").empty();

    for (let i = 0; i < paginatedProducts.length; i++) {
      const product = paginatedProducts[i];
      let stockStatus = "";
console.log(products.code);
console.log(products.s_c_name);
      if (product.instock > 10) {
        stockStatus = '<td class="px-6 py-4 text-green-500">Instock</td>';
      } else if (product.instock >= 1) {
        stockStatus = '<td class="px-6 py-4 text-orange-500">Low stock</td>';
      } else {
        stockStatus = '<td class="px-6 py-4 text-red-500">Out of Stock</td>';
      }

      $("#searchResult").append(
        `<tr class="border-b hover:bg-gray-200 border-gray-500">
          <td class="px-5 py-4">${startIndex + i + 1}.</td>
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">${
            product.name
          }</th>
          <td class="px-6 py-4">${product.code}</td>
          <td class="px-6 py-4">${product.s_c_name}</td>
          <td class="px-6 py-4">${product.buyprice}</td>
          <td class="px-6 py-4">${product.sellprice}</td>
          <td class="px-6 py-4">${product.instock}</td>
          ${stockStatus}
          <td class="px-6 py-4 text-right">
            <a href="../Controller/editProductController.php?id=${product.productID}" class="font-medium text-blue-600 hover:underline">Edit</a>
          </td>
        </tr>`
      );
    }
  }

  $("#search").on("keyup input", function () {
    currentPage = 1; // Reset page when search text changes
    fetchData();
  });

  // Pagination controls
  $("#prevPage").click(function () {
    if (currentPage > 1) {
      currentPage--;
      updateDisplayedProducts(currentPage);
    }
  });

  $("#nextPage").click(function () {
    const maxPage = Math.ceil(products.length / itemsPerPage);
    if (currentPage < maxPage) {
      currentPage++;
      updateDisplayedProducts(currentPage);
    }
  });

  // Initial data fetch on page load
  // fetchData();
});
