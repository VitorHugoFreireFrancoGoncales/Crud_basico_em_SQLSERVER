<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Adicionar Produto</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="adicionar_produto.css">
    </head>
    <body>

        <div class="container" id="tamanhoContainer" style="margin-top: 40px;">

        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary">
                <i class="bi bi-arrow-left-circle">
                <b>Voltar</b>
                </i>
            </a>
            </div>
            
        <h4><i>Formulário de Cadastro</i></h4>
            <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
                <div class="form-group">
                    <label><b>Numero do Produto:</b></label>
                    <input type="number" class="form-control" name=" nroproduto" placeholder="Insira o numero do produto" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label><b>Nome do Produto:</b></label>
                    <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label><b>Categoria do Produto:</b></label>
                    <select class="form-control" name="categoria">
                    
                    <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                    //Realiza a conexão com o banco de dados
                    $buscar = sqlsrv_query($conexao,$sql);

                    while ($array = sqlsrv_fetch_array($buscar)){
                        echo $id_categoria = $array['id_categoria'];
                        echo $nome_categoria = $array['nome_categoria'];
                    ?>

                    <option><?php echo $nome_categoria ?></option>

                    <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label><b>Quantidade:</b></label>
                    <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label><b>Fornecedor:</b></label>
                    <select class="form-control" name="fornecedor">
                    <?php
                    include 'conexao.php';
                    echo $sql2 = "SELECT * FROM fornecedor";
                   echo $buscar2 = sqlsrv_query($conexao,$sql2);

                    while ($array2 = sqlsrv_fetch_array($buscar2)){
                        echo $id_fornecedor = $array2['id_forn'];
                        echo $nome_fornecedor = $array2['nome_forn'];
                    ?>

                        <option><?php echo $nome_fornecedor ?></option>

                    <?php } ?>
                    </select>
                </div>

                <div style="text-align: right;">
                        <button type="submit" id="botao" 
                        class="btn btn-sm btn-success">
                        <i class="bi bi-check-circle-fill">
                        <b>Cadatrar</b>
                        </i>
                    </button>
                </div>

            </form>

        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> 
    </body>
</html>