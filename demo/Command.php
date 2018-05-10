<h2>命令模式</h2>
<?php
$invoker = new \package\Command\Waiter();
$receiver1 = new \package\Command\Chef();
$command1 = new \package\Command\MakeMutton($receiver1);
$command2 = new \package\Command\MakeChicken($receiver1);
// 添加命令
$invoker->addOrder($command1);
$invoker->addOrder($command2);
$invoker->cancelOrder($command2);
// 执行命令
$invoker->notify();
?>

