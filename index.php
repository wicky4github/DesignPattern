<?php
error_reporting(E_ERROR);
require_once 'vendor/autoload.php';
require_once 'include/functions.php';
?>
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
                if ($filename == 'package') {
                    continue;
                }
                echo "<li class='list-group-item'><a href='?file=$filename'>$filename</a></li>";
            }
            ?>
        </ul>
        <?php
        isset($_GET['file']) and $file = $_GET['file'];
        $path = './demo/' . $file . '.php';
        ?>
        <div class="right col-xs-10">
            <?php if (is_file($path)) { ?>
                <?php include $path; ?>
            <?php } else { ?>
                <?php
                if ($file != '') {
                    showError('案例不存在！');
                }
                ?>
                <h2>请选择一个设计模式案例</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="table">
                        <thead>
                        <tr>
                            <th>案例</th>
                            <th>模式</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <script>
                    function getTrClass(i) {
                        if (i % 9 === 1) return 'active';
                        if (i % 9 === 3) return 'success';
                        if (i % 9 === 5) return 'warning';
                        if (i % 9 === 7) return 'danger';
                        if (i % 9 === 9) return 'info';
                        return '';
                    }

                    $(function () {
                        $.get('static/js/map.json', function (map) {
                            console.log(map);
                            for (var i = 0, count = map.length, body = '', trClass = ''; i < count; i++) {
                                trClass = getTrClass(i + 1);
                                body += '<tr class="' + trClass + '" data-href="?file=' + map[i].file + '">';
                                body += '<td>' + map[i].file + '</td>';
                                body += '<td>' + map[i].name + '</td>';
                                body += '</tr>';
                            }
                            $('#table tbody').append(body);
                        });
                        $('#table').delegate('tr', 'click', function () {
                            window.location.href = $(this).data('href');
                        });
                    });
                </script>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>