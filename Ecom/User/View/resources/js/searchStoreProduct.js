$(document).ready(function () {
  function searchstoreProducts() {
    $.ajax({
      url: "../Controller/searchStoreProductController.php",
      type: "POST",
      data: {
        searchText: $("#search").val(),
      },
      success: function (res) {
        console.log(res);
        $("#searchResult").empty();
        let storeProducts = JSON.parse(res);

        const filterText = $("#search").val().toLowerCase();
        const filteredstoreProducts = storeProducts.filter((storeProducts) =>
          storeProducts.name.toLowerCase().includes(filterText)
        );

        for (let i = 0; i < filteredstoreProducts.length; i++) {
          const storeProduct = filteredstoreProducts[i];

          $("#searchResult").append(
            `<div class="inline p-3">
                        <div class=" h-auto w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <form action="./mainPage.php" method="post">
                                <div class="relative overflow-hidden  bg-slate-300 dark:bg-slate-700 rounded-xl ">
                                    <div class="w-56 m-auto p-2 h-44">
                                        <img class="w-48 h-40 m-auto" src="../../Storage/product/${storeProduct.p_one}" alt="...">
                                    </div>
                                    <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                        <a href="./mainPage.php?pid=${storeProduct.id}"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="heart-outline"></ion-icon></button></a>
                                        <a href="../View/itemDetail.php?pid=${storeProduct.id}"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="list-outline"></ion-icon></button></a>

                                    </div>
                                </div>
                                <div class="relative dark:text-white">
                                    <h2 class="mt-3 ml-5 text-sm md:text-md capitalize font-bold w-full">${storeProduct.name}</h2>
                                    <!-- <del class="text-red-700 text-lg">$999</del> -->
                                    <p class="text-xs mt-2 ml-5 block ">${storeProduct.description}</p>
                                    <p class="text-md font-bold mt-2 ml-5 block ">${storeProduct.sellprice} Ks</p>
                                    <button type="submit" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto justify-end items-baseline">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                                    <input type="hidden" name="product_id" value="${storeProduct.id}">
                                </div>

                        </div>
                        </form>
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
    searchstoreProducts();
  });

    
  // ---------------search by category--------------
  // Function to fetch and display products by category
  function showProductsByCategory(categoryId) {
    $.ajax({
      url: "../Controller/searchStoreProductByCategoryController.php",
      type: "POST",
      data: {
        categoryId: categoryId,
      },
      success: function (res) {
        // Assuming res is an array of product data
        var storeProducts = JSON.parse(res);
        displayProducts(storeProducts);
      },
      error: function (error) {
        console.log(error);
      },
    });
  }

  // Function to display products on the page
  function displayProducts(storeProducts) {
    // Clear existing products
    $("#searchResult").empty();

    // Loop through products and append them to the container
    for (var i = 0; i < storeProducts.length; i++) {
      var storeProduct = storeProducts[i];

      $("#searchResult").append(
        `<div class="inline p-3">
                        <div class=" h-auto w-48 md:w-64 rounded-xl group border border-solid shadow-xl bg-slate-200 dark:bg-gray-900">
                            <form action="./mainPage.php" method="post">
                                <div class="relative overflow-hidden  bg-slate-300 dark:bg-slate-700 rounded-xl ">
                                    <div class="w-56 m-auto p-2 h-44">
                                        <img class="w-48 h-40 m-auto" src="../../Storage/product/${storeProduct.p_one}" alt="...">
                                    </div>
                                    <div class="absolute h-full w-full flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300 bg-purple-600/20 dark:bg-white/20 rounded-xl">
                                        <a href="./mainPage.php?pid=${storeProduct.id}"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="heart-outline"></ion-icon></button></a>
                                        <a href="../View/itemDetail.php?pid=${storeProduct.id}"><button type="button" class="bg-purple-900 text-white p-1.5 text-2xl rounded-full m-2 w-9 h-9 shadow-xl hover:scale-90"><ion-icon name="list-outline"></ion-icon></button></a>

                                    </div>
                                </div>
                                <div class="relative dark:text-white">
                                    <h2 class="mt-3 ml-5 text-sm md:text-md capitalize font-bold w-full">${storeProduct.name}</h2>
                                    <!-- <del class="text-red-700 text-lg">$999</del> -->
                                    <p class="text-xs mt-2 ml-5 block ">${storeProduct.description}</p>
                                    <p class="text-md font-bold mt-2 ml-5 block ">${storeProduct.sellprice} Ks</p>
                                    <button type="submit" class="bg-slate-300 shadow-2xl w-full h-12 rounded-lg hover:bg-slate-50 dark:hover:bg-gray-800 border-b-2 border-solid border-purple-600 dark:border-black m-auto justify-end items-baseline">Add to Cart<ion-icon name="cart-outline" class="px-2 text-xl"></ion-icon></button>
                                    <input type="hidden" name="product_id" value="${storeProduct.id}">
                                </div>

                        </div>
                        </form>
                    </div>`
      );
    }
  }

  // Handle category button click
  $(".category").on("click", function () {
    var categoryId = $(this).data("category-id");
    showProductsByCategory(categoryId);
  });
});
