<?php

require_once 'dbcon.php';

if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $name = $_POST['Name'];

    $sql = "INSERT INTO participant(`name`) VALUES ('$name')";

    if ($conn -> query($sql) === TRUE){
        echo "Participant has been added!"
    } else {
        echo "ERROR:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}