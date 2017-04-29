<?php
phpinfo();
class A{

    public $a1=10; 
    public $a2=20.2; 
    public $a3=30;
    public $a4=true; 
}
$a = new A();
?>
<pre>
<?php
var_dump($a);
//$str = serialize($a);
//file_put_contents('./a.txt',$str);
$strr=file_get_contents('./a.txt',$str);
$stt = unserialize($strr);
var_dump($stt);

?>

</pre>