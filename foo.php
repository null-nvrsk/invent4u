<?php

include 'config-db.php';

$device_type_id = $_POST['device_type_id'] ?? 1;
$model = $_POST['model'] ?? '';
$specification = $_POST['specification'] ?? '';
$sn = $_POST['sn'] ?? '';
$inventory_number = $_POST['inventory_number'] ?? '';
$install_date = $_POST['install_date'] ?? null;
$workable_id = $_POST['workable_id'] ?? 1;
$is_deleted = $_POST['$is_deleted'] ?? false;

$det_id = $_GET['id'] ?? null;

global $pdo;

// Create
if (isset($_POST['add']))
{
    $sql = ("INSERT INTO devices (
                     device_type_id,
                     model,
                     specification,
                     sn, 
                     inventory_number,
                     install_date, 
                     workable_id, 
                     is_deleted
                ) VALUES (?,?,?,?,?,?,?,false)");
    $query = $pdo->prepare($sql);

//    $install_date_dt = date_create_from_format("d.m.Y", $install_date_str);

//if ($install_date != null)
//    echo date('d.m.Y h:i:s', $install_date);


    $success = $query->execute(
        [$device_type_id, $model, $specification, $sn, $inventory_number, $install_date, $workable_id]);
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
                device_type_id=?, model=?, specification=?, sn=?, inventory_number=?,
                install_date=?, workable_id=?
            WHERE
                id=?");
    $query = $pdo->prepare($sql);
    $success = $query->execute(
        [$device_type_id, $model, $specification, $sn, $inventory_number, $install_date, $workable_id, $det_id]);
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
