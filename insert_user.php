<?php 

$nome = $_POST['nome'];
$setor = $_POST['setor'];
$login = $_POST['login'];
$senha = password_hash ($_POST['senha'], PASSWORD_DEFAULT);
$confirme = password_hash ($_POST['confirme'], PASSWORD_DEFAULT);

include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (NULL,'$nome','$setor','$login','$senha','$confirme')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com Sucesso";

if($query){
    echo "<script>alert('Cadastrado com sucesso'); history.back();</script>";
} else{
    echo "<script>alert(Error no script php); history.back();</script>";
}



?>