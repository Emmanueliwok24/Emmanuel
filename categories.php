<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOCUS</title>
    <link rel="shortcut icon" href="./icons/Group 44.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/hamburgers.css">
    <link rel="stylesheet" href="./css/hamburgers.min.css">
</head>

<body>

<div class="container_every">


    <!-- preloader -->
    <div class="preloader">
        <div></div>
        <p>In progress...</p>
    </div>
    <!-- preloader end -->
    <header id="header">
        <nav>
            <a href="./index.php"><img src="./icons/Group 2.svg" alt=""></a>
            <ul>
                <li><a href="./index.php" class="list-link ">Home</a></li>
                <li><a href="./about.php" class="list-link">About</a></li>
                <li><a href="#" class="list-link act">Categories</a></li>
                <li><a href="./contact.php" class="list-link">Contact</a></li>
                <?php
                session_start();

                if (!isset($_SESSION['user'])) {
                    echo "
                            <li onclick='document.getElementById(\"login\").classList.add(\"art\")'><a class=\"tog\">login</a></li>
                            <li onclick='document.getElementById(\"registration\").classList.add(\"act\")'><a class=\"tog\">Register</a></li>

                            ";
                } else {
                    echo "
                    <a href=\"./cart.php\">
                    <img src=\"./icons/Shopping Cart icon.svg\" width=\"25px\" alt=''>
                   
                    </a>
                        ";
                }
                ?>

            </ul>

            <div class="search_img">
                <form action="">

                    <input type="text" list="category" placeholder="search for Category...">
                    <label for="pro">

                        <datalist id="category">
                            <option value="Tech Gadget"></option>
                            <option value="Fashion Wears"></option>
                        </datalist>

                        <a href="./categories.php">

                            <img src="./search-svgrepo-com.svg" alt="" style="cursor: pointer;">
                        </a>
                    </label>
                    <input type="submit" style="display: none;" id="pro">
                </form>
            </div>

            <div class="toggle">
                <div class="hamburger hamburger--emphatic">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <!-- main -->
    <main>
        <section id="cate-product">
            <div class="category">

                <h1>Categories</h1>
                <button class="accordion">Tech Gadget</button>
                <ul class="panel">

                    <li><a href="#">Desktop Computer</a></li>
                    <li><a href="#">Laptop Computer</a></li>
                    <li><a href="#">Phones</a></li>
                    <li><a href="#">camera</a></li>
                    <li><a href="#">Phone Watch</a></li>
                    <li><a href="#">video camera</a></li>
                    <li><a href="#">Drone</a></li>

                </ul>
                <button class="accordion">Fashion Wears</button>
                <ul class="panel">

                    <li><a href="#">Shoe</a></li>
                    <li><a href="#">perfume</a></li>
                    <li><a href="#">jacket</a></li>
                    <li><a href="#">Ankara Dress</a></li>
                    <li><a href="#">Bag</a></li>
                    <li><a href="#">Cloths</a></li>


                </ul>





            </div>
            <div class="product">
                <h1>Product</h1>

                <div class="cate_img_txt">
                    <div class="cate_txt">
                        <img src="./shoes/ts1670916943000/pexels-eduardo-rosas-968631.jpg" alt="">
                        <p>18% off</p>
                        <div class="pro_duct_txt">
                            <h3>
                                laptop <sup>Tech Gadget</sup>
                            </h3>
                            <p>#90,000 <del>#145,000</del></p>
                        </div>
                        <a href="#">Add to cart</a>
                    </div>
                    <div class="cate_txt">
                        <img src="./shoes/image-product-1.jpg" alt="">
                        <p>45% off</p>
                        <div class="pro_duct_txt">
                            <h3>
                                Nike-Wear <sup>Fashion Wear</sup>
                            </h3>
                            <p>#45,000 <del>#80,000</del></p>
                        </div>
                        <a href="#">Add to cart</a>
                    </div>
                    <div class="cate_txt">
                        <img src="./shoes/ts1670916943000/pexels-alexandra-maria-318236.jpg" alt="">
                        <p>23% off</p>
                        <div class="pro_duct_txt">
                            <h3>
                                Hills <sup>Fashion wear</sup>
                            </h3>
                            <p>#240,000 <del>#350,000</del></p>
                        </div>
                        <a href="#">Add to cart</a>
                    </div>
                    <div class="cate_txt">
                        <img src="./shoes/ts1670916943000/pexels-andrea-piacquadio-842811.jpg" alt="">
                        <p>20% off</p>
                        <div class="pro_duct_txt">
                            <h3>
                                Jacket <sup>fashion wear</sup>
                            </h3>
                            <p>#35,000 <del>#55,000</del></p>
                        </div>
                        <a href="#">Add to cart</a>
                    </div>
                    <div class="cate_txt">
                        <img src="./shoes/ts1670916943000/pexels-andrew-neel-3178818.jpg" alt="">
                        <p>48% off</p>
                        <div class="pro_duct_txt">
                            <h3>
                                Laptop <sup>Tech Gadget</sup>
                            </h3>
                            <p>#280,000 <del>#405,000</del></p>
                        </div>
                        <a href="#">Add to cart</a>
                    </div>
                    <div class="cate_txt">
                        <img src="./shoes/ts1670916943000/mary.jpg" alt="">
                        <p>50% off</p>
                        <div class="pro_duct_txt">
                            <h3>
                                Ankara-Dress <sup>Fashion Wear</sup>
                            </h3>
                            <p>#15,000 <del>#30,000</del></p>
                        </div>
                        <a href="#">Add to cart</a>
                    </div>
                    <div class="cate_txt">
                        <img src="./shoes/ts1670916943000/pexels-luis-quintero-1787235.jpg" alt="">
                        <p>58% off</p>
                        <div class="pro_duct_txt">
                            <h3>
                                Camera <sup>Tech Gadget</sup>
                            </h3>
                            <p>#125,000 <del>#355,000</del></p>
                        </div>
                        <a href="#">Add to cart</a>
                    </div>

                    <div class="cate_txt">
                        <img src="./shoes/ts1670916943000/pexels-fox-1038916.jpg" alt="">
                        <p>45% off</p>
                        <div class="pro_duct_txt">
                            <h3>
                                Two-screen Desktop computer<sup>Tech Gadget</sup>
                            </h3>
                            <p>#380,000 <del>#570,000</del></p>
                        </div>
                        <a href="#">Add to cart</a>
                    </div>
                    <div class="cate_txt">
                        <img src="./shoes/ts1670916943000/pexels-terje-sollie-298863.jpg" alt="">
                        <p>15% off</p>
                        <div class="pro_duct_txt">
                            <h3>
                                Cover Shoe with T-shirt <sup>Fashion Wear</sup>
                            </h3>
                            <p>#35,000 <del>#45,000</del></p>
                        </div>
                        <a href="#">Add to cart</a>
                    </div>


                </div>

                <div class="next-pages">
                    <a href="./categories.php" class="page-on">1</a>
                    <a href="./categories.php">2</a>
                    <a href="./categories.php">3</a>
                    <a href="./categories.php"> >>></a>
                </div>
            </div>


        </section>
    </main>

    <a href="#header" class="hed" title="Back To Top">

        <img src="./icons/Group 3.svg" alt="" class="abs">
    </a>

    <!-- Registration -->
    <section id="registration">

        <form action="">
            <h1>Sign Up</h1>
            <img src="./icons/Delete icon.svg" alt="" onclick='document.getElementById("registration").classList.remove("act")' class="delete" style="cursor: pointer;">
            <div class="reg-form-con">

                <div class="reg_form">
                    <img src="./icons/User icon.svg" alt="">
                    <input type="text" placeholder="Fullname" id="fullnamme">
                </div>
                <div class="reg_form">
                    <img src="./icons/Secured Letter icon.svg" alt="">
                    <input type="email" placeholder="email" id="emailaddress">
                </div>
                <div class="reg_form">
                    <img src="./icons/Phone icon.svg" alt="">
                    <input type="number" placeholder="phone number" id="phonenumber">
                </div>
                <div class="reg_form">
                    <img src="./icons/Eye icon.svg" alt="">
                    <input type="password" placeholder="*****" id="password">
                </div>


            </div>


            <input type="submit" id="signup-submit" value="sign up">

            <div class="est">
                <img src="./icons/User icon 2.svg" alt="">
                <small>Already have an account ?</small>
                <a style="cursor: pointer;" onclick='document.getElementById("login").classList.add("art"); document.getElementById("registration").classList.remove("act")'>LOG-IN</a>
            </div>

        </form>
    </section>
    <!-- login -->
    <section id="login">

        <form action="./php/server.php" method="post" id="login-form">
            <h1>Log-In</h1>
            <img src="./icons/Delete icon.svg" alt="" onclick='document.getElementById("login").classList.remove("art")' class="delete" style="cursor: pointer;">
            <div class="reg-form-con">

                <div class="reg_form">
                    <img src="./icons/Secured Letter icon.svg" alt="">
                    <input type="email" placeholder="email" id="email" name="email">
                </div>


                <div class="reg_form">
                    <img src="./icons/Eye icon.svg" alt="">
                    <input type="password" placeholder="*****" id="password" name="password">
                </div>


            </div>


            <input type="submit" value="Sign in" id="signinx">

            <div class="est">
                <img src="./icons/User icon 2.svg" alt="">
                <small>You do not have an account ?</small>
                <a style="cursor: pointer;" onclick='document.getElementById("registration").classList.add("act");document.getElementById("login").classList.remove("art")'>Sign in</a>
            </div>
            <div class="forget-pass">
                <span>Forgotten Password? <a href="#">Click Here</a></span>
            </div>
        </form>
    </section>

    <!-- footer -->
    <footer>
        <div class="footer_grid">
            <div class="foot_grid">

                <h2><a href="#">(+234) 901 996 2712</a></h2>
                <div class="ig"><a href="#"><img src="./icons/location.png" alt="">765,Pelewura cresent, Apapa, Lagos</a>
                </div>
                <div class="ig"><a href="#"><img src="./icons/Instagram icon.png" alt="">@iwokemmanuel24</a>
                </div>
                <ul>

                    <li><a href="#"><img src="./icons/Facebook icon.png" alt=""></a></li>
                    <li><a href="#"><img src="./icons/linkned.png" alt=""></a></li>
                    <li><a href="#"><img src="./icons/Twitter icon.png" alt=""></a></li>
                    <li><a href="#"><img src="./icons/Whatsapp icon.png" alt=""></a></li>
                    <li><a href="#"><img src="./icons/Instagram icon.png" alt=""></a></li>
                </ul>
            </div>
            <div class="foot_grid">
                <h1>ACCOUNTS</h1>
                <div class="acct_list">

                    <a href="#">facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">linkend</a>
                    <a href="#">Instagram</a>
                    <a href="#">Gmail</a>
                    <a href="#">whatsApp</a>
                    <a href="#">paintress</a>
                </div>

            </div>
            <div class="foot_grid">
                <h3>Quick Links</h3>
                <ul class="links_ql">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./categories.php">Products</a></li>
                    <?php


                    if (!isset($_SESSION['user'])) {
                        echo "
                        <li  onclick='document.getElementById(\"login\").classList.add(\"art\")'><a class=\"tog\">Login</a></li>
                        
                        <li onclick='document.getElementById(\"registration\").classList.add(\"act\")'><a class=\"tog\">Register</a></li>
                        ";
                    } else {
                    }
                    ?>
                </ul>
            </div>
            <div class="foot_grid">
                <div class="sub">
                    <h2>Subscribe Newsletter</h2>
                    <p>Let's stay updated on the latest NEWS and OFFER.</p>

                </div>
                <form action="">
                    <input type="email" class="text" placeholder="Enter your email">
                    <input type="submit" value="subscribe">
                </form>
            </div>

        </div>

        <div class="res">
            <p>© 2023 FOCUS. ALL RIGHTS RESERVED</p>

            <?php


            if (!isset($_SESSION['user'])) {
            } else {
                echo "
                             
                             <a href=\"./logout.php\">Logout</a>
                             ";
            }
            ?>
        </div>
    </footer>


    </div>


    <script src="./js/jq/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./sever/server.js"></script>
    <script src="./js/may.js"></script>
    <script src="./php/script.js"></script>
    <script src="./js/bac.js"></script>
</body>

</html>