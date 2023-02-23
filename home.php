<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <section class="header">

        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">Home </a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars">
        </div>

    </section>

    <!-- header section end here -->


    <!-- home section starts here -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide  slide" style="background: url(img/home-slider-1.jpg) no-repeat;">
                    <div class="content">
                        <span>explore ,discover, travel</span>
                        <h3> travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(img/home-slider-2.jpg) no-repeat ;">
                    <div class="content">
                        <span>explore ,discover, travel</span>
                        <h3>discover the new place</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(img/home-slider-3.jpg) no-repeat ;">
                    <div class="content">
                        <span>explore ,discover, travel</span>
                        <h3>make your travel worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- home section ends from here -->

    <!-- service section starts here -->

    <section class="services">
        <h1 class="heading-title"> Our Services</h1>

        <div class="box-container">

            <div class="box">
                <img src="img/icon-1.jpg" alt="">
                <h3>adventure</h3>

            </div>

            <div class="box">
                <img src="img/icon-2.jpg" alt="">
                <h3>tour guide</h3>

            </div>

            <div class="box">
                <img src="img/icon-3.jpg" alt="">
                <h3>trekking</h3>

            </div>

            <div class="box">
                <img src="img/icon-4.jpg" alt="">
                <h3>camp fire</h3>

            </div>

            <div class="box">
                <img src="img/icon-5.jpg" alt="">
                <h3>off road</h3>

            </div>

            <div class="box">
                <img src="img/icon-6.jpg" alt="">
                <h3>camping</h3>

            </div>


        </div>
    </section>

    <!-- service section ends here -->

    <!-- home about section starts here-->

    <section class="home-about">

    <div class="image">
    <img src="img/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, a nobis optio et temporibus asperiores nam sit praesentium voluptas voluptatibus eaque perspiciatis delectus repudiandae nostrum commodi pariatur adipisci eos numquam.</p>

        <a href="about.php" class="btn">read more</a>
    </div>

    </section>

    <!-- home about section starts ends here -->


























    <!-- footer section start here  -->

    <section class="footer">
        <!-- <img src="img/footer-img1.jpg" alt=""> -->
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"> </i> Home </a>
                <a href="about.php"> <i class="fas fa-angle-right"> </i> About</a>
                <a href="package.php"> <i class="fas fa-angle-right"> </i> Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"> </i> Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"> </i> Ask question </a>
                <a href="#"> <i class="fas fa-angle-right"> </i> faq</a>
                <a href="#"> <i class="fas fa-angle-right"> </i> about us </a>
                <a href="#"> <i class="fas fa-angle-right"> </i> privacy policy </a>
                <a href="#"> <i class="fas fa-angle-right"> </i> terms of use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"> </i> +977-9863379537 </a>
                <a href="#"> <i class="fas fa-envelope"> </i>ashishdhakal433@gmail.com</a>
                <a href="#"> <i class="fas fa-location-dot"> </i> Pokhara Chhorepatan-17 </a>
            </div>



            <div class="box">
                <h3> Follow us</h3>
                <a href="#"> <i class="fab fa-facebook"> </i> facebook</a>
                <a href="#"> <i class="fab fa-instagram"> </i>instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
            </div>

        </div>
        <div class="credit"> Created by <span>Ashish Dhakal</span> | All rights reserved!</div>

    </section>



    <!-- footer section end here -->

    <!-- swiper script link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom script file link -->
    <script src="script.js"></script>
</body>

</html>