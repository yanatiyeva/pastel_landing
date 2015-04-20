<?php 
$str_keys = file_get_contents('count.txt');
    /*если в файле count.txt есть информация о заявках*/
    if($str_keys!="") {
echo $str_keys; 
    }
?>


