<?php

$codigo = $_GET['cod'];

include 'conexao.php';

$deletar = "DELETE FROM tb_editora WHERE cd_editora = $codigo";

$query = mysqli_query($conexao, $deletar);

if($query){
    echo "<script>alert('Deletado com sucesso'); history.back();</script>";
} else{
    echo "<script>alert(Error no script php); history.back();</script>";
}




?>