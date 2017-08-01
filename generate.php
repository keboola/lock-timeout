<?php

$max = 0;
$min = PHP_INT_MAX;
$sum = 0;
$pdo = new PDO('mysql:host=localhost;port=33061;dbname=tm', 'tm', 'tm');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
for ($i = 0; $i < 1000; $i++) {
    $b = microtime(true);
    $sql = "INSERT INTO `b_bucket` (`name`, `dataSizeBytes`) VALUES ('" . $i . "', '" . rand(10, 1000) . "');";
    $stmt = $pdo->query($sql);
    $e = microtime(true);
    $cnt = ($e - $b);
    echo "took " . $cnt . " ms\n";
}

for ($i = 0; $i < 10000; $i++) {
    $b = microtime(true);
    $stmt = $pdo->query("INSERT INTO `b_tables` (`name`, `bucket`, `dataSizeBytes`) VALUES ('" . rand(10, 100000) . "', '" . rand(0, 1000) . "', '" . rand(10, 1000) . "');");
    $e = microtime(true);
    $cnt = ($e - $b);
    echo "took " . $cnt . " ms\n";
}

