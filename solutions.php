<?php
    //first exercise's solution please give it a shot first 
    
    function isBitten(){
        $r = rand(1 , 2);
        switch($r){
            case 2:
             echo 'Charlie did not bite your finger!';
            break;
             case 1:
              echo 'Charlie bit your finger!';
            break;
        }}
    isBitten()
?>