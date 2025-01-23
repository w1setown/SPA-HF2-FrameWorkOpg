<?php
require_once

$sql = "SELECT * FROM `match`";
$result = $conn->query($sql);

/* 
    if ($result -> num_rows > 0){
    echo "<table border = '1'>"
    echo * `match` * 
    while ($row = $result -> fetch_assoc()){
    }
    echo "</table>";
    }else {
        echo "No data found.";
    }
*/

$conn -> close();