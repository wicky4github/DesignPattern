<h2>访问者模式</h2>
<p class="well well-sm">不同的类型可以有不同的访问操作，适用于对象结构中对象对应的类 <u class="h4 text-danger">很少改变</u> 的情况</p>
<?php
// 员工列表
$employee_list = new \package\Visitor\EmployeeList();
// 添加员工
$employee_list->addEmployee(new \package\Visitor\FullTimeEmployee("梁思成", 3200.00, 45));
$employee_list->addEmployee(new \package\Visitor\FullTimeEmployee("徐志摩", 2000, 40));
$employee_list->addEmployee(new \package\Visitor\FullTimeEmployee("梁徽因", 2400, 38));
$employee_list->addEmployee(new \package\Visitor\PartTimeEmployee("方鸿渐", 80, 20));
$employee_list->addEmployee(new \package\Visitor\PartTimeEmployee("唐宛如", 60, 18));
// 添加访问者
$hr = new \package\Visitor\HRDepartment();
$employee_list->acceptDepartment($hr);
echo '<hr>';
$finance = new \package\Visitor\FinanceDepartment();
$employee_list->acceptDepartment($finance);
?>

