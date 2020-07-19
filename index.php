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

        <form action = "login.php" method = "POST">
            <h1>Login</h1>
            <input type = "text" name = "username" placeholder = "Username">
            <input type = "password" name = "password" placeholder = "Password">
            <input type = "submit">
        </form>

        <form action = "signup.php" method = "POST">
            <h1>Sign Up</h1>
            <input type = "text" name = "username" placeholder = "Username">
            <input type = "password" name = "password" placeholder = "Password">
            <input type = "submit">
        </form>