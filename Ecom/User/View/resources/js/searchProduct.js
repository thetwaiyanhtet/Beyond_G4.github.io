$(document).ready(function () {
  //-------------search product by productName-----------------
  function searchProducts() {
    $.ajax({
      url: "../Controller/searchProductController.php",
      type: "POST",
      data: {
        searchText: $("#search").val(),
      },
      success: function (res) {
        $("#searchResult").empty(); // Clear existing products
        let products = JSON.parse(res);

        const filterText = $("#search").val().toLowerCase();
        const filteredProducts = products.filter(
          (product) => product.name.toLowerCase().includes(filterText)
        );

        for (let i = 0; i < filteredProducts.length; i++) {
          const product = filteredProducts[i];

          $("#searchResult").append(
            `<div class="inline p-3">
                            <div class="h-80 w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                                <form action="./mainPage.php" method="post">
                                    <div class="relative overflow-hidden  bg-slate-300 dark:bg-slate-700 rounded-xl ">
                                        <div class="flex justify-center items-center h-44">
                                            <img class="w-48 h-auto m-auto" src="../../Storage/product/${product.p_one}" alt="">
                                        </div>
                                        <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                            <a href="./mainPage.php?pid=${product.id}"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="heart-outline"></ion-icon></button></a>
                                            <a href="../View/itemDetail.php?pid=${product.id}"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="list-outline"></ion-icon></button></a>
                                        </div>
                                    </div>
                                    <div class="relative dark:text-white">
                                        <h2 class="mt-3 ml-5 text-sm md:text-md capitalize font-bold w-full">${product.name}</h2>
                                        <p class="text-xs mt-2 ml-5 block 
                                             overflow-hidden h-4">${product.description}</p>
                                        <p class="text-md font-bold mt-2 ml-5 block ">$${product.sellprice}</p>
                                        <button type="submit" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto justify-end items-baseline">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                                        <input type="hidden" name="product_id" value="${product.id}">
                                    </div>
                                </form>
                            </div>
                        </div>`
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
  // $("#searchButton").on("click", function () {
  //   searchProducts();
  // });

  // ---------------search by category--------------
  // Function to fetch and display products by category
  function showProductsByCategory(categoryId) {
    $.ajax({
      url: "../Controller/searchProductByCategoryController.php",
      type: "POST",
      data: {
        categoryId: categoryId,
      },
      success: function (res) {
        // Assuming res is an array of product data
        var products = JSON.parse(res);
        displayProducts(products);
      },
      error: function (error) {
        console.log(error);
      },
    });
  }

  // Function to display products on the page
  function displayProducts(products) {
    // Clear existing products
    $("#searchResult").empty();

    // Loop through products and append them to the container
    for (var i = 0; i < products.length; i++) {
      var product = products[i];

      $("#searchResult").append(
        `<div class="inline p-3 mt-10">
                            <div class="h-80 w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                                <form action="./mainPage.php" method="post">
                                    <div class="relative overflow-hidden  bg-slate-300 dark:bg-slate-700 rounded-xl ">
                                        <div class="flex justify-center items-center h-44">
                                            <img class="w-48 h-auto m-auto" src="../../Storage/product/${product.p_one}" alt="">
                                        </div>
                                        <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                            <a href="./mainPage.php?pid=${product.id}"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="heart-outline"></ion-icon></button></a>
                                            <a href="../View/itemDetail.php?pid=${product.id}"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="list-outline"></ion-icon></button></a>
                                        </div>
                                    </div>
                                    <div class="relative dark:text-white">
                                        <h2 class="mt-3 ml-5 text-sm md:text-md capitalize font-bold w-full">${product.name}</h2>
                                        <p class="text-xs mt-2 ml-5 block 
                                             overflow-hidden h-4">${product.description}</p>
                                        <p class="text-md font-bold mt-2 ml-5 block ">$${product.sellprice}</p>
                                        <button type="submit" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto justify-end items-baseline">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                                        <input type="hidden" name="product_id" value="${product.id}">
                                    </div>
                                </form>
                            </div>
                        </div>`
      );
    }
  }

  // Handle category button click
  $(".category").on("click", function () {
    var categoryId = $(this).data("category-id");
    showProductsByCategory(categoryId);
  });

  // Function to fetch and display products by subcategory
  function showProductsBySubcategory(subcategoryId) {
    $.ajax({
      url: "../Controller/searchBySubCategoryController.php",
      type: "POST",
      data: {
        subcategoryId: subcategoryId,
      },
      success: function (res) {
        console.log(res);
        var products = JSON.parse(res);
        displayProducts(products);
      },
      error: function (error) {
        console.log(error);
      },
    });
  }

  // Handle subcategory click
  $(".subCategory").on("click", function () {
    var subcategoryId = $(this).data("subcategory-id");
    showProductsBySubcategory(subcategoryId);
  });
});
