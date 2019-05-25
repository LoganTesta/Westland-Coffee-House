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
                    <h2 id="subTitle">Events</h2>
                </div>
            </header>

            <?php include 'assets/include/navigation-content.php'; ?>

            <div id="content">
                <div class="content-row inner-wrapper">
                    <div class="col-sma-8">
                        <h3>Careers</h3>
                        <p>Come Work With Us at the Chillest Coffee Shop in Town!</p>
                        <p>We are currently hiring either a part-time or a fulltime barista.  Make delicious beverages and Westland Coffee House THE best 
                            coffee store in the Portland area.  Come on in an pick an application!</p>
                    </div>
                    <div class="col-sma-4 careers-featured">
                        <h4>"It's Westland Time!"</h4>
                        <div class="barista one">
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'assets/include/footer-content.php'; ?>
            <script type="text/javascript" src="assets/javascript/javascript-functions.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    setCurrentPage(5);
                });
            </script>
        </div>
    </body>

</html>