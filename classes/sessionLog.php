<?php
    include '../init.php';
    if(!empty($_SESSION['login_success'])){
        if(isset($_GET['buyNow'])){
            header('location:../checkout.php?buyNow='.$_GET['buyNow'].'');
        }
        if(!empty($_GET['addCart'])){
            // header('location:../cart.php?addCart='.$_GET['addCart'].'');
            $cart = new cart();
            $cart->addCart($_GET['addCart']);
            
            header('location:../product-detail.php?bid='.$_GET['addCart'].'');
        }
    }else{
        header("location:../login.php?log_id=login&msg=1");
    }

?>