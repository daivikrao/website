<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="resources/css/choco1.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,100;1,300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/78c70fd6da.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="h-class">
        </header>
        <header>
            <a href="index.php"><h1 class="h1">Cr&#232me P&#226tissi&#232re</h1></a>
            <div class="row">
                <ul class="main-nav1">
                    <li><a href="Cake.php">Cakes</a></li>
                    <li><a href="chocolate.php">Chocolates</a></li>
                    <li><a href="gift.php">Gifts</a></li>
                    <li><a href="recipe.html">Recipes</a></li>
                </ul>
            </div>
            <div class="search-box">
                <input type="text" class="input" name="" placeholder="Type to Search">
                <div class="search-btn">
                    <i class="fab fa-searchengin"></i>
                </div>
            </div>
            <?php
                $count = 0;
                if(isset($_SESSION['cart']))
                {
                    $count = count($_SESSION['cart']);
                }
            ?>
            <a class="button" href="mycart.php" style="display: inline-block;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        color: #000;
        background-color: #BB9F55;
        border-radius: 6px;
        outline: none; position:absolute;left:4.5%;top:4.5%;">My Cart (<?php echo $count; ?>)</a>
        </header>
        <section class="just-one">
            <div class="row">
                <div class="col span-1-of-2">
                    <div>
                        <img src="https://i7.fnp.com/images/pr/l/v20200206131640/rocher-choco-bouquet_1.jpg" class="image">
                    </div>
                </div>
                <div class="col span-1-of-2">
                    <form action="manage_cart.php" method="POST">
                        <div class="text-area">
                            <h1>Rocher Choco Bouquet</h1>
                            <h3>Bouquet of Ferrero Rocher Chocolates- 16 pcs.</h3>
                            <div class="location">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Check availability at</h3>
                            </div>
                            <div class="address-check">
                                <input type="text" name="" placeholder="Enter pincode of Delivery">
                                <button>Check</button>
                            </div>
                            <h4>Check product delivery at your location to enable Add to Cart.</h4>
                            <div class="cart-button">
                                <button type="submit" name="Add_to_cart"><i class="fas fa-cart-plus"></i>ADD TO CART</button>
                            </div>
                            <input type="hidden" name="Item_name" value="Rocher Choco Bouquet">
                            <input type="hidden" name="Price" value="1000.00">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="section-form">
            <div class="row">
                <h1>We're happy to hear from you</h1>
            </div>
            <div class="row">
                <form method="post" class="contact-form" action="#">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" placeholder="Your name" id="name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" placeholder="Your Email" id="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="friends" selected>Friends</option>
                                <option value="search engine">Search engine</option>
                                <option value="Advertisment">Advertisment</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="id">Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="id" checked> Yes, please
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line on</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2020 by Cr&#232me P&#226tissi&#232re. All rights reserved.
                </p>
            </div>
        </footer>
    </body>
</html>