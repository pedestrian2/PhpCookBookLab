<?php


$str = "a,b,c,";
echo substr($str, 0, -1)."\n";
//res: "a,b,c";
echo rtrim($str, ",")."\n";
//res: "a,b,c";
echo trim($str, ",")."\n";
//res: "a,b,c"
echo trim($str, "a,")."\n";
//res: "b,c"


?>