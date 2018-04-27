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
<!--
<?php if(is_array($person)): $i = 0; $__LIST__ = array_slice($person,1,3,true);if( count($__LIST__)==0 ) : echo "我没数据" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data['name']); ?>-----<?php echo ($data['age']); ?><br><?php endforeach; endif; else: echo "我没数据" ;endif; ?>

<?php if(is_array($person)): foreach($person as $key=>$data): echo ($data['name']); ?>-----<?php echo ($data['age']); ?><br><?php endforeach; endif; ?>
eq=  neq!=  gt> egt>= lt< elt<= heq=== nheq!=== <br>
<?php $__FOR_START_18830__=1;$__FOR_END_18830__=10;for($k=$__FOR_START_18830__;$k <= $__FOR_END_18830__;$k+=1){ echo ($k); ?><br><?php } ?>

<?php if($num > 10): ?>num 大于10
<?php elseif($num < 10): ?>num 小于10
    <?php else: ?>num=10<?php endif; ?>
<?php switch($name): case "laoshi": ?>小明滚出去<?php break;?>
    <?php case "xiaohong": case "xiaohuang": ?>小明，你滚出去<?php break;?>
    <?php default: ?>小明，自己滚出去了<?php endswitch;?>
-->
<!--比较标签的用法
  <比较标签 name='变量名' value='比较的值'></比较标签>

<?php if(($num) == "10"): ?>num=10<?php endif; ?><br>
<?php if(($num) != "11"): ?>num!=11<?php endif; ?>
<?php if(($num) == "10"): ?>num = 10<?php else: ?>num!=10<?php endif; ?>
<?php if(($num) == "11"): ?>num = 11<?php else: ?>num != 11<?php endif; ?>

区间标签 in notin between(1-10) notbetween<br/>
<?php if(!in_array(($num), explode(',',"1, 2, 3"))): ?>不在这个区间<?php endif; ?><br/>
<?php if(in_array(($num), explode(',',"1, 2, 3"))): ?>在这个区间<?php else: ?>不在这个区间<?php endif; ?><br/>

<?php $_RANGE_VAR_=explode(',',"30, 120");if($num<$_RANGE_VAR_[0] || $num>$_RANGE_VAR_[1]):?>不在这个区间<?php endif; ?><br/>
<?php $_RANGE_VAR_=explode(',',"1, 20");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?>确实在这个区间<?php else: ?>不在这个区间<?php endif; ?><br/>

<?php if(in_array(($num), explode(',',"1, 11, 12"))): ?>有11这个数<?php else: ?>没有11这个数<?php endif; ?>

<?php echo ($num>11?'大于11':不大于11); ?>

-->
<?php if(is_array($person)): foreach($person as $key=>$data): if(($data["age"]) >= "18"): echo ($data["name"]); ?>已经成年了<?php else: echo ($data["name"]); ?>还是个孩子<?php endif; ?><br/><?php endforeach; endif; ?>

<?php echo $person[1]['name']; ?>

</body>
</html>