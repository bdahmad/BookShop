<?php
include("../init.php");

$approval = "Pending";
$query = $source->Query("UPDATE `order` SET status=? where oid=?",[$approval,$_GET['pending']]);
if($query){
    $_SESSION['pending_user'] = "Status Pending Successfully";
    header("location:pending.php");
}else{
    $_SESSION['pending_user'] = "Failed To Pending";
    header("location:pending.php");
}
?>