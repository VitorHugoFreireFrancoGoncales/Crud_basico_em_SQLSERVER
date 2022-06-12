<?php
    //sqlsrv:Server=sql_des;Database= "," ", " "
    // usuario lucas
    // senha lucas

    // $servername = "";//padrão - server local 
    // $database = "";//alterar conforme o nomedo seu banco de dados
    // $username = "";//padrão - root
    // $password = "";//senha de conexao do banco de dados.
    

    // // // Create connection
    // $conexao = sqlsrv_connect($servername, $database, $username, $password)



    $servername = "sql_des";//padrão - server local 
    $conexoes = array("Database"=>"", "UID"=>"", "PWD"=>"");
    $conexao = sqlsrv_connect($servername, $conexoes);

    if($conexao) {
        echo "Conexão Estabelecida. <br />";
    }else {
        echo "Conexão pode não esta Estabilizada.<br />";
        die(print_r(sqlsrv_errors(), true));
    }
    
?>










