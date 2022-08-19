<?php
include 'init.php';
if(isset($_POST['checkout'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address'])){
        $checkout = new checkout();
        $checkout->cartCheckOut($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['address'],$_SESSION['logId']);
    }
}
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top bar Start -->
    <?php include 'php/headnav.php'; ?>
    <!-- Top bar End -->
    <?php
    if (!empty($_GET['deleted'])) {
        echo "<p class='text-success'>Item remove successfully from cart list.</p>";
        $_GET['deleted'] = '';
    }
    if (isset($_GET['doneCart'])) {
        echo "<p class='text-success'>You checked out all items. Thank you for shopping.</p>";
        $_GET['doneCart'] ='';
    }
    if (!empty($_GET['Error'])) {
        echo "<p class='text-danger'>Shopping Not Done.</p>";
        $_GET['Error'] = '';
    }
    ?>
    <!-- Cart Start -->
    <div class="cart-page">
        <div class="container-fluid">
            <form method="POST">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <?php
                                        $subTotalPrice = 0;
                                        $source->Query("SELECT * FROM `cart` where uid = ? ", [$_SESSION['logId']]);
                                        $query = $source->FetchAll();
                                        $cRow = $source->CountRows();
                                        if ($cRow > 0) {
                                            foreach ($query as $row) :

                                                echo "
                                                <tr>
                                                <td>
                                                    <div class='img'>
                                                        <a href='#'><img src='assets/bookimg/" . $row->bid . ".jpg' alt='Image'></a>
                                                        <p>" . $row->name . "</p>
                                                    </div>
                                                </td>
                                                <td>" . $row->price . " BDT</td>
                                                <td>
                                                    <div class='qty'>
                                                        <input type='text' value='1' readonly>
                                                    </div>
                                                </td>
                                                <td><a href='classes/delete.php?delId=" . $row->id . "'><i class='fa fa-trash'></i></a></td>
                                            </tr>
                                                ";
                                                $subTotalPrice += $row->price;
                                            endforeach;
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-lg-8">
                                        <div class="checkout-inner">
                                            <div class="billing-address">
                                                <h2>Billing Address</h2>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Name</label>
                                                        <input class="form-control" type="text" placeholder="Name" name="name">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>E-mail</label>
                                                        <input class="form-control" type="email" placeholder="E-mail" name="email">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>Mobile No</label>
                                                        <input class="form-control" type="number" placeholder="Mobile No" name="phone">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>Address</label>
                                                        <input class="form-control" type="text" placeholder="Address" name="address">
                                                    </div>

                                                    <div class="col-md-12">

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <p>Sub Total<span><?php echo $subTotalPrice . " BDT"; ?></span></p>
                                            <p>Shipping Cost<span>50 BDT</span></p>
                                            <h2>Grand Total<span><?php (int)$totalPrice = (int)$subTotalPrice + (int)50;
                                                                    echo $totalPrice . " BDT"; ?></span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            <input type="submit" value="Checkout" class="btn mt-2" name="checkout">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Cart End -->

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
</body>

</html>