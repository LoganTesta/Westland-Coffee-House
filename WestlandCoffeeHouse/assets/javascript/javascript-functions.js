
function setCurrentPage(linkNumber) {
    let navBarDesktop = document.getElementById("desktopNav");
    let navBarDesktopItems = navBarDesktop.getElementsByClassName("nav-link");
    for (let i = 0; i < navBarDesktopItems.length; i++) {
        navBarDesktopItems[i].className.replace(" current-page", "");
    }
    navBarDesktopItems[linkNumber].className += " current-page";
}

let dropdownButton = document.getElementById("dropdownButton");
dropdownButton.addEventListener("click", toggleHamburgerMenu, "false");

function toggleHamburgerMenu() {
    document.getElementById("mobileNav").classList.toggle("show");
}