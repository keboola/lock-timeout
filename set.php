<?php 

$pdo = new PDO('mysql:host=localhost;port=33061;dbname=tm', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
for ($i = 0; $i < 10000; $i++) {
    $stmt = $pdo->query("SET GLOBAL innodb_lock_wait_timeout = 1;");
}

