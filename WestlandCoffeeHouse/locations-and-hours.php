<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="Westland Coffee House's location and hours." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="coffee, bagels, sandwiches, latte, matcha, mocha, smoothie, Westland Coffee House, Portland, Oregon, 
              location, hours." />
        <title>Location | Westland Coffee House</title>	
        <?php include 'assets/include/document-head-components.php'; ?>
    </head>

    <body class="page-location-and-hours">
        <div class="body-wrapper">
            <header>
                <div class="inner-wrapper">
                    <?php include 'assets/include/logo.php'; ?>
                    <?php include 'assets/include/header-content.php'; ?>
                    <div class="subtitle-container">
                        <h2 id="subTitle">Location</h2>
                    </div>
                </div>
            </header>

            <?php include 'assets/include/navigation-content.php'; ?>

            <div class="content">
                <div class="content-row inner-wrapper">
                    <div class="col-sma-6">
                        <div class="hours-section">
                            <h3 class="coffee-shop-hours-header">Coffee Shop Hours</h3>
                            <table class="hours-table">
                                <thead>
                                <th class="hours-col-1"><strong>Day</strong></th>
                                <th class="hours-col-2"><strong>Hours</strong></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Monday</td>
                                        <td>6:00AM-Midnight</td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>6:00AM-Midnight</td>
                                    </tr>
                                    <tr>
                                        <td>Wednesday</td>
                                        <td>6:00AM-Midnight</td>
                                    </tr>
                                    <tr>
                                        <td>Thursday</td>
                                        <td>6:00AM-Midnight</td>
                                    </tr>
                                    <tr>
                                        <td>Friday</td>
                                        <td>6:00AM-Midnight</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>6:00AM-Midnight</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>8:00AM-Midnight</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sma-6">
                        <div class="location-section">
                            <h3 class="location-header">Location</h3>
                            <p>33322 SW 10th Avenue Portland, Oregon 97205</p>
                            <img src="assets/images/westland-coffee-house-location.png" alt="Westland Coffee House Location" />

                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'assets/include/footer-content.php'; ?>
            <script type="text/javascript" src="assets/javascript/javascript-functions.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    setCurrentPage(1);
                });
            </script>
        </div>
    </body>

</html>