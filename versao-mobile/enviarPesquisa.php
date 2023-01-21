<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/folhadeestilo.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<meta http-equiv="refresh" content="5; URL='http://127.0.0.1/pesquisa-satisfacao/versao-mobile/index.php'"/>
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
$p6 = $_GET['p6'];
$p7 = $_GET['p7'];
$p8 = $_GET['p8'];
$p9 = $_GET['p9'];
$p10 = $_GET['p10'];
$p11 = $_GET['p11'];
$p12 = $_GET['p12'];
$p13 = $_GET['p13'];
$p14 = $_GET['p14'];
$p15 = $_GET['p15'];
$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
$data_nascimento = $_GET['data_nascimento'];

$result = true;

if ($result == true){

    // Parte responsável por inserir dados na tabela 'perguntas' do banco.
    $strcon = mysqli_connect('127.0.0.1:3306','root','','bdpesquisa') or die('Erro ao conectar ao banco de dados');
    $sql = "INSERT INTO clientes (nome, email, telefone, data_nascimento, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15) VALUES ('$nome','$email','$telefone','$data_nascimento', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15')";
    //$sql2 = "INSERT INTO perguntas (p1,p2,p3,fk_cliente) VALUES ('$p1','$p2','$p3')";
    mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($strcon);


echo $sucesso = '
    
    <div align="center">
        <br>
        <h4 align="center">PESQUISA DE SATISFAÇÃO</h4>
        <img  src="img/pesquisa.png" width="150px" height="auto"/><br>
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
        <img  src="img/pesquisa.png" width="150px" height="auto"/><br>
        <div class="alert alert-danger" role="alert">
            Houve um problema ao enviar a pesquisa! <a href="http://127.0.0.1/pesquisa-satisfacao/versao-mobile/index.php">TENTAR NOVAMENTE</a>
        </div>
    </div>
';

}

?>
