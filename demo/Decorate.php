<?php
$result = 0;
$variety = $_GET['variety'];
$dressing = $_GET['dressing'];
if ($variety != '') {
    try {
        switch ($variety) {
            case 'decaf':
                $coffee = new \package\Decorate\Decaf();
                break;
            case 'espresso':
                $coffee = new \package\Decorate\Espresso();
                break;
            default:
                throw new Exception("未知品种：$variety");
        }
        foreach ($dressing as $v) {
            switch ($v) {
                case 'mocha':
                    $coffee = new \package\Decorate\Mocha($coffee);
                    break;
                case 'whip':
                    $coffee = new \package\Decorate\Whip($coffee);
                    break;
            }
        }
        $result = $coffee->cost();
    } catch (Exception $e) {
        $err = $e->getMessage();
    } finally {
        showError($err);
    }
}
?>
<h2>装饰器模式</h2>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">咖啡店</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal">
            <input type="hidden" name="file" value="<?php echo $_DEMO_file; ?>">
            <div class="form-group">
                <label class="col-sm-2 control-label">品种</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="variety" value="decaf">
                        脱咖啡因咖啡（￥<?php echo \package\Decorate\Decaf::$cost; ?>）
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="variety" value="espresso">
                        浓缩咖啡（￥<?php echo \package\Decorate\Espresso::$cost; ?>）
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">调味料</label>
                <div class="col-sm-10">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="dressing[]" value="mocha">
                        摩卡（￥<?php echo \package\Decorate\Mocha::$cost; ?>）
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="dressing[]" value="whip">
                        鲜奶油（￥<?php echo \package\Decorate\Whip::$cost; ?>）
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">价格：￥<?php echo $result; ?></button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    var variety = "<?php echo $variety; ?>";
    var dressing = JSON.parse('<?php echo json_encode($dressing) ?>');
    $(function () {
        $('[name=variety]').each(function () {
            $(this).prop('checked', $(this).val() === variety);
        });
        $('[name="dressing[]"]').each(function () {
            $(this).prop('checked', dressing.indexOf($(this).val()) !== -1);
        });
    });
</script>