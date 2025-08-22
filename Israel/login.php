<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            margin: 0;
            height: 100vh;
            overflow: hidden;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 40px;
            border-radius: 15px;
            color: #fff;
            width: 400px; /* Tamanho fixo */
            box-sizing: border-box;
            display: none;
        }

        .form-container.active {
            display: block;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 100%;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
           background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        button:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }

        a {
            display: block;
            margin-top: 15px;
            color: dodgerblue;
            text-decoration: none;
            text-align: center;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action = "testLogin.php" method ="POST">
    
    <div id="loginForm" class="form-container active">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <button type="submit" name="submit">Enviar</button>

        <a href="cadastro.php">Não tem conta? Cadastre-se</a>
        <a href="index.php">Voltar para a página principal</a>
    </div>
    </form> 
    
</body>
</html>

