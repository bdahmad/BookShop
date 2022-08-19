<?php

include "init.php";
$pd = new productdetail();
if (!empty($_GET['bid'])) {
    $pd->productDetails($_GET['bid']);
}


//Rating--------------------------------
if (isset($_POST['submit'])) {
    $rating = new rating();
    $userRate = $_POST["ratingR"];

    // NOTE review with comment
    if (!empty($_SESSION['logId'])) {
        if (!empty($_POST['uReview']) && !empty($userRate)) {

            //NOTE Checking, user already commented or not, if yes then rating will update otherwise it will insert
            if ($rating->checkComment($_GET['bid'], $_SESSION['logId'])) {

                // NOTE updating rating
                if ($rating->updateRate($userRate, $_POST['uReview'], $_GET['bid'], $_SESSION['logId'])) {
                    $rateDone =  "New Rate Updated successfully";
                } else {
                    $rateError = "Rate not Updated";
                }
            } else {
                // NOTE Adding rate
                if ($rating->RatingWithComment($userRate, $_POST['uReview'], $_GET['bid'], $_SESSION['logId'], $_SESSION['login_success'])) {
                    $rateDone =  "New Rate addedddd successfully";
                } else {
                    $rateError = "Rate not added";
                }
            }
        } else {
            $rateError = "You have fill both , Rating and comment";
        }
    } else {
        $rateError = "Please Login first";
    }
}
//Review--------------------------------

$allCommnet = $pd->productComment($pd->getId());
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
</head>

