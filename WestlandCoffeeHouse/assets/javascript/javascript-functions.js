

function setCurrentPage(linkNumber) {
    var navBarDesktop = document.getElementById("desktopNav");
    var navBarDesktopItems = navBarDesktop.getElementsByClassName("navLink");
    for (var i = 0; i < navBarDesktopItems.length; i++) {
        navBarDesktopItems[i].className.replace(" currentPage", "");
    }
    navBarDesktopItems[linkNumber].className += " currentPage";
}

var dropdownButton=document.getElementById("dropdownButton");
dropdownButton.addEventListener("click", toggleHamburgerMenu, "false");

function toggleHamburgerMenu (){
    document.getElementById("dropdownContent").classList.toggle("show");
}