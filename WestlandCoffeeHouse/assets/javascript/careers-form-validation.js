/* JavaScript Form Validation. */

let clickedSubmit = false;


function validateCareersForm() {

    if (clickedSubmit) {
        
        let formNameString = "careersForm";
        let userNameString = "userName";
        let userEmailString = "userEmail";
        let userResumeString = "userResume";
        let userSubjectString = "userSubject";
        let userCoverLetterString = "userCoverLetter";
                     
        let userName = document.forms[formNameString][userNameString].value.trim();
        let userEmail = document.forms[formNameString][userEmailString].value.trim();
        let userSubject = document.forms[formNameString][userSubjectString].value.trim();
        let userResume = document.forms[formNameString][userResumeString].value.trim();
        let userCoverLetter = document.forms[formNameString][userCoverLetterString].value.trim();
        let validForm = true;


        let atPosition = userEmail.indexOf("@");
        let dotPosition = userEmail.lastIndexOf(".");
        let lastEmailCharacter = userEmail.length - 1;

        let validName = true;

        if (userName === null || userName === "") {
            validName = false;
        }

        if (validName) {
            document.forms[formNameString][userNameString].classList.remove("required-field-needed");
        } else {
            validForm = false;
            document.forms[formNameString][userNameString].classList.add("required-field-needed");
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
            document.forms[formNameString][userEmailString].classList.remove("required-field-needed");
        } else {
            validForm = false;
            document.forms[formNameString][userEmailString].classList.add("required-field-needed");
        }


        let validCoverLetter = true;
        if (userCoverLetter === null || userCoverLetter === "") {
            validCoverLetter = false;
        }

        if (validCoverLetter) {
            document.forms[formNameString][userCoverLetterString].classList.remove("required-field-needed");
        } else {
            validForm = false;
            document.forms[formNameString][userCoverLetterString].classList.add("required-field-needed");
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

let userCoverLetter = document.getElementById("userCoverLetter");
userCoverLetter.addEventListener("change", function() { validateCareersForm(); }, "false");

