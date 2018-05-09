<?php
// php中的这个设计模式一般用于数据库连接（代理拦截实现主从数据库）
$girl = new \package\Proxy\Girl('小红');
$laowang = new \package\Proxy\LaoWang($girl);
$day1 = $laowang->giveDolls();
$day2 = $laowang->giveFlowers();
$day3 = $laowang->giveChocolate();
?>
<h2>代理模式</h2>
<ul class="list-group">
    <li class="list-group-item">第1天：<?php echo $day1 ?></li>
    <li class="list-group-item">第2天：<?php echo $day2; ?></li>
    <li class="list-group-item">第3天：<?php echo $day3; ?></li>
</ul>