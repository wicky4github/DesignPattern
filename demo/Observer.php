<?php
$trainTicket = new \package\Observer\TrainTicket();
$trainTicket->addObserver(new \package\Observer\TrainLog());
$trainTicket->addObserver(new \package\Observer\TrainSMS());
$result = [];
$click = 5;
for ($i = 0; $i < $click; $i++) {
    $result[] = $trainTicket->buyTicket();
}
?>
    <h2>观察者模式</h2>
<?php foreach ($result as $res) { ?>
    <ul class="list-group">.
        <?php foreach ($res as $v) { ?>
            <li class="list-group-item"><?php echo $v; ?></li>
        <?php } ?>
    </ul>
<?php } ?>