$(document).ready(function () {
  // Create a new style element and append it to the head section
  const styleElement = document.createElement("style");
  document.head.appendChild(styleElement);

  // Add CSS rules to the style element to underline when hover
  // styleElement.innerHTML = `
  //   .view-link:hover {
  //     color: blue;
  //     text-decoration: underline;
  //   }
  // `;

  $("#search").keyup(function () {
    $.ajax({
      url: "../Controller/searchProductController.php",
      type: "POST",
      data: {
        searchText: $(this).val(),
      },
      success: function (res) {
        $("#searchResult").empty();
        let products = JSON.parse(res);

        for (let i = 0; i < products.length; i++) {
          const product = products[i];
          let stockStatus = "";

          if (product.instock > 10) {
            stockStatus = '<td class="px-6 py-4 text-green-500">Instock</td>';
          } else if (product.instock >= 1) {
            stockStatus ='<td class="px-6 py-4 text-orange-500">Low stock</td>';
          } else {
            stockStatus ='<td class="px-6 py-4 text-red-500">Out of Stock</td>';
          }

          $("#searchResult").append(
            `<tr class=" border-b hover:bg-gray-200 border-gray-500">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">${product.name}</th>
                <td class="px-6 py-4">${product.productID}</td>
                <td class="px-6 py-4">${product.c_name}<?= $product["c_name"]; ?></td>
                <td class="px-6 py-4">${product.buyprice}<?= $product["buyprice"]; ?></td>
                <td class="px-6 py-4">${product.sellprice}<?= $product["sellprice"]; ?></td>
                <td class="px-6 py-4">${product.instock}<?= $product["instock"]; ?></td>
                <td class="px-6 py-4">${product.create_date}<?= $product["create_date"]; ?></td>
                ${stockStatus}
                <td class="px-6 py-4 text-right">
                  <a href="../Controller/editProductController.php?id=${products.generate_id}" class="font-medium text-blue-600  hover:underline">Edit</a>
                </td>
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

