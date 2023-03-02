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





        <!-- header -->
        <header id="header">

            <!-- nav start -->

            <nav>
                <a href="./index.php"><img src="./icons/Group 2.svg" alt=""></a>
                <!-- link list -->
                <ul>
                    <li><a href="./index.php" class="list-link ">Home</a></li>
                    <li><a href="#" class="list-link act">About</a></li>
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
                <!-- nav list ends -->
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
            <!-- nav end -->

            <!-- about hero page start  -->
            <div class="hero abt">
                <img src="./shoes/ts1670916943000/josh.jpg" alt="">
                <div class="about_txt">
                    <h1>
                        ABOUT US
                    </h1>
                    <p> We aim at becoming the best online store by bringing quality and affordable products such as: <b>clothing</b> for <b>male</b> and <b>female</b>, <b>shoes</b>, <b>Tech devices</b> and <b>Cloths</b> to your doorstep. <br>We aimed to reach out to the world to reduce stress of marketing and at an affordable price rate.</br> </p>
                    <a href="./categories.php">Shop Now</a>
                </div>

            </div>
            <!-- about hero page end -->

        </header>

        <!-- header end -->

        <!-- about main start -->
        <main>
            <!-- about  main review -->
            <section id="about-review">
                <h1>CLIENTS <span>REVIEW</span> </h1>

                <div class="review_grid">
                    <div class="review">
                        <h3>Richard Ebuka</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quasi dolorum sapiente facere.</p>
                    </div>
                    <div class="review">
                        <h3>Okwor Peter</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quasi dolorum sapiente facere.</p>
                    </div>
                    <div class="review">
                        <h3>Ochepo Emmanuel</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quasi dolorum sapiente facere.</p>
                    </div>


                </div>
            </section>
            <!-- about  main review end -->


            <!-- about main comment area -->
            <?php
            if (!isset($_SESSION['user'])) {

                echo ' <div class="question">
       <div class="ques_txt">
       <h2>Want to become a client on FOCUS STORE?... </h2>
       <p>We provide you with the best and affordable product.</p>
       </div>


       <a style="cursor:pointer;" onclick="document.getElementById(\'registration\').classList.add(\'act\')">sign Up</a>

       </div> ';
            } else {
                echo '

        <section id="drop_comment">
            <div class="comment_area">

                <h2>Write a Review</h2>
                <p>
                   You can help us promote our site to the world with your review about what you are having in mind.

                </p>
            </div>
            <!-- about main comment area form -->

            <form action="">
                <div class="form_contain">
                    <input type="text" name="" id="" class="" placeholder="name...">
                </div>
                <div class="form_contain">
                    <input type="email" placeholder="email...">


                </div>
                <div class="form_contain">
                    <textarea name="" id="" placeholder="please, write your Review..." cols="30" rows="10"></textarea>

                </div>
                <div class="form_contain">

                    <input type="submit">
                </div>
            </form>

        </section>

        <!-- about main comment area end -->
        ';
            } ?>

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