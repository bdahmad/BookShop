<?php
include "init.php";
$pd = new productdetail();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E Store - eCommerce HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .alert {
            padding: 20px;
            
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 30px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
</head>

<body>

    <!-- Nav Bar Start -->
    <?php include 'php/headnav.php'; ?>
    <?php if(!empty($_GET['newArrival'])){
        echo 
        "<div class='alert bg-danger'>
            <span class='closebtn ' onclick='this.parentElement.style.display='none';'>&times;</span> 
            <strong class = 'h4'>Sorry!</strong> <span class = 'h5'>This feature will add soon....</span>
        </div>
    ";

    } ?>
    <form method="POST">

        <!-- Nav Bar End -->


        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="product-list.php?bestSell=1"><i class="fa fa-shopping-bag"></i>Best Selling</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?newArrival=1"><i class="fas fa-plane-arrival"></i>New Arrivals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="product-list.php?mostReview=1"><i class="fas fa-book-reader"></i>Most Reviewd</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="img/slider-1.jpg" alt="Slider Image" style="width: 900px; height: 500px;" />
                                <!-- NOTE Print any text on the slider -->
                                <!-- <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div> -->
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-2.jpg" alt="Slider Image" style="width: 900px; height: 500px;" />
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-3.jpg" alt="Slider Image" style="width: 900px; height: 500px;" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/category-1.jpg" />
                            </div>
                            <div class="img-item">
                                <img src="img/category-2.jpg" />
                            </div>
                            <div class="img-text">
                                <p style="font-size: 30px;">Happiness is when you can buy your favorite book from anywhere.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->

        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <h3>COVID-19 Shipping Alert! Customers in regions heavily impacted by COVID-19 may experience shipping .</h3>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Secure Payment</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Worldwide Delivery</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>90 Days Return</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->




        <!-- Featured Product Start -->
        <?php $pd->productDetails(2); ?>
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>MOST SOLD</h1>
                </div>

                <div class="row align-items-center product-slider product-slider-4">
                    <?php $pd->productDetails(2); ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title" style=" height: 100px;">
                                <a href='product-detail.php?bid=<?php echo $pd->getId(); ?>'>
                                    <?php echo $pd->getName(); ?>
                                </a>
                                <div class='ratting'>
                                    <span class='rateyo m-auto' data-rateyo-rating='<?php if (!empty($pd->productRating(2))) {
                                                                                        echo $pd->productRating(2);
                                                                                    } else {
                                                                                        echo 0;
                                                                                    } ?>' data-rateyo-read-only='true'>
                                    </span>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.php?bid=<?php echo $pd->getId(); ?>">
                                    <img src="assets/bookimg/<?php echo $pd->getImage(); ?>" style="height:400px; width:500px;">
                                </a>
                                <!-- <div class="product-action">
                                    <a href="product-list.php?bookid=2"><i class="fa fa-cart-plus"></i></a>
                                </div> -->
                            </div>
                            <div class="product-price">
                                <h3 class="text-white"><?php echo $pd->getPrice(); ?></h3>
                                <a class="btn" href='checkout.php?buyNow=2'><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php $pd->productDetails(5); ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title" style=" height: 100px;">
                            <a href='product-detail.php?bid=<?php echo $pd->getId(); ?>'>
                                    <?php echo $pd->getName(); ?>
                                </a>
                                <div class='ratting'>
                                    <span class='rateyo m-auto' data-rateyo-rating='<?php if (!empty($pd->productRating(5))) {
                                                                                        echo $pd->productRating(5);
                                                                                    } else {
                                                                                        echo 0;
                                                                                    } ?>' data-rateyo-read-only='true'>
                                    </span>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.php?bid=<?php echo $pd->getId(); ?>">
                                    <img src="assets/bookimg/<?php echo $pd->getImage(); ?>" style="height:400px; width:500px;">
                                </a>
                                <!-- <div class="product-action">
                                    <a href="product-list.php?bookid=5"><i class="fa fa-cart-plus"></i></a>
                                </div> -->
                            </div>
                            <div class="product-price">
                                <h3 class="text-white"><?php echo $pd->getPrice(); ?></h3>
                                <a class="btn" href='checkout.php?buyNow=5'><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php $pd->productDetails(9); ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title" style=" height: 100px;">
                            <a href='product-detail.php?bid=<?php echo $pd->getId(); ?>'>
                                    <?php echo $pd->getName(); ?>
                                </a>
                                <div class='ratting'>
                                    <span class='rateyo m-auto' data-rateyo-rating='<?php if (!empty($pd->productRating(9))) {
                                                                                        echo $pd->productRating(9);
                                                                                    } else {
                                                                                        echo 0;
                                                                                    } ?>' data-rateyo-read-only='true'>
                                    </span>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.php?bid=<?php echo $pd->getId(); ?>">
                                    <img src="assets/bookimg/<?php echo $pd->getImage(); ?>" style="height:400px; width:500px;">
                                </a>
                                <!-- <div class="product-action">
                                    <a href="product-list.php?bookid=9"><i class="fa fa-cart-plus"></i></a>
                                </div> -->
                            </div>
                            <div class="product-price">
                                <h3 class="text-white"><?php echo $pd->getPrice(); ?></h3>
                                <a class="btn" href='checkout.php?buyNow=9'><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php $pd->productDetails(44); ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title" style=" height: 100px;">
                            <a href='product-detail.php?bid=<?php echo $pd->getId(); ?>'>
                                    <?php echo $pd->getName(); ?>
                                </a>
                                <div class='ratting'>
                                    <span class='rateyo m-auto' data-rateyo-rating='<?php if (!empty($pd->productRating(44))) {
                                                                                        echo $pd->productRating(44);
                                                                                    } else {
                                                                                        echo 0;
                                                                                    } ?>' data-rateyo-read-only='true'>
                                    </span>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.php?bid=<?php echo $pd->getId(); ?>">
                                    <img src="assets/bookimg/<?php echo $pd->getImage(); ?>" style="height:400px; width:500px;">
                                </a>
                                <!-- <div class="product-action">
                                    <a href="product-list.php?bookid=44"><i class="fa fa-cart-plus"></i></a>
                                </div> -->
                            </div>
                            <div class="product-price">
                                <h3 class="text-white"><?php echo $pd->getPrice(); ?></h3>
                                <a class="btn" href='checkout.php?buyNow=44'><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php $pd->productDetails(42); ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title" style=" height: 100px;">
                            <a href='product-detail.php?bid=<?php echo $pd->getId(); ?>'>
                                    <?php echo $pd->getName(); ?>
                                </a>
                                <div class='ratting'>
                                    <span class='rateyo m-auto' data-rateyo-rating='<?php if (!empty($pd->productRating(42))) {
                                                                                        echo $pd->productRating(80);
                                                                                    } else {
                                                                                        echo 0;
                                                                                    } ?>' data-rateyo-read-only='true'>
                                    </span>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.php?bid=<?php echo $pd->getId(); ?>">
                                    <img src="assets/bookimg/<?php echo $pd->getImage(); ?>" style="height:400px; width:500px;">
                                </a>
                                <!-- <div class="product-action">
                                    <a href="product-list.php?bookid=42"><i class="fa fa-cart-plus"></i></a>
                                </div> -->
                            </div>
                            <div class="product-price">
                                <h3 class="text-white"><?php echo $pd->getPrice(); ?></h3>
                                <a class="btn" href='checkout.php?buyNow=42'><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Product End -->

        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Recent Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <?php $pd->productDetails(80); ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title" style=" height: 100px;">
                            <a href='product-detail.php?bid=<?php echo $pd->getId(); ?>'>
                                    <?php echo $pd->getName(); ?>
                                </a>
                                <div class='ratting'>
                                    <span class='rateyo m-auto' data-rateyo-rating='<?php if (!empty($pd->productRating(80))) {
                                                                                        echo $pd->productRating(80);
                                                                                    } else {
                                                                                        echo 0;
                                                                                    } ?>' data-rateyo-read-only='true'>
                                    </span>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.php?bid=<?php echo $pd->getId(); ?>">
                                    <img src="assets/bookimg/<?php echo $pd->getImage(); ?>" style="height:400px; width:500px;">
                                </a>
                                <!-- <div class="product-action">
                                    <a href="product-list.php?bookid=80"><i class="fa fa-cart-plus"></i></a>
                                </div> -->
                            </div>
                            <div class="product-price">
                                <h3 class="text-white"><?php echo $pd->getPrice(); ?></h3>
                                <a class="btn" href='checkout.php?buyNow=80'><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php $pd->productDetails(88); ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title" style=" height: 100px;">
                            <a href='product-detail.php?bid=<?php echo $pd->getId(); ?>'>
                                    <?php echo $pd->getName(); ?>
                                </a>
                                <div class='ratting'>
                                    <span class='rateyo m-auto' data-rateyo-rating='<?php if (!empty($pd->productRating(88))) {
                                                                                        echo $pd->productRating(88);
                                                                                    } else {
                                                                                        echo 0;
                                                                                    } ?>' data-rateyo-read-only='true'>
                                    </span>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.php?bid=<?php echo $pd->getId(); ?>">
                                    <img src="assets/bookimg/<?php echo $pd->getImage(); ?>" style="height:400px; width:500px;">
                                </a>
                                <!-- <div class="product-action">
                                    <a href="product-list.php?bookid=88"><i class="fa fa-cart-plus"></i></a>
                                </div> -->
                            </div>
                            <div class="product-price">
                                <h3 class="text-white"><?php echo $pd->getPrice(); ?></h3>
                                <a class="btn" href='checkout.php?buyNow=88'><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php $pd->productDetails(90); ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title" style=" height: 100px;">
                            <a href='product-detail.php?bid=<?php echo $pd->getId(); ?>'>
                                    <?php echo $pd->getName(); ?>
                                </a>
                                <div class='ratting'>
                                    <span class='rateyo m-auto' data-rateyo-rating='<?php if (!empty($pd->productRating(90))) {
                                                                                        echo $pd->productRating(90);
                                                                                    } else {
                                                                                        echo 0;
                                                                                    } ?>' data-rateyo-read-only='true'>
                                    </span>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.php?bid=<?php echo $pd->getId(); ?>">
                                    <img src="assets/bookimg/<?php echo $pd->getImage(); ?>" style="height:400px; width:500px;">
                                </a>
                                <!-- <div class="product-action">
                                    <a href="product-list.php?bookid=90"><i class="fa fa-cart-plus"></i></a>
                                </div> -->
                            </div>
                            <div class="product-price">
                                <h3 class="text-white"><?php echo $pd->getPrice(); ?></h3>
                                <a class="btn" href='checkout.php?buyNow=90'><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php $pd->productDetails(50); ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title" style=" height: 100px;">
                            <a href='product-detail.php?bid=<?php echo $pd->getId(); ?>'>
                                    <?php echo $pd->getName(); ?>
                                </a>
                                <div class='ratting'>
                                    <span class='rateyo m-auto' data-rateyo-rating='<?php if (!empty($pd->productRating(50))) {
                                                                                        echo $pd->productRating(50);
                                                                                    } else {
                                                                                        echo 0;
                                                                                    } ?>' data-rateyo-read-only='true'>
                                    </span>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.php?bid=<?php echo $pd->getId(); ?>">
                                    <img src="assets/bookimg/<?php echo $pd->getImage(); ?>" style="height:400px; width:500px;">
                                </a>
                                <!-- <div class="product-action">
                                    <a href="product-list.php?bookid=50"><i class="fa fa-cart-plus"></i></a>
                                </div> -->
                            </div>
                            <div class="product-price">
                                <h3 class="text-white"><?php echo $pd->getPrice(); ?></h3>
                                <a class="btn" href='checkout.php?buyNow=50'><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php $pd->productDetails(55); ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title" style=" height: 100px;">
                            <a href='product-detail.php?bid=<?php echo $pd->getId(); ?>'>
                                    <?php echo $pd->getName(); ?>
                                </a>
                                <div class='ratting'>
                                    <span class='rateyo m-auto' data-rateyo-rating='<?php if (!empty($pd->productRating(55))) {
                                                                                        echo $pd->productRating(55);
                                                                                    } else {
                                                                                        echo 0;
                                                                                    } ?>' data-rateyo-read-only='true'>
                                    </span>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.php?bid=<?php echo $pd->getId(); ?>">
                                    <img src="assets/bookimg/<?php echo $pd->getImage(); ?>" style="height:400px; width:500px;">
                                </a>
                                <!-- <div class="product-action">
                                    <a href="product-list.php?bookid=55"><i class="fa fa-cart-plus"></i></a>
                                </div> -->
                            </div>
                            <div class="product-price">
                                <h3 class="text-white"><?php echo $pd->getPrice(); ?></h3>
                                <a class="btn" href='checkout.php?buyNow=55'><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Recent Product End -->

    <!-- Footer Start -->
    <?php include 'php/footerDetails.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <!-- NOTE getting value for database upload -->
    <script>
        $(function() {
            $(".rateyo").rateYo({
                starWidth: "20px"
            });
        });
        // $(".rateYo").each(function(e) {
        //     var rating = $(this).attr("data-rating");
        //     $(this).rateYo({
        //         rating: rating,
        //         starWidth: "20px",
        //         numStars: 5,
        //         fullStar: true,
        //         normalFill: "#A0A0A0",
        //         spacing: "5px",
        //         precision: 2,
        //     });
        // });
    </script>
</body>

</html>