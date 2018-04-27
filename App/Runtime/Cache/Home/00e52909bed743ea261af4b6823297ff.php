<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Old six</title>
</head>
<body>
<?php
 echo $name2; ?>
<br>
<?php
echo $name; ?>
<br>
<?php
echo $today; ?>


<?php echo ((isset($me["sex"]) && ($me["sex"] !== ""))?($me["sex"]):'man'); ?><br>
+ - * /<br>
<?php echo ($me[age]+1); ?><br>
<?php echo ($me["age+1"]); ?><!--不能输出数值--><br>
<?php echo (substr(md5($me['name']),0, 5)); ?>
<br>
<?php echo (date('Y-m-d H:i:s',$now)); ?><br>
<?php echo (date('Y-m-d g:i a',time())); ?><br>
<?php echo (THINK_VERSION); ?><br>
<?php echo ($_SERVER['HTTP_HOST']); ?><br>

<?php if(is_array($person)): $i = 0; $__LIST__ = array_slice($person,1,3,true);if( count($__LIST__)==0 ) : echo "我没数据" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data['name']); ?>-----<?php echo ($data['age']); ?><br><?php endforeach; endif; else: echo "我没数据" ;endif; ?>

<?php if(is_array($person)): foreach($person as $key=>$data): echo ($data['name']); ?>-----<?php echo ($data['age']); ?><br><?php endforeach; endif; ?>

</body>
</html>