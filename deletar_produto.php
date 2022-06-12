<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM estoque WHERE id_estoque = $id";
$deletar = sqlsrv_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 

<center>
    <h3>Deletado com sucesso</h3>
    <div style="margin-top: 10px">
        <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
    </div>
</center>