<?php
if($id=$_GET['id'])
{
    $link = @mysql_connect('localhost','root','root');
    $db = mysql_select_db('db1');
    mysql_set_charset('utf8');
    $sql="delete  from info where username='$id'";
    if(mysql_query($sql))
    {
        echo "删除成功";
        $url="http://www.wulinzhen.com/day10/homework.php";
        echo "<script language='javascript' type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    }
    else 
    {
        echo "删除失败".mysql_error();
    }

}

?>