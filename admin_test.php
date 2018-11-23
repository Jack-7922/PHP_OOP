<?php
function test($var = false) {
    try{
        echo "Start\n";
        if(!$var){
            throw new Exception('great'); 
        }
        echo "Continue";
    }catch(Exception $e){
         echo "Exeption: " .$e->getMessage(). "\n";
        // echo "in file: " .$e->getFile(). "\n";
        // //echo "on line: " .$e->getLine(). "\n";

    }
    echo "The end\n";
}

var_dump(test());

?>