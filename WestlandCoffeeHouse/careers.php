<?php
declare(strict_types=1);

$ValidationResponse = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $UserName = "";
    $UserEmail = "";
    $UserSubject = "";
    $UserResume = "";
    $UserPositionApplyingFor = "";
    $UserCoverLetter = "";
       
    $ValidationResponse = "";
    
    if (isset($_POST['submitButton'])) {
        $UserName = htmlspecialchars(strip_tags(trim($_POST['userName'])));
        $UserEmail = htmlspecialchars(strip_tags(trim($_POST['userEmail'])));
        $UserSubject = htmlspecialchars(strip_tags(trim($_POST['userSubject'])));
        $UserResume = htmlspecialchars(strip_tags(trim($_POST['userResume'])));
        $UserPositionApplyingFor = htmlspecialchars(strip_tags(trim($_POST['userPositionApplyingFor'])));
        $UserCoverLetter = htmlspecialchars(strip_tags(trim($_POST['userCoverLetter'])));
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
    
    
    $ValidUserPositionApplyingFor = true;
    if (Trim($UserPositionApplyingFor) === "") {
        $ValidUserPositionApplyingFor = false;
    }
    if ($ValidUserPositionApplyingFor === false) {
        $PassedValidation = false;
        $ValidationResponse .= "<p>Please write the position you are applying for.</p>";
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
        /* Set the headers */
        $Headers = "";
        $Headers .= "From: <$UserEmail>\r\n";
        $Headers .= "MIME-Version: 1.0\r\n";
        $Headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        /* Create the e-mail body. */
        $Body = "<strong>Application for</strong> " . $UserPositionApplyingFor . "<br />";
        $Body .= "<strong>User Name:</strong> " . $UserName . "<br />";
        $Body .= "<strong>User Email:</strong> " . $UserEmail . "<br />";
        $Body .= "<strong>Subject:</strong> " . $UserSubject . "<br />";
        $Body .= "<strong>Resume:</strong> " . $UserResume . "<br />";
        $Body .= "<strong>Position:</strong> " . $UserPositionApplyingFor . "<br />";
        $Body .= "<strong>User Cover Letter:</strong> " . $UserCoverLetter . "<br />";

        /* Send the e-mail. */
        $EmailSubject = "";
        if(strlen($UserSubject) > 0) {
            $EmailSubject = ": Subject: " . $UserSubject;
        } else {
            $EmailSubject = "";
        }
        $SuccessfulSubmission = mail($SendEmailTo, "Westland Coffee House: " . $UserPositionApplyingFor . " Application from " . $UserName . $EmailSubject, $Body, $Headers);
        if ($SuccessfulSubmission) {
            $ValidationResponse .= "<p>Thank you for applying to work with us, " . $UserName . ".  Your application was successfully sent!</p>";
            $UserName = "";
            $UserEmail = "";
            $UserSubject = "";
            $UserResume = "";
            $UserPositionApplyingFor = "";
            $UserCoverLetter = "";
        } else if ($SuccessfulSubmission === false) {
            $ValidationResponse .= "<p>Submission failed. Please try again.</p>";
        }
    }
} else {
    $UserName = "";
    $UserEmail = "";
    $UserSubject = "";
    $UserResume = "";
    $UserPositionApplyingFor = "";
    $UserCoverLetter = "";
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
            <div class="inner-wrapper">
                <div class="content">
                    <div class="content-row">
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
                                        <div class="clear-both"></div>
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
                                        <div class="clear-both"></div>
                                    </div> 
                                </div>
                                <div class="careers-container">
                                    <form id="careersForm" class="application-form careers-form" method="post" onsubmit="return validateCareersForm();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <h4 class="application-form__title">Join Our Team!</h4>
                                        <div class="content-row no-padding">                                          
                                            <div class="input-container col-sma-6">
                                                <label for="userName"><strong>Name *</strong></label>
                                                <input type="text" id="userName" name="userName" value="<?php echo $UserName; ?>" placeholder="Enter Name Here" required="required">    
                                            </div>
                                            <div class="input-container col-sma-6">
                                                <label for="userEmail"><strong>Email *</strong></label>
                                                <input type="email" id="userEmail" name="userEmail" value="<?php echo $UserEmail; ?>" placeholder="Enter Email Here" required="required"> 
                                            </div>
                                        </div>
                                        <div class="input-container">
                                            <label for="userSubject"><strong>Subject</strong></label>
                                            <input type="text" id="userSubject" name="userSubject" value="<?php echo $UserSubject; ?>" placeholder="Enter Subject Here">    
                                        </div>
                                        <div class="input-container">
                                            <label for="userResume"><strong>Resume</strong></label>
                                            <textarea id="userResume" name="userResume" rows="6" placeholder="Please paste your resume here."><?php echo $UserResume; ?></textarea>                          
                                        </div> 
                                        <div class="input-container">
                                            <label for="userPositionApplyingFor"><strong>Position *</strong></label>
                                            <input type="text" id="userPositionApplyingFor" name="userPositionApplyingFor" value="<?php echo $UserPositionApplyingFor; ?>" placeholder="Enter Position You are Applying for Here" required="required">                         
                                        </div> 
                                        <div class="input-container">
                                            <label for="userCoverLetter"><strong>Cover Letter *</strong></label>
                                            <textarea id="userCoverLetter" name="userCoverLetter" rows="6" placeholder="Please write your cover letter here.  Thanks." required="required"><?php echo $UserCoverLetter; ?></textarea>                          
                                        </div>                           
                                        <div class="input-container submit">
                                            <button id="submitButton" name="submitButton" class="submit-button" type="submit">Send Application!</button>                          
                                        </div>
                                        <div class="javascript-validation-results-contact-us"></div>
                                    </form>
                                    <?php echo "<div class='form-transmission-results'>" . $ValidationResponse . "</div>"; ?>
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
            </div>
            <?php include 'assets/include/footer-content.php'; ?>
        </div>
        <?php include 'assets/include/javascript-content.php'; ?>
        <script type="text/javascript" src="assets/javascript/careers-form-validation.js?mod=12012020"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                setCurrentPage(5);
            });
        </script>
        <script type="text/javascript">
            //Use AJAX to update part of the page without reloading the whole page.
            document.getElementById("careersForm").addEventListener("submit", function(event) {
                updateServerResponse(event);
            }, false);

            function updateServerResponse(event) {
                event.preventDefault();
                let xhttp = new XMLHttpRequest();

                xhttp.onreadystatechange = function() {
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
                let userResume = document.getElementById("userResume").value;
                let userPositionApplyingFor = document.getElementById("userPositionApplyingFor").value;
                let userCoverLetter = document.getElementById("userCoverLetter").value;
      
                let submitButton = document.getElementById("submitButton").value;

                let formInfo = "userName=" + userName + "&userEmail=" + userEmail + "&userSubject=" + userSubject + "&userResume=" + userResume + 
                        "&userPositionApplyingFor=" + userPositionApplyingFor + "&userCoverLetter=" + userCoverLetter + "&submitButton=" + submitButton;


                xhttp.open("POST", "careers.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(formInfo);
            }
        </script>
    </body>
</html>