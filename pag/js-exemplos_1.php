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
		<li><a href="#css">CSS</a></li>
		<li><a href="#evt">EVT</a></li>
    </ul>
</header>

<body>

	<main class="row">
		
		<blockquote id="intro" class="scrollspy container title"><i class="fab fa-js-square fa-lg"></i>	JS HTML DOM</blockquote>
		<div class="container exp-2">
			<span><i>"The W3C Document Object Model (DOM) is a platform and language-neutral interface that allows programs and scripts to dynamically access and update the content, structure, and style of a document."</i></span>
		</div>
		<div class="container exp">
			<span><i>Através do JS, conseguimos extrair do objeto DOM propriedades contidas nas tags HTML do documento em questão.</i> Existem algumas formas de obter tal objeto, 3 delas são:</span>
			<p>
				<li>document.getElementById('');</li>
				<li>document.getElementsByClassName('');</li>
				<li>document.getElementsByTagName('');</li>
			</p>
			<p>
				Dado uma tag qualquer se tal propriedade existir e corresponder com a sintaxe correta, a função retornará um objeto DOM correspondente ao elemento procurado. Ex: 
				<br>
		    </p>
		    
		</div>
    	<div class="container">
	    	<li class="exp">
				Dado um elemento de id 'p1', podemos alterar o seu conteúdo modificando o valor interno:	document.getElementById("p1").innerHTML = "Novo Conteúdo".
			</li>
			<li class="exp">
				Podemos também recuperar informações especificas sobre o elemento retornado, por exemplo: Suponha uma div com 3 elementos filhos e de id 'd1': document.getElementById("d1").length, isso nos retornária o valor 3, que é a quantidade de elementos filhos contidos no elemento solicitado. 	
			</li>
			<li class="exp">
				Um detalhe quanto a inputs e seus variaveis, seus conteúdos 'internos', são na verdade os valores dos mesmos, ou seja, caso seja desejado acessar o conteúdo de um input podemos fazer: document.getElementById("inp").value, isso nos retorna o conteúdo escrito no mesmo.
			</li>
		</div>
		<blockquote id="css" class="scrollspy container title"><i class="fab fa-js-square fa-lg"></i>	DOM CSS</blockquote>
		<div class=" container exp-2">
			<p>
				Através do DOM também conseguimos mudar propriedades do CSS, tais como: color, background color, padding, entre outros. A sintax correta para se fazer o mesmo é:
				<li>document.getElementById(id).style.propriedade_desejada = 'novo valor'</li>
				<li>Mais exemplos em: https://www.w3schools.com/js/js_htmldom_css.asp</li>
			</p>
		</div>
		<blockquote id="evt" class="scrollspy container title"><i class="fab fa-js-square fa-lg"></i>	DOM EventListener</blockquote>
		<div class=" container exp-2">
			<p>
				Existem algumas formas de chamar uma função JS, uma delas é por evento, mais especificamente, eventListener. Sua sintax segue a seguinte lógica: Dada uma função X e um elemento E deve-se criar um event listener com a opção desejada. Ex:
				<li>E.addEventListener('click',X), com essa regra temos que a função X será executada toda vez que o elemento E for clicado.</li>
				<li>Mais exemplos em: https://www.w3schools.com/js/js_htmldom_eventlistener.asp</li>
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