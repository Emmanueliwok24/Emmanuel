<?php

session_start();
if (!isset($_SESSION['user'])) {
    header('location: ./index.php');
} else {
}
?>


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
            <!-- link list -->
            <ul>
                <li><a href="./index.php" class="list-link ">Home</a></li>
                <li><a href="./about.php" class="list-link">About</a></li>
                <li><a href="./categories.php" class="list-link">Categories</a></li>
                <li><a href="./contact.php" class="list-link">Contact</a></li>
                <li><a href="./contact.php" class="list-link act"><img src="./icons/Shopping Cart icon.svg" width="25px" alt=''></a></li>


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



    </header>

    <main>
        <section id="cart-page">
            <div class="cart-tags">

                <div class="cart-tags-head">
                    <p>product</p>
                    <p>price</p>
                    <p>Quantity</p>
                    <p>Total</p>
                </div>
                <div class="cart-tag-list">
                    <div class="list">
                        <a href="#">

                            <img src="./icons/Waste icon.svg" alt="">
                        </a>
                        <div class="list-img">
                            <img src="./shoes/ts1670916943000/pexels-eduardo-rosas-968631.jpg" alt="">
                        </div>
                        <p>#<span class="price">90000</span></p>
                        <span><span class="minus">-</span>
                            <div class="num">1</div><span class="plus">+</span>
                        </span>
                        <p class="total">#90000</p>
                    </div>
                    <div class="list">
                        <a href="#">

                            <img src="./icons/Waste icon.svg" alt="">
                        </a>
                        <div class="list-img">
                            <img src="./shoes/ts1670916943000/pexels-luis-quintero-1787235.jpg" alt="">
                        </div>
                        <p>#<span class="price">125000</span></p>
                        <span><span class="minus">-</span>
                            <div class="num">1</div><span class="plus">+</span>
                        </span>
                        <p class="total">#125000</p>
                    </div>
                    <div class="list">
                        <a href="#">

                            <img src="./icons/Waste icon.svg" alt="">
                        </a>
                        <div class="list-img">
                            <img src="./shoes/ts1670916943000/pexels-terje-sollie-298863.jpg" alt="">
                        </div>
                        <p>#<span class="price">35000</span></p>
                        <span><span class="minus">-</span>
                            <div class="num">1</div><span class="plus">+</span>
                        </span>
                        <p class="total">#35000</p>
                    </div>
                    <div class="list">
                        <a href="#">

                            <img src="./icons/Waste icon.svg" alt="">
                        </a>
                        <div class="list-img">
                            <img src="./shoes/ts1670916943000/pexels-pixabay-267394.jpg" alt="">
                        </div>
                        <p>#<span class="price">18000</span></p>
                        <span><span class="minus">-</span>
                            <div class="num">1</div><span class="plus">+</span>
                        </span>
                        <p class="total">#18000</p>
                    </div>



                </div>
            </div>
            <div class="sub-total-cart">
                <div class="sub_txt">
                    subtotal <span id="sum">#268,000</span>
                </div>
                <div class="sub_txt">
                    shipping fee <span>#5,000</span>
                </div>
                <div class="sub_txt">
                    Total <span>#273,000</span>
                </div>
                <a href="#">Proceed to Checkout</a>
            </div>
        </section>
    </main>

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