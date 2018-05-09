<?php
// 提取公共部分代码，便于维护，但是，子类执行的结果影响了父类的结果，会增加代码阅读的难度
$paperA = new \package\TemplateMethod\TestPaperA();   // 陈独秀
$paperB = new \package\TemplateMethod\TestPaperB();   // 搞事情
?>
<h2>模板方法模式</h2>
<ul class="list-group">
    <li class="list-group-item">
        <p><b>陈独秀</b>写作业：</p>
        <?php $paperA->question1(); ?> <br>
        <?php $paperA->question2(); ?>
    </li>
    <li class="list-group-item">
        <p><b>搞事情</b>写作业：</p>
        <?php $paperB->question1(); ?> <br>
        <?php $paperB->question2(); ?>
    </li>
</ul>