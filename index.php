<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>设计模式演示</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="static/css/index.css">
    <script src="static/js/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" style="height: 100%">
    <div class="row" style="height: 100%">
        <ul class="left col-xs-2 list-group">
            <li class="list-group-item"><a href="?file=">Index</a></li>
            <?php
            $files = glob('./demo/*');
            foreach ($files as $file) {
                $info = pathinfo($file);
                $filename = $info['filename'];
                echo "<li class='list-group-item'><a href='?file=$filename'>$filename</a></li>";
            }
            ?>
        </ul>
        <?php
        $file = $_GET['file'];
        $path = './demo/' . $file . '.php';
        ?>
        <div class="right col-xs-10">
            <?php if (is_file($path)) { include $path; ?>
            <?php } else { ?>
                <h2>请选择</h2>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>