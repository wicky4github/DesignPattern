<?php
$result = 0;
$num1 = is_numeric($_GET['num1']) ? $_GET['num1'] : 100;  // 单价
$num2 = is_numeric($_GET['num2']) ? $_GET['num2'] : 3;    // 数量
$operation = isset($_GET['operation']) ? $_GET['operation'] : '正常收费';   // 计算方式
if ($operation != '') {
    try {
        // 获取上下文
        $context = new \package\Strategy\CashContext($operation);
        // 计算结果
        $money = $num1 * $num2;                           // 单价 * 数量 = 价格
        $result = $context->getResult($money);
    } catch (Exception $e) {
        $err = $e->getMessage();
    } finally {
        showError($err);
    }
}
?>
<h2>策略模式</h2>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">商场收银系统</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal">
            <input type="hidden" name="file" value="<?php echo $_DEMO_file; ?>">
            <div class="form-group">
                <label for="num1" class="col-sm-2 control-label">单价</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="num1" name="num1" value="<?php echo $num1; ?>"
                           placeholder="输入数字" required min="0">
                </div>
            </div>
            <div class="form-group">
                <label for="num2" class="col-sm-2 control-label">数量</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="num2" name="num2" value="<?php echo $num2; ?>"
                           placeholder="输入数字" required min="0">
                </div>
            </div>
            <div class="form-group">
                <label for="operation" class="col-sm-2 control-label">计算方式</label>
                <div class="col-sm-2">
                    <select name="operation" id="operation" class="form-control">
                        <option>正常收费</option>
                        <option>满300返100</option>
                        <option>打8折</option>
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