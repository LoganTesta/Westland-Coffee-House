/* JavaScript Contact Form Validation. */
var userName;
var userEmail;
var userComments;

function validateContactForm() {
    alert("validation time");
    var userName = document.forms["contactOurCoffeeShop"]["userName"];
    var userEmail = document.forms["contactOurCoffeeShop"]["userEmail"];
    var userComments = document.forms["contactOurCoffeeShop"]["userComments"];
    
    
    var atPosition = userEmail.indexOf("@");
    var dotPosition = userEmail.lastIndexOf(".");
    var lastEmailCharacter = userEmail.length - 1;
    
    if(!(userName.value === null)) {
        userName.classList.replace(" required-field-needed", "");
    }
    if(!(userComments.value === null)) {
        userName.classList.replace(" required-field-needed", "");
    }
    
    
    var validEmail=true;
    
        if(!(userEmail.value === null)) {
            validEmail=false;
    }
        /*If the @ position is at the start (or less) position of value 0,  validContactForm=false. */
    if (atPosition <= 0) {
        validContactForm = false;
    }

    /* There must be at least 1 character after the @ position and the last dot position. */
    else if (atPosition + 1 >= dotPosition) {
        validContactForm = false;
    }

    /* There must be at least two characters after the last "." symbol.  */
    else if (dotPosition + 1 >= lastEmailCharacter) {
        validContactForm = false;
    } else if (userComments === null || userComments === "") {
        validContactForm = false;
    }
    
    if(validEmail===false){
         userName.classList.replace(" required-field-needed", "");
    }

}


var contactButton = document.getElementById("contactButton");
contactButton.addEventListener("click", toggleRequiredFields, "false");

function toggleRequiredFields() {
    validateContactForm();
    var userName = document.forms["contactOurCoffeeShop"]["userName"];
    var userEmail = document.forms["contactOurCoffeeShop"]["userEmail"];
    var userComments = document.forms["contactOurCoffeeShop"]["userComments"];
    
    userName.className += " required-field-needed";
    userEmail.className += " required-field-needed";
    userComments.className += " required-field-needed";
}


/*End of JavaScript Contact Form Validation */
/* ************************************ */