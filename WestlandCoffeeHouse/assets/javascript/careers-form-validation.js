/* JavaScript Form Validation. */

let clickedSubmit = false;

function validateCareersForm() {

    if (clickedSubmit) {
        let userName = document.forms["careersForm"]["userName"].value.trim();
        let userEmail = document.forms["careersForm"]["userEmail"].value.trim();
        let userSubject = document.forms["careersForm"]["userSubject"].value.trim();
        let userComments = document.forms["careersForm"]["userComments"].value.trim();
        let validForm = true;


        let atPosition = userEmail.indexOf("@");
        let dotPosition = userEmail.lastIndexOf(".");
        let lastEmailCharacter = userEmail.length - 1;

        let validName = true;

        if (userName === null || userName === "") {
            validName = false;
        }

        if (validName) {
            document.forms["careersForm"]["userName"].classList.remove("required-field-needed");
        } else {
            validForm = false;
            document.forms["careersForm"]["userName"].classList.add("required-field-needed");
        }


        /*If the @ position is at the start (or less) position of value 0,  validForm=false. */
        /* There must be at least 1 character after the @ position and the last dot position. */
        /* There must be at least two characters after the last "." symbol.  */
        let validEmail = true;
        if (userEmail === null || userEmail === "") {
            validEmail = false;
        } else if (atPosition <= 0) {
            validEmail = false;
        } else if (atPosition + 1 >= dotPosition) {
            validEmail = false;
        } else if (dotPosition + 1 >= lastEmailCharacter) {
            validEmail = false;
        }

        if (validEmail) {
            document.forms["careersForm"]["userEmail"].classList.remove("required-field-needed");
        } else {
            validForm = false;
            document.forms["careersForm"]["userEmail"].classList.add("required-field-needed");
        }


        let validComments = true;
        if (userComments === null || userComments === "") {
            validComments = false;
        }

        if (validComments) {
            document.forms["careersForm"]["userComments"].classList.remove("required-field-needed");
        } else {
            validForm = false;
            document.forms["careersForm"]["userComments"].classList.add("required-field-needed");
        }


        if (validForm === false) {
            document.getElementsByClassName("javascript-validation-results-contact-us")[0].classList.add("show");
            document.getElementsByClassName("javascript-validation-results-contact-us")[0].innerHTML = "Please fill all required fields in the correct format.";
            return false;
        } else if (validForm) {
            document.getElementsByClassName("javascript-validation-results-contact-us")[0].classList.remove("show");
            document.getElementsByClassName("javascript-validation-results-contact-us")[0].innerHTML = "";
            return true;
        }
    } else {
        return false;
    }

}

function setClickedSubmitTrue() {
    let elementWithFocus = document.activeElement;
    if (submitButton === elementWithFocus) {
        clickedSubmit = true;
    }
}

let submitButton = document.getElementById("submitButton");
submitButton.addEventListener("click", setClickedSubmitTrue, "false");
submitButton.addEventListener("click", validateCareersForm, "false");


let userName = document.getElementById("userName");
userName.addEventListener("change", validateCareersForm, "false");

let userSubject = document.getElementById("userSubject");
userSubject.addEventListener("change", validateCareersForm, "false");

let userEmail = document.getElementById("userEmail");
userEmail.addEventListener("change", validateCareersForm, "false");

let userComments = document.getElementById("userComments");
userComments.addEventListener("change", validateCareersForm, "false");



function toggleApplication(applicationNumber){
    document.getElementsByClassName("position__application-form")[applicationNumber].classList.toggle("show");
}

document.getElementsByClassName("position__apply-button")[0].addEventListener("click", function(){
    toggleApplication(0);
}, false);