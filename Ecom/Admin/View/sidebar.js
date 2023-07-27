document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.getElementById("navbar");
  const sidebar = document.getElementById("sidebar");
  const btnSidebarToggler = document.getElementById("btnSidebarToggler");
  const navClosed = document.getElementById("navClosed");
  const navOpen = document.getElementById("navOpen");
  const main = document.getElementById("main");

  btnSidebarToggler.addEventListener("click", (e) => {
    e.preventDefault();
    sidebar.classList.toggle("hidden");
    btnSidebarToggler.classList.toggle("show");
    btnSidebarToggler.classList.toggle("left-60");
    navClosed.classList.toggle("hidden");
    navOpen.classList.toggle("hidden");
    main.classList.toggle("ml-0");
    main.classList.toggle("w-screen");
  });

 
});
