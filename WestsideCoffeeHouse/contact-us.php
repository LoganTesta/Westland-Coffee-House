
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="" />
        <title>Westside Coffee House</title>	
        <?php include 'assets/include/document-head-components.php'; ?>
    </head>

    <body>
        <div id="bodyWrapper">
            <header>
                <div class="inner-wrapper">
                    <?php include 'assets/include/logo.php'; ?>
                    <?php include 'assets/include/header-content.php'; ?>
                    <h2 id="subTitle">Contact Us</h2>
                </div>
            </header>

            <?php include 'assets/include/navigation-content.php'; ?>

            <div id="content">
                <div class="content-row inner-wrapper">
                    <div class="col-sma-6">
                        <h3>Write Us!  You might even get a Free Coffee!</h3>
                        <p>Contact us with questions, event requests, or to learn more about our coffee shop.  We always enjoy reading comments 
                            and suggestions from our community!</p>
                    </div>

                    <div class="col-sma-6 contact-us-container">
                        <h4>Contact Westside Coffee House</h4>
                        <form id="contactOurCoffeeShop" onsubmit="return validateConttactForm();" action="validate-contact-form.php">
                            <div class="input-container">
                                <label for="userName"><strong>Name **</strong></label>
                                <input type="text" id="userName" name="userName" placeholder="Enter Name Here" required="required">    
                                <div class="clear-both"></div>
                            </div>
                            <div class="input-container">
                                <label for="userEmail"><strong>Email **</strong></label>
                                <input type="email" id="userEmail" name="userEmail" placeholder="Enter Email Here" required="required"> 
                                <div class="clear-both"></div>
                            </div>
                            <div class="input-container">
                                <label for="userSubject"><strong>Subject</strong></label>
                                <input type="text" id="userSubject" name="userSubject" placeholder="Enter Subject Here">    
                                <div class="clear-both"></div>
                            </div>
                            <div class="input-container">
                                <label for="userMessage"><strong>Message **</strong></label>
                                <textarea id="userMessage" name="userMessage" rows="6" placeholder="Please write your message here.  Thanks." required="required"></textarea>                          
                                <div class="clear-both"></div>
                            </div>                           
                            <div class="input-container">
                                <button id="contactButton" type="submit">Contact Us!</button>                          
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php include 'assets/include/footer-content.php'; ?>
            <script type="text/javascript" src="assets/javascript/javascript-functions.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    setCurrentPage(0);
                });
            </script>
        </div>
    </body>

</html>
