<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if($id=$_GET['id'])
        {
            $link = @mysql_connect('localhost','root','root');
            $db = mysql_select_db('db1');
            mysql_set_charset('utf8');
            $sql="select * from info where username='$id'";
            $result = mysql_query($sql);
            ?>
<table>
<?php
$fieldcount = mysql_num_fields($result);
$info = mysql_fetch_row($result);
  for ($i=0;$i<$fieldcount;++$i)
        {
            echo "<tr>";
            echo "<th>";
            echo mysql_field_name($result,$i);
            echo "</th>";
            echo "<td>";
            
            echo "<input type='text' value=$info[$i]>";
            echo "</td>";
            echo "</tr>";
        }

?>
</table>
            <?php
            
            $sql='';//"update  from info where username='$id'";
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
</body>
</html>


