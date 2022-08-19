<?php 
class signup{
    function __construct($name,$email,$password,$phone,$address)
    {
        $source = new source();
        $pass = password_hash($password,PASSWORD_DEFAULT);
        return $source->Query("INSERT INTO user (name,email,password,phone,address) VALUES (?,?,?,?,?)",[$name,$email,$pass,$phone,$address]);
    }
}

?>