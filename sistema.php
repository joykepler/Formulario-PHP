<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');       
    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conexao->query($sql);

    // print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA JOY</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #120726;
            color: white;
            text-align: center;
        }
        nav {
            width: 100%;
            height: 80px;
            background-color: #2e1065;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .bemvindo {
            margin: 4rem;
        }
    </style>
</head> 
<body>
<nav>
    <h1>Sistema Joy</h1>
    <a href="sair.php">Sair</a>
</nav>
<div class="bemvindo">
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
</div>

<div class="overflow-x-auto">
  <table class="table-auto border-collapse w-full">
    <thead>
      <tr class="bg-violet-950">
        <th scope="col" class="border px-4 py-2">#</th>
        <th scope="col" class="border px-4 py-2">Nome</th>
        <th scope="col" class="border px-4 py-2">Senha</th>
        <th scope="col" class="border px-4 py-2">Email</th>
        <th scope="col" class="border px-4 py-2">Telefone</th>
        <th scope="col" class="border px-4 py-2">Sexo</th>
        <th scope="col" class="border px-4 py-2">Data de Nascimento</th>
        <th scope="col" class="border px-4 py-2">Cidade</th>
        <th scope="col" class="border px-4 py-2">Estado</th>
        <th scope="col" class="border px-4 py-2">Endereço</th>
        <th scope="col" class="border px-4 py-2">...</th>
      </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td class='border px-4 py-2'>".$user_data["id"]."</td>";
                echo "<td class='border px-4 py-2'>".$user_data["nome"]."</td>";
                echo "<td class='border px-4 py-2'>".$user_data["senha"]."</td>";
                echo "<td class='border px-4 py-2'>".$user_data["email"]."</td>";
                echo "<td class='border px-4 py-2'>".$user_data["telefone"]."</td>";
                echo "<td class='border px-4 py-2'>".$user_data["sexo"]."</td>";
                echo "<td class='border px-4 py-2'>".$user_data["data_nasc"]."</td>";
                echo "<td class='border px-4 py-2'>".$user_data["cidade"]."</td>";
                echo "<td class='border px-4 py-2'>".$user_data["estado"]."</td>";
                echo "<td class='border px-4 py-2'>".$user_data["endereco"]."</td>";
                echo "<td class='border px-4 py-2'>...</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
  </table>
</div>
</body>
</html>