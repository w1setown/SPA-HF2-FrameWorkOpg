<?php
require_once

$sql = "SELECT * FROM player";
$result = $conn->query($sql);

/* 
    if ($result -> num_rows > 0){
    echo "<table border = '1'>"
    echo * PLAYER | POINTS | WINRATE| WINS | LOSSES * 
    while ($row = $result -> fetch_assoc()){
    }
    echo "</table>";
    }else {
        echo "No data found.";
    }
*/
$conn -> close();