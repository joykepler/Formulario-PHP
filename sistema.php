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
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
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
<div class="flex justify-center mb-16 gap-3">
    <input type="search" placeholder="Pesquisar" id="pesquisar" class="rounded w-64 text-black p-2">
    <button onclick="searchData()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
  <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
        </svg>
    </button>
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
                echo "<td class='border px-4 py-2 flex justify-around'>
                    <a href='edit.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
  <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125'/> 
                    </a>
                    <a href='edit.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
  <path stroke-linecap='round' stroke-linejoin='round' d='m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0' />
</svg>
                    </a>
                    </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
  </table>
</div>
</body>
<script>
    let search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter")
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>