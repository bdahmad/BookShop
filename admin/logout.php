<?php
session_start();
session_destroy();
if(isset($_SESSION['login_success'])){
    unset($_SESSION['admin_log']);
}
header("location:index.php");
?>