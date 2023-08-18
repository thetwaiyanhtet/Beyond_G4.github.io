document.addEventListener("DOMContentLoaded", function () {
  const bannerContainers = document.querySelectorAll(".banner-container");

  bannerContainers.forEach(function (container) {
    const bannerImages = container.querySelectorAll(".banner-image");
    let currentBanner = 0;

    bannerImages[currentBanner].classList.add("active");

    function showNextBanner() {
      bannerImages[currentBanner].classList.remove("active");
      currentBanner = (currentBanner + 1) % bannerImages.length;
      bannerImages[currentBanner].classList.add("active");
    }

    setInterval(showNextBanner, 5000); // Change the interval time as desired
  });
});
