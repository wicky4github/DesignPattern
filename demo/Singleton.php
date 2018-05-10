<h2>单例模式</h2>
<?php
$db1 = \package\Singleton\Db::getInstance();
$db2 = \package\Singleton\Db::getInstance();
var_dump('2个对象是否相等：' . ($db1 === $db2 ? 'true' : 'false'));
echo \package\Singleton\Db::getInstance()->connect();
?>
