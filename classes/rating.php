<?php 
class rating{
    function RatingWithComment($score,$comment,$bid,$uid,$uName){
        $source = new source();
        return $source->Query("INSERT INTO review(bid,uid,name,score,comment) VALUES (?,?,?,?,?)",[$bid,$uid,$uName,$score,$comment]);

    }
    function updateRate($score,$comment,$bid,$uid){
        $source = new source();
        return $source->Query("UPDATE review SET score=?,comment=? where bid like ? and uid like ?",[$score,$comment,$bid,$uid]);
        
    }
    function checkComment($bid,$uid){
        $source = new source();
        $source->Query("SELECT * FROM review where bid like ? and uid like ?",[$bid,$uid]);
        $source->SingleRow();
        return $source->CountRows();
    }
    function ratingCalculate($bid){
        $source = new source();
        
    }
}

?>