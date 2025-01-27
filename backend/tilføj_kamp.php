<?php
require_once 'dbcon.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vinder_id = $_POST['vinder_id'];
    $taber_id = $_POST['taber_id'];
    $vinder_score = $_POST['vinder_score'];
    $taber_score = $_POST['taber_score'];

    if ($vinder_id && $taber_id && $vinder_score && $taber_score) {
        $stmt = $pdo->prepare("INSERT INTO kamp (vinder_id, taber_id, vinder_score, taber_score) 
                               VALUES (:vinder_id, :taber_id, :vinder_score, :taber_score)");
        $stmt->execute([
            'vinder_id' => $vinder_id,
            'taber_id' => $taber_id,
            'vinder_score' => $vinder_score,
            'taber_score' => $taber_score
        ]);
        echo "Kamp registreret!";
    } else {
        echo "Alle felter skal udfyldes.";
    }
}
?>
