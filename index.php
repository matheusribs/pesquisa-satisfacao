<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="css/folhadeestilo.css" />

<?php

  echo  $html = '

   <div id="divPrincipal" align="center" >
   
   <h1>PESQUISA DE SATISFAÇÃO</h1>
   <img src="img/pesquisa.jpg" width="" height=""/>
   
   <form action="enviarPesquisa.php" method="POST" style="margin-top: 2%;"> 
   <div class="form-group">
   <h5>Qual nota você daria ao nosso atendimento?</h5>
   <select multiple class="form-control" id="pergunta1" name="pergunta1">
     <option value="1">1 - Péssimo</option>
     <option value="2">2 - Insatisfeito</option>
     <option value="3">3 - Médio</option>
     <option value="4">4 - Satisfeito</option>
     <option value="5">5 - Excelente</option>
   </select>
   </div>

   <div class="form-group">
   <h5>Qual nota você daria a qualidade do nosso produto?</h5>
   <select multiple class="form-control" id="pergunta2" name="pergunta2">
     <option value="1">1 - Péssimo</option>
     <option value="2">2 - Insatisfeito</option>
     <option value="3">3 - Médio</option>
     <option value="4">4 - Satisfeito</option>
     <option value="5">5 - Excelente</option>
   </select>
   </div>

   <div class="form-group">
   <h5>Qual nota você daria ao nosso suporte?</h5>
   <select multiple class="form-control" id="pergunta3" name="pergunta3">
     <option value="1">1 - Péssimo</option>
     <option value="2">2 - Insatisfeito</option>
     <option value="3">3 - Médio</option>
     <option value="4">4 - Satisfeito</option>
     <option value="5">5 - Excelente</option>
   </select>
   </div>

   <div class="form-group">
   <h5>Qual nota você daria para nossa infraestrutura?</h5>
   <select multiple class="form-control" id="pergunta4" name="pergunta4">
     <option value="1">1 - Péssimo</option>
     <option value="2">2 - Insatisfeito</option>
     <option value="3">3 - Médio</option>
     <option value="4">4 - Satisfeito</option>
     <option value="5">5 - Excelente</option>
   </select>
   </div>

   <div class="form-group">
   <h5>Qual nota você daria ao nosso site?</h5>
   <select multiple class="form-control" id="pergunta5" name="pergunta5">
     <option value="1">1 - Péssimo</option>
     <option value="2">2 - Insatisfeito</option>
     <option value="3">3 - Médio</option>
     <option value="4">4 - Satisfeito</option>
     <option value="5">5 - Excelente</option>
   </select>
   </div>
   
   <button id="btn" class="btn btn-success btn-lg">ENVIAR PESQUISA</button>

   </form>
   </div>      

    ';
?>