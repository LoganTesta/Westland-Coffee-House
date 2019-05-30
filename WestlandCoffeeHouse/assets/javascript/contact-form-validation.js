/* JavaScript Contact Form Validation. */
var userName;
var userEmail;
var userComments;

function validateContactForm() {

}


var contactButton = document.getElementById("contactButton");
contactButton.addEventListener("click", toggleRequiredFields, "false");

function toggleRequiredFields() {
    var userName = document.forms["contactOurCoffeeShop"]["userName"];
    var userEmail = document.forms["contactOurCoffeeShop"]["userEmail"];
    var userComments = document.forms["contactOurCoffeeShop"]["userComments"];
    
    userName.className += " required-field-needed";
    userEmail.className += " required-field-needed";
    userComments.className += " required-field-needed";
}


/*End of JavaScript Contact Form Validation */
/* ************************************ */