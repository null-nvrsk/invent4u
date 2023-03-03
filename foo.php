<?php

include 'config-db.php';

$type = $_POST['type'];
$model = $_POST['model'];
$specification = $_POST['specification'];
$sn = $_POST['sn'];
$inventory_number = $_POST['inventory_number'];
$install_date = $_POST['install_date'];
$workable = $_POST['workable'];
$det_id = $_GET['id'];

// Create
if (isset($_POST['add']))
{
    $sql = ("INSERT INTO devices (
                     type,
                     model,
                     specification,
                     sn, 
                     inventory_number,
                     install_date, 
                     workable
                ) VALUES (?,?,?,?,?,?,?)");
    $query = $pdo->prepare($sql);
    $success = $query->execute(
        [$type, $model, $specification, $sn, $inventory_number, $install_date, $workable]);
    if ($success) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}

// Read
$sql = $pdo->prepare("SELECT * FROM devices WHERE is_deleted = 0");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);

// Update
if (isset($_POST['edit']))
{
    $sql = ("UPDATE 
                devices
            SET
                type=?, model=?, specification=?, sn=?, inventory_number=?,
                install_date=?, workable=?
            WHERE
                id=?");
    $query = $pdo->prepare($sql);
    $success = $query->execute(
        [$type, $model, $specification, $sn, $inventory_number, $install_date, $workable, $det_id]);
    if ($success) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}

// Delete
if (isset($_POST['delete'])) {
    // $sql = ("DELETE FROM devices WHERE id = ?");
    $sql = ("UPDATE devices 
                SET is_deleted = 1
                WHERE id = ?");

    $query = $pdo->prepare($sql);
    $success = $query->execute([$det_id]);
    if ($success) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

}
