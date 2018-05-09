<?php
// 建造过程比较稳定的时候用
$type = isset($_GET['type']) ? $_GET['type'] : 'thin';
if ($type != '') {
    try {
        $personDirector = null;
        switch ($type) {
            case 'thin':
                $personDirector = new \package\Builder\PersonDirector(new \package\Builder\ThinPersonBuilder());
                break;
            case 'fat':
                $personDirector = new \package\Builder\PersonDirector(new \package\Builder\FatPersonBuilder());
                break;
            default:
                throw new Exception("未知建造类型：$type");
        }
    } catch (Exception $e) {
        showError($e->getMessage());
    }
}
?>
<h2>建造者模式</h2>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">人体绘图</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal">
            <input type="hidden" name="file" value="<?php echo $_DEMO_file; ?>">
            <div class="form-group">
                <label class="col-sm-2 control-label">外观</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="type" value="thin" checked> 瘦
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="type" value="fat"> 胖
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">预览</label>
                <div class="col-sm-10">
                    <?php
                    if ($personDirector) {
                        $personDirector->createPerson();
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    var type = "<?php echo $type; ?>";
    $(function () {
        $('[name=type]').each(function () {
            $(this).prop('checked', $(this).val() === type);
        });
        $('[name=type]').click(function () {
            $('form').submit();
        });
    });
</script>