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

// create
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