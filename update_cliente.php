<?php 

$codigo = $_POST['codigocliente'];
$nome = $_POST['nomecliente'];
$endereco = $_POST['endereçocliente'];
$nrEndereco = $_POST['numeroendereco'];
$nrCPF = $_POST['numerocpf'];
$nrCNPJ= $_POST['numerocnpj'];
$nrTelefone = $_POST['numerotelefone'];


include 'conexao.php';

$update = "UPDATE `tb_cliente` SET `nm_cliente` = '$nome ', `nm_endereco` = '$endereco', `nr_endereco` = '$nrEndereco',`nr_cpf` = '$nrCPF', `nr_cnpj` = '$nrCNPJ', `nr_telefone` = '$nrTelefone' WHERE `cd_cliente` = $codigo
";
$query = mysqli_query($conexao, $update);

echo "Inserido com Sucesso";


?>