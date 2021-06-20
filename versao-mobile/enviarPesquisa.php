<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/folhadeestilo.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<meta http-equiv="refresh" content="10; URL='http://127.0.0.1/pesquisa-satisfacao/pesquisa-satisfacao/versao-mobile/index.php'"/>
</head>
<style type="text/css">
.btn-warning {
    color: #fff;
    background-color: #fd8341;
    border-color: #fd8341;
}
.btn-secondary {
    color: #fff;
    background-color: #ffcf00;
    border-color: #fccf03;
}
.btn-primary {
    color: #fff;
    background-color: #80d76b;
    border-color: #7ed966;
}
body {
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #f7f7f7;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}
</style>

<?php

// Captura dos parâmetros por GET
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$p3 = $_GET['p3'];
$p4 = $_GET['p4'];
$p5 = $_GET['p5'];


if ($p1 && $p2 && $p3 && $p4 && $p5 != 0){

    // Parte responsável por inserir dados na tabela 'perguntas' do banco.
    $strcon = mysqli_connect('127.0.0.1:3307','root','','bdpesquisa') or die('Erro ao conectar ao banco de dados');
    $sql = "INSERT INTO perguntas (p1,p2,p3,p4,p5) VALUES ('$p1','$p2','$p3','$p4','$p5')";
    mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($strcon);


echo $sucesso = '
    
    <div align="center">
        <br>
        <h4 align="center">PESQUISA DE SATISFAÇÃO</h4>
        <img  src="img/pesquisa.jpg" width="" height=""/>
        <div class="alert alert-success" role="alert">
            A pesquisa foi enviada com sucesso!
        </div>
    </div>
';

}else{

    echo $erro = '
    
    <div align="center">
        <br>
        <h4 align="center">PESQUISA DE SATISFAÇÃO</h4>
        <img  src="img/pesquisa.jpg" width="" height=""/>
        <div class="alert alert-danger" role="alert">
            Houve um problema ao enviar a pesquisa! <a href="http://127.0.0.1/pesquisa-satisfacao/pesquisa-satisfacao/versao-mobile/index.php">TENTAR NOVAMENTE</a>
        </div>
    </div>
';

}

?>
