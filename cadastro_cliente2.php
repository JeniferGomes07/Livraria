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
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-book"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro_cliente2.php">Cadastro de clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro_editora2.php">Cadastro Editora</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Relatórios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="listar_user.php">Lista de Usuários</a></li>
              <li><a class="dropdown-item" href="listar_cliente.php">Lista de Clientes</a></li>
              <li><a class="dropdown-item" href="listar_editora.php">Lista de Editoras</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div style = "color: black;">
      <?php
      session_start();
      if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        echo "Seja bem vindo, $username";
      }
      else{
        echo "<script>alert('Usuário precisar logar');history.back();</script>";
      }
      ?>
      </div>
      <span> <a class = "navbar-brand" href = "sair.php"><i class="fa-solid fa-right-from-bracket"></i></a></span>
  </nav>
    <div class="container text-center">
        <div class="row">
          <div class="col"></div>
          <div class="col">
            <form class="user" action="cadastro_cliente.php" method="post">  
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nomecliente" aria-describedby="emailHelp" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="enderecocliente" aria-describedby="emailHelp" placeholder="Digite seu endereço">
                  </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Número do endereço</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="numeroendereco" aria-describedby="emailHelp" placeholder="Digite seu número do endereço">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">CPF</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" name="numerocpf" placeholder="Digite seu cpf">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">CNPJ</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="numerocnpj" placeholder="Digite seu cnpj">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Telefone</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="numerotelefone" placeholder="Digite seu telefone">
                  </div>
                <div class="botao">
                <a class="btn btn-secondary" href="index.html" role="button">Voltar</a> &ensp;&ensp;&ensp;
                <button type="submit" class="btn btn-secondary">Cadastrar</button>
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