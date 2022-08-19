<?php
include "../init.php";
if(!empty($_GET['delId'])){
    if($source->Query("DELETE FROM `cart` where id=?",[$_GET['delId']])){
        header("location:../cart.php?deleted=done");
    }
}

?>