<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'conexao.php';
    $codigo = $_GET['cod'];
    $select = "SELECT * FROM tb_editora where cd_editora = $codigo";
    $query = mysqli_query($conexao, $select);
    $result = mysqli_fetch_array($query);
    ?>
    <div class="container text-center">
        <div class="row">
          <div class="col"></div>
          <div class="col">
            <form class="user" action="update_editora.php" method="post">  
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Código</label>
                  <input type="text" value="<?php echo $result['cd_editora'];?>" class="form-control" id="exampleInputEmail1" name="codigoeditora" aria-describedby="emailHelp" placeholder="Digite o seu código">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome</label>
                  <input type="text" value="<?php echo $result['nm_editora'];?>" class="form-control" id="exampleInputEmail1" name="nomeeditora" aria-describedby="emailHelp" placeholder="Digite o seu nome">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Endereço</label>
                    <input type="text" value="<?php echo $result['nm_endereco'];?>" class="form-control" id="exampleInputEmail1" name="endereçoeditora" aria-describedby="emailHelp" placeholder="Digite o seu endereço">
                  </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Número endereço</label>
                    <input type="number" value="<?php echo $result['nr_endereco'];?>" class="form-control" id="exampleInputEmail1" name="numeroenderecoeditora" aria-describedby="emailHelp" placeholder="Digite o número">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bairro</label>
                    <input type="text" value="<?php echo $result['nm_bairro'];?>" class="form-control" id="exampleInputEmail1" name="nomebairro" aria-describedby="emailHelp" placeholder="Digite o bairro">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefone</label>
                    <input type="number" value="<?php echo $result['nr_telefone'];?>" class="form-control" id="exampleInputEmail1" name="numerotelefone" aria-describedby="emailHelp" placeholder="Digite o número de telefone">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome gerente</label>
                    <input type="text" value="<?php echo $result['nm_gerente'];?>" class="form-control" id="exampleInputEmail1" name="nomegerente" aria-describedby="emailHelp" placeholder="Digite o nome do seu gerente">
                  </div>
                <div class="botao">
                <button type="submit" class="btn btn-secondary">Atualizar</button> 
                </div>
              </form>
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>






































































    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>