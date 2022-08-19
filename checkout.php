<?php
include "init.php";
$pd = new productdetail();
if (empty($_SESSION['logId'])) {
    $_SESSION['buynow_error'] = "<div class='alert bg-danger'>
    <span class='closebtn ' onclick='this.parentElement.style.display='none';'>&times;</span> 
    <strong class = 'h4'>Sorry!</strong> <span class = 'h5'>You have to login first.</span>
        </div>";
    header('location:product-list.php');
}
if (!empty($_GET['buyNow']) && !empty($_SESSION['logId'])) {
    $pd->productDetails($_GET['buyNow']);
} else {
    $Error = "<div class='alert bg-danger'>
    <span class='closebtn ' onclick='this.parentElement.style.display='none';'>&times;</span> 
    <strong class = 'h4'>Sorry!</strong> <span class = 'h5'>You have to login first.</span>
</div>
";
}
if (isset($_POST['placeOrder']) && !empty($_SESSION['logId'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']) && $_POST['qty'] > 0) {
        $checkOut = new checkout();
        if ($checkOut->finalCheckOut($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['qty'], $_GET['buyNow'])) {
            $Error = "<p class='h3 text-success'><p>";
            $Error = "
            <div class='alert bg-success'>
            <span class='closebtn ' onclick='this.parentElement.style.display='none';'>&times;</span> 
            <span class = 'h5'>Your order has been placed <strong class = 'h4'> successfully </strong>. Please check your Order in Order TAB.</span>
            </div>
                    ";
            $_GET['buyNow'] = '';
        } else {
            $Error = $Error = "<div class='alert bg-danger'>
            <span class='closebtn ' onclick='this.parentElement.style.display='none';'>&times;</span> 
            <strong class = 'h4'>Sorry!</strong> <span class = 'h5'>Something is wrong to inserting into database</span>
        </div>
        ";;
        }
    } else {
        $Error = "<div class='alert bg-danger'>
    <span class='closebtn ' onclick='this.parentElement.style.display='none';'>&times;</span> 
    <strong class = 'h4'>Sorry!</strong> <span class = 'h5'>You have to fill your all details or Quantity can't be 0 or less</span>
</div>
";
    }
}
// else {

//     $Error = "<div class='alert bg-danger'>
//     <span class='closebtn ' onclick='this.parentElement.style.display='none';'>&times;</span> 
//     <strong class = 'h4'>Sorry!</strong> <span class = 'h5'>You have to login first.</span>
// </div>
// ";
// }
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Nav Bar Start -->
    <?php include 'php/headnav.php'; ?>
    <!-- Nav Bar End -->
    <?php
    if (isset($Error)) {
        echo $Error;
        $Error = '';
    }
    ?>


    <!-- Checkout Start -->
    <form action="" method="POST">
        <div class="checkout">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Billing Address</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input class="form-control" type="text" placeholder="Name" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="email" placeholder="E-mail" name="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="number" placeholder="Mobile No" name="phone">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="Address" name="address">
                                    </div>

                                    <div class="col-md-12">

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">

                                <h1>Cart Total</h1>
                                <p>Product Name
                                <p class="text-dark font-weight-bold"> <?php echo $pd->getName(); ?> </p>
                                </p>
                                <p class="sub-total">Sub Total<span><?php echo $pd->getPrice(); ?></span></p>
                                <p class="ship-cost">Shipping Cost<span>50 BDT</span></p>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        Quantity:
                                    </div>
                                    <div class="col-6">
                                    <input type="number" value="1" name="qty" class="w-25" style="margin-left: 155px;">
                                    </div>
                                </div>
                                <!-- <p>Quantity: <span><input type="number" value="1" name="qty" class="w-25"></span></pl> -->
                                <h2>Total<span>

                                        <?php
                                        echo (int)$pd->getPrice() + 50 . " BDT"; ?></span></h2>
                            </div>

                            <div class="checkout-payment">
                                <div class="payment-methods">

                                    <h1>Payment Methods</h1>

                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input " checked name="payment">
                                            <label class="custom-control-label" for="payment-5">Cash on Delivery</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <input type="submit" value="Place Order" class="rounded btn btn-outline-success" name="placeOrder">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Checkout End -->

    <!-- Footer Start -->
    <?php include 'php/footerDetails.php'; ?>
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
</body>

</html>