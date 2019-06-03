<div class="col s12 container row">
	
	<blockquote class="title">Como funciona: JS</blockquote>
	<div id="css_1" style=" background-color: rgba(255,255,255,0.5);" class=" exp">
		
	<p>O Javascript nos permite utilizar uma linguagem lógica para amenizar as operações que a linguagem de servidor (PHP ou outra) irá realizar. 
	Boa parte das alterações visuais (clicks), animações, validações de formulários podem ser feitas utilizando Javascript, uma linguagem que é executada no frontend, ou seja, não necessita de nenhum tipo de requisição ao servidor para ser mostrada (é interpretada no navegador).
	</p>

	</div>

	<blockquote class="title">Definições: JS</blockquote>
	<div  style=" background-color: rgba(255,255,255,0.5);"  class="exp">
		<p>O JS manipula a página HTML através do document (DOM), assim nos permitindo acessar todas as tags que compõem o arquivo em questão. Quando solicitamos uma busca por id , classe ou tag no JS, ele retorna um objeto do tipo DOM correspondente a tal parametro passado. Neste tal objeto é possível acessar metodos e propriedades do DOM, tais como:
		value (input), innerHTML (tags), length (quantidade de elementos filhos) , entre outros.</p>
	</div>

	<blockquote class="title">Exemplos: JS</blockquote>
	<div class="col s12 left row container code">
		<div class="col s12 m6">
			<h5>Funções por Evento</h5>
			<ul>
			  <li>function sum(){</li>
			  <li>	var input = document.getElementById('id').value;</li>
			  <li>	var input2 = document.getElementById('id2').value;</li>
			  <li>	alert(input + input2);</li>
			  <li> }</li>
			  <li>var btn = document.getElementById('btn');</li>
			  <li>btn.addEventListener('click',sum,false);</li>
			</ul>
		</div>
		<div class="col s12 m6">
			<h5>Funções por Load (Página) </h5>
			<ul>
			  <li>function sum(){</li>
			  <li>	var input = document.getElementById('id').value;</li>
			  <li>	var input2 = document.getElementById('id2').value;</li>
			  <li>	alert(input + input2);</li>
			  <li> }</li>
			  <li>window.onload = sum;</li>
			  <li></li>
			</ul>
		</div>
	</div>

</div>
