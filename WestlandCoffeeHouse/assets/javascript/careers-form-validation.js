/* JavaScript Form Validation. */

let clickedSubmit = false;

function validateCareersForm() {

    if (clickedSubmit) {                
        let userName = document.forms["careersForm"]["userName"].value.trim();
        let userEmail = document.forms["careersForm"]["userEmail"].value.trim();
        let userSubject = document.forms["careersForm"]["userSubject"].value.trim();
        let userResume = document.forms["careersForm"]["userResume"].value.trim();
        let userPositionApplyingFor = document.forms["careersForm"]["userPositionApplyingFor"].value.trim();
        let userCoverLetter = document.forms["careersForm"]["userCoverLetter"].value.trim();
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


        let validUserPositionApplyingFor = true;
        if (userPositionApplyingFor === null || userPositionApplyingFor === "") {
            validUserPositionApplyingFor = false;
        }

        if (validUserPositionApplyingFor) {
            document.forms["careersForm"]["userPositionApplyingFor"].classList.remove("required-field-needed");
        } else {
            validForm = false;
            document.forms["careersForm"]["userPositionApplyingFor"].classList.add("required-field-needed");
        }


        let validCoverLetter = true;
        if (userCoverLetter === null || userCoverLetter === "") {
            validCoverLetter = false;
        }

        if (validCoverLetter) {
            document.forms["careersForm"]["userCoverLetter"].classList.remove("required-field-needed");
        } else {
            validForm = false;
            document.forms["careersForm"]["userCoverLetter"].classList.add("required-field-needed");
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
submitButton.addEventListener("click", function (){ validateCareersForm(); }, "false");

let userName = document.getElementById("userName");
userName.addEventListener("change", function() { validateCareersForm(); }, "false");

let userEmail = document.getElementById("userEmail");
userEmail.addEventListener("change", function() { validateCareersForm(); }, "false");

let userSubject = document.getElementById("userSubject");
userSubject.addEventListener("change", function() { validateCareersForm(); }, "false");

let userResume = document.getElementById("userResume");
userResume.addEventListener("change", function() { validateCareersForm(); }, "false");

let userPositionApplyingFor = document.getElementById("userPositionApplyingFor");
userPositionApplyingFor.addEventListener("change", function() { validateCareersForm(); }, "false");

let userCoverLetter = document.getElementById("userCoverLetter");
userCoverLetter.addEventListener("change", function() { validateCareersForm(); }, "false");
