<?php
//私有属性和私有方法的重写问题：私有属性和方法都不能覆盖，
//但其实子类可以定义跟父类私有的同名属性或方法。只是当作一个自身的新的属性或方法来看待而已。
//不过方法的参数必须一致。

class A
{
    private function test($p,$q)
    {
        echo "test方法";
    }
}
class B extends A
{
    public function test($p,$q)
    {
        echo "重写test方法";
    }
}

$b1 = new B();
$b1->test($a,$b,$c);


?>