<h2>迭代器模式</h2>
<?php
// php 自带 Iterator
$users = new \package\Iterator\Users();
?>
<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($users as $index => $user) {
        echo <<<"TR"
        <tr>
            <td>$user[id]</td>
            <td>$user[username]</td>
        </tr>
TR;
    }
    ?>
    </tbody>
</table>
