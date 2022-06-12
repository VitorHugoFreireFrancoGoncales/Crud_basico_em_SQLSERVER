<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 

        <!-- FontAwesome-->
        <script src="https://kit.fontawesome.com/ea7384805a.js" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="container" style="margin-top: 40px; width: 500px">
    <div style="text-align: right;">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
<h3>Lista de Categoria</h3>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome Categoria</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>

    <?php
    include 'conexao.php';
    $sql = "SELECT * FROM `categoria`";
    $busca = sqlsrv_query($conexao,$sql);

    while ($array = sqlsrv_fetch_array($busca)) {
        $id_categoria = $array['id_categoria'];
        $nomecategoria = $array['nome_categoria'];
        ?>
    <tr>
        <td><?php echo $nomecategoria ?></td>
        <td>
            <a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" style="color: #fff;" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
        </td>
    </tr>

        <?php } ?>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>