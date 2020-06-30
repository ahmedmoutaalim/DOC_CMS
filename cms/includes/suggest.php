<?php

class suggest{

    public function call_all(){
        
        global $pdo;

        $call = $pdo -> prepare("SELECT *FROM suggest");

        $call -> execute();

        return $call;

    }

    public function fetch_data($suggest_id){
        global $pdo ; 

        $query = $pdo -> prepare("SELECT * FROM suggest WHERE suggest_id=?");
        $query -> bindValue(1, $suggest_id );
        $query -> execute();


       return $query -> fetch();
   }

}
