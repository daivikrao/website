<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="resources/css/chocolate.css">
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
            <hr>
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
                <h2>CHOCOLATE</h2>
                <h6>Get set and whet your appetite for chocolate as our diverse range of chocolate will keep you craving for more. Take your pick from a premium range bars that set the bar in indulgence a few notches higher.</h6>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="choco1.php"><img src="https://i7.fnp.com/images/pr/l/v20200206131640/rocher-choco-bouquet_1.jpg" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Rocher Choco Bouquet</li>
                                <li class="price-meal">Rs. 1000.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="choco2.php"><img src="https://i7.fnp.com/images/pr/l/three-layer-chocolaty-wishes_1.jpg" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Dairy Milk Chocolate Arrangement</li>
                                <li class="price-meal">Rs. 1500.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="choco3.php"><img src="https://i7.fnp.com/images/pr/l/festive-theme-assorted-chocolate-box-21-pcs_1.jpg" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Festive Theme Chocolate Box</li>
                                <li class="price-meal">Rs. 1899.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="choco4.php"><img src="https://cdn.shopify.com/s/files/1/2201/2821/products/kVJlOkMzD4_512x.jpg?v=1593163237" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Classic Chocolate Dipped Oreos</li>
                                <li class="price-meal">Rs. 1000.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="choco5.php"><img src="https://cdn1.1800baskets.com/wcsstore/Baskets/images/catalog/94169x.jpg?width=545&height=597&quality=80&auto=webp&optimize={medium}" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Festive Holiday Caramel Pretzels</li>
                                <li class="price-meal">Rs. 1000.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="choco6.php"><img src="https://cdn.shopify.com/s/files/1/1087/0872/products/Jus_Trufs_Truffles_Set_24_11_13dbb921-9314-48f3-a89a-32708db8b1bd_600x.jpg?v=1571602787" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Pralines Belgian Chocolate Box</li>
                                <li class="price-meal">Rs. 1000.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="choco7.php"><img src="https://d3cif2hu95s88v.cloudfront.net/live-site-2016/product-image/13thJan/wheel-of-happiness-350x350.JPG" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Wheel of Happiness</li>
                                <li class="price-meal">Rs. 200.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="choco8.php"><img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSPAKGpuHEPsaf47NDwWkQJSnmoxpULLt2m0pscxuOkvyEAw1uOL0294Sal-giOITe7AVPcXMFUvLDy8e337eGS4y-0NDKfD3EChm_JpbrRoUREMQ&usqp=CAE" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Liquor Chocolates</li>
                                <li class="price-meal">Rs. 1000.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="choco9.php"><img src="https://cdn.shopify.com/s/files/1/1087/0872/products/Jus_trufs_-_72_dark_chocolate_-_01_590773c8-1342-42ec-b83c-2da6eb3e0735_600x.jpg?v=1571602787" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Couverture Chocolate Bar</li>
                                <li class="price-meal">Rs. 350.00</li>
                            </ul>
                        </div>
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