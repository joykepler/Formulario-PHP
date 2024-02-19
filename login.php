<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE JOY</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background-image: url(fundo.jpg);
    background-size: 100%;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    position: absolute;
    text-align: center;
}

form {
    border: 2px solid white;
    border-radius: 7px;
    padding: 30px 50px;
    backdrop-filter: blur(4px);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 50px;
    width: 400px;
    height: 500px;
}

h1 {
    color: white;
}

input {
    background: none;
}

.input-usuario {
    display: flex;
    align-items: center;
    border: 1px solid white;
    width: 280px;
    height: 40px;
    border-radius: 15px;
}

#usuario {
    width: 250px;
    border: none;
    outline: none;
    font-size: 15px;
    padding: 30px 10px;
    color: white;
} 

.input-usuario i {
    font-size: 18px;
    color: white;
}

#usuario::placeholder {
    color: white;
}

.input-senha {
    display: flex;
    align-items: center;
    border: 1px solid white;
    width: 280px;
    height: 40px;
    border-radius: 15px;
}

#senha {
    width: 250px;
    border: none;
    outline: none;
    font-size: 15px;
    padding: 30px 10px;
    color: white;
}

.input-senha i {
    font-size: 18px;
    color: white;
}

#senha::placeholder {
    color: white;
}

#enviar {
    background-color: white;
    border: none;
    border-radius: 15px;
    height: 35px;
    font-size: 16px;
    width: 280px;
}

#enviar:hover {
    background-color: rgb(216, 216, 216);
}
</style>
</head>
<body>
    <form>
        <h1>Login</h1>
        <div class="input-usuario">
            <input type="text" placeholder="Usuário" id="usuario">
            <i class='bx bx-user'></i>
        </div>
        <div class="input-senha">
            <input type="password" placeholder="Senha" id="senha">
            <i class='bx bxs-lock-alt'></i>
        </div>
        <input type="submit" id="enviar">
    </form>  
</body>
</html>