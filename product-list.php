<?php
include "init.php";
$cart = new cart();
if (isset($_GET['bookid'])) {
    $cart->addCart($_GET['bookid']);
}
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

    <!-- Style for not sold page alert info -->
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
    <!-- Nav Bar End -->

    <?php
    if (!empty($_SESSION['Error_cart'])) {
        echo $_SESSION['Error_cart'];
        $_SESSION['Error_cart'] = '';
    }
    if(!empty($_SESSION['buynow_error'])){
        echo $_SESSION['buynow_error'];
        $_SESSION['buynow_error'] = '';
    }
    if (!empty($_SESSION['addCart'])) {
        echo $_SESSION['addCart'];
        $_SESSION['addCart'] = '';
    }
    ?>

    <!-- Product List Start -->
    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">

                    <div class="row">


                        <?php
                        if(!empty($_GET['bookName'])){
                            $bName = $_GET['bookName'];
                            $query = $source->Query("SELECT * FROM `books` WHERE name like '%$bName%'");
                            $books = $source->FetchAll();
                            $totalRow = $source->CountRows();
                            if($totalRow>0){
                                foreach ($books as $row) :
                                    echo "
                                    <div class='col-md-4'>
                                        <div class='product-item'>
                                            <div class='product-title' style='height:100px;'>
                                                <a href='product-detail.php?bid=" . $row->id . "'>$row->name</a>
                                                <div class='ratting'>
                                                <span class='rateyo m-auto' data-rateyo-rating='" . $pd->productRating($row->id) . "' data-rateyo-read-only='true'>
                                                </span>
                                                </div>
                                            </div>
                                            <div class='product-image' >
                                                <a href='product-detail.html'>
                                                    <img src='assets/bookimg/" . $row->image . "' style='height:400px;width:400px;' alt='Product Image'>
                                                </a>
                                                <div class='product-action'>
                                                    <a href='product-list.php?bookid=" . $row->id . "'><i class='fa fa-cart-plus'></i></a>
                                                </div>
                                            </div>
                                            <div class='product-price'>
                                                <h3 class='text-white'>" . $row->price . "</h3>
                                                <a class='btn' href='checkout.php?buyNow=" . $row->id . "'><i class='fa fa-shopping-cart'></i>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                        ";
                                endforeach;
                                $_GET['search'] = '';
                            }
                            
                        }
                        elseif (!empty($_GET['mostReview'])) {
                            $noRepeat = [];
                            $query = $source->Query("SELECT * FROM review ORDER BY score DESC");
                            $query = $source->FetchAll();
                            foreach ($query as $q) :
                                
                                $pd->productDetails($q->bid);
                                if(!in_array($q->bid,$noRepeat)){
                                    echo "
                                    <div class='col-md-4'>
                                    <div class='product-item'>
                                        <div class='product-title' style='height:100px;'>
                                            <a href='product-detail.php?bid=" . $pd->getId() . "'>" . $pd->getName() . "</a>
                                            <div class='ratting'>
                                            <span class='rateyo m-auto' data-rateyo-rating='" . $pd->productRating($pd->getId()) . "' data-rateyo-read-only='true'></span>
                                            </div>
                                        </div>
                                        <div class='product-image' >
                                            <a href='product-detail.html'>
                                                <img src='assets/bookimg/" . $pd->getImage() . "' style='height:400px;width:400px;' alt='Product Image'>
                                            </a>
                                            <div class='product-action'>
                                                <a href='product-list.php?bookid=" . $pd->getId() . "'><i class='fa fa-cart-plus'></i></a>
                                            </div>
                                        </div>
                                        <div class='product-price'>
                                            <h3>" . $pd->getPrice() . "</h3>
                                            <a class='btn' href='checkout.php?buyNow=" . $pd->getId() . "'><i class='fa fa-shopping-cart'></i>Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                    ";
                                    $noRepeat[] = $pd->getId();
                                }
                                
                            
                            endforeach;

                        }elseif(!empty($_GET['bestSell'])){
                            $pd->bestSell();
                        }
                        else{
                            if (isset($_POST['comics']) || !empty($_GET['id']) && $_GET['id'] == 1) {
                                $query = $source->Query("SELECT * FROM books where category = 1");
                            } elseif (isset($_POST['computer']) || !empty($_GET['id']) &&  $_GET['id'] == 2) {
                                $query = $source->Query("SELECT * FROM books where category = 2");
                            } elseif (isset($_POST['entertainment']) || !empty($_GET['id']) &&  $_GET['id'] == 3) {
                                $query = $source->Query("SELECT * FROM books where category = 3");
                            } elseif (isset($_POST['health']) || !empty($_GET['id']) &&  $_GET['id'] == 4) {
                                $query = $source->Query("SELECT * FROM books where category = 4");
                            } elseif (isset($_POST['history']) || !empty($_GET['id']) &&  $_GET['id'] == 5) {
                                $query = $source->Query("SELECT * FROM books where category = 5");
                            } elseif (isset($_POST['horror']) || !empty($_GET['id']) &&  $_GET['id'] == 6) {
                                $query = $source->Query("SELECT * FROM books where category = 6");
                            } elseif (isset($_POST['literature']) || !empty($_GET['id']) &&  $_GET['id'] == 7) {
                                $query = $source->Query("SELECT * FROM books where category = 7");
                            } elseif (isset($_POST['mysteries']) || !empty($_GET['id']) &&  $_GET['id'] == 8) {
                                $query = $source->Query("SELECT * FROM books where category = 8");
                            } elseif (isset($_POST['religion']) || !empty($_GET['id']) &&  $_GET['id'] == 9) {
                                $query = $source->Query("SELECT * FROM books where category = 9");
                            } elseif (isset($_POST['science']) || !empty($_GET['id']) &&  $_GET['id'] == 10) {
                                $query = $source->Query("SELECT * FROM books where category = 10");
                            } else {
                                $query = $source->Query("SELECT * FROM books");
                            }
                            $query = $source->FetchAll();
                            $CountRow = $source->CountRows();
                            if ($CountRow > 0) {
                                foreach ($query as $row) :
                                    echo "
                                    <div class='col-md-4'>
                                    <div class='product-item'>
                                        <div class='product-title' style='height:100px;'>
                                            <a href='product-detail.php?bid=" . $row->id . "'>$row->name</a>
                                            <div class='ratting'>
                                            <span class='rateyo m-auto' data-rateyo-rating='" . $pd->productRating($row->id) . "' data-rateyo-read-only='true'>
                                            </span>
                                            </div>
                                        </div>
                                        <div class='product-image' >
                                            <a href='product-detail.php?bid=".$row->id."'>
                                                <img src='assets/bookimg/" . $row->image . "' style='height:400px;width:400px;' alt='Product Image'>
                                            </a>
                                            
                                        </div>
                                        <div class='product-price'>
                                            <h3 class='text-white'>" . $row->price . "</h3>
                                            <a class='btn' href='checkout.php?buyNow=" . $row->id . "'>
                                                <i class='fa fa-shopping-cart'></i>Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                    ";
                                endforeach;
                            }
                        }

                        ?>

                    </div>
                </div>
                <!-- Side Bar Start -->
                <?php include 'php/sideBarCate.php' ?>
                <!-- Side Bar End -->
            </div>
        </div>
    </div>
    <!-- Product List End -->

    <!-- Footer Start -->
    <?php include 'php/footerDetails.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



    <script src="jquery.js"></script>
    <script src="jquery.rateyo.js"></script>
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

    <script>
        $(function() {
            $(".rateyo").rateYo({
                starWidth: "20px"
            })
        });
    </script>

</body>

</html>