<?php
    //connect to users db
    $conn = new mysqli("localhost" , "root", "", "chat");

    $result = $conn->query("SELECT * FROM USERS");
    if (!$result) die ($conn->error);

    $rows = $result->num_rows;

    //validate user info and redirect to session and set session to assign info to user
    for ($j = 0 ; $j < $rows ; ++$j) {
        $result->data_seek($j);
        if ($_POST['username'] == $result->fetch_assoc()['username']){
            $result->data_seek($j);
            if ($_POST['password'] == $result->fetch_assoc()['password']){
                session_start();
                header("Location: /session.php");
                $result->data_seek($j);
                $_SESSION["username"] = $result->fetch_assoc()['username'];
                $result->close();
                $conn->close();
            }
        }
    }

    echo "thing not found LOL";

    $result->close();
    $conn->close();
?>
