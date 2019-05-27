<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="Portland's friendliest coffee and sandwhich place.  Come grab a nice beverage or some 
              food with us and meet up with friends and family." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="coffee, bagels, sandwiches, latte, matcha, mocha, smoothie, Westland Coffee House, Portland, Oregon." />
        <title>Westland Coffee House</title>	
        <?php include 'assets/include/document-head-components.php'; ?>
    </head>

    <body>
        <div id="bodyWrapper" class="index">

            <header>
                <div class="inner-wrapper">
                    <?php include 'assets/include/logo.php'; ?>
                    <?php include 'assets/include/header-content.php'; ?>
                    <div class="subtitle-container">
                    <h2 id="subTitle">Portland's best coffee shop</h2>
                    </div>
                </div>
            </header>

            <?php include 'assets/include/navigation-content.php'; ?>

            <div id="content">
                <div class="content-row inner-wrapper">
                    <div class="content-body">
                        <div class="col-sma-12">
                            <div class="content-row index-section one">
                                <div class="col-sma-7">
                                    <h3>The Place to Grab Coffee and Meet up</h3>
                                    <p>Welcome to our Westland Coffee House.  We have the finest coffee and are reputed to be one of the best places in Portland 
                                        to grab coffee and hangout.</p>
                                </div>
                                <div class="col-sma-5">
                                    <div class="index-content-image-container">
                                        <a href="about.php">
                                            <div class="index-content-item-image one"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                            <div class="content-row index-section two">
                                <div class="col-sma-7 float-right-larger-screens">
                                    <h3>Top Notch Coffee and Hearty Food</h3>
                                    <p>We have all your favorite hot, chilled beverages.  We also server a wide variety of tasty  food, ranging from bagels, 
                                        soups, salads, sandwiches, and more!</p>
                                </div>
                                <div class="col-sma-5 float-right-larger-screens">
                                    <div class="index-content-image-container">
                                        <a href="menu.php">
                                            <div class="index-content-item-image two"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                            <div class="content-row index-section three">
                                <div class="col-sma-7">
                                    <h3>Our Shop is Open</h3>
                                    <p>But don't take our word for it, come on by and see for yourself!</p>
                                </div>
                                <div class="col-sma-5">
                                    <div class="index-content-image-container">
                                        <a href="location-and-hours.php">
                                            <div class="index-content-item-image three"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </div>

            <?php include 'assets/include/footer-content.php'; ?>

            <script type="text/javascript" src="assets/javascript/javascript-functions.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    setCurrentPage(-1);
                });
            </script>
        </div>
    </body>

</html>