<?php       
class db{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "bookshop";
    protected $db;

    public function __construct(){
        try{
            //creating DB connection
            $this->db = new PDO("mysql:hsot=".$this->host.";dbname=".$this->database,
            $this->username,$this->password);
            
        }catch(PDOException $e){
            echo "Connection problem : ".$e->getMessage();
        }
    }
}

?>