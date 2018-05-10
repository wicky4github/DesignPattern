<h2>享元模式</h2>
<?php
$factory = new \package\Flyweight\WebsiteFactory();
$show1 = $factory->getWebsite('产品展示');
echo $show1->useWebsite(new \package\Flyweight\User('用户1')) . '<br>';
$show2 = $factory->getWebsite('产品展示');
echo $show2->useWebsite(new \package\Flyweight\User('用户2')) . '<br>';
$show3 = $factory->getWebsite('产品展示');
echo $show3->useWebsite(new \package\Flyweight\User('用户3')) . '<br>';
$blog1 = $factory->getWebsite('博客');
echo $blog1->useWebsite(new \package\Flyweight\User('用户4')) . '<br>';
$blog2 = $factory->getWebsite('博客');
echo $blog2->useWebsite(new \package\Flyweight\User('用户5')) . '<br>';
$blog3 = $factory->getWebsite('博客');
echo $blog3->useWebsite(new \package\Flyweight\User('用户6')) . '<br>';
echo '网站分类总数：' . $factory->getCount() . '<br>';
?>
<p class="well well-sm">这个模式用于解决内存开销问题，如围棋游戏，如果不用这个模式，就需要新建361个棋子对象实例，用了享元模式，就只会有2个实例（棋子，状态）</p>
