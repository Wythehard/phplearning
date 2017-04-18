<!DOCTYPE html>
<html lang="CHN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $link = @mysql_connect("localhost","root","root");

    $database = mysql_select_db('db2');
    $sql='select * from newtable';
    mysql_query("set names utf8");
    $result=mysql_query($sql);
    if($result){
        echo mysql_error();
    }
?>
<table>
<tr>
<?php
$fildNum = mysql_num_fields($result);
for($i=0;$i<$fildNum;++$i)
{
    $fieldName=mysql_field_name($result,$i);

    echo "<th>";
    echo $fieldName;
    echo "</th>";

}
?>
</tr>
<?php
$len=mysql_num_rows($result);
for($i=0;$i<$len;++$i)
{
    echo "<tr>";
    $databasename=mysql_fetch_row($result);
    echo "<td>";
    echo $databasename[0];
    echo "</td>";
    echo "<td>";
    echo $databasename[1];
    echo "</td>";
        echo "<td>";
    echo $databasename[2];
    echo "</td>";
        echo "<td>";
    echo $databasename[3];
    echo "</td>";
    echo "</tr>";
}

?>
</table>
</body>
</html>
