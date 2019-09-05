<?php
$dsn = 'mysql:dbname=test;host=myphp_db_1;charset=UTF8;';
$user = 'root';
$password = 'example';

try {
    $dbh = new PDO($dsn, $user, $password);
    $stmt = $dbh->prepare('show databases');
    $result = $stmt->execute();
    $stateFetchResult = $stmt->fetchAll();
    var_dump($result);
    echo '<pre>';
    highlight_string(var_export($stateFetchResult));
    echo '</pre>';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}