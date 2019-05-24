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
        <div id="bodyWrapper" class="index">

            <header>
                <div class="inner-wrapper">
                    <?php include 'assets/include/logo.php'; ?>
                    <?php include 'assets/include/header-content.php'; ?>
                    <h2 id="subTitle">Portland's best coffee shop</h2>
                </div>
            </header>

            <?php include 'assets/include/navigation-content.php'; ?>

            <div id="content">
                <div class="content-row inner-wrapper">
                    <div class="content-body">
                        <div class="col-sma-2">&nbsp;</div>
                        <div class="col-sma-8">
                            <div class="index-section one">
                                <h3>The Place to Grab Coffee and Meet up</h3>
                                <p>Welcome to our Westland Coffee House.  We have the finest coffee and are reputed to be one of the best places in Portland 
                                    to grab coffee and hangout.</p>
                            </div>
                            <div class="index-section one">
                                <h3>Top Notch Coffee and Hearty Food</h3>
                                <p>We have all your favorite hot, chilled beverages.  We also server a wide variety of tasty  food, ranging from bagels, 
                                soups, salads, sandwiches, and more!</p>
                            </div>
                            <div class="index-section two">
                                <h3>Our Shop is Open</h3>
                                <p>But don't take our word for it, come on by and see for yourself!</p>
                            </div>
                        </div>
                        <div class="col-sma-2">&nbsp;</div>
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