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
    <body class="page-index">
        <div class="body-wrapper">
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
            <div class="content">
                <div class="content-row inner-wrapper">
                    <div class="content-body">
                        <div class="col-sma-12">
                            <div class="content-row index-section">
                                <div class="col-sma-7">
                                    <div class="index-section-content">
                                        <h3>The Place to Grab Coffee and Meet Up</h3>
                                        <div class="subheader-divider"></div>
                                        <p>Welcome to Westland Coffee House!</p>
                                        <p>We have the finest coffee and are reputed to be one of the best places 
                                            in Portland to grab coffee and gather.</p>
                                        <p>Plenty of seating inside and outdoors!</p>
                                        <p>Located in downtown SW Portland at 33322 SW 10th Avenue Portland, Oregon 97205.</p>
                                    </div>
                                </div>
                                <div class="col-sma-5">
                                    <div class="item-image-container">
                                        <a href="about.php">
                                            <div class="item-image index-one"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-row index-section">
                                <div class="col-sma-7 float-right-above-a-breakpoint">
                                    <div class="index-section-content">
                                        <h3>Top Notch Coffee and Hearty Food</h3>
                                        <div class="subheader-divider"></div>
                                        <p>We have all your favorite hot and chilled beverages, coffee, smoothies, and more:</p>                                                                 
                                        <ul class="bulleted-list food-beverage-list">
                                            <li>hot coffee</li>
                                            <li>cold coffee and smoothies</li>
                                            <li>oatmeal/waffles/etc.</li>
                                            <li>bagels</li>
                                            <li>sandwiches</li>
                                            <li>soups</li>
                                            <li>featured blends</li>
                                            <li>... and more!</li>
                                        </ul>  
                                    </div>
                                </div>
                                <div class="col-sma-5 float-right-above-a-breakpoint">
                                    <div class="item-image-container">
                                        <a href="menu.php">
                                            <div class="item-image index-two"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-row index-section">
                                <div class="col-sma-7">
                                    <div class="index-section-content">
                                        <h3>Our Shop is Open</h3>
                                        <div class="subheader-divider"></div>
                                        <p>But don't take our word for it, come on by and see for yourself!</p>
                                        <p>We frequently get new blends too!</p>
                                        <p>Don't see something on our menu?</p>
                                        <p><a href="contact-us.php">Contact us</a> or let us know in store and we'll 
                                            see what we can do!</p>
                                    </div>
                                </div>
                                <div class="col-sma-5">
                                    <div class="item-image-container">
                                        <a href="location-and-hours.php">
                                            <div class="item-image index-three"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'assets/include/footer-content.php'; ?>
        </div>
        <?php include 'assets/include/javascript-content.php'; ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                setCurrentPage(-1);
            });
        </script>
    </body>
</html>