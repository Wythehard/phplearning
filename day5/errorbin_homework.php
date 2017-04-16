<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<style>
span{
    letter-spacing:3px;
    font-size:16px;
    color:red;
}
</style>
</head>
<body>
    <?php
        $error_array=['E_ERROR','E_WARNING','E_PARSE','E_NOTICE','E_CORE_ERROR','E_CORE_WARNING'
        ,'E_COMPILE_ERROR','E_COMPILE_WARNING','E_USER_ERROR','E_USER_WARNING','E_USER_NOTICE','E_STRICT','E_ALL'];
    ?>
    <table border="1">
        <tr>
            <th>错误代码（常量）</th>
            <th>十进制值</th>
            <th>二进制值</th>
        </tr>
        <?php
            foreach($error_array as $key => $value)
            {
        ?>
        <tr> 
        <td><?php echo $value?></td>
        <td><?php echo constant($value)?></td>
         <td  class="jianju"><?php echo str_replace('1','<span>1</span>',str_pad(decbin(constant($value)),16,'0',STR_PAD_LEFT))?></td>
        </tr>        
        <?php
            }
        ?>
    </table>
</body>
</html>