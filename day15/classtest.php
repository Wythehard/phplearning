
<?php
phpinfo();
class root{

    public $v1 = '我是基类';
    public function showinfo(){
        echo $this->v1;
    }
}
class parentclass extends root{
    public $v2='我是父类';
    public function showinfo()
    {
        echo $this->v2;
    }

}
class childclass extends parentclass{
    public $v3 = '我是派生类';
    public function showinfo(){
        echo $this->v3;

        
    }
}
$c1 = new childclass();
echo 'aaa';
$c1->showinfo();
$c1->muu();
?>