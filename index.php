<?php
session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="resources/css/Style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,100;1,300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <script src="jquery-2.1.4.js"></script>
        <script src="https://kit.fontawesome.com/78c70fd6da.js" crossorigin="anonymous"></script>
        <title>Cr&#232me P&#226tissi&#232re</title>
    </head>
    <body>
        <header>
            <div class="row">
                <ul class="main-nav">
                    <li><a href="Cake.php">Cakes</a></li>
                    <li><a href="chocolate.php">Chocolates</a></li>
                    <li><a href="gift.php">Gifts</a></li>
                    <li><a href="recipe.html">Recipes</a></li>
                </ul>
            </div>
            <h2 class="header1">Cr&#232me P&#226tissi&#232re</h2>
            <div class="hero-text-box">
                <h3 class="first">Signature Cakes</h3>
                <h3 class="second">delivered all across</h3>
                <h3 class="third">&nbsp&nbsp&nbspBangalore,</h3>
                <h3 class="fourth">Delhi and Mumbai</h3>
                <a class="btn btn-full" href="Cake.php">ORDER NOW</a>
            </div>
            <div class="login">
                <p class="php-text" style="font-size: 20px; color: white; position:absolute;left:5%;top:5%">Hello, <?php echo $user_data['user_name'];?></p>
                <a href="logout.php" class="logout" style="position: absolute; color: #ffd475; text-decoration: none; left:5%; top:10%;">Logout</a>
            </div>
            
            <div class="search-box">
                <input type="text" class="input" name="" placeholder="Type to Search">
                <div class="search-btn">
                    <i class="fab fa-searchengin"></i>
                </div>
            </div>
        </header>
        <section class="section-features">
            <div class="row">
                <div class="col span-1-of-2">
                    <img src="https://www.thekitchenmccabe.com/wp-content/uploads/2019/05/Angel-Food-Cake-13-1-of-1-768x1152.jpg" alt="This is a cake" width="600" height="750" class="image">
                </div>
                <div class="col span-1-of-2">
                    <div class="align">
                        <h2>NOT JUST</h2>
                        <h1>GET-TOGETHER.</h1>
                        <h6>When the celebration is true, even a small get-together<br>turns into a memorable event. Celebrate every such moment<br>with a range of irresistible cakes and more. </h6>
                        <a class="new btn" href="Cake.php">ORDER NOW</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-features-second">
            <div class="row">
                <div class="col span-1-of-2">
                    <div class="align1">
                        <h2>NOT JUST</h2>
                        <h1>CHOCOLATES.</h1>
                        <h6>Not just any chocolates but true couverture chocolates. Not just any ingredients but rich, honest ingredients. Not just any range but a range crafted to perfection.Not just any packaging but something wrapped beyond the ordinary. Cr&#232me P&#226tissi&#232re Chocolates - a brand that swears by true couverture premium chocolates and offers a luxurious, healthy and delectable experience.</h6>
                        <a class="new1 btn" href="chocolate.php">ORDER NOW</a>
                    </div>
                </div>
                <div class="col span-1-of-2">
                    <img src="https://cdn.shopify.com/s/files/1/0319/1449/2041/files/33.jpg?v=1596633627" alt="this is a chocolate" width="600" height="650" class="image1">
                </div>
            </div>
        </section>
        <section class="gifts-section">
            <div class="row">
                <div class="col span-1-of-2">
                    <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1547751827-screen-shot-2019-01-17-at-2-14-36-pm-1547751820.png?crop=0.681xw:1.00xh;0.114xw,0&resize=480:*" class="image2">
                </div>
                <div class="col span-1-of-2">
                    <div class="align3">
                        <h2>NOT JUST</h2>
                        <h1>A GIFT.</h1>
                        <h6>When the feelings are true, even a gift turns into a delightful surprise. Celebrate every such moment with a range of true couverture chocolates, cakes, delicacies and more.</h6>
                        <a class="new2 btn1" href="gift.php">ORDER NOW</a>
                    </div>    
                </div>
            </div>
        </section>
        <section class="section-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="https://www.thekitchenmccabe.com/wp-content/uploads/2019/05/Angel-Food-Cake-20-1-of-1-768x1152.jpg" width="200" height="200">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_683/https://loveisinmytummy.com/wp-content/uploads/2012/09/Brownie-Main-1.1.jpg" width="200" height="200">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="https://www.onesarcasticbaker.com/wp-content/uploads/2019/09/Chocolate-cake-5.jpg" width="200" height="200">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="https://cdn.sallysbakingaddiction.com/wp-content/uploads/2017/06/moist-chocolate-cupcakes-5.jpg" width="200" height="200">
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="https://www.foodfaithfitness.com/wp-content/uploads/2017/01/peanut-butter-chocolate-lava-cake-photograph-768x1152.jpg" width="200" height="200">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="https://i2.wp.com/www.camerastupid.com/wp-content/uploads/2014/06/Screen-Shot-2014-06-03-at-10.54.02-AM.png?fit=571%2C854" width="200" height="230">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_683/https://loveisinmytummy.com/wp-content/uploads/2012/09/Brownie-Main-3.1.jpg" width="200" height="600">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="https://www.foodfaithfitness.com/wp-content/uploads/2017/01/making-peanut-butter-chocolate-lava-cake-pic-768x1152.jpg" width="200" height="200">
                    </figure>
                </li>
            </ul>
        </section>
        <section class="section-form" style="position:relative">
            <div class="form-box" id="form">
                    <div class="row">
                        <h1 style="padding:100px;">We're happy to hear from you</h1>
                    </div>
                    <div class="row">
                        <form method="post" class="contact-form" action="mailer.php">
                            <div class="row">
                                 <?php
                                 if(isset($_GET['success']) && $_GET['success'] == 1)
                                 {
                                         echo "<div class=\"success\" style=\"position:absolute;left:43%;color:#fff;top:30%;margin-top:25px;\">Thank you! Your message has been sent.</div>";
                                        
                                 }
                                 if(isset($_GET['success']) && $_GET['success'] == -1)
                                 {
                                         echo "<div class=\"error\" style=\"position:absolute;left:42%;color:#fff;top:35%;margin-top:25px;\">Oops! Something went wrong. Please try again.</div>";                                                                                      
                                 }
                                 ?>       
                            </div>
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