<?php
$default = 'T 500 O 2 E 0.5 G 0.5 A 3 E 0.5 G 0.5 D 3 E 0.5 G 0.5 A 0.5 O 3 C 1 O 2 A 0.5 G 1 C 0.5 E 0.5 D 3 ';
$example = <<<"EXP"
例（{$default}）, O 代表音阶 CDEFGAB 代表音符，T 代表音速
EXP;
$text = isset($_POST['text']) ? $_POST['text'] : $default;
preg_match_all("/[A-Z]\s\d+\.?\d*/", $text, $matches);
$text = implode(" ", $matches[0]);
?>
    <h2>解释器模式</h2>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">钢琴模拟器</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post">
                <input type="hidden" name="file" value="<?php echo $_DEMO_file; ?>">
                <div class="form-group">
                    <label class="col-sm-2 control-label">乐谱</label>
                    <div class="col-sm-10">
                    <textarea class="form-control text-justify" name="text" id="text" cols="30" rows="10"
                              placeholder="<?php echo $example; ?>>"><?php echo $text; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">解析</label>
                    <div class="col-sm-10">
                        <div class="form-control text-justify" style="height: auto;">
                            <?php
                            if ($text != '') {
                                try {
                                    $context = new \package\Interpreter\PlayContext($text);
                                    while (strlen($context->getText()) > 0) {
                                        $key = substr($context->getText(), 0, 1);
                                        $expression = \package\Interpreter\ExpressionFactory::getExpression($key);
                                        echo $expression->interpret($context) . '&nbsp;';
                                    }
                                } catch (Exception $e) {
                                    $err = $e->getMessage();
                                }
                            } else {
                                echo '请输入乐谱';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input type="submit" class="btn btn-info" value="提交">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
if (isset($err)) {
    showError($err);
}
?>