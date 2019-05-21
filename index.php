<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Capacitação</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<header>

<nav class="pushpin" data-target="js">
  <div class="nav-wrapper">
    <div class="container">
      <a href="#" class="brand-logo"><img style=" padding-top: 10px; height: 55px; width: auto;" class="responsive-img" src="img/css-3-logo-1.png" alt=""></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#css">CSS</a></li>
        <li><a href="#js">JS</a></li>
        <li><a href="#jq">J$</a></li>
      </ul>
    </div>
  </div>
</nav>

</header>

<body class="">

<div id="css" class="block scrollspy">
  
  <?php require_once 'template-parts/css.php' ?>

</div>

<div  data-aos="fade-up" id="js" class="block scrollspy">
  
  <?php require_once 'template-parts/js.php' ?>

</div>

<div  data-aos="fade-up" id="jq" class="block scrollspy">
  
  <?php require_once 'template-parts/jquery.php' ?>

</div>

</body>

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
<script type="text/javascript" src='js.js'></script>

<footer>
	
</footer>

</html>