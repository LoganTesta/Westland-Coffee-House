
var togglePasswordVisibility = document.getElementById("togglePasswordVisibility");
togglePasswordVisibility.addEventListener("click", toggleShowHidePassword, false);


function toggleShowHidePassword() {
    var password = document.getElementById("password");
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}