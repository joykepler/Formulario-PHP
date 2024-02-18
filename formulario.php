<?php

if(isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) 
    VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="imagex/png" href="icon.jpg">
    <title>Formulário</title>
</head>
<body>
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