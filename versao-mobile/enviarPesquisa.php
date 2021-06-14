<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/folhadeestilo.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
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
</style>
<?php

$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$p3 = $_GET['p3'];
$p4 = $_GET['p4'];
$p5 = $_GET['p5'];


if ($p1 && $p2 && $p3 && $p4 && $p5 != 0){

    
    //$sql = 'INSERT INTO perguntas (p1,p2,p3,p4,p5) VALUES ('$p1','$p2','$p3','$p4','$p5')';


echo $sucesso = '

    <div align="center">
        <h4 align="center" style="margin-top: 15px;">PESQUISA DE SATISFAÇÃO</h4>
        <img  src="img/pesquisa.jpg" width="" height=""/>
    </div>

';

}else{

    echo $erro = '';

}

?>
