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

    如果要增加一个品牌（NewBrand）和软件（NewSoft），就要增加个6类：
        NewBrand, NewBrandGame, NewBrandContact, NewBrandNewSoft, SamsungNewSoft, HuaweiNewSoft
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
    如果要增加一个品牌和软件，只需要添加 NewBrand, NewSoft 2个类
</pre>