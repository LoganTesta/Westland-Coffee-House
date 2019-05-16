<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="" />
        <title>Westland Coffee House</title>	
        <?php include 'assets/include/document-head-components.php'; ?>
    </head>

    <body>
        <div id="bodyWrapper">
            <header>  
                <div class="inner-wrapper">
                    <?php include 'assets/include/logo.php'; ?>
                    <?php include 'assets/include/header-content.php'; ?>
                    <h2 id="subTitle">About Westland Coffee House</h2>
                </div>
            </header>

            <?php include 'assets/include/navigation-content.php'; ?>

            <div id="content">
                <div class="content-row inner-wrapper">
                    <div class="col-sma-6">
                        <h3>About Westland Coffee House</h3>
                        <p>We are friendly and locally owned!</p>
                        <h4>Our Coffee Shop's Story</h4>
                        <p>We were founded in 2002 with the goal of being the best place to hang out and grab quality coffee, beverages, and food
                            with friends and family.</p>
                        <p>Since the third year our customer visits have grown dramatically and we are now a popular coffee and fine food destination.  
                            People come in from everything from morning coffee to studying or holding meetings to social events and gatherings.  We also
                            regularly host community events like game nights, mini background concerts, and art shows, and work with local charities as 
                            well.</p>
                        <p>Come pay us a visit and we'll make sure you have a good beverage and a good time!</p>
                    </div>

                    <div class="col-sma-6">
                        <div class="visitors-bg-image one"></div>
                        <div class="visitors-bg-image two"></div>
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