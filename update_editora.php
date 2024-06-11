<?php 

$codigo = $_POST['codigoeditora'];
$nome = $_POST['nomeeditora'];
$endereco = $_POST['endereçoeditora'];
$nrEndereco = $_POST['numeroenderecoeditora'];
$nmBairro = $_POST['nomebairro'];
$nrTelefone= $_POST['numerotelefone'];
$nmGerente = $_POST['nomegerente'];


include 'conexao.php';

$update = "UPDATE `tb_editora` SET `nm_editora` = '$nome ', `nm_endereco` = '$endereco', `nr_endereco` = '$nrEndereco',`nm_bairro` = '$nmBairro', `nr_telefone` = '$nrTelefone', `nm_gerente` = '$nmGerente' WHERE `cd_editora` = $codigo
";
$query = mysqli_query($conexao, $update);

echo "Inserido com Sucesso";


?>