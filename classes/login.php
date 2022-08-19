<?php
class login{

    public function loginCheck($email,$password):bool
    {
        $source = new source();
        $source->Query("SELECT * from `user` where `email` = ?",[$email]);
        $details = $source->SingleRow();
        $db_password = $details->password;
        if(password_verify($password,$db_password)){
            return true;
        }else{
            return false;
        }
        
    }
    public function id($email){
        $source = new source();
        $source->Query("SELECT * from user where `email` = ?",[$email]);
        $details = $source->SingleRow();
        $id = $details->id;
        return $id;
    }
    public function userName($email){
        $source = new source();
        $source->Query("SELECT * from user where `email` = ?",[$email]);
        $details = $source->SingleRow();
        $name = $details->name;
        return $name;
    }

    
}
?>