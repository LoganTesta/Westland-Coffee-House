<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Portland's friendliest coffee and sandwhich place.  Come grab a nice beverage or some 
              food with us and meet up with friends and family." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="coffee, bagels, sandwiches, latte, matcha, mocha, smoothie, Westland Coffee House, Portland, Oregon." />
        <title>500 | Westland Coffee House</title>	
        <?php include 'assets/include/document-head-components.php'; ?>
    </head
    <body class="page-500">
        <div class="body-wrapper">
            <header>
                <div class="inner-wrapper">
                    <?php include 'assets/include/logo.php'; ?>
                    <?php include 'assets/include/header-content.php'; ?>
                    <div class="subtitle-container">
                        <h2 id="subTitle">500</h2>
                    </div>
                </div>
            </header>
            <?php include 'assets/include/navigation-content.php'; ?>
            <div class="content">
                <div class="content-row inner-wrapper">
                    <div class="col-sma-6">
                        <h3>Server Error</h3>
                        <p>We're sorry, that page doesn't seem to exist.  Please navigate to one of our navbar links. Thanks!</p>
                    </div>
                    <div class="col-sma-6">
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