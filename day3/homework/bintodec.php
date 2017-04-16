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
//完美运行 效果不错哦  哈哈哈
$firstValue="";

if($_GET){
    $firstValue=$_GET['firstValue'];
    
}

?>
<form action="">
    <input type="text" name="firstValue" size="20" id="" value="<?php echo $firstValue?>">
    <select name="operation" id="">
        <option value="bindec" <?php if($_GET['operation']=='bindec') echo 'selected'?>>2to10</option>
        <option value="octdec" <?php if($_GET['operation']=='octdec') echo 'selected'?>>8to10</option>
        <option value="hexdec" <?php if($_GET['operation']=='hexdec') echo 'selected'?>>16to10</option>
        <option value="decbin" <?php if($_GET['operation']=='decbin') echo 'selected'?>>10to2</option>
        <option value="decoct" <?php if($_GET['operation']=='decoct') echo 'selected'?>>10to8</option>
        <option value="dechex" <?php if($_GET['operation']=='dechex') echo 'selected'?>>10to16</option>
    </select>

    <input type="submit" value="提交">
    <?php
        echo "结果为： ";
        $operation=$_GET['operation'];
        switch ($operation)
        {
            case "bindec" : echo bindec($firstValue);break;
            case "octdec" : echo octdec($firstValue);break;
            case "hexdec" : echo hexdec($firstValue);break;
            case "decbin" : echo decbin($firstValue);break;
            case "decoct" : echo decoct($firstValue);break;
            case "dechex" : echo dechex($firstValue);break;
        }

    ?>
    </form>
<br>
<br>
下面用三种形式显示数组内容 foreach print_r var_dump 仅调试print_r
<br>
print_r() 将把数组的指针移到最后边。使用 reset() 可让指针回到开始处。
<br>
<pre><?php
$arr=["php"=>"arr",
"java"=>"String",
"linux"=>"cd",
"js"=>"javascript"];
$result = print_r($arr,true);
var_dump($result);

?></pre>

<br>
下面输出ASCII码：
<br>
<table>
    <th>dec</th>
    <th>char</th>
    <?php
for ($i=32;$i<=126;++$i)
{
   
?>
<tr>
<td><?php echo "$i"?></td>
<td><?php echo chr($i)?></td>
</tr>
<?php }?>
</table>


</body>
</html>