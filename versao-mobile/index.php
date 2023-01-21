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
        <br>
        <h4 align="center">PESQUISA DE SATISFAÇÃO</h4>
        <img  src="img/pesquisa.png" width="150px" height="auto"/>
    </div>

    <div class="mySlides">
    <br>
    <h4><font color="black">Por favor, confirme seus dados para ter acesso a descontos e novidades exclusivas.</font></h4>
    <br>
    <div style="margin-top: 20px;" class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-dark btn-lg" value="5" onclick="currentSlide(2)" type="button">SIM</button>
        <button class="btn btn-danger btn-lg" value="4" onclick="currentSlide(3)" type="button">NÃO</button>
    </div>
    </div>

    <div class="mySlides">
    <br>
    <h4><font color="black">Por favor, confirme seus dados para ter acesso a descontos e novidades exclusivas.</font></h4>
    <br>
    <div style="margin-top: 20px;" class="d-grid gap-2 col-6 mx-auto">
    <input name="nome" id="nome" class="form-control" type="name" placeholder="Informe o seu nome aqui">
    <input name="email" id="email" class="form-control" type="email" placeholder="Informe o seu email aqui">
    <input name="telefone" id="telefone" class="form-control" type="tel" placeholder="Informe o seu telefone aqui">
    <label align="left">Nascimento:</label>
    <input name="data_nascimento" id="data_nascimento" class="form-control" type="date" placeholder="">
        <button class="btn btn-dark btn-lg" value="5" onclick="currentSlide(3)" type="button">CONTINUAR</button>
        <!--<button class="btn btn-warning btn-lg" value="4" onclick="capturarP1(this.value), currentSlide(3)" type="button">NÃO</button>-->
    </div>
    </div>

    <div class="mySlides">
        <br>
        <h4><font color="black">Em uma escala de 0 a 10, como você avalia nossa comida?</font></h4>
        <br>
        <button class="btn btn-dark btn-lg" value="0" onclick="capturarP1(this.value), currentSlide(4)" type="button">0</button>
        <button class="btn btn-dark btn-lg" value="1" onclick="capturarP1(this.value), currentSlide(4)" type="button">1</button>
        <button class="btn btn-dark btn-lg" value="2" onclick="capturarP2(this.value), currentSlide(4)" type="button">2</button>
        <button class="btn btn-dark btn-lg" value="3" onclick="capturarP2(this.value), currentSlide(4)" type="button">3</button>
        <button class="btn btn-dark btn-lg" value="4" onclick="capturarP3(this.value), currentSlide(4)" type="button">4</button>
        <button class="btn btn-dark btn-lg" value="5" onclick="capturarP3(this.value), currentSlide(4)" type="button">5</button>
        <button class="btn btn-dark btn-lg" value="6" onclick="capturarP4(this.value), currentSlide(4)" type="button">6</button>
        <button class="btn btn-dark btn-lg" value="7" onclick="capturarP4(this.value), currentSlide(4)" type="button">7</button>
        <button class="btn btn-dark btn-lg" value="8" onclick="capturarP5(this.value), currentSlide(4)" type="button">8</button>
        <button class="btn btn-dark btn-lg" value="9" onclick="capturarP5(this.value), currentSlide(4)" type="button">9</button>
        <button class="btn btn-dark btn-lg" value="10" onclick="capturarP5(this.value), currentSlide(4)" type="button">10</button>

    </div>
    <div class="mySlides">
        <br>
        <h4><font color="black">Em uma escala de 0 a 10, como você avalia nosso atendimento?</font></h4>
        <br>
        <button class="btn btn-dark btn-lg" value="0" onclick="capturarP6(this.value), currentSlide(5)" type="button">0</button>
        <button class="btn btn-dark btn-lg" value="1" onclick="capturarP6(this.value), currentSlide(5)" type="button">1</button>
        <button class="btn btn-dark btn-lg" value="2" onclick="capturarP7(this.value), currentSlide(5)" type="button">2</button>
        <button class="btn btn-dark btn-lg" value="3" onclick="capturarP7(this.value), currentSlide(5)" type="button">3</button>
        <button class="btn btn-dark btn-lg" value="4" onclick="capturarP8(this.value), currentSlide(5)" type="button">4</button>
        <button class="btn btn-dark btn-lg" value="5" onclick="capturarP8(this.value), currentSlide(5)" type="button">5</button>
        <button class="btn btn-dark btn-lg" value="6" onclick="capturarP9(this.value), currentSlide(5)" type="button">6</button>
        <button class="btn btn-dark btn-lg" value="7" onclick="capturarP9(this.value), currentSlide(5)" type="button">7</button>
        <button class="btn btn-dark btn-lg" value="8" onclick="capturarP10(this.value), currentSlide(5)" type="button">8</button>
        <button class="btn btn-dark btn-lg" value="9" onclick="capturarP10(this.value), currentSlide(5)" type="button">9</button>
        <button class="btn btn-dark btn-lg" value="10" onclick="capturarP10(this.value), currentSlide(5)" type="button">10</button>

    </div>
    <div class="mySlides">
        <br>
        <h4><font color="black">Em uma escala de 0 a 10, como você avalia nosso ambiente?</font></h4>
        <br>
        <button class="btn btn-dark btn-lg" value="0" onclick="capturarP11(this.value), enviarDados()" type="button">0</button>
        <button class="btn btn-dark btn-lg" value="1" onclick="capturarP11(this.value), enviarDados()" type="button">1</button>
        <button class="btn btn-dark btn-lg" value="2" onclick="capturarP12(this.value), enviarDados()" type="button">2</button>
        <button class="btn btn-dark btn-lg" value="3" onclick="capturarP12(this.value), enviarDados()" type="button">3</button>
        <button class="btn btn-dark btn-lg" value="4" onclick="capturarP13(this.value), enviarDados()" type="button">4</button>
        <button class="btn btn-dark btn-lg" value="5" onclick="capturarP13(this.value), enviarDados()" type="button">5</button>
        <button class="btn btn-dark btn-lg" value="6" onclick="capturarP14(this.value), enviarDados()" type="button">6</button>
        <button class="btn btn-dark btn-lg" value="7" onclick="capturarP14(this.value), enviarDados()" type="button">7</button>
        <button class="btn btn-dark btn-lg" value="8" onclick="capturarP15(this.value), enviarDados()" type="button">8</button>
        <button class="btn btn-dark btn-lg" value="9" onclick="capturarP15(this.value), enviarDados()" type="button">9</button>
        <button class="btn btn-dark btn-lg" value="10" onclick="capturarP15(this.value), enviarDados()" type="button">10</button>

    </div>
