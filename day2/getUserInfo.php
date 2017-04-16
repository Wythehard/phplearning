<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  name="info" method="get">
    用户名： <input type="text" name="Username" id="">
    <br>
    密码： <input type="password" name="pwd" id="">
    <br>
    性别：
    <input type="radio" name="sex" value="men" id="">男
    <input type="radio" name="sex" value="women" id="">女
    <br>
    爱好：
    <input type="checkbox" name="hobby[]" value="zuqiu" id="">zuqiu
    <input type="checkbox" name="hobby[]" value="lanqiu" id="">lanqiu
    <input type="checkbox" name="hobby[]" value="yumaoqiu" id="">yumaoqiu
    <input type="checkbox" name="hobby[]" value="taiqiu" id="">taiqiu
    <input type="checkbox" name="hobby[]" value="lvyou" id="">旅游
    <br>
    地区：
    <select name="area" id="">
    <option value="taiyuan">太原</option>
    <option value="tianjin">天津</option>
    <option value="beijing">北京</option>
    <option value="baoding">保定</option>
    <option value="xiongan">雄安</option>
    </select>
    <br>
    自我评价：
    <textarea name="ziwopingjia" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="提交">
    <?php
    $time=time();echo $time;
    ?>
    <input type="hidden" name="time" value="<?php echo $time;?>">
    </form>
  <?php
    echo __FUNCTION__;
    ?>
    <br>
    <?php
    echo __FILE__;
    ?>
    <br>
    <?php

    echo __NAMESPACE__;
    ?>
    <br>
    <?php
    echo __LINE__;
    $temp="sss";
    $nem= is_numeric($temp);
    
    echo "pp";
    echo "<pre>";
    echo $nem;
    echo "</pre>";
    ?>
    

</body>
<?php
    if($_GET)
    {
        echo "<pre>";
        var_dump($_GET);
        echo "</pre>";
echo $time;
    }
    else{
        echo "重新提交";
    }
    
?>

</html>