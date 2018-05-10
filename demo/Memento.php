<h2>备忘录模式</h2>
<?php
echo '<p class="well well-sm">进入游戏：</p>';
// 创建初始角色
$hero = new \package\Memento\Hero(999, 999);
$hero->showState();
// 保存出生状态
$caretaker = new \package\Memento\HeroStateCaretaker();
$born_hero = $hero->saveState();                // 创建备忘录
$caretaker->setState($born_hero, 'born');  // 让管理员管理备忘录
// 开始打架
echo '<p class="well well-sm">开始打架：</p>';
$hero->fight();
$hero->showState();
// 恢复状态
echo '<p class="well well-sm">角色死亡，恢复出生状态：</p>';
$hero->recoveryState($caretaker->getState('born'));
$hero->showState();
?>