</form>  
</div><!--  
    <a class="prev" onclick="plusSlides(-1)">❮</a>
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

var p1;
var p2;
var p3;
var p4;
var p5;
var p6;
var p7;
var p8;
var p9;
var p10;
var p11;
var p12;
var p13;
var p14;
var p15;

function capturarP1(valorP1){
    p1 = valorP1;
}
function capturarP2(valorP2){
    p2 = valorP2;
}
function capturarP3(valorP3){
    p3 = valorP3;
}
function capturarP4(valorP4){
    p4 = valorP4;
}
function capturarP5(valorP5){
    p5 = valorP5;
}
function capturarP6(valorP6){
    p6 = valorP6;
}
function capturarP7(valorP7){
    p7 = valorP7;
}
function capturarP8(valorP8){
    p8 = valorP8;
}
function capturarP9(valorP9){
    p9 = valorP9;
}
function capturarP10(valorP10){
    p10 = valorP10;
}
function capturarP11(valorP11){
    p11 = valorP11;
}
function capturarP12(valorP12){
    p12 = valorP12;
}
function capturarP13(valorP13){
    p13 = valorP13;
}
function capturarP14(valorP14){
    p14 = valorP14;
}
function capturarP15(valorP15){
    p15 = valorP15;
}

function enviarDados() {
    var nome = document.querySelector("#nome").value;
    var email = document.querySelector("#email").value;
    var telefone = document.querySelector("#telefone").value;
    var data_nascimento = document.querySelector("#data_nascimento").value;
    window.location.href = "enviarPesquisa.php?&nome="+nome+"&email="+email+"&telefone="+telefone+"&data_nascimento="+data_nascimento+"&p1="+p1+"&p2="+p2+"&p3="+p3+"&p4="+p4+"&p5="+p5+"&p6="+p6+"&p7="+p7+"&p8="+p8+"&p9="+p9+"&p10="+p10+"&p11="+p11+"&p12="+p12+"&p13="+p13+"&p14="+p14+"&p15="+p15+"";
}

</script>
</body>
</html> 
';

?>