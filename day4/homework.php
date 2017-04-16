<?php
$num=5.6;
echo "<br>";
echo "{$num}++后是：".++$num;
$num="ab9";
echo "<br>";
echo "{$num}++后是：".++$num;
$num="0000009";
echo "<br>";
echo "{$num}++后是：".++$num;
$num="a009.8";
echo "<br>";
echo "{$num}++后是：".++$num;
$num="z";
echo "<br>";
echo "{$num}++后是：".++$num;

echo "<br>";
echo "下面是按位运算";
$num=123;
echo "123左移三位和右移三位: ".($num<<3)."右移: ".($num>>3);
echo "<br>";

echo "下面是自由落体运算";
echo "<br>";
//v2=2gh
//如果已知小球掉落时高度为1000m，求其触地瞬间的速度；
$speed = pow(2*9.8*1000,0.5);
echo "速度为： $speed";
//如果已知小球落地瞬间的速度（1000m/s），求其掉落时的高度）
$height = pow(1000,2)/(2*9.8);
$height = round($height,2);//保留俩位小数
echo "高度为： $height";
//结果下面是自由落体运算速度为： 140
//高度为： 51020.41

echo "<br>";
echo "下面是百元百鸡的问题";
echo "<br>";
/*百钱百鸡问题：
已知：公鸡5元一只，母鸡3元一只，小鸡一元3只。现用100元钱
买了100只鸡，问：公鸡母鸡小鸡各几只？——请考虑尽可能高效的方法。
*/

//开始计时
$HeaderTime = microtime(true);//参数true表示返回浮点数值
$gongji=0;
$muji=0;
$xiaoji=0;
$step=0;
for(;$xiaoji<=300;$xiaoji++)
{
    for(;$muji<34;$muji++)
    {
    for(;$gongji<=20;$gongji++)
        {

            if($xiaoji%3!=0)
            continue 3;
            $step++;
            if((5*$gongji+3*$muji+$xiaoji/3==100)&&($gongji+$muji+$xiaoji==100))
            echo "公鸡有{$gongji}头，母鸡有{$muji}头，小鸡有{$xiaoji}头<br>";
        }
        $gongji=0;
    }
    $muji=0;
}
echo "<br>";
echo "<br>";
echo "总共执行了{$step}步";

printf(" total run: %.4f s<br>".
"memory usage: %.4f M<br> ",
microtime(true)-$HeaderTime,
memory_get_usage() / 1024 / 1024 );

echo "<br>";
//开始计时
$HeaderTime = microtime(true);//参数true表示返回浮点数值
//下面是更换顺序后 执行的步数居然一样， 不可思议。但是怎么来判断优劣呢  去计算一下时间吧
//结果是步数一样 时间不同 前者小；

$gongji=0;
$muji=0;
$xiaoji=0;
$step=0;
for(;$gongji<=20;$gongji++)
{
    for(;$muji<34;$muji++)
    {
    for(;$xiaoji<=300;$xiaoji++)
        {

            if($xiaoji%3!=0)
            continue 1;
            $step++;
            if((5*$gongji+3*$muji+$xiaoji/3==100)&&($gongji+$muji+$xiaoji==100))
            echo "公鸡有{$gongji}头，母鸡有{$muji}头，小鸡有{$xiaoji}头<br>";
        }
        $xiaoji=0;
    }
    $muji=0;
}
echo "<br>";
echo "<br>";
echo "总共执行了{$step}步";

printf(" total run: %.5f s<br>".
"memory usage: %.5f M<br> ",
microtime(true)-$HeaderTime,
memory_get_usage() / 1024 / 1024 );


//继续优化解
//开始计时
$HeaderTime = microtime(true);//参数true表示返回浮点数值
$gongji=0;
$muji=0;
$xiaoji=0;
$step=0;
for(;$xiaoji<100;$xiaoji++)
{
    for($muji=0;$muji<(100-$xiaoji/3)/3;$muji++)
    {
        $gongji=100-$xiaoji-$muji;
        if($xiaoji%3!=0)
        continue 2;
        if((5*$gongji+3*$muji+$xiaoji/3>100))
            continue ;
        if(5*$gongji+3*$muji+$xiaoji/3==100)
            echo "公鸡有{$gongji}头，母鸡有{$muji}头，小鸡有{$xiaoji}头<br>";
        $step++; 
    }
}
echo "<br>";
echo "<br>";
echo "总共执行了{$step}步";

printf(" total run: %.5f s<br>".
"memory usage: %.5f M<br> ",
microtime(true)-$HeaderTime,
memory_get_usage() / 1024 / 1024 );

echo "<br>";


//最优解
$HeaderTime = microtime(true);
$count = 0;	//计算次数
for($gongji = 0; $gongji <= 100/5; ++$gongji){//考虑总价，则公鸡最多100/5只
	for($muji = 0; $muji <= (100-$gongji*5)/3; ++$muji){//考虑总价和公鸡所化的钱，则母鸡最多100/3只
		$xiaoji = 100 - $gongji - $muji;	//根据已知条件，直接可得
		if($xiaoji % 3 != 0){continue;}		//考虑小鸡的价格，则数量只能是被3整除才合理
		//for($xiaoji = 0; $xiaoji <= 100; ++$xiaoji){
			if($gongji*5 + $muji*3 + $xiaoji/3== 100 ){
				echo "<br />公鸡$gongji, 母鸡$muji, 小鸡$xiaoji";
			}
			$count++;	//计次
		//}
	}
}
echo "<br />次数：$count";
printf(" total run: %.6f s<br>".
"memory usage: %.2f M<br> ", 
microtime(true)-$HeaderTime,
memory_get_usage() / 1024 / 1024 );

?>