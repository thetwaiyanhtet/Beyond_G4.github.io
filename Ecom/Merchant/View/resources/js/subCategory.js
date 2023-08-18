$(document).ready(function () {
  function updateSubcategories(selectedCategoryId) {
    $.ajax({
      url: "../Controller/subCategoryController.php",
      type: "POST",
      data: {
        category_id: selectedCategoryId,
      },
      success: function (res) {
        const subcategorySelect = $("select[name='subCategory']");
        subcategorySelect.empty();

        const subcategories = JSON.parse(res);

        for (let i = 0; i < subcategories.length; i++) {
          const subcategory = subcategories[i];
          subcategorySelect.append(
            $("<option>", {
              value: subcategory.id,
              text: subcategory.s_c_name,
            })
          );
        }
      },
      error: function (error) {
        console.log("Error fetching subcategories:", error);
      },
    });
  }

  $("select[name='category']").on("change", function () {
    const selectedCategoryId = $(this).val();
    updateSubcategories(selectedCategoryId);
  });
});
