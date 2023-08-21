var toTopButton = document.getElementById("to-top-button");
window.onscroll = function () {
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    toTopButton.classList.remove("hidden");
  } else {
    toTopButton.classList.add("hidden");
  }
};

function goToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}

//hover category to show sub category
const categoryItems = document.querySelectorAll(".category, .category-subcategories");
categoryItems.forEach((item) => {
  item.addEventListener("mouseenter", () => {
    item.closest("li").querySelector(".category-subcategories").classList.remove("hidden");
  });
  item.addEventListener("mouseleave", () => {
    item.closest("li").querySelector(".category-subcategories").classList.add("hidden");
  });
});
