<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./main.js"></script>
    <title>Document</title>
    <style>
    .data{
        padding:0;
        margin:0;
        text-align:center;
        border:0;
        
    }
    .gray{
        background-color:#ccc;
    }
    </style>
</head>
<body>
<h4>添加数据</h4>
<form id='info'  method='get'>
<table>
    <tbody>
    <tr>
        <td>用户名</td>
        <td ><input type="text" name='username' id="username"><font id="usernametip" color='gray'>长度应该在5-15字符内</font></td>
        
    </tr>
    <tr>
        <td>密码</td>
        <td><input type="password" name="pwd" id="pwd"></td>
    </tr>
    <tr>
        <td>年龄</td>
        <td><input type="text" name="age" id="age" size="5" maxlength="2"></td>
    </tr>
    <tr>
        <td>学历</td>
        <td><select name="xueli" id="xueli">
        <option value="1">小学及以下</option>
        <option value="2">中学或中专</option>
        <option value="3">高中</option>
        <option value="4">本科</option>
        <option value="5">硕士</option>
        </select></td>
    </tr>
    <tr>
        <td>兴趣</td>
        <td><input type="checkbox" name="hobby[]" value="1">排球
        <input type="checkbox" name="hobby[]" value="2">篮球
        <input type="checkbox" name="hobby[]" value="4">足球
        <input type="checkbox" name="hobby[]" value="8">地球
        <input type="checkbox" name="hobby[]" value="16">中国足球</td>
    </tr>
    <tr>
        <td>来自</td>
        <td><input type="radio" name="area" value="1">华北
        <input type="radio" name="area" value="2">华东
        <input type="radio" name="area" value="3">华南
        <input type="radio" name="area" value="4">华西
        <input type="radio" name="area" value="5">华中
        <input type="radio" name="area" value="6">西北</td>
    </tr>

    </tbody>
</table>
<input type="submit" onclick='check()' value="ok">
</form>
<?php
    //连接数据库
    $link = @mysql_connect('localhost','root','root');
    $db = mysql_select_db('db1');
    mysql_set_charset('utf8');
    $sql='';
    if($_GET)
    {
        $username=$_GET['username'];
        $pwd=$_GET['pwd'];
        $age=$_GET['age'];
        $xueli=$_GET['xueli'];
        $hobby=$_GET['hobby'];
        $area=$_GET['area'];
        $hobbyvalue=0;
        var_dump($hobby);
        for($i=0;$i<count($hobby);++$i)
        {
            $hobbyvalue+=(int)$hobby[$i];
        }
        

        if($username&&$pwd&&$age&&$xueli&&$hobby&&$area)
        {
            if((int)$age<200||(int)$age>0)
            {
                $sql = "insert into info (username,password,age,xueli,hobby,area) value ('$username','$pwd',$age,$xueli,$hobbyvalue,$area)";
                echo "存入的数据为（'$username','$pwd',$age,$xueli,$hobbyvalue,$area)";
                if (mysql_query($sql))
                {
                    echo '存入成功';
                    $url="http://www.wulinzhen.com/day10/homework.php";
                    echo "<script language='javascript' type='text/javascript'>";
                    echo "window.location.href='$url'";
                    echo "</script>";

                }
                else {
                    echo '存入失败'.mysql_error();
                }
            }
            else{
                echo '年龄输入有错'.$age;
            }
        }
        else
        {
            echo '用户输入信息有未填项目';
        }
}
//下面是输出数据库的结果
$sql='select * from info';
$result=mysql_query($sql);
$fieldcount=mysql_num_fields($result);
$datacount = mysql_num_rows($result);

?>

<table class='data'>
    <tbody>
    <?php 
        for ($i=0;$i<$fieldcount;++$i)
        {
            
            echo "<th>";
            echo mysql_field_name($result,$i);
            echo "</th>";
        }
        for($i=0;$i<$datacount;$i++)
        {
            $info=mysql_fetch_row($result);

            if($i%2==0)
                echo "<tr class='gray'>";
            else
                echo "<tr>";
            for ($j=0;$j<$fieldcount;$j++)
            {
                echo "<td>";
                echo $info[$j];
                echo "</td>";
            }
            echo "<td>";

           
        }
    ?>


    </tbody>
</table>
</body>

</html>