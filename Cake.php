<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="resources/css/cakes.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,100;1,300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
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
        <section class="section-plans">
            <div class="row">
                <h2>SIGNATURE CAKES</h2>
                <h6>Cr&#232me P&#226tissi&#232re Signature cakes to suit any occasion. Cherish all your special celebrations with our range of exotic cakes that would turn any event into a beautiful and unforgettable memory.</h6>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="cake1.php"><img src="https://cdn.shopify.com/s/files/1/0319/1449/2041/products/belgium-truffle_large.jpg?v=1596519154" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">BELGIUM CHOCOLATE TRUFFLE</li>
                                <li class="price-meal">Rs. 1,700.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="cake2.php"><img src="https://cdn.shopify.com/s/files/1/0319/1449/2041/products/GooeyChocolate_large.jpg?v=1598355079" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">GOOEY CHOCOLATE CAKE</li>
                                <li class="price-meal">Rs. 1,575.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="cake3.php"><img src="https://cdn.shopify.com/s/files/1/0319/1449/2041/products/Tiramisu-gianduja_large.jpg?v=1602606621" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">TIRAMISU GIANDUJA</li>
                                <li class="price-meal">Rs. 1,950.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="cake4.php"><img src="https://cdn.shopify.com/s/files/1/0319/1449/2041/products/intense_large.jpg?v=1596519546" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">INTENSE 70% CHOCOLATE CAKE</li>
                                <li class="price-meal">Rs. 1,155.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="cake5.php"><img src="https://cdn.shopify.com/s/files/1/0319/1449/2041/products/rainbow_large.jpg?v=1596528009" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">RAINBOW CAKE</li>
                                <li class="price-meal">Rs. 1,800.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="cake6.php"><img src="https://cdn.shopify.com/s/files/1/0319/1449/2041/products/Lotus-biscoff_large.jpg?v=1602609588" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">LOTUS BISCOFF BEAUTY</li>
                                <li class="price-meal">Rs. 1,950.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="cake7.php"><img src="https://cdn.shopify.com/s/files/1/0319/1449/2041/products/new-york-baked_large.jpg?v=1596519859" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">BAKED CHEESE CAKE</li>
                                <li class="price-meal">Rs. 1,800.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="cake8.php"><img src="https://cdn.shopify.com/s/files/1/0319/1449/2041/products/Naked-red-velvet_1024x1024.jpg?v=1599109139" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">NAKED RED VELVET CAKE</li>
                                <li class="price-meal">Rs. 1,850.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="cake9.php"><img src="https://cdn.shopify.com/s/files/1/0319/1449/2041/products/ras-e-rasmalai_large.jpg?v=1599109042" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">RAS'E RASMALAI CAKE</li>
                                <li class="price-meal">Rs. 1,850.00</li>
                            </ul>
                        </div>
                    </div>
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