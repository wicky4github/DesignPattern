<h2>状态模式</h2>
<ul class="list-group">
    <?php
    @ini_set('implicit_flush', 1);
    ob_implicit_flush(1);
    // 模拟时间流动
    $hours = 9;
    // 紧急项目
    $work = new \package\State\Work();
    do {
        if ($hours >= 18) {
            // 进入下班时间，随机生成紧急项目完成状态布尔值
            $work->setFinished(rand(0, 3) === 1);
        }
        $work->setHours($hours);
        echo '<li class="list-group-item">' . $work->writeProgram() . '</li>';
        ob_flush();
        if ($work->getFinished()) {
            break;
        }
        sleep(1);
    } while ($hours++ < 24);
    ?>
</ul>
