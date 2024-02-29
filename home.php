<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE JOY</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
         height: 100vh;
         width: 100vw;
         background: no-repeat;
         background: url('img/fundo.jpg');
         background-size: cover;
         overflow: hidden;
         background-position: center;
         font-family: "Poppins", sans-serif;
        }

        .box {
         color: white;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%,-50%);
         backdrop-filter: blur(10px);
         padding: 30px;
         border-radius: 15px;
         width: 20%;
         box-shadow: 7px 5px 18px 8px rgba(0, 0, 0, 0.35);
         display: flex;
         justify-content: space-around;
         border: 1px solid plum;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: plum;
        }

    </style>
</head>
<body>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>
