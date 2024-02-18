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
</style>