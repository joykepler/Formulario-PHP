<?php

    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
        print_r($result);

    }
    header('Location: sistema.php');

?>