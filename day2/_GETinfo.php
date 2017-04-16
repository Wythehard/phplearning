<?php
//<!--要想被$_GET获取多选项 name要用数组命名-->
dump($_GET);
function dump($arr){
    echo "<pre>";
    var_dump($arr);
   echo "</pre>";
}
?>