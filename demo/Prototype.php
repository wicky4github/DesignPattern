<?php
// 暂时不知道这个模式在PHP中有什么作用，只知道能减少内存消耗
$person1 = new \package\Prototype\Person();
?>
<h2>原型模式</h2>
<ul class="list-group">
    <li class="list-group-item">
        <h3>初始对象</h3>
        <p>
            <code>
                &lt;?php<br>
                　　$person1->getProperty()->setName('张三');<br>
                　　var_dump($person1);<br>
                ?&gt;
            </code>
        </p>
        <?php
        $person1->getProperty()->setName('张三');
        var_dump($person1);
        ?>
    </li>
    <li class="list-group-item">
        <h3>浅拷贝对象</h3>
        <p class="alert alert-warning">浅拷贝person对象的私有属性property的地址，因此2个都会属性都会变成<b>李四</b></p>
        <p>
            <code>
                &lt;?php<br>
                　　$person2 = $person1->shallowClone();<br>
                　　$person2->getProperty()->setName('<b>李四</b>');<br>
                　　var_dump($person1);<br>
                　　var_dump($person2);<br>
                ?&gt;
            </code>
        </p>
        <?php
        $person2 = $person1->shallowClone();
        $person2->getProperty()->setName('李四');
        var_dump($person1);
        var_dump($person2);
        ?>
    </li>
    <li class="list-group-item">
        <h3>深拷贝对象</h3>
        <p class="alert alert-success">深拷贝person对象的私有属性property是<b>新对象</b>，因此深拷贝出来的对象改变属性不会影响旧对象</p>
        <p>
            <code>
                &lt;?php <br>
                　　$person3 = $person1->deepClone(); <br>
                　　$person3->getProperty()->setName('王五'); <br>
                　　var_dump($person1); <br>
                　　var_dump($person3); <br>
                ?&gt;
            </code>
        </p>
        <?php
        $person3 = $person1->deepClone();
        $person3->getProperty()->setName('王五');
        var_dump($person1);
        var_dump($person3);
        ?>
    </li>
</ul>