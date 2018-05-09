<?php
$result = 0;
$num1 = is_numeric($_GET['num1']) ? $_GET['num1'] : 1;
$num2 = is_numeric($_GET['num2']) ? $_GET['num2'] : 1;
$operation = isset($_GET['operation']) ? $_GET['operation'] : '+';
if ($operation != '') {
    try {
        // 创建工厂
        $factory = new \package\SimpleFactory\OperationFactory();
        // 获取实例
        $oper = $factory->createOperation($operation);
        // 计算结果
        $oper->num1 = $num1;
        $oper->num2 = $num2;
        $result = $oper->getResult();
    } catch (Exception $e) {
        $err = $e->getMessage();
    } finally {
        showError($err);
    }
}
?>
<h2>简单工厂模式</h2>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">计算器</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal">
            <input type="hidden" name="file" value="<?php echo $_DEMO_file; ?>">
            <div class="form-group">
                <label for="num1" class="col-sm-2 control-label">数字1</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="num1" name="num1" value="<?php echo $num1; ?>"
                           placeholder="输入数字" required>
                </div>
            </div>
            <div class="form-group">
                <label for="num2" class="col-sm-2 control-label">数字2</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="num2" name="num2" value="<?php echo $num2; ?>"
                           placeholder="输入数字" required>
                </div>
            </div>
            <div class="form-group">
                <label for="operation" class="col-sm-2 control-label">操作符</label>
                <div class="col-sm-2">
                    <select name="operation" id="operation" class="form-control">
                        <option>+</option>
                        <option>-</option>
                        <option>*</option>
                        <option>/</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">运算结果：<?php echo $result; ?></button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    var operation = "<?php echo $operation; ?>";
    $(function () {
        $('#operation').find('option').each(function () {
            $(this).prop('selected', $(this).val() === operation);
        });
    });
</script>