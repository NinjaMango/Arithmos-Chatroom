<?php
    //connect to users db
    $conn = new mysqli("localhost" , "root", "", "chat");

    //insert user info into db YO CHINMAY PUT SOME VALIDATION HERE DUDE ITS AN ABSOLUTE MESS
    $username = $_POST['username'];
    $password = $_POST['password'];
    $insert = $conn->query("INSERT INTO USERS VALUES" . "('$username', '$password')");

    //redirect to session
    session_start();
    header("Location: /session.php");
     $_SESSION["username"] = $username;

    
    $conn->close();
?>
