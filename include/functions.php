<?php
/**
 * 浏览器输出提示条
 * @param string $err
 * @param string $class
 */
function showError($err = '', $class = "alert-danger")
{
    if ($err != '') {
        echo "<div id='error' class='alert $class alert-dismissible' role='alert'>$err</div>";
    }
}
