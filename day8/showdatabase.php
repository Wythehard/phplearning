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
    $link = @mysql_connect("localhost:3306","root","root");
    $database = mysql_select_db('db1');
    $sql='show databases';
    $result=mysql_query($sql);
    if($result){
        echo mysql_error();
    }
    
?>
<table>
<tr>
<th>数据库名字</th>
<th>点击进入详情</th>
</tr>
<?php
$len=mysql_num_rows($result);
for($i=0;$i<$len;++$i)
{
    echo "<tr>";
    echo "<td>";
    
    $databasename=mysql_fetch_row($result);
    echo $databasename[0];
    echo "</td>";
    echo "<td>";
    echo "<a href='".$databasename[0].".php'>点击进入</a>";
    echo "</td>";
    echo "</tr>";
}

?>
</table>
</body>
</html>
