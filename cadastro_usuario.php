<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="UTF-8">
<title>Pagina Principal</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
        <!--CSS / Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        
</head>
<body>

<div class="container" style="width: 400px; margin-top: 40px">
<div style="text-align: right;">
<a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
</div>
<h4>Cadastro de Usuário</h4>
<form action="_insert_usuario.php" method="post">
    <div class="form-group">
        <label>Nome do Usuário</label>
        <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu E-mail">
    </div>

    <div class="form-group">
        <label>Senha</label>
        <input id="senha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
    </div>

    <div class="form-group">
        <label>repitir senha</label>
        <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repitir Senha" oninput="validaSenha(this)">
        <small>Precisa ser igual a senha digitada</small>
    </div>

    <div class="form-group">
        <label>Nível de Acesso</label>
        <select name="nivelusuario" class="form-control">

            <option value="1">Administrador</option>
            <option value="2">Funcionário</option>
            <option value="3">Conferente</option>

        </select>
    </div>

    <div style="text-align: right;">
    <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
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