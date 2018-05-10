<pre>
    紧耦合：
        Game
            - SamsungGame
            - HuaweiGame
        Contact
            - SamsungContact
            - HuaweiContact
        Brand
            - Samsung
            - Huawei
    结构：
                                     Brand
                                       |
                    |---------------------------------|
                Samsung                             Huawei
                   |                                  |
                  / \                                / \
        SamsungGame SamsungContact          HuaweiGame  HuaweiContact

    如果要增加一个品牌/软件，就要加多2个类（NewBrandGame，NewBrandContact）；
</pre>
<h2>桥接模式</h2>
<?php
$samsung = new \package\Bridge\Brand\Samsung();
$samsung->setSoft(new \package\Bridge\Software\Game());
$samsung->runSoft();
$samsung->setSoft(new \package\Bridge\Software\Contact());
$samsung->runSoft();
?>
<?php
$huawei = new \package\Bridge\Brand\Huawei();
$huawei->setSoft(new \package\Bridge\Software\Game());
$huawei->runSoft();
$huawei->setSoft(new \package\Bridge\Software\Contact());
$huawei->runSoft();
?>
<pre>
    松耦合：
        SoftWare
            - Game
            - Contact
        Brand
            - Samsung
            - Huawei
    结构：
                           Brand ◇------------------- Software
                             |                            |
                    |----------------|          |-------------------|
                Samsung           Huawei      Game                Contact
</pre>