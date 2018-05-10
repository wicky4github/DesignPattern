<h2>中介者模式</h2>
<p class="well well-sm">一般应用于一组对象以定义良好但是复杂的方式进行通信的场合，以及想定制一个分步在多个类中的行为，而不想生成太多的子类的场合</p>
<?php
$us = new \package\Mediator\User('US');
$jp = new \package\Mediator\User('JP');
echo $us->showMessage('不要搞事！') . '<br>';
echo $jp->showMessage('好的！') . '<br>';
?>

