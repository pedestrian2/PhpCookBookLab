<?php

function str_rand($length=10, $char="abcdABCD1234"){
     if( !is_int($length) || $length <0){
          return false;
     }
     $char_length = strlen($char) - 1;
     $rand_str = "";
     for($i=0;$i<=$length;$i++){
          //$char[ k ] 指的是$char 此字串中第幾個位置的字，
          //使用mt_rand() 是因為其效率較 rand() 好
          $rand_str .= $char[mt_rand(0, $char_length) ];
     }
     return $rand_str;
}

echo str_rand(10);
?>