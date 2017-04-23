<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>转账(汇款)系统</h3>
    <form method='post'>
    <p>转出账户<input type="text" name='outcount'></p>
    <p>转入账户<input type="text" name='incount'></p>
    <p>转出金额<input type="text" name='money'></p>
     <input type="submit" value="提交">
    </form>

   <?php

        $link = @mysql_connect('localhost','root','root');
        mysql_select_db('db1');
        mysql_set_charset('utf8');

    //下面是输出数据库的结果
$sql='select * from zhanghu';
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
                // echo "<td>";
                // echo "<a href='deletedb.php?id=$info[0]'>删除</a>";
                // echo "</td>";
                // echo "<td>";
                // echo "<a href='update.php?id=$info[0]'>修改</a>";
                // echo "</td>";
        }
    ?>


    </tbody>
</table>
</body>
<?
    if($_POST)
    {

        $sql='';
        $outcount=$_POST['outcount'];
        $incount=$_POST['incount'];
        $money=$_POST['money'];
        if($outcount&&$incount&&$money)
        {
            
            $sql="select money from zhanghu where name='$outcount'";
            $result = mysql_query($sql);
            $info=mysql_fetch_row($result);
            if((float)$info[0]>=$money)
            {
                $sql = "call jiaoyi('$outcount','$incount','$money')";
                if(mysql_query($sql))
                {
                    echo '交易成功';
                    // $url="http://www.wulinzhen.com/day12/account_homework.php";
                    // echo "<script language='javascript' type='text/javascript'>";
                    // echo "window.location.href='$url'";
                    // echo "</script>";
                }
                else
                {
                    echo '交易失败 错误'.mysql_error();
                }
            }
            else{
                echo "余额不足";
            }

        }

        
    }
?>
</html>