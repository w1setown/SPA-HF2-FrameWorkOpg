<?php
require_once 'dbcon.php';

$sql = "SELECT * FROM spiller ORDER BY points DESC";
$stmt = $pdo->query($sql);

echo "<table>";
echo "<tr><th>ID</th><th>Navn</th><th>Points</th><th>Win%</th></tr>";
while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>{$row['spiller_id']}</td>";
    echo "<td>{$row['navn']}</td>";
    echo "<td>{$row['points']}</td>";
    echo "<td>{$row['win_percent']}%</td>";
    echo "</tr>";
}
echo "</table>";
?>
