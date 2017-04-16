
<!DOCTYPE html>
<!--残缺代码 本来想制作一个表格显示_SERVER常量 但是效果不好 放弃-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre><?php
var_dump($_SERVER);

?>
</pre>

<table>

    <tbody>
        <tr>
        <th>元素名称</th>
        <th>使用形式</th>
        <th>结果</th>
        <th>含义</th>
        </tr>
        <tr>
        <?php
        //想输出几个 跳过数组中的 失败了 不能用
        // $skip=[5,6,7];
        // $length=count($_SERVER);
        // for($i=0;$i<$length;$i++)
        // {
        //     if(in_array($i,$skip))
        //     {
        //         continue;
        //     }
        // }
        $serverArray=[
            "HTTP_HOST","HTTP_USER_AGENT"
        ];
        $time = date('Y-m-d H:i:s T');
        echo "$time";

        ?>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
    </tbody>
</table>
    <?php


?>
</body>
</html>

