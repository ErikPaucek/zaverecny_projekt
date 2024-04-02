var hamburger = document.getElementById("hamburger");
var menuItems = document.getElementById("main-menu");

hamburger.addEventListener("click", function() {
    menuItems.classList.toggle("responsive");
}
);
