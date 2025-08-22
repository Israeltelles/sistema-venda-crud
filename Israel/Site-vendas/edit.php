<?php
if (!empty($_GET['id'])) {

    include_once('config.php');

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM clientes WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0)
    {
        while ($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome_completo'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
            $data_nascimento = $user_data['data_nascimento'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
            $tipo_conta = $user_data['tipo_conta'];
        }
    } 
    else
    {
        header('Location: sistema.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
           background-color: rgba(0, 0, 0, 0.9);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
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
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
        
        a {
            display: block;
            margin-top: 15px;
            color: dodgerblue;
            text-decoration: none;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div class="box">
        <form action="cadastro.php" method="post">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
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
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <input type="checkbox" id="mostrarSenha" onclick="toggleSenha()">
                <label for="mostrarSenha">Mostrar senha</label>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
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
                <p>Tipo de conta:</p>
                <input type="radio" id="cliente" name="tipo_conta" value="cliente" required>
                <label for="vendedor">Cliente</label>
                <br>
                <input type="radio" id="vendedor" name="tipo_conta" value="vendedor" required>
                <label for="vendedor">Vendedor</label>
                <br>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <a href="login.php">Já tem conta? Entre</a>
            </fieldset>
        </form>
    </div>

<script>
    function toggleSenha() {
    var campoSenha = document.getElementById("senha");
    if (campoSenha.type === "password") {
        campoSenha.type = "text";
    } else {
        campoSenha.type = "password";
    }
}
</script>
</body>
</html>