<?php

// Recebendo dados do formulario

$nome = $_POST['login'];
$senha = $_POST['senha'];

// incluindo arquivo de conexão

include 'conexao.php';

// selecionar os dados no banco de dados

$select = "SELECT * FROM tb_user WHERE login = '$nome'";

$query = mysqli_query($conexao, $select);

$result = mysqli_fetch_array($query);

// Dados do banco armazenado na variavel 

$name_banco = $result ['login'];
$senha_banco = $result ['senha'];

//Comparação para acessar o sistema

if ($nome == $name_banco && password_verify($senha, $senha_banco)){

    session_start();
    $_SESSION['username'] = $name_banco;
    header('location: cadastro_cliente2.php');

} 
else{
    echo "<script>alert ('Usuario Invalido!'); history.back()</script>";

}

?>