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
                    <div class="col-sma-12">
                        <h3>Peruse Our Delicious Food and Beverages Menu</h3>
                        <p>Menu items.</p>
                        <table>
                            <thead>
                            <th class="item-name"><strong>Item</strong></th>
                            <td class="photos"><strong>Photo</strong></td>
                            <th class="item-cost"><strong>Description</strong></th>
                            <th><strong>Price</strong></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><h4>Beverages/Coffee</h4></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>House Coffee</td>
                                    <td><img src="assets/images/menu/house-coffee.jpg" alt="House Coffee." /></td>
                                    <td>$1.75, $2.10, $2.50</td>
                                    <td>Our basic coffee is still a fan favorite!</td>
                                </tr>
                                <tr>
                                    <td>Featured Blend of the Month</td>
                                    <td></td>
                                    <td>$1.85, $2.25, $2.65</td>
                                    <td>Our basic coffee is still a fan favorite!</td>
                                </tr>
                                <tr>
                                    <td>Hot Chocolate</td>
                                    <td></td>
                                    <td>$2.75, $3.50</td>
                                    <td>Always a good treat on a chilly day!</td>
                                </tr>
                                <tr>
                                    <td>Latte</td>
                                    <td></td>
                                    <td>$3.00, $3.50, $4.00</td>
                                    <td>Classic, plain and simple.</td>
                                </tr>
                                <tr>
                                    <td>Cappuccino</td>
                                    <td></td>
                                    <td>$3.00, $3.50, $4.00</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Mocha</td>
                                    <td><img src="assets/images/menu/mocha.jpg" alt="Mocha." /></td>
                                    <td>$3.50, $4.00, $4.50</td>
                                    <td>Always a classic, and one of our best sellers!</td>
                                </tr>
                                <tr>
                                    <td>Green Tea (Matcha) Latte</td>
                                    <td><img src="assets/images/menu/green-tea-latte.jpg" alt="Green Tea Latte." /></td>
                                    <td>$3.50, $4.00, $4.50</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Milkshake (no-coffee)</td>
                                    <td></td>
                                    <td>$3.50, $4.00, $4.50</td>
                                    <td>Vanilla, chocolate, or strawberry.</td>
                                </tr>
                                <tr>
                                    <td>Milkshake (caffeine)</td>
                                    <td></td>
                                    <td>$4.00, $4.50, $5.00</td>
                                    <td>Vanilla, chocolate, or strawberry.</td>
                                </tr>
                                <tr>
                                    <td><h4>Food</h4></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Bagel with cream cheese</td>
                                    <td></td>
                                    <td>$3.05</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Cookie</td>
                                    <td></td>
                                    <td>$1.95</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Muffin</td>
                                    <td></td>
                                    <td>$1.95</td>
                                    <td>Bran, Blueberry, Chocolate fudge chip, and more seasonally!  Baked fresh daily, our muffins are a best-seller!</td>
                                </tr>
                                <tr>
                                    <td>Oatmeal</td>
                                    <td></td>
                                    <td>$2.50</td>
                                    <td>served with brown sugar, cranberries, nuts, and more</td>
                                </tr>
                                <tr>
                                    <td>Deluxe Bagel Sandwich</td>
                                    <td></td>
                                    <td>$4.25</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Deluxe Sandwich</td>
                                    <td></td>
                                    <td>$4.00-$6.50</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Slice of Cake</td>
                                    <td><img src="assets/images/menu/cake-slice.jpg" alt="Cake slice." /></td>
                                    <td>$3.00</td>
                                    <td>Vanilla, Chocolate, and more</td>
                                </tr>
                                <tr>
                                    <td>Ice Cream Per Scoop (seasonal/summertime)</td>
                                    <td></td>
                                    <td>$2.25</td>
                                    <td>Vanilla, Chocolate, Strawberry, Cherry, Chocolate Fudge, and more!</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
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

<?php ob_end_flush(); ?>