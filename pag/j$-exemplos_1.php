<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Capacitação</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<header>
	<ul class="sidenav sidenav-fixed z-depth-4">
		<div class="user-view">
		  <div class="background">
		    <img src="../img/background.jpg">
		  </div>
			<a href="#user"><img class="circle" src="../img/user.jpg"></a>
			<a href="#name"><span class="white-text name">User Padrão</span></a>
		</div>
		<li><a href="#intro">Intro</a></li>
		<li><a href="#inc">Include</a></li>
		<li><a href="#sint">Sintaxe</a></li>
		<li><a href="#sel">Seletores</a></li>
    </ul>
</header>

<body>

	<main class="row">
		
		<blockquote id="intro" class="scrollspy container title"><i class="fab fa-js-square fa-lg"></i>	J$</blockquote>
		<div class="container exp-2">
			<span><i>"jQuery é leve, "escrever menos, fazer mais", biblioteca JavaScript. jQuery tem um monte de tarefas comuns que requerem muitas linhas de código JavaScript para realizar, e envolve-los em métodos que você pode chamar com uma única linha de código."</i></span>
		</div>
		<div class="container exp">
			<h6><span><b>A biblioteca jQuery contém os seguintes recursos:</b></h6><br>
				<li>HTML / manipulação DOM;</li>
				<li>manipulação de CSS;</li>
				<li>métodos de eventos HTML;</li>
				<li>Efeitos e animações;</li>
				<li>AJAX;</li>
				<li>Serviços de utilidade pública;</li>
			</p>
		    
		</div>

		<blockquote id="inc" class="scrollspy container title"><i class="fab fa-js-square fa-lg"></i> Como utilizar o J$</blockquote>
		<div class=" container exp-2">
			<p>
				<h6><span><b>Formas de se utilizar o J$ no seu site:</b></h6><br>
				<li>Baixar a biblioteca jQuery de jQuery.com</li>
				<li>Incluir jQuery através de CDN</li>
				<p>https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js</p>
			</p>
		</div>

		<blockquote id="sint" class="scrollspy container title"><i class="fab fa-js-square fa-lg"></i> Sintaxe do J$</blockquote>
		<div class=" container exp-2">
			<p>
				<h6><span><b>Sintaxe básica é: $ ( seletor ). ação ()</b></h6><br>
				<li>O sinal $ iniciar o acesso J$;</li>
				<li>Um (seletor) para encontrar elementos HTML;</li>
				<li>Uma ação() Jquery para ser executada no elemento encontrado pelo (seletor);</li>
			</p>
		</div>
		<div class=" container exp-2">
			<p>
				<h6><b>É assim que começamos a estrutura inicial do J$</b></h6>
				<p>$(document).ready(function(){</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;// Métodos J$</p>
				<p>});</p>

				<h6><b>Ou de forma mais reduzida</b></h6>
				<p>$(function(){</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;// Métodos J$</p>
				<p>});</p>

			</p>
		</div>	

		<blockquote id="sel" class="scrollspy container title"><i class="fab fa-js-square fa-lg"></i> Seletores</blockquote>
		<div class=" container exp-2">
			<p>
				<h6><span><b>Podemos selecionar e manipular os elementos HTML das seguintes formas:</b></h6><br>
				<p>Se elemento for uma <i>tag</i> como por exemplo a tag <i>"p"</i>, utilizaremos o seletor () junto com aspas simples ('') ou duplas ("") e colocaremos a tag diretamente no seletor, então teremos $("p").</p>
				<p>Caso o elemento seja um <i>id</i>, devemos usar o simbolo '#' e o restante é análogo ao método que é utilizado nas <i>tags</i>:  $("#id")</p>
				<p>E por fim, podemos também selecionar por uma <i>class</i> que utiliza o "." e seguindo a lógica dos anteriores, temos: $(".class")</p>
			</p>
		</div>	
	</main>

</body>

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
<script type="text/javascript" src='../js.js'></script>

<footer>
	
</footer>

</html>