<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список устройств</title>
</head>
<body>
<?php
$pdo = new PDO('sqlite:invent.sqlite');
$statement = $pdo->query("SELECT * FROM devices");
$devices = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<table border="1">
    <tr>
        <td>№</td>
        <td>Тип</td>
        <td>Модель</td>
        <td>Характеристики</td>
        <td>Серийный номер</td>
        <td>Инвентарный номер</td>
        <td>Дата установки</td>
        <td>Работоспособность</td>
    </tr>
    <?php
    foreach ($devices as $row => $device) {
        ?>
        <tr>
            <td>
                <a href="device-details.php?id=<?=htmlentities($device['id'])?>">
                    <?=htmlspecialchars($device['id'])?>
                </a>
            </td>
            <td><?=htmlentities($device['type'])?></td>
            <td><?=htmlspecialchars($device['model'])?></td>
            <td><?=htmlspecialchars($device['specification'])?></td>
            <td><?=htmlspecialchars($device['sn'])?></td>
            <td><?=htmlspecialchars($device['inventory_number'])?></td>
            <td><?=htmlspecialchars($device['install_date'])?></td>
            <td><?=htmlspecialchars($device['workable'])?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
