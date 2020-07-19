<!DOCTYPE html>
<html>
    <head>
        <!-- create title -->
        <meta charset="utf-8">
        <title>Arithmos Chat</title>
        <meta name="description" content="A place to talk">
        <!-- import css -->
        <link rel="stylesheet" href = "index.css">
        <link rel="shortcut icon" href="images/general/favicon.png" type="image/x-icon"/>

    </head>
    <body class = "bkg">
        <!-- create header-->
        <header>
            
            <h1 class = "header"> <img class = "logo" src = "images/general/logo.PNG">Arithmos Chat</h1>
        </header>

        <!-- welcome user -->
        <?php
        session_start();
        echo "<p>Welcome " . $_SESSION["username"] . "!</p>";
        ?>

        <!-- chat window -->
        <div class = "window">
        <?php
        //connect to messages db
        $conn = new mysqli("localhost" , "root", "", "chat");
        if ($conn->error) die ($conn->error);

        $result = $conn->query("SELECT * FROM MESSAGES");
        if (!$result) die ($conn->error);

        $rows = $result->num_rows;

        for ($j = 0 ; $j < $rows ; ++$j) {
            $result->data_seek($j);
            echo "[" . $result->fetch_assoc()['time'] . "] ";
            $result->data_seek($j);
            echo $result->fetch_assoc()['username'] . ": ";
            $result->data_seek($j);
            echo $result->fetch_assoc()['message'] . "<br>";
        }

        $result->close();
        $conn->close();
        ?>
        </div>

        <!-- send massage -->
        <form action = "message.php" method = "POST">
            <input type = "text" name = "message" placeholder = "Send Message...">
            <input type = "submit">
        </form>