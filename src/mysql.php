<?php

$connct = 'mysql:dbname=test_database;';
$connct .= 'host=localhost;';
$connct .= 'charset=utf8';

try {
    $sql = new PDO ($connct, 'root', 'root');
    print '接続に成功しました。';
} catch ( PDOException $e ) {
    print "接続エラー:{$e->getMessage()}";
}   

$sql = null;
