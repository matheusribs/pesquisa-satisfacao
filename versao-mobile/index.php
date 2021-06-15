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

echo $html = '

<body>

<div  class="slideshow-container">
<form action="enviarPesquisa.php" method="POST">

    <div align="center">
        <h4 align="center" style="margin-top: 15px;">PESQUISA DE SATISFAÇÃO</h4>
        <img  src="img/pesquisa.jpg" width="" height=""/>
    </div>

    <div class="mySlides">
        <br>
        <h2><font color="red">SATISFAÇÃO COM RELAÇÃO AO NOSSO ATENDIMENTO?</font></h2>
        <br>
        <h6><font color="black">ESCOLHA UMA DAS ALTERNATIVAS ABAIXO:</font></h6>
        <div style="margin-top: 20px;" class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success btn-lg" value="5" onclick="capturarP1(this.value), currentSlide(2)" type="button">MUITO SATISFEITO</button>
            <button class="btn btn-primary btn-lg" value="4" onclick="capturarP1(this.value), currentSlide(2)" type="button">SATISFEITO</button>
            <button class="btn btn-secondary btn-lg" value="3" onclick="capturarP1(this.value), currentSlide(2)" type="button">MÉDIO</button>
            <button class="btn btn-warning btn-lg" value="2" onclick="capturarP1(this.value), currentSlide(2)" type="button">INSATISFEITO</button>
            <button class="btn btn-danger btn-lg" value="1" onclick="capturarP1(this.value), currentSlide(2)" type="button">PÉSSIMO</button>
        </div>
    </div>

    <div class="mySlides">
        <br>
        <h2><font color="red">REPASSE DE INFORMAÇÕES SOBRE PRODUTOS?</font></h2>
        <br>
        <h6>ESCOLHA UMA DAS ALTERNATIVAS ABAIXO:</h6>
        <div style="margin-top: 20px;" class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success btn-lg" value="5" onclick="capturarP2(this.value), currentSlide(3)" type="button">MUITO SATISFEITO</button>
            <button class="btn btn-primary btn-lg" value="4" onclick="capturarP2(this.value), currentSlide(3)" type="button">SATISFEITO</button>
            <button class="btn btn-secondary btn-lg" value="3" onclick="capturarP2(this.value), currentSlide(3)" type="button">MÉDIO</button>
            <button class="btn btn-warning btn-lg" value="2" onclick="capturarP2(this.value), currentSlide(3)" type="button">INSATISFEITO</button>
            <button class="btn btn-danger btn-lg" value="1" onclick="capturarP2(this.value), currentSlide(3)" type="button">PÉSSIMO</button>
        </div>
    </div>

    <div class="mySlides">
        <br>
        <h2><font color="red">PRAZO DE ENTREGA DOS PRODUTOS?</font></h2>
        <br>
        <h6>ESCOLHA UMA DAS ALTERNATIVAS ABAIXO:</h6>
        <div style="margin-top: 20px;" class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success btn-lg" value="5" onclick="capturarP3(this.value), currentSlide(4)" type="button">MUITO SATISFEITO</button>
            <button class="btn btn-primary btn-lg" value="4" onclick="capturarP3(this.value), currentSlide(4)" type="button">SATISFEITO</button>
            <button class="btn btn-secondary btn-lg" value="3" onclick="capturarP3(this.value), currentSlide(4)" type="button">MÉDIO</button>
            <button class="btn btn-warning btn-lg" value="2" onclick="capturarP3(this.value), currentSlide(4)" type="button">INSATISFEITO</button>
            <button class="btn btn-danger btn-lg" value="1" onclick="capturarP3(this.value), currentSlide(4)" type="button">PÉSSIMO</button>
        </div>
    </div>

    <div class="mySlides">
        <br>
        <h2><font color="red">TEMPO PARA ATENDER SUAS SOLICITAÇÕES DE ORÇAMENTOS, CONSULTAS SOBRE PRODUTOS OU RESOLUÇÃO DE PENDÊNCIAS?</font></h2>
        <br>
        <h6>ESCOLHA UMA DAS ALTERNATIVAS ABAIXO:</h6>
        <div style="margin-top: 20px;" class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success btn-lg" value="5" onclick="capturarP4(this.value), currentSlide(5)" type="button">MUITO SATISFEITO</button>
            <button class="btn btn-primary btn-lg" value="4" onclick="capturarP4(this.value), currentSlide(5)" type="button">SATISFEITO</button>
            <button class="btn btn-secondary btn-lg" value="3" onclick="capturarP4(this.value), currentSlide(5)" type="button">MÉDIO</button>
            <button class="btn btn-warning btn-lg" value="2" onclick="capturarP4(this.value), currentSlide(5)" type="button">INSATISFEITO</button>
            <button class="btn btn-danger btn-lg" value="1" onclick="capturarP4(this.value), currentSlide(5)" type="button">PÉSSIMO</button>
        </div>
    </div>

    <div class="mySlides">
        <br>
        <h2><font color="red">EM UMA ESCALA DE 0 A 10 QUAL A PROBABILIDADE DE VOCÊ INDICAR A GMI?</font></h2>
        <br>
        <h6>ESCOLHA A ESCALA:</h6>
        <input type="range" id="escala" value="10" onclick="capturarP5(this.value)" min="1" max="10" oninput="this.nextElementSibling.value = this.value">
        <output>10</output>
        <button style="margin-top: 20px;" class="btn btn-success btn-lg" onclick="enviarDados()" type="button">ENVIAR PESQUISA</button>
    </div>

</form>    
</div>

   <!-- <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    </div>

    <div class="dot-container">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>-->

<script>

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

function capturarP1(valorP1){

    var p1 = valorP1;
    alert(p1);

}

function capturarP2(valorP2){

    var p2 = valorP2;
    alert(p2);

}

function capturarP3(valorP3){

    var p3 = valorP3;
    alert(p3);

}

function capturarP4(valorP4){

    var p4 = valorP4;
    alert(p4);

}

function capturarP5(valorP5){

    var p5 = valorP5;
    alert(p5);

}

function enviarDados() {

    var x = 5;
    window.location.href = "enviarPesquisa.php?p1="+x+"";
    
}

</script>

</body>
</html> 
';

?>
