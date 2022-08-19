<?php

    class cart{
        public function addCart($id){
            $source = new source();
            $pd = new productdetail();
            $pd->productDetails($id);
            if(!empty($_SESSION['logId'])){
                $source->Query("SELECT * FROM `cart` WHERE bid LIKE ? and uid like ?",[$id,$_SESSION['logId']]);
                $query = $source->FetchAll();
                $row = $source->CountRows();
                if($row>0){
                    $_SESSION['addCart']= "<p class='h3 text-danger'>This product added already.<p>";
                }else{
                    $_SESSION['addCart']= "<p class='h3 text-success'>Your product added on your cart.<p>";
                    $source->Query("INSERT INTO `cart` (bid,uid,name,category,price) VALUES (?,?,?,?,?)", [$pd->getId(), $_SESSION['logId'], $pd->getName(), $pd->getCategory(), (int)$pd->getPrice()]);
                }
            }else{
                $_SESSION['Error_cart'] =" 
                <div class='alert bg-danger'>
                    <span class='closebtn ' onclick='this.parentElement.style.display='none';'>&times;</span> 
                    <strong class = 'h4'>Info!</strong> <span class = 'h5'>Please login or Registration First.</span>
                </div>
                ";
                    
            }
            
            
        }
        public function onCart($logId){
            $source = new source();
            $source->Query("SELECT * from `cart` where uid = ?",[$logId]);
            $details = $source->FetchAll();
            return $source->CountRows();
        }
            
    }
?>