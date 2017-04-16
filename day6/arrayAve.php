<?php
//计算数组下列数组平均值
$a3 = array(
	1,
	array(21,22,23, 24, 25),
	3,
	array(41, 42, 43,array(50,51,52))
);

$sum=0;
$num=0;
foreach($a3 as $value)
{
    foreach($value as $subvalue)
    {
        $sum+=$subvalue;
        $num++;

    }
}
echo $sum." <br>数量：".$num."<br>";

echo "<hr>";
echo "第二种方法";
$sum=0;
$num=0;
//第二种方法
reset($a3);
while(true){

    if(current($a3))
    {
        $subarr=each($a3)[1];
        reset($subarr);
        while(true)
        {
            if(current($subarr))
            {
                $sum+=each($subarr)[1];
                $num++;
            }
            else break;

        }

    }
    else break;

}
echo $sum." <br>数量：".$num."<br>";


//不规则数组求法

echo "<hr>";
echo "不规则数组求法";
$a3 = array(
	1,
	array(21,22,23, 24, 25),
	3,
	array(41, 42, 43,array(50,51,52))
);

$sum=0;
$num=0;
foreach($a3 as $value)
{
    if(is_array($value))
    {
        foreach($value as $subvalue)
        {
            if(is_array($subvalue))
            {
                foreach($subvalue as $trivalue)
                {
                    $sum+=$trivalue;
                    $num++;

                }
            }
            else
            {
                $sum+=$subvalue;
                $num++;
            }
        }
    }
    else
    {
        $sum+=$value;
        $num++;
    }
}
echo $sum." <br>数量：".$num."<br>";
?>