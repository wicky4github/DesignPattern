<?php
$baomaFactory = new \package\AbstractFactory\Factory\BaomaFactory();
$benchiFactory = new \package\AbstractFactory\Factory\BenchiFactory();
?>
<h2>抽象工厂模式</h2>
<ul class="list-group">
    <li class="list-group-item active">宝马测试工厂开始运作...</li>
    <li class="list-group-item"><?php echo $baomaFactory->installAirConditioner()->work(); ?></li>
    <li class="list-group-item"><?php echo $baomaFactory->installEngine()->work(); ?></li>
</ul>
<ul class="list-group">
    <li class="list-group-item active">奔驰测试工厂开始运作...</li>
    <li class="list-group-item"><?php echo $benchiFactory->installAirConditioner()->work(); ?></li>
    <li class="list-group-item"><?php echo $benchiFactory->installEngine()->work(); ?></li>
</ul>