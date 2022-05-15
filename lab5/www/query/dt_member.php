<?php

require("../funtion/condb.php");

$sql = "SELECT * from tb_member ORDER BY username ASC";
$result = $mysqli->query($sql);
?>

<table>
    <tr>
        <td>ID</td>
        <td>username</td>
        <td>password</td>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["username"] ?></td>
            <td><?= $row["password"] ?></td>
        </tr>
    <?php
    }
    ?>
</table>