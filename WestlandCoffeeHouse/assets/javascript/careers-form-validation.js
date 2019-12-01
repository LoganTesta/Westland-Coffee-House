/* JavaScript Form Validation. */

let clickedSubmit = false;


function validateCareersForm(formNumber) {

    if (clickedSubmit) {
        
        let formNameString = "careersForm" + formNumber;
        let userNameString = "userName" + formNumber;
        let userEmailString = "userEmail" + formNumber;
        let userResumeString = "userResume" + formNumber;
        let userSubjectString = "userSubject" + formNumber;
        let userCoverLetterString = "userCoverLetter" + formNumber;
                     
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
    if (submitButton0 === elementWithFocus) {
        clickedSubmit = true;
    } else if (submitButton1 === elementWithFocus) {
        clickedSubmit = true;
    }
}

let submitButton0 = document.getElementById("submitButton0");
submitButton0.addEventListener("click", setClickedSubmitTrue, "false");
submitButton0.addEventListener("click", function (){ validateCareersForm(0); }, "false");

let userName0 = document.getElementById("userName0");
userName0.addEventListener("change", function() { validateCareersForm(0); }, "false");

let userEmail0 = document.getElementById("userEmail0");
userEmail0.addEventListener("change", function() { validateCareersForm(0); }, "false");

let userSubject0 = document.getElementById("userSubject0");
userSubject0.addEventListener("change", function() { validateCareersForm(0); }, "false");

let userResume0 = document.getElementById("userResume0");
userResume0.addEventListener("change", function() { validateCareersForm(0); }, "false");

let userCoverLetter0 = document.getElementById("userCoverLetter0");
userCoverLetter0.addEventListener("change", function() { validateCareersForm(0); }, "false");




let submitButton1 = document.getElementById("submitButton1");
submitButton1.addEventListener("click", setClickedSubmitTrue, "false");
submitButton1.addEventListener("click", function (){ validateCareersForm(1); }, "false");

let userName1 = document.getElementById("userName1");
userName1.addEventListener("change", function() { validateCareersForm(1); }, "false");

let userSubject1 = document.getElementById("userSubject1");
userSubject1.addEventListener("change", function() { validateCareersForm(1); }, "false");

let userEmail1 = document.getElementById("userEmail1");
userEmail1.addEventListener("change", function() { validateCareersForm(1); }, "false");

let userResume1 = document.getElementById("userResume1");
userResume1.addEventListener("change", function() { validateCareersForm(1); }, "false");

let userCoverLetter1 = document.getElementById("userCoverLetter1");
userCoverLetter1.addEventListener("change", function() { validateCareersForm(1); }, "false");




function toggleApplication(applicationNumber){
    document.getElementsByClassName("careers__application-form")[applicationNumber].classList.toggle("show");
}

document.getElementsByClassName("position__apply-button")[0].addEventListener("click", function(){
    toggleApplication(0);
}, false);

document.getElementsByClassName("position__apply-button")[1].addEventListener("click", function(){
    toggleApplication(1);
}, false);