<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="_GETinfo.php">
    <!--要想被$_GET获取多选项 name要用数组命名-->
    <input type="checkbox" name="hobby[]" id="" value="足球">足球
    <input type="checkbox" name="hobby[]" id="" value="篮球">篮球
    <input type="checkbox" name="hobby[]" id="" value="排球">排球
    <input type="checkbox" name="hobby[]" id="" value="羽毛球">羽毛球
    <input type="checkbox" name="hobby[]" id="" value="球球">球球
    <input type="submit" value="提交">
    </form>
</body>
</html>