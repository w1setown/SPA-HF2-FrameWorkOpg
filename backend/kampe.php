<?php
require_once 'dbcon.php';

$sql = "SELECT k.tidspunkt, 
               s1.navn AS vinder, 
               s2.navn AS taber, 
               k.vinder_score, 
               k.taber_score 
        FROM kamp k
        JOIN spiller s1 ON k.vinder_id = s1.spiller_id
        JOIN spiller s2 ON k.taber_id = s2.spiller_id
        ORDER BY k.tidspunkt DESC LIMIT 10";
$stmt = $pdo->query($sql);

echo "<table>";
echo "<tr><th>Tidspunkt</th><th>Vinder</th><th>Score</th><th>Taber</th><th>Score</th></tr>";
while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>{$row['tidspunkt']}</td>";
    echo "<td>{$row['vinder']}</td>";
    echo "<td>{$row['vinder_score']}</td>";
    echo "<td>{$row['taber']}</td>";
    echo "<td>{$row['taber_score']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
