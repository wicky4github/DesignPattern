<h2>适配器模式</h2>
<?php
$adpater = new \package\Adapter\VoltageAdapter();
$bad_adapter = new \package\Adapter\BadAdapter();
$mobile = new \package\Adapter\Mobile();
$mobile->charging($adpater);
echo '<br>';
$mobile->charging($bad_adapter);
?>

