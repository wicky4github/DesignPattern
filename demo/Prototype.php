<?php
// 暂时不知道这个模式在PHP中有什么作用，只知道能减少内存消耗
$person1 = new \package\Prototype\Person();
?>
<h2>原型模式</h2>
<ul class="list-group">
    <li class="list-group-item">
        <?php
        $person1->getProperty()->setName('张三');
        var_dump($person1);
        ?>
    </li>
    <li class="list-group-item">
        <?php
        // 浅拷贝person对象的私有属性property的地址，因此2个都会属性都会变成李四
        $person2 = $person1->shallowClone();
        $person2->getProperty()->setName('李四');
        var_dump($person1);
        var_dump($person2);
        ?>
    </li>
    <li class="list-group-item">
        <?php
        // 深拷贝person对象的私有属性property是新对象，因此深拷贝出来的对象改变属性不会影响旧对象
        $person3 = $person1->deepClone();
        $person3->getProperty()->setName('王五');
        var_dump($person1);
        var_dump($person3);
        ?>
    </li>
</ul>