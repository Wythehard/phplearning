<?php
$arr = array(10,20,'4'=>5,'dd'=>7,"max"=>55);
foreach($arr as $key =>$value)
{
    echo "{$key}=>{$value}";
    echo "<br>";
}
echo "<hr>";
$len = count($arr);
reset($arr);
for ($i=0;$i<$len;$i++)
{
    $k=key($arr);
    $v=current($arr);
    echo "{$k}=>{$v}";
    echo "<br>";
    next($arr);
}
echo "<hr>";
reset($arr);
for ($i=0;$i<$len;$i++)
{
    $arr_kv=each($arr);
    //var_dump($arr_kv);
    echo "{$arr_kv[0]}=>{$arr_kv[1]}";
    echo "<br>";
}
echo "<hr>";
//下面是获取最大值的方法 前面是遍历输出
echo "<hr>";

$max=reset($arr);
$min=reset($arr);
$submax=0;
$submin=0;
for ($i=0;$i<$len;$i++)
{
    $k=key($arr);
    $v=current($arr);
    if($v>$max){
        $max = $v;
        $submax=$k;
    }
    if($v<$min)
    {
       $min = $v;
        $submin=$k; 
    }
    next($arr);
}
echo "最大值的下标是{$submax} 值是{$max} <br>";
echo "最小值的下标是{$submin} 值是{$min}<br>";
// echo "下面交换俩个值";
// $a=&$arr[$submax];
// $c=&$arr[$submin];
// $b = $a;
// $c = $b;

//list 测试
//只获取数字下标的 字符串下标的话不取

list($v1,$v2,$v3,$v4,$v5)=$arr;
for($i=1;$i<=6;$i++)
{   
    $p="v".$i;
    echo $$p."<br1>";
}
?>