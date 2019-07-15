<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="Events at Westland Coffee House." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="coffee, bagels, sandwiches, latte, matcha, mocha, smoothie, Westland Coffee House, Portland, Oregon, events, art, games." />
        <title>Events | Westland Coffee House</title>	
        <?php include 'assets/include/document-head-components.php'; ?>
    </head>

    <body class="page-events">
        <div id="bodyWrapper">
            <header>
                <div class="inner-wrapper">
                    <?php include 'assets/include/logo.php'; ?>
                    <?php include 'assets/include/header-content.php'; ?>
                    <div class="subtitle-container">
                        <h2 id="subTitle">Events</h2>
                    </div>
                </div>
            </header>

            <?php include 'assets/include/navigation-content.php'; ?>

            <div class="content">
                <div class="content-row inner-wrapper">
                    <div class="col-sma-12">
                        <h3>Events</h3>
                        <p>We frequently host fun community events.  Check back often to see what's coming up.</p>
                        <div class="table-container">
                            <table class="events-table">
                                <thead>
                                    <tr>
                                        <th class="event-name">Event</th>
                                        <th class="date-time">Date/Time</th>
                                        <th class="event-info">More Info</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Local Jazz Musician</td>
                                        <td>Thursday March 10, 7-9 PM</td>
                                        <td>Free local concert!</td>
                                    </tr>
                                    <tr>
                                        <td>Settlers of Catan Tournament</td>
                                        <td><strong>Every 1st Saturday of the month 7-10 PM</strong></td>
                                        <td>Come have some friendly competition in Settlers of Catan.  In-house Gift Card to prize of $50 to winner!</td>
                                    </tr>
                                    <tr>
                                        <td>Quarterly Art Show/Gallery</td>
                                        <td>Saturday, April 18, 11-5PM</td>
                                        <td>Want to get your artwork out for the public to see?  Want to decorate a cool coffee shop and maybe get a few
                                            sales? <a href="contact-us.php">Contact Us and let's talk!</a></td>
                                    </tr>
                                    <tr>
                                        <td>Food Drive</td>
                                        <td>March 1st-31st</td>
                                        <td>Bring in fresh canned and boxed food to help locals in need through the Oregon Food Bank.  We proudly support 
                                            local charities in our community!</td>
                                    </tr>
                                    <tr>
                                        <td>Piano Hour with Local Musician</td>
                                        <td>Thursday May 15, 8-9 PM</td>
                                        <td>Free local concert!</td>
                                    </tr>
                                    <tr>
                                        <td>Local Indie Band</td>
                                        <td>Thursday April 25, 7-9 PM</td>
                                        <td>Free local concert!</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'assets/include/footer-content.php'; ?>
            <script type="text/javascript" src="assets/javascript/javascript-functions.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    setCurrentPage(3);
                });
            </script>
        </div>
    </body>

</html>