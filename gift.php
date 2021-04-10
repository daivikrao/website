<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="resources/css/gift.css">
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
                <h2>GIFTS</h2>
                <h6>This festive season, indulge in our exclusive array of gift hampers, baskets, trays and luxury chocolate boxes. Add that special touch by personalizing any of these options.</h6>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="gift1.php"><img src="https://images-na.ssl-images-amazon.com/images/I/71kvZh-SFCL._SL1500_.jpg" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Cookie Basket</li>
                                <li class="price-meal">Rs. 1000.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="gift2.php"><img src="https://www.zabars.com/on/demandware.static/-/Sites-CATALOG_Zabars/default/dwd99530ad/images/categories/gift-baskets-boxes/01-gift-baskets.jpg" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Loafng Around</li>
                                <li class="price-meal">Rs. 1500.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="gift3.php"><img src="https://res.cloudinary.com/ufn/image/upload/c_pad,f_auto,q_auto,fl_progressive,dpr_1.5,w_241,h_270/1533654488324_2.jpg" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Christmas cookies</li>
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
                            <a href="gift4.php"><img src="https://i.pinimg.com/originals/b7/28/5a/b7285a7a4c2beabdf24a41aa41ab1843.jpg" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">DIY Baking Kit</li>
                                <li class="price-meal">Rs. 1000.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="gift5.php"><img src="https://oyehappy.sgp1.digitaloceanspaces.com/wp-content/uploads/2016/02/VIS_1437-resized.jpg" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Red Jar Velvet</li>
                                <li class="price-meal">Rs. 1000.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="gift6.php"><img src="https://www.ohnuts.com/noapp/showImage.cfm/extra-large/_MG_00933.jpg" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Gourmet Giant Marshmellow</li>
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
                            <a href="gift7.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGuP3KCqsKHHsqwbvWbKhZUCK_Yp0o3VH0QA&usqp=CAU" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Happy donuts</li>
                                <li class="price-meal">Rs. 800.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="gift8.php"><img src="https://www.arttowngifts.com/v/vspfiles/photos/GBDSLF-10000S1-2.jpg?v-cache=1492250103" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Strawberry Delight</li>
                                <li class="price-meal">Rs. 1000.00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <a href="gift9.php"><img src="https://cdn.shopify.com/s/files/1/1385/6251/products/24_57_d4be531f-7870-4b36-8ac2-e51fa4e4a7d5_1024x.jpg?v=1571604503" width="280" height="280" class="new-class"></a>
                        </div>
                        <div>
                            <ul>
                                <li class="text">Cake-sicle</li>
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