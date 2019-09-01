<?php

$SendEmailTo;
$Subject;
$UserName;
$UserEmail;
$UserComments;
$SendEmailTo = "logan.testa@outlook.com";
$Subject = "Questions/Comments About Westland Coffee House";
$UserName = htmlspecialchars(strip_tags(trim($_POST['userName'])));
$UserEmail = htmlspecialchars(strip_tags(trim($_POST['userEmail'])));
$UserComments = htmlspecialchars(strip_tags(trim($_POST['userComments'])));


/* Validation time */
$PassedValidation = true;
if (Trim($UserName) === "") {
    $PassedValidation = false;
}
if (Trim($UserEmail) === "") {
    $PassedValidation = false;
}
if (Trim($UserComments) === "") {
    $PassedValidation = false;
}

/* More advanced e-mail validation */
if (!filter_var($UserEmail, FILTER_VALIDATE_EMAIL)) {
    $PassedValidation = false;
}
if ($PassedValidation === false) {
    print "Sorry validation failed.  Please check all fields again.";
    exit;
}

/* Create the e-mail body. */
$Body = "";
$Body .= "User Name: " . $UserName . "\n";
$Body .= "User Email: " . $UserEmail . "\n";
$Body .= "User Comments: " . $UserComments . "\n";

/* Send the e-mail. */
$SuccessfulSubmission = mail($SendEmailTo, $Subject, $Body, "From: <$UserEmail>");
if ($SuccessfulSubmission) {
    ?>
    <script type="text/javascript">
        alert("Your form was successfully submitted.  Thanks for contacting us!");
    </script>
    <?php

    print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-us.php\">";
} else if ($SuccessfulSubmission === false) {
    ?>
    <script type="text/javascript">
        alert("Submission failed. Please try again.");
    </script>
    <?php

    print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-us.php\">";
}
?>
