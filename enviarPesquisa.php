<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="css/folhadeestilo.css" />


<?php

    $res1 = $_POST['pergunta1'];
    $res2 = $_POST['pergunta2'];
    $res3 = $_POST['pergunta3'];
    $res4 = $_POST['pergunta4'];
    $res5 = $_POST['pergunta5'];

    if($res1 && $res2 && $res3 && $res4 && $res5 != 0){

     echo $sucesso = '
     <div id="divPrincipal" align="center" >

        <h1>PESQUISA DE SATISFAÇÃO</h1>
        <img src="img/pesquisa.jpg" width="" height=""/>
        
        <div class="alert alert-success" role="alert">
           Pesquisa enviada com sucesso!
        </div>
    </div>
    
     ';

    }
    else {
    
    echo $negado = '  
    <div id="divPrincipal" align="center" >

        <h1>PESQUISA DE SATISFAÇÃO</h1>
        <img src="img/pesquisa.jpg" width="" height=""/>
        
        <div class="alert alert-danger" role="alert">
          A pesquisa não foi enviada, revise a pesquisa!
        </div>

    </div>';


    } 

?>