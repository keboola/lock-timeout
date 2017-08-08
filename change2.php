<?php 

$max = 0;
$min = PHP_INT_MAX;
$sum = 0;
$pdo = new PDO('mysql:host=localhost;port=33061;dbname=tm', 'tm', 'tm');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
for ($i = 0; $i < 10000; $i++) {
    $b = microtime(true);
    $stmt = $pdo->query("SELECT `bucket`, SUM(t.`dataSizeBytes`) AS `dataSizeBytes` 
    FROM `b_tables` t 
    WHERE t.`bucket` = 'prvni'
    GROUP BY t.`bucket` 
    ");
    $data = $stmt->fetchAll()[0];
    $pdo->query("UPDATE `b_bucket` SET `dataSizeBytes` = " . $data['dataSizeBytes'] . " WHERE `name` = 'prvni';");
    $e = microtime(true);
    $cnt = ($e - $b);
    if ($cnt > $max) {
        $max = $cnt;
    }
    if ($cnt < $min) {
        $min = $cnt;
    }
    $sum += $cnt;
    echo "took " . $cnt . " ms\n";
}

echo "min " . $min . "\n";
echo "max " . $max . "\n";
echo "avg " . ($sum / 10000)  . "\n";
