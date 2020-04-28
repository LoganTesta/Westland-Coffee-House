<?php
declare(strict_types=1);

$ValidationResponse = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $UserName = htmlspecialchars(strip_tags(trim($_POST['userName'])));
    $UserEmail = htmlspecialchars(strip_tags(trim($_POST['userEmail'])));
    $UserSubject = htmlspecialchars(strip_tags(trim($_POST['userSubject'])));
    $UserComments = htmlspecialchars(strip_tags(trim($_POST['userComments'])));

    $SendEmailTo = "logan.testa@outlook.com";

    /* Validation time */
    $PassedValidation = true;

    $ValidUserName = true;
    if (Trim($UserName) === "") {
        $ValidUserName = false;
    }
    if ($ValidUserName === false) {
        $PassedValidation = false;
        $ValidationResponse .= "<p>Please enter a Name.</p>";
    }


    $ValidUserEmail = true;
    if (Trim($UserEmail) === "") {
        $ValidUserEmail = false;
    }
    /* More advanced e-mail validation */
    if (!filter_var($UserEmail, FILTER_VALIDATE_EMAIL)) {
        $ValidUserEmail = false;
    }

    if ($ValidUserEmail === false) {
        $PassedValidation = false;
        $ValidationResponse .= "<p>Please enter a valid Email.</p>";
    }


    $ValidUserComments = true;
    if (Trim($UserComments) === "") {
        $ValidUserComments = false;
    }
    if ($ValidUserComments === false) {
        $PassedValidation = false;
        $ValidationResponse .= "<p>Please write your Message.</p>";
    }


    if ($PassedValidation === false) {
        $ValidationResponse .= "<p>Sorry validation failed.  Please check all fields again.</p>";
    }

    if ($PassedValidation) {
        /* Set the headers */
        $Headers = "";
        $Headers .= "From: <$UserEmail>\r\n";
        $Headers .= "MIME-Version: 1.0\r\n";
        $Headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        /* Create the e-mail body. */
        $Body = "";
        $Body .= "<strong>User Name:</strong> " . $UserName . "<br />";
        $Body .= "<strong>User Email:</strong> " . $UserEmail . "<br />";
        $Body .= "<strong>Subject:</strong> " . $UserSubject . "<br />";
        $Body .= "<strong>User Comments:</strong> " . $UserComments . "<br />";

        /* Send the e-mail. */
        $SuccessfulSubmission = mail($SendEmailTo, "Questions/Comments About Westland Coffee House: " . $UserSubject, $Body, $Headers);
        if ($SuccessfulSubmission) {
            $ValidationResponse .= "<p>Thank you for contacting us, " . $UserName . ".  Your message was successfully sent!</p>";
            $UserName = "";
            $UserEmail = "";
            $UserSubject = "";
            $UserComments = "";
        } else if ($SuccessfulSubmission === false) {
            $ValidationResponse .= "<p>Submission failed. Please try again.</p>";
        }
    }
} else {
    $UserName = "";
    $UserEmail = "";
    $UserSubject = "";
    $UserComments = "";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Contact Westland Coffee House." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="coffee, bagels, sandwiches, latte, matcha, mocha, smoothie, Westland Coffee House, Portland, Oregon, contact us." />
        <title>Contact | Westland Coffee House</title>	
        <?php include 'assets/include/document-head-components.php'; ?>
    </head>
    <body class="page-contact-us">
        <div class="body-wrapper">
            <header>
                <div class="inner-wrapper">
                    <?php include 'assets/include/logo.php'; ?>
                    <?php include 'assets/include/header-content.php'; ?>
                    <div class="subtitle-container">
                        <h2 id="subTitle">Contact Us</h2>
                    </div>
                </div>
            </header>
            <?php include 'assets/include/navigation-content.php'; ?>
            <div class="content">
                <div class="content-row inner-wrapper">
                    <div class="col-sma-6">
                        <h3 class="write-us">Write Us!  You might even get a Free Coffee!</h3>
                        <p>Contact us with questions, comments, event requests, or to learn more about our coffee shop.  We always enjoy reading comments 
                            and suggestions from our community!</p>
                        <div class="visitors-bg-image two"></div>
                    </div>

                    <div class="col-sma-6 contact-us-container">
                        <h4 class="contact-westland">Write Us Here:</h4>
                        <?php echo "<div class='form-transmission-results'>" . $ValidationResponse . "</div>"; ?>
                        <form id="contactForm" method="post" onsubmit="return validateContactForm();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="input-container">
                                <label for="userName"><strong>Name *</strong></label>
                                <input type="text" id="userName" name="userName" value="<?php echo $UserName; ?>" placeholder="Enter Name Here" required="required">    
                            </div>
                            <div class="input-container">
                                <label for="userEmail"><strong>Email *</strong></label>
                                <input type="email" id="userEmail" name="userEmail" value="<?php echo $UserEmail; ?>" placeholder="Enter Email Here" required="required"> 
                            </div>
                            <div class="input-container">
                                <label for="userSubject"><strong>Subject</strong></label>
                                <input type="text" id="userSubject" name="userSubject" value="<?php echo $UserSubject; ?>" placeholder="Enter Subject Here">    
                            </div>
                            <div class="input-container">
                                <label for="userComments"><strong>Message *</strong></label>
                                <textarea id="userComments" name="userComments" rows="6" placeholder="Please write your message here.  Thanks." required="required"><?php echo $UserComments; ?></textarea>                          
                            </div>                           
                            <div class="input-container submit">
                                <button id="contactButton" class="submit-button" type="submit">Contact Us!</button>                          
                            </div>
                            <div class="javascript-validation-results-contact-us"></div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include 'assets/include/footer-content.php'; ?>
        </div>
        <?php include 'assets/include/javascript-content.php'; ?>
        <script type="text/javascript" src="assets/javascript/contact-form-validation.js?mod=10072019V2"></script>
        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                setCurrentPage(4);
                            });
        </script>
        <script type="text/javascript">
            //Use AJAX to update part of the page without reloading the whole page.
            document.getElementById("contactForm").addEventListener("submit", function (event) {
                updateServerResponse(event);
            }, false);

            function updateServerResponse(event) {
                event.preventDefault();
                let xhttp = new XMLHttpRequest();

                xhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        let parser = new DOMParser();
                        let ajaxDocument = parser.parseFromString(this.responseText, "text/html");

                        let message = ajaxDocument.getElementsByClassName("form-transmission-results")[0];

                        document.getElementsByClassName("form-transmission-results")[0].innerHTML = "" + message.innerHTML + "";
                        document.getElementsByClassName("form-transmission-results")[0].classList.add("show");
                    }
                };

                let userName = document.getElementById("userName").value;
                let userEmail = document.getElementById("userEmail").value;
                let userSubject = document.getElementById("userSubject").value;
                let userComments = document.getElementById("userComments").value;

                let formInfo = "userName=" + userName + "&userEmail=" + userEmail + "&userSubject=" + userSubject + "&userComments=" + userComments;


                xhttp.open("POST", "contact-us.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(formInfo);
            }
        </script>
    </body>
</html>
