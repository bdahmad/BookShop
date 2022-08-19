<?php
class source extends db{
    public $Query;

    public function Query($query,$param = []){
        if(empty($param)){
            $this->Query = $this->db->prepare($query);
            return $this->Query->execute();
        }else{
            $this->Query = $this->db->prepare($query);
            return $this->Query->execute($param);
        }
    }

    /* Count the numbers */
    public function CountRows(){
        return $this->Query->rowCount();
    }

    /* Fetch All records */
    public function FetchAll(){
        return $this->Query->FetchAll(PDO::FETCH_OBJ);
    }
    /* Fetch single row */
    public function SingleRow(){
        return $this->Query->fetch(PDO::FETCH_OBJ);
    }
}
?>