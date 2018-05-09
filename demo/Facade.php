<?php
$night = isset($_GET['night']) ? $_GET['night'] : 0;
$switch = isset($_GET['switch']) ? $_GET['switch'] : 0;
$switchFacade = new \package\Facade\SwitchFacade($night);
$result = [];
if ($switch) {
    $result = $switchFacade->turnOn();
} else {
    $result = $switchFacade->turnOff();
}
?>
<h2>外观模式</h2>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">家居系统</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal">
            <input type="hidden" name="file" value="<?php echo $_DEMO_file; ?>">
            <div class="form-group">
                <label for="num1" class="col-sm-2 control-label">时间：</label>
                <div class="col-sm-10">
                    <label class="radio-inline"><input type="radio" name="night" value="0">白天</label>
                    <label class="radio-inline"><input type="radio" name="night" value="1">夜晚</label>
                </div>
            </div>
            <div class="form-group">
                <label for="num2" class="col-sm-2 control-label">电源：</label>
                <div class="col-sm-10">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="switch" value="1">
                        <?php if ($switch) { ?>
                            On
                        <?php } else { ?>
                            Off
                        <?php } ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="num2" class="col-sm-2 control-label">家居状态：</label>
                <div class="col-sm-10">
                    <?php echo implode("<br>", $result); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input type="submit" value="确定" class="btn btn-info">
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    var Night = "<?php echo $night; ?>";
    var Switch = "<?php echo $switch; ?>";
    $(function () {
        $('[name=night]').each(function () {
            $(this).prop('checked', $(this).val() === Night);
        });
        $('[name=switch]').each(function () {
            $(this).prop('checked', $(this).val() === Switch);
        });
    });
</script>