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
                    <li><a href="#" class="list-link act">Home</a></li>
                    <li><a href="./about.php" class="list-link">About</a></li>
                    <li><a href="./categories.php" class="list-link">Categories</a></li>
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
            <div class="hero">
                <img src="./shoes/ts1670916943000/mary.jpg" alt="">
                <div class="txt_hero">
                    <div class="header_hero">
                        <small>FOCUS FASHION STORE</small>
                        <h1>GET THE BEST AND AFFORDABLE PRODUCTS ON "FOCUS STORE" TODAY.</h1>
                    </div>
                    <p>
                        <b> FOCUS STORE </b>offers large variety of both <b> men</b>, <b> women</b> and <b> kids</b> clothing, shoes, Ankara cloth's and Technology gadget.
                    </p>
                    <a href="./categories.php">Shop Now</a>
                </div>
            </div>





        </header>
        <!-- main -->
        <main>
            <!-- categories preview in home page-->

            <section id="category-preview">
                <div class="cate_call">
                    <h1>CATEGORIES</h1><span></span>
                </div>
                <div class="categories-sec">
                    <div class="cate_img_txt">
                        <img src="./shoes/ts1670916943000/together.jpg" style="object-fit: cover;" alt="">
                        <div class="cate_txt">
                            <p>Cloth</p>
                            <small>50 products</small>
                        </div>
                    </div>
                    <div class="cate_img_txt">
                        <img src="./shoes/ts/cat-2.jpg" alt="">
                        <div class="cate_txt">
                            <p>camera</p>
                            <small>20 products</small>
                        </div>
                    </div>
                    <div class="cate_img_txt">
                        <img src="./shoes/ts1670916943000/pexels-ray-piedra-1464625.jpg" alt="">

                        <div class="cate_txt">
                            <p>Shoe</p>
                            <small>25 products</small>
                        </div>
                    </div>


                    <div class="cate_img_txt">
                        <img src="./shoes/ts1670916943000/pexels-zain-ali-1027130.jpg" alt="">
                        <div class="cate_txt">
                            <p>Shoe</p>
                            <small>25 products</small>
                        </div>
                    </div>
                    <div class="cate_img_txt">
                        <img src="./shoes/ts1670916943000/vicki.jpg" style="object-fit: cover;" alt="">
                        <div class="cate_txt">
                            <p>Cloth</p>
                            <small>50 products</small>
                        </div>
                    </div>
                    <div class="cate_img_txt">
                        <img src="./shoes/ts/product-1.jpg" alt="">
                        <div class="cate_txt">
                            <p>camera</p>
                            <small>20 products</small>
                        </div>
                    </div>
                    <div class="cate_img_txt">
                        <img src="./shoes/ts1670916943000/mercy.jpg" style="object-fit: cover;" alt="">
                        <div class="cate_txt">
                            <p>Cloth</p>
                            <small>50 products</small>
                        </div>
                    </div>


                </div>
                <a href="./categories.php">View Categories</a>
            </section>
            <!-- products preview in home page-->
            <section id="product-preview">
                <h1><span style="color: orangered;">BROWSE</span> PRODUCT</h1>
                <div class="shoes">

                    <div class="a">
                        <img src="./shoes/ts1670916943000/pexels-sound-on-3756879.jpg" alt="">
                        <div class="abs">
                            <p>Smart Phone</p>
                            <a href="./categories.php" style="text-align: center;">Preview</a>

                        </div>
                    </div>
                    <div class="b">
                        <img src="./shoes/ts1670916943000/pexels-donald-tong-66134.jpg" alt="">
                        <div class="abs">
                            <p>video camera</p>
                            <a href="./categories.php" style="text-align: center;">Preview</a>

                        </div>
                    </div>
                    <div class="c">
                        <img src="./shoes/ts1670916943000/kemsi.jpg" alt="">
                        <div class="abs">
                            <p>Cloth </p>
                            <a href="./categories.php" style="text-align: center;">Preview</a>

                        </div>
                    </div>
                    <div class="d">
                        <img src="./shoes/ts1670916943000/pexels-pixabay-267394.jpg" alt="">
                        <div class="abs">
                            <p>Phone Watch</p>
                            <a href="./categories.php" style="text-align: center;">Preview</a>

                        </div>
                    </div>
                </div>
                <a href="./categories.php">View product</a>

            </section>

            <!-- trending product -->

            <section id="trends">
                <h1>Trending products</h1>
                <small>Our most trending products on <b>FOCUS STORES</b> today.</small>
                <div class="trend-holder">
                    <div class="trend-box">
                        <img src="./shoes/ts1670916943000/pexels-designecologist-1779487.jpg" alt="">
                        <div class="trend-txt">
                            <h3>Computer Desktop <sup>Tech Gadget</sup></h3>
                            <p>#15,000 <del>#50,000</del> 30% off</p>
                            <a href="#">Add to cart</a>

                        </div>
                    </div>
                    <div class="trend-box">
                        <img src="./shoes/ts1670916943000/pexels-xxss-is-back-777001.jpg" alt="">
                        <div class="trend-txt">
                            <h3> Two-Screen Computer Desktop <sup>Tech Gadget</sup></h3>
                            <p>#15,000 <del>#50,000</del> 30% off</p>
                            <a href="#">Add to cart</a>

                        </div>
                    </div>
                    <div class="trend-box">
                        <img src="./shoes/ts1670916943000/pexels-ylanite-koppens-934070.jpg" alt="">
                        <div class="trend-txt">
                            <h3>sweat cloth <sup>Fashion Wear</sup></h3>
                            <p>#15,000 <del>#50,000</del> 30% off</p>
                            <a href="#">Add to cart</a>

                        </div>
                    </div>

                </div>
                <a href="./categories.php"> load more...</a>
            </section>
        </main>
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
                    <a style="cursor: pointer;" onclick='document.getElementById("registration").classList.add("act"); document.getElementById("login").classList.remove("art")'>Sign in</a>
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
        <a href="#header" class="hed" title="Back To Top">

            <img src="./icons/Group 3.svg" alt="" class="abs">
        </a>

    </div>

    <script src="./js/jq/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./sever/server.js"></script>
    <script src="./php/script.js"></script>
    <script src="./js/bac.js"></script>
</body>

</html>