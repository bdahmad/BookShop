<?php
include("../init.php");

$approval = "Approved";
$query = $source->Query("UPDATE `order` SET status=? where oid=?",[$approval,$_GET['approval']]);
if($query){
    $_SESSION['approve_user'] = "Status Approved Successfully";
    header("location:approved.php");
}else{
    $_SESSION['approve_user'] = "Failed To Approved";
    header("location:approved.php");
}
?>