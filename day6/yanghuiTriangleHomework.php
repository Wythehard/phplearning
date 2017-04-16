<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div style="text-align:center;width:300px">

    <?php
$num=6;
for($i=0;$i<=$num;$i++)
{
    $subpre="arr".($i-1);
    $subnow="arr".$i;
    
    for($j=0;$j<$i+1;$j++)
    {
        if($j==0)
        {
            $arr[$subnow][]=1;
        }else if($j==$i)
        {
            $arr[$subnow][]=1;
        }else
        {
             $arr[$subnow][]=$arr[$subpre][$j-1]+$arr[$subpre][$j];
        }
    }
}
foreach($arr as $key => $value)
{
    foreach($value as $subkey => $subvalue)
    {
        echo $subvalue." ";
    }
    echo "<br>";
}
?>
</div>
</body>
</html>

