<?php
 
$nome_editora = $_POST['nomeEditora'];
$endereco_editora = $_POST['enderecoEditora'];
$numero_endereco_editora = $_POST['numeroEnderecoEditora'];
$nome_bairro_editora = $_POST['nomeBairroEditora'];
$telefone_editora = $_POST['numeroTelefoneEditora'];
$nome_gerente = $_POST['nomeGerente'];
 
include 'conexao.php';
 
$insert = "INSERT INTO tb_editora VALUES (NULL,'$nome_editora','$endereco_editora','$numero_endereco_editora','$nome_bairro_editora','$telefone_editora','$nome_gerente')";
 
$query = mysqli_query($conexao, $insert);
 
echo "Inserido com Sucesso";

if($query){
    echo "<script>alert('Cadastrado com sucesso'); history.back();</script>";
} else{
    echo "<script>alert(Error no script php); history.back();</script>";
}
 
 
?>