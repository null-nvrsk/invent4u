<?php

//$GLOBALS['$pdo'];

$db = 'invent.sqlite';

try {
    $pdo = new PDO('sqlite:'.$db);
} catch (PDOException $e) {
    echo 'Ошибка соединения с БД '.$e->getMessage();
    //TODO: почему-то ошибка не обрабатывается
}
