<?php
declare(strict_types=1);
ob_start();
session_start();

$ValidationResponse = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $UserName = htmlspecialchars(strip_tags(trim($_POST['userName'])));
    $UserEmail = htmlspecialchars(strip_tags(trim($_POST['userEmail'])));
    $UserSubject = htmlspecialchars(strip_tags(trim($_POST['userSubject'])));
    $UserComments = htmlspecialchars(strip_tags(trim($_POST['userComments'])));

    $SendEmailTo = "logan.testa@outlook.com";

    /* Validation time */
    $PassedValidation = true;

    $ValidUserName = "";
    if (Trim($UserName) === "") {
        $ValidUserName = false;
    }
    if ($ValidUserName === false) {
        $PassedValidation = false;
        $ValidationResponse .= "<p>Please enter a Name.</p>";
    }


    $ValidUserEmail = "";
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

    $ValidUserComments = false;
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
        /* Create the e-mail body. */
        $Body = "";
        $Body .= "User Name: " . $UserName . "\n";
        $Body .= "User Email: " . $UserEmail . "\n";
        $Body .= "Subject: " . $UserSubject . "\n";
        $Body .= "User Comments: " . $UserComments . "\n";

        /* Send the e-mail. */
        $SuccessfulSubmission = mail($SendEmailTo, "Cover Letter to Westland Coffee House: " . $UserSubject, $Body, "From: <$UserEmail>");
        if ($SuccessfulSubmission) {
            $ValidationResponse .= "<p>Thank you for applying to work with us, " . $UserName . ".  Your message was successfully sent!</p>";
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
        <meta name="description" content="Careers with Westland Coffee House." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="coffee, bagels, sandwiches, latte, matcha, mocha, smoothie, Westland Coffee House, Portland, 
              Oregon, careers, work with us." />
        <title>Careers | Westland Coffee House</title>	
        <?php include 'assets/include/document-head-components.php'; ?>
    </head>
    <body class="page-careers">
        <div class="body-wrapper">
            <header>
                <div class="inner-wrapper">
                    <?php include 'assets/include/logo.php'; ?>
                    <?php include 'assets/include/header-content.php'; ?>
                    <div class="subtitle-container">
                        <h2 id="subTitle">Careers</h2>
                    </div>
                </div>
            </header>
            <?php include 'assets/include/navigation-content.php'; ?>
            <div class="content">
                <div class="content-row inner-wrapper">
                    <div class="col-sma-8">
                        <h3>Careers</h3>
                        <p>Come Work With Us at the Chillest Coffee Shop in Town!</p>
                        <div class="positions-open-container">
                            <div class="positions-title-container">
                                <h3>Positions Open</h3>
                            </div>        
                            <div class="position-container">
                                <div class="position-title">
                                    <h4>Barista</h4>
                                </div>
                                <div class="position-text-container">
                                    <div class="item-image-container position-image-container">
                                        <div class="item-image position-image position-image-one"></div>
                                    </div>                                 
                                    <p>Part or Full Time.  Provide excellent customer service.
                                        Make delicious beverages and Westland 
                                        Coffee House THE best coffee store in the Portland area.  Come on in and pick an application!</p>
                                    <div class="position__apply-button">Apply Now!</div>
                                    <div class="clear-both"></div>
                                </div>  
                                <div class="careers-container">
                                    <?php
                                    if (!empty($ValidationResponse)) {
                                        echo "<div class='form-transmission-results'>" . $ValidationResponse . "</div>";
                                    }
                                    ?>
                                    <form id="careersForm" class="position__application-form" method="post" onsubmit="return validateCareersForm();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <h4>Apply Here!</h4>
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
                                            <button id="submitButton" class="submit-button" type="submit">Send Application!</button>                          
                                        </div>
                                        <div class="javascript-validation-results-contact-us"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="position-container">
                                <div class="position-title">
                                    <h4>Barista Lead</h4>
                                </div>
                                <div class="position-text-container">
                                    <div class="item-image-container position-image-container">
                                        <div class="item-image position-image position-image-two"></div>
                                    </div>                                 
                                    <p>Part or Full Time.  Provide excellent customer service, train new baristas on brewing and prep techniques and customer service, general barista
                                        duties, some supervisory duties as needed.  Reports to the Store Managers.</p>
                                    <div class="clear-both"></div>
                                </div>                               
                            </div>
                            <p><strong>Make delicious beverages and Westland Coffee House THE best coffee store in the Portland area.  Come on in and pick an application!  
                                    We look forward to hearing from you!</strong></p>
                        </div>
                    </div>
                    <div class="col-sma-4 careers-featured">
                        <h4>"Come Join the Westland Team!"</h4>
                        <div class="barista one">
                        </div>
                    </div>
                    <div class="clear-both"></div>
                </div>
            </div>
            <?php include 'assets/include/footer-content.php'; ?>
        </div>
        <?php include 'assets/include/javascript-content.php'; ?>
        <script type="text/javascript" src="assets/javascript/careers-form-validation.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                setCurrentPage(5);
            });
        </script>
    </body>
</html>