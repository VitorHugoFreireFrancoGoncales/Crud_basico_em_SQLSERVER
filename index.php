<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<title>Pagina Principal</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">        

        <style type="text/css">
        #tamanho {
            width: 350px;
            -webkit-box-shadow: 10px 10px 29px -8px rgba(194,194,194,1);
            -moz-box-shadow: 10px 10px 29px -8px rgba(194,194,194,1);
            box-shadow: 10px 10px 29px -8px rgba(194,194,194,1);
            }
        </style>
</head>
<body>

<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
<div style="padding: 10px">
<center>
<img src="imagem/cadeado.png" width="125px" height="125px">
</center>
    <form action="index1.php" method="post">
        <div class="form-group">

            <label><b>🐱‍💻E-mail do Usuário</b></label>
            <input type="text" name="usuario" class="form-control" placeholder="Digite o seu email de usuário" autocomplete="off" required>
        </div>
        
        <div class="form-group">
            <label><b>👁‍🗨Senha</b></label>
            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha de usuário" autocomplete="off" required>
        </div>
    
    <div style="text-align: right;">
    <button type="submit" class="btn btn-sm btn-success"><b>Entrar</b></button>
    </div>
    </form>

</div>
</div>

<div style="margin-top: 10px;">
<center>
    <small><b>🙄Você não possui cadastro ? Clique</b><a href="cadastro_usuario_externo.php"> aqui 👈🏻</a></small>
</center>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>