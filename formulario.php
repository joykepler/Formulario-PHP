<?php

if(isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
    VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="imagex/png" href="img/icon.jpg">
    <title>Formulário</title> 
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
         padding: 15px;
         border-radius: 15px;
         width: 20%;
         box-shadow: 7px 5px 18px 8px rgba(0, 0, 0, 0.35);
     }
     fieldset {
         border: 2px solid plum;
     }
     legend {
         border: 1px solid plum;
         padding: 10px;
         text-align: center;
         background-color: plum;
         border-radius: 8px;
     }
     .inputBox {
         position: relative;
     }
     .inputUser {
         background: none;
         border: none;
         border-bottom: 1px solid white;
         outline: none;
         color: white;
         font-size: 15px;
         width: 100%;
         letter-spacing: 2px;
     }
     .labelInput {
         position: absolute;
         top: 0px;
         left: 0px;
         pointer-events: none;
         transition: .5s;
     }
     
     .inputUser:focus ~ .labelInput,
     .inputUser:valid ~ .labelInput{
         top: -20px;
         font-size: 12px;
         color: plum;
     }
     
     #data_nascimento{
         border: none;
         padding: 8px;
         border-radius: 10px;
         outline: none;
         font-size: 15px;
     }
     
     #submit {
         background-image: linear-gradient(to right,rgb(207, 80, 250), rgb(133, 102, 182));
         width: 100%;
         border: none;
         padding: 15px;
         color: white;
         font-size: 15px;
         cursor: pointer;
         border-radius: 10px;
     }      

     .voltar-botao {
        display: flex;
        margin-left: 20px;
     }

     .voltar {
        text-decoration: none;
        opacity: 70%;
        color: white;
        margin-top: 30px;
     }
</style>
</head>
<body>
    <div class="voltar-botao">
    <a href="home.php" class="voltar">Voltar</a>
    </div>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>
                <label for="data_nasc"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nasc" id="data_nasc" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>