<?php
require_once 'inc/headers.php';
require_once 'inc/functions.php';

try {
    $db = openDb();
    $sql = 'select * from item';
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo header('HTTP/1.1 200 OK');
    echo json_encode($result);
} catch (PDOException $pdoex) {
    returnError($pdoex);
}