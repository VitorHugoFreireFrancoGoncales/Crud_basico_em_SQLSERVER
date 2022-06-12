<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="UTF-8">
<title>Menu</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!--CSS / Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="menu.css">
</head>
<body id="layout">

<?php 
session_start();
$usuario = $_SESSION['usuario'];

  if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
  }

include 'conexao.php';

$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status='Ativo'";
$buscar = sqlsrv_query($conexao,$sql);
$array = sqlsrv_fetch_array($buscar);
$nivel = $array['nivel_usuario'];
?>

<h1><strong>👨🏻‍💻INFORMATICÃO SISTESTE🐶</strong></h1>
<div class="container" id="logoff">
<h5><a href="index.php">✖</a></h5></div>

<div class="container">
<div class="row">
  <?php
  if(($nivel == 1)||($nivel == 2)) {
  ?> 
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <i class="bi bi-clipboard-plus"><h5 class="card-title">Adicionar Produto</h5></i>
        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
      </div>
    </div>
  </div>
  <?php } ?>

  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body">
        <i class="bi bi-pencil-square"><h5 class="card-title">Lista de Produtos</h5></i>
        <p class="card-text">Visualizar, editar e excluir os produtos.</p>
        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <i class="bi bi-clipboard2-plus"><h5 class="card-title">Adicionar Categoria</h5></i>
        <p class="card-text">Opção para adicionar uma nova categoria.</p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categotia</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <i class="bi bi-person-plus-fill"><h5 class="card-title">Adicionar Fornecedor</h5></i>
        <p class="card-text">Opção para adicionar fornecedores.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <i class="bi bi-person-plus-fill"><h5 class="card-title">Cadastrar Usuário</h5></i>
        <p class="card-text">Cadastrar Usuário</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <i class="bi bi-person-plus-fill"><h5 class="card-title">Aprovar Usuários</h5></i>
        <p class="card-text">Aprovar usuários cadastrados</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>
</div>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>