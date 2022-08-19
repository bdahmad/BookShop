<?php
include("../init.php");

// Delete User
if(!empty($_GET['delete'])){
    $query = $source->Query("DELETE FROM user where id=?",[$_GET['delete']]);
    if($query){
        $_SESSION['delete_user'] = "User Delete Successfully";
        $_GET['delete'] = "";
        header("location:users.php");
    }else{
        $_SESSION['delete_user'] = "Failed To Delete";
        $_GET['delete'] = "";
        header("location:users.php");
    }
}


// Delete Order Pending page
if(!empty($_GET['deletePenOid'])){
$query = $source->Query("DELETE FROM `order` where oid=?",[$_GET['deletePenOid']]);
    if($query){
        $_SESSION['delete_user'] = "Order Delete Successfully";
        $_GET['deletePenOid'] = "";
        header("location:pending.php");
    }else{
        $_SESSION['delete_user'] = "Failed To Delete";
        $_GET['deletePenOid'] = "";
        header("location:pending.php");
    }
}
// Delete Order Approved page
if(!empty($_GET['deletePenOid'])){
    $query = $source->Query("DELETE FROM `order` where oid=?",[$_GET['deleteAppOid']]);
    if($query){
        $_SESSION['delete_user'] = "Order Delete Successfully";
        $_GET['deletePenOid'] = "";
        header("location:approved.php");
    }else{
        $_SESSION['delete_user'] = "Failed To Delete";
        $_GET['deletePenOid'] = "";
        header("location:approved.php");
    }
}

