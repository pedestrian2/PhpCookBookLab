<?php

$subject = "2014/01/01";
$pattern = "/(\d{4}\/)(\d{2}\/)(\d{2})/";
function callbackfunc($match){
     return $match[0].$match[1].$match[2].$match[3];
}
echo preg_replace_callback($pattern, "callbackfunc", $subject);


?>