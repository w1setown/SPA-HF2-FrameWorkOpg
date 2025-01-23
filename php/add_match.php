<?php

require_once 'dbcon.php';

if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    // $player = $_POST['player']; // I need to be able to add 2 players to a match,
    $result = $_POST['result'];
    $winner = $_POST['winner'];
    $loser = $_POST['loser'];
    // SELECT date and time of when the match took place
    // Maybe player is useless, since there can only be two player at a time in a match, so we can just look at the winner/loser
    

    $sql = "INSERT INTO /* match table */(/*player(s)*/, `result`,`winner`, `loser` ) VALUES (/*player(s)*/, $result, '$winner', '$loser')";

    if ($conn -> query($sql) === TRUE){
        echo "Match has been added!"
    } else {
        echo "ERROR:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}