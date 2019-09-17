/* JavaScript Contact Form Validation. */
var userName;
var userEmail;
var userComments;

var submitButtonClicked = false;

function validateContactForm() {

    var userName = document.forms["contactOurCoffeeShop"]["userName"];
    var userEmail = document.forms["contactOurCoffeeShop"]["userEmail"];
    var userComments = document.forms["contactOurCoffeeShop"]["userComments"];


    if (userName.value !== "") {
        userName.classList.remove("required-field-needed");
    }

    if (userComments.value !== "") {
        userComments.classList.remove("required-field-needed");
    }


    var validEmail = true;

    var atPosition = userEmail.value.indexOf("@");
    var dotPosition = userEmail.value.lastIndexOf(".");
    var lastEmailCharacter = userEmail.value.length - 1;

    if (userEmail.value === "") {
        validEmail = false;
    }
    /*If the @ position is at the start (or less) position of value 0,  validContactForm=false. */
    if (atPosition <= 0) {
        validEmail = false;
    }

    /* There must be at least 1 character after the @ position and the last dot position. */
    else if (atPosition + 1 >= dotPosition) {
        validEmail = false;
    }

    /* There must be at least two characters after the last "." symbol.  */
    else if (dotPosition + 1 >= lastEmailCharacter) {
        validEmail = false;
    }

    if (validEmail) {
        userEmail.classList.remove("required-field-needed");
    }
}


var contactButton = document.getElementById("contactButton");
contactButton.addEventListener("click", toggleRequiredFields, "false");

function toggleRequiredFields() {

    var userName = document.forms["contactOurCoffeeShop"]["userName"];
    var userEmail = document.forms["contactOurCoffeeShop"]["userEmail"];
    var userComments = document.forms["contactOurCoffeeShop"]["userComments"];

    userName.classList.add("required-field-needed");
    userEmail.classList.add("required-field-needed");
    userComments.classList.add("required-field-needed");


    submitButtonClicked = true;
    if (submitButtonClicked) {
        setInterval(function () {
            validateContactForm();
        }, 10);
    }

}


/*End of JavaScript Contact Form Validation */
/* ************************************ */