<body>
    <!-- Nav Bar Start -->
    <?php include 'php/headnav.php'; ?>
    <!-- Nav Bar End -->
    <?php


    if (!empty($_SESSION['addCart'])) {
        echo $_SESSION['addCart'];
        $_SESSION['addCart'] = '';
    }
    if (!empty($rateError)) {
        echo "<p class='text-danger'>" . $rateError . "</p>";
        $rateError = "";
    } elseif (!empty($rateDone)) {
        echo "<p class='text-success'>" . $rateDone . "</p>";
        $rateDone = "";
    }
    ?>

    <!-- Product Detail Start -->

    <div class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-detail-top">
                        <div class="row align-items-center">
                            <div class="col-md-5">

                                <div class="product-slider-single normal-slider">
                                    <img src="<?php echo "assets/bookimg/" . $pd->getImage();  ?>" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-content">

                                    <div class="title">
                                        <h2><?php echo $pd->getName();  ?></h2>
                                    </div>
                                    <div>
                                        <!-- NOTE Read only rating -->
                                        <div class="rateyo" data-rateyo-rating="<?php echo number_format($pd->productRating($_GET['bid']), 1, '.', ''); ?>" data-rateyo-read-only="true">
                                        </div>
                                        <br><br>

                                    </div>
                                    <div class="price">
                                        <h4>Price:</h4>
                                        <p><?php echo $pd->getPrice();  ?></p>
                                    </div>

                                    <div class="p-size">
                                        <h4>Author:</h4>
                                        <span><?php echo $pd->getAuthor();  ?></span>

                                    </div>
                                    <div class="p-color">
                                        <h4>Publisher:</h4>
                                        <span><?php echo $pd->getPublisher();  ?></span>
                                    </div>
                                    <div class="action">
                                        <a class="btn" href="classes/sessionLog.php?addCart=<?php echo $pd->getId(); ?>"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                        <a class="btn" href="classes/sessionLog.php?buyNow=<?php echo $pd->getId(); ?>"><i class="fa fa-shopping-bag"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row product-detail-bottom">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " data-toggle="pill" href="#reviews">Reviews <?php echo '('.count($allCommnet).')' ?></a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="description" class="container tab-pane active">
                                    <h4>Product description</h4>
                                    <p>
                                        <?php echo $pd->getDescription(); ?>
                                    </p>
                                </div>
                                <!-- NOTE new Review -->
                                <div class="reviews-submit">
                                    <form method="POST">
                                        <h4>Give your Rating:</h4>
                                        <div class="row">
                                            <div class="ml-3">

                                                <div class="rateyo" id="ratingR" data-rateyo-rating="0" data-rateyo-num-stars="5" data-rateyo-score="3">
                                                </div>

                                                <span class='result'>0</span>
                                                <input type="hidden" name="ratingR">
                                                <br><br>

                                            </div>
                                            <?php
                                            if (empty($_SESSION['logId'])) {
                                                echo "
                                                <div class='ml-auto'>
                                                <span class='mr-4'>Please login to write review
                                                    <a href='login.php?log_id=login' class='btn btn-outline' style='margin-right:20px; margin-left:10px'>Login</a>
                                                </span>
                                            </div>
                                                ";
                                            }
                                            ?>
                                        </div>

                                        <!-- NOTE new Review END  -->
                                        <div class="row form">
                                            <div class="col-sm-12">
                                                <input type="text" placeholder="Review" name="uReview">
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="submit" name="submit" value="SUBMIT">
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div id="reviews" class="container tab-pane fade">
                                    <div class="reviews-submitted">
                                        <?php
            
                                        foreach ($allCommnet as $comment) :
                                            echo "
                                            <div class='reviewer border mt-3 p-3'>$comment->name - <span>$comment->date</span> <span>
                                            <div class='rateyo' id='starReadOnly' data-rateyo-rating='" . $comment->score . "' data-rateyo-read-only='true'>
                                            </div></span><span> Rate : " . $comment->score . "</span>
                                            <p class='text-dark'>
                                            $comment->comment
                                            </p>
                                            </div>                                            
                                            ";
                                        endforeach;
                                        ?>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product">
                        <div class="section-header">
                            <h1>Related Products</h1>
                        </div>

                        <div class="row align-items-center product-slider product-slider-3">
                            <!-- NOTE Suggested Books -->
                            <?php
                            $checkRand = [];
                            for ($i = 0; $i < 5; $i++) {
                                $randomNum = $pd->relatedProduct($pd->getCategory());


                                if (!in_array($randomNum, $checkRand)) {
                                    $query1 = $source->Query("SELECT * FROM books where id = ?", [$randomNum]);
                                    $query = $source->SingleRow();
                                    $row = $source->CountRows();
                                    if ($row > 0) {
                                        echo "
                                        <div class='col-lg-3'>
                                        <div class='product-item'>
                                            <div class='product-title' style='height:100px;'>
                                                <a href='product-detail.php?bid=" . $query->id . "'>" . $query->name . "</a>
                                            <div class='ratting'>
                                                <span class='rateyo m-auto' data-rateyo-rating='" . $pd->productRating($randomNum) . "' data-rateyo-read-only='true'></span>
                                            </div>
                                            </div>
                                            <div class='product-image'>
                                                <a href='product-detail.html'>
                                                    <img src='assets/bookimg/" . $query->image . "' alt='Product Image' style='height:400px;width:400px;'>
                                                </a>
                                                
                                            </div>
                                            <div class='product-price'>
                                                <span class='h3 text-white bg-dark'>" . $query->price . "</span>
                                                <a class='btn' href=''><i class='fa fa-shopping-cart'></i>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                        ";
                                    }
                                    $checkRand[] = $randomNum;
                                } else {
                                    $i--;
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>

                <!-- Side Bar Start -->
                <?php include 'php/sideBarCate.php' ?>
                <!-- Side Bar End -->
            </div>
        </div>
    </div>


    <!-- Product Detail End -->

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

    <!-- Rating -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <!-- NOTE getting value for database upload -->
    <script>
        $(function() {
            $(".rateyo").rateYo({
                starWidth: "20px"
            }).on("rateyo.change", function(e, data) {
                var rating = data.rating;

                $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('Rating : ' + rating);
                $(this).parent().find('input[name=ratingR]').val(rating); //add rating value to input field
            });
        });
    </script>


    <!-- NOTE showing value on rating
    <script>
        $(function() {
            $(".rateyo").rateYo().on("rateyo.change", function(e, data) {
                var rate = data.rating;
                $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('rate :' + rate);
                $(this).parent().find('input[name=rate]').val(rate); //add rating value to input field
            });
        });
    </script> -->
</body>

</html>