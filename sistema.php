<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');       
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA JOY</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            width: 100vw;
            background: no-repeat;
            background: url('img/fundo.jpg');
            background-size: cover;
            overflow: hidden;
            background-position: center;
            font-family: "Poppins", sans-serif;
            color: white;
        }
        nav {
            width: 100%;
            height: 80px;
            background-color: purple;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
    </style>
</head> 
<body>
    <nav>
        <h1>Sistema Joy</h1>
        <button href="sair.php">Sair</button>
    </nav>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
</body>
</html>