<h2>责任链模式</h2>
<?php
// 管理层
$ceo = new \package\ChainOfResponsibility\CEO('肿柴');
$chief = new \package\ChainOfResponsibility\Chief('钟健');
$manager = new \package\ChainOfResponsibility\Manager('井莉');
$manager->setSuperior($chief);
$chief->setSuperior($ceo);
// 申请
$application = new \package\ChainOfResponsibility\Application();
// 客户端只向经理提出申请，但不知道具体决策的人是谁
try {
    // 提出请假3天申请
    $application->type = '请假';
    $application->number = 3;
    echo $manager->handleApplication($application) . '<br>';
    // 提出请假5天申请
    $application->type = '请假';
    $application->number = 5;
    echo $manager->handleApplication($application) . '<br>';
    // 提出请假31天申请
    $application->type = '请假';
    $application->number = 31;
    echo $manager->handleApplication($application) . '<br>';
    // 提出加薪500元
    $application->type = '加薪';
    $application->number = 500;
    echo $manager->handleApplication($application) . '<br>';
    // 提出加薪1000元
    $application->type = '加薪';
    $application->number = 1000;
    echo $manager->handleApplication($application) . '<br>';
} catch (Exception $e) {
    showError($e->getMessage());
}
?>


