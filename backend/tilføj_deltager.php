<?php
require_once 'dbcon.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $navn = $_POST['navn'];
    if (!empty($navn)) {
        $stmt = $pdo->prepare("INSERT INTO spiller (navn) VALUES (:navn)");
        $stmt->execute(['navn' => $navn]);
        echo "Deltager tilføjet!";
    } else {
        echo "Navn kan ikke være tomt.";
    }
}
?>
