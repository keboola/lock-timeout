<?php 

$pdo = new PDO('mysql:host=localhost;port=33061;dbname=tm', 'tm', 'tm');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
for ($i = 0; $i < 10000; $i++) {
    $b = microtime(true);
    $stmt = $pdo->query("SELECT * FROM `b_tables`;");
    $stmt->fetchAll();
    $e = microtime(true);
    echo "took " . ($e - $b) . " ms\n";
}

