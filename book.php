<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

    <style>
        .heading {

            background: url(./img/header-bg-3.jpg) no-repeat;
        }
    </style>

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

    <div class="heading">
        <h1>Book now</h1>
    </div>

    <!-- booking section starts -->

    <section class="booking">

        <h1 class="heading-title"> book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span> name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span> email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>

                <div class="inputBox">
                    <span> phone :</span>
                    <input type="number" placeholder="enter your phone number" name="phone">
                </div>

                <div class="inputBox">
                    <span> address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>

                <div class="inputBox">
                    <span> where to :</span>
                    <input type="text" placeholder="place you want to visite" name="location">
                </div>

                <div class="inputBox">
                    <span> how many:</span>
                    <input type="text" placeholder="how many guest" name="guests">
                </div>

                <div class="inputBox">
                    <span> arrival :</span>
                    <input type="date" name="arrival">
                </div>

                <div class="inputBox">
                    <span> leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" name="send" value="submit" class="btn">

        </form>

    </section>

    <!-- booking section ends -->
























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