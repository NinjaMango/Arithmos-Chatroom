<?php
session_start();
//connect to users db
$conn = new mysqli("localhost" , "root", "", "chat");

$message = $_POST["message"];
$username = $_SESSION["username"];

//insert message into db
$result = $conn->query("INSERT INTO MESSAGES VALUES " . "('$username','$message', 'current_timestamp()')");
if (!$result) die ($conn->error);

//redirect to session
header("Location: /session.php")

?>