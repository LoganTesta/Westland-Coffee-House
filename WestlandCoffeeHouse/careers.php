<?php
declare(strict_types=1);
ob_start();
session_start();

$ValidationResponse0 = "";
$ValidationResponse1 = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $UserName = "";
    $UserEmail = "";
    $UserSubject = "";
    $UserCoverLetter = "";
    $UserResume = "";
    
    $HiringForPosition = "";
    
    $ValidationResponse = "";
    
    if (isset($_POST['submitButton0'])) {
        $UserName = htmlspecialchars(strip_tags(trim($_POST['userName0'])));
        $UserEmail = htmlspecialchars(strip_tags(trim($_POST['userEmail0'])));
        $UserSubject = htmlspecialchars(strip_tags(trim($_POST['userSubject0'])));
        $UserResume = htmlspecialchars(strip_tags(trim($_POST['userResume0'])));
        $UserCoverLetter = htmlspecialchars(strip_tags(trim($_POST['userCoverLetter0'])));
        $HiringForPosition = "Barista";
    } 
    else if (isset($_POST['submitButton1'])) {
        $UserName = htmlspecialchars(strip_tags(trim($_POST['userName1'])));
        $UserEmail = htmlspecialchars(strip_tags(trim($_POST['userEmail1'])));
        $UserSubject = htmlspecialchars(strip_tags(trim($_POST['userSubject1'])));
        $UserResume = htmlspecialchars(strip_tags(trim($_POST['userResume1'])));
        $UserCoverLetter = htmlspecialchars(strip_tags(trim($_POST['userCoverLetter1'])));
        $HiringForPosition = "Barista Lead";
    }


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

    
    $ValidUserCoverLetter = true;
    if (Trim($UserCoverLetter) === "") {
        $ValidUserCoverLetter = false;
    }
    if ($ValidUserCoverLetter === false) {
        $PassedValidation = false;
        $ValidationResponse .= "<p>Please write your Cover Letter.</p>";
    }


    if ($PassedValidation === false) {
        $ValidationResponse .= "<p>Sorry validation failed.  Please check all fields again.</p>";
    }

    if ($PassedValidation) {
        /* Create the e-mail body. */
        $Body = "Application for " . $HiringForPosition;
        $Body .= "User Name: " . $UserName . "\n";
        $Body .= "User Email: " . $UserEmail . "\n";
        $Body .= "Subject: " . $UserSubject . "\n";
        $Body .= "Resume: " . $UserResume . "\n";
        $Body .= "User Cover Letter: " . $UserCoverLetter . "\n";

        /* Send the e-mail. */
        $EmailSubject = "";
        if(strlen($UserSubject) > 0) {
            $EmailSubject = ": Subject: " . $UserSubject;
        } else {
            $EmailSubject = "";
        }
        $SuccessfulSubmission = mail($SendEmailTo, "Westland Coffee House: " . $HiringForPosition . " Application from " . $UserName . $EmailSubject, $Body, "From: <$UserEmail>");
        if ($SuccessfulSubmission) {
            $ValidationResponse .= "<p>Thank you for applying to work with us, " . $UserName . ".  Your application was successfully sent!</p>";
            $UserName = "";
            $UserEmail = "";
            $UserSubject = "";
            $UserCoverLetter = "";
        } else if ($SuccessfulSubmission === false) {
            $ValidationResponse .= "<p>Submission failed. Please try again.</p>";
        }
    }
} else {
    $UserName = "";
    $UserEmail = "";
    $UserSubject = "";
    $UserCoverLetter = "";
    $UserResume = "";
}

    if (isset($_POST['submitButton0'])) {
        $ValidationResponse0 = $ValidationResponse;
        $ValidationResponse1 = "";
    } 
    else if (isset($_POST['submitButton1'])) {
        $ValidationResponse0 = "";
        $ValidationResponse1 = $ValidationResponse;
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
                                        Coffee House THE best coffee store in the Portland area.</p>
                                    <p>Come on in and pick an application, or select the 'Apply' button!</p>
                                    <div class="position__apply-button">Apply Here!</div>
                                    <div class="clear-both"></div>
                                </div>  
                                <div class="careers-container">
                                    <?php
                                    if (!empty($ValidationResponse0)) {
                                        echo "<div class='form-transmission-results'>" . $ValidationResponse0 . "</div>";
                                    }
                                    ?>
                                    <form id="careersForm0" class="application-form" method="post" onsubmit="return validateCareersForm();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <h4 class="application-form__title">Barista Application</h4>
                                        <div class="content-row no-padding">                                          
                                            <div class="input-container col-sma-6">
                                                <label for="userName"><strong>Name *</strong></label>
                                                <input type="text" id="userName0" name="userName0" value="<?php echo $UserName; ?>" placeholder="Enter Name Here" required="required">    
                                            </div>
                                            <div class="input-container col-sma-6">
                                                <label for="userEmail"><strong>Email *</strong></label>
                                                <input type="email" id="userEmail0" name="userEmail0" value="<?php echo $UserEmail; ?>" placeholder="Enter Email Here" required="required"> 
                                            </div>
                                        </div>
                                        <div class="input-container">
                                            <label for="userSubject"><strong>Subject</strong></label>
                                            <input type="text" id="userSubject0" name="userSubject0" value="<?php echo $UserSubject; ?>" placeholder="Enter Subject Here">    
                                        </div>
                                        <div class="input-container">
                                            <label for="userResume0"><strong>Resume</strong></label>
                                            <textarea id="userResume0" name="userResume0" rows="6" placeholder="Please paste your resume here."><?php echo $UserResume; ?></textarea>                          
                                        </div> 
                                        <div class="input-container">
                                            <label for="userCoverLetter0"><strong>Cover Letter *</strong></label>
                                            <textarea id="userCoverLetter0" name="userCoverLetter0" rows="6" placeholder="Please write your cover letter here.  Thanks." required="required"><?php echo $UserCoverLetter; ?></textarea>                          
                                        </div>                           
                                        <div class="input-container submit">
                                            <button id="submitButton0" name="submitButton0" class="submit-button" type="submit">Send Application!</button>                          
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
                                      <p>Come on in and pick an application, or select the 'Apply' button!</p>
                                    <div class="position__apply-button">Apply Here!</div>
                                    <div class="clear-both"></div>
                                </div> 
                                <div class="careers-container">
                                    <?php
                                    if (!empty($ValidationResponse1)) {
                                        echo "<div class='form-transmission-results'>" . $ValidationResponse1 . "</div>";
                                    }
                                    ?>
                                    <form id="careersForm1" class="application-form" method="post" onsubmit="return validateCareersForm();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <h4 class="application-form__title">Barista Lead Application</h4>
                                        <div class="content-row no-padding">    
                                            <div class="input-container col-sma-6">
                                                <label for="userName"><strong>Name *</strong></label>
                                                <input type="text" id="userName1" name="userName1" value="<?php echo $UserName; ?>" placeholder="Enter Name Here" required="required">    
                                            </div>
                                            <div class="input-container col-sma-6">
                                                <label for="userEmail"><strong>Email *</strong></label>
                                                <input type="email" id="userEmail1" name="userEmail1" value="<?php echo $UserEmail; ?>" placeholder="Enter Email Here" required="required"> 
                                            </div>
                                        </div>
                                        <div class="input-container">
                                            <label for="userSubject"><strong>Subject</strong></label>
                                            <input type="text" id="userSubject1" name="userSubject1" value="<?php echo $UserSubject; ?>" placeholder="Enter Subject Here">    
                                        </div>
                                        <div class="input-container">
                                            <label for="userResume1"><strong>Resume</strong></label>
                                            <textarea id="userResume1" name="userResume1" rows="6" placeholder="Please paste your resume here."><?php echo $UserResume; ?></textarea>                          
                                        </div> 
                                        <div class="input-container">
                                            <label for="userCoverLetter1"><strong>Cover Letter *</strong></label>
                                            <textarea id="userCoverLetter1" name="userCoverLetter1" rows="6" placeholder="Please write your cover letter here.  Thanks." required="required"><?php echo $UserCoverLetter; ?></textarea>                          
                                        </div>                           
                                        <div class="input-container submit">
                                            <button id="submitButton1" name="submitButton1" class="submit-button" type="submit">Send Application!</button>                          
                                        </div>
                                        <div class="javascript-validation-results-contact-us"></div>
                                    </form>
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
        <script type="text/javascript" src="assets/javascript/careers-form-validation.js?mod=12012019"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                setCurrentPage(5);
            });
        </script>
    </body>
</html>