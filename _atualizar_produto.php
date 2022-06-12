<?php 

include 'conexao.php';

    $id = $_POST['id'];
    //$nroproduto = $_POST['nroproduto'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];
    
    $sql = "UPDATE estoque SET nomeproduto ='$nomeproduto', categoria ='$categoria', quantidade = $quantidade, fornecedor ='$quantidade' WHERE id_estoque = $id";
    $atualizar = sqlsrv_query($conexao,$sql);

?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/style.css">
    <div class="container" style="width: 400px">
<center>
    <h3>Atualizado com sucesso</h3>
    <div style="margin-top: 10px">
    <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>