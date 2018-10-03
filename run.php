<?php 

$pdo = new PDO('mysql:host=database;port=3306;dbname=tm', 'tm', 'tm');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
for ($i = 0; $i < 10000; $i++) {
    $b = microtime(true);
    $stmt = $pdo->query("SELECT * FROM `b_tables` WHERE `bucket` = 'druhy';");
    $stmt->fetchAll();
    $stmt = $pdo->query("SELECT * FROM `b_bucket` WHERE `name` = 'druhy';");
    $stmt->fetchAll();
    $e = microtime(true);
    echo "took " . ($e - $b) . " ms\n";
}

