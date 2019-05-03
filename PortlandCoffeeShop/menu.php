<?php
ob_start();
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="" />
        <title>Portland Coffee Shop</title>	
        <?php include 'assets/include/document-head-components.php'; ?>
    </head>

    <body>
        <div id="bodyWrapper">
            <header>
                <?php include 'assets/include/logo.php'; ?>
                <?php include 'assets/include/header-content.php'; ?>
                <h2 id="subTitle">Our Menu</h2>
            </header>

            <?php include 'assets/include/navigation-content.php'; ?>

            <div id="content">
                <div class="content-row">
                    <div class="col-sma-6">
                        <h3>Peruse Our Delicious Food and Beverages Menu</h3>
                        <p>Menu items.</p>
                    </div>

                    <div class="col-sma-6">
                       
                    </div>
                </div>
            </div>

            <?php include 'assets/include/footer-content.php'; ?>
            <script type="text/javascript" src="assets/javascript/javascript-functions.js"></script>
            <script type="text/javascript" src="assets/javascript/slideshow.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    setCurrentPage(0);
                });
            </script>
        </div>
    </body>

</html>

<?php ob_end_flush(); ?>