<h2>组合模式</h2>
<?php

$root = new \package\Composite\ConcreteCompany('北京总公司');
$root->add(new \package\Composite\HRDepartment('总公司人力资源部'));
$root->add(new \package\Composite\FinanceDepartment('总公司财务部'));

$shanghai = new \package\Composite\ConcreteCompany('上海华东分公司');
$shanghai->add(new \package\Composite\HRDepartment('华东分公司人力资源部'));
$shanghai->add(new \package\Composite\FinanceDepartment('华东分公司财务部'));
$root->add($shanghai);

$nanjing = new \package\Composite\ConcreteCompany('南京办事处');
$nanjing->add(new \package\Composite\HRDepartment('南京办事处人力资源部'));
$nanjing->add(new \package\Composite\FinanceDepartment('南京办事处财务部'));
$shanghai->add($nanjing);

$hangzhou = new \package\Composite\ConcreteCompany('杭州办事处');
$hangzhou->add(new \package\Composite\HRDepartment('杭州办事处人力资源部'));
$hangzhou->add(new \package\Composite\FinanceDepartment('杭州办事处财务部'));
$shanghai->add($hangzhou);

echo "<p class='well'>结构图</p>";
$root->display(1);
echo "<p class='well'>职责</p>";
$root->duty();
?>
