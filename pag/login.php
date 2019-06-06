<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<style>
    
    header, main, footer {
      padding-left: 0 !important;
    }

</style>

<?php 

require_once "../php/class.php";

if(isset($_GET['login'])):

  if($_GET['login'] == 'sucess'):

    echo "<script>alert('Login realizado com sucesso.');</script>";

    else:

    echo "<script>alert('Senha ou username incorretos.');</script>";


  endif;

endif;

if(isset($_GET['logout'])):

    $con = new con;
    $con->logout();

endif;

?>


<header>
</header>

<body class="css">
    <main class="container">
        <div class="box row">
            <div class="ufo">
                <div class="monster" style="color: #7cb342">
                  <div class="body">
                    <div class="ear"></div>
                    <div class="ear"></div>
                    <div class="vampi-mouth">
                      <div class="vampi-tooth"></div>
                    </div>
                  </div>
                  <div class="eye-lid">
                    <div class="eyes">
                      <div class="eye" id="eye"></div>
                    </div>
                  </div>
                </div>
            </div>
            <form action="../php/functions.php" method="post" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                      <input style="color: white;" required="required" name="username" id="username" type="text" class="validate">
                      <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <input style="color: white;" required="required"  name="password" id="password" type="password" class="validate">
                      <label for="password">Password</label>
                    </div>
                </div>
                <button name="login" type="submit" class="col m12 s6 btn" style="background-color: transparent;">OK!!</button>
            </form>
        </div>

    </main>
  
</body>

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script type="text/javascript">
  
  function getOffset(el) {
    var _x = 0;
    var _y = 0;
    while (el && !isNaN(el.offsetLeft) && !isNaN(el.offsetTop)) {
      _x += el.offsetLeft - el.scrollLeft;
      _y += el.offsetTop - el.scrollTop;
      el = el.offsetParent;
    }
    return { top: _y, left: _x };
  }

  function calculateRotation(mouseX, mouseY, eyeX, eyeY, eyeWidth) {
    var a = mouseX - eyeX;
    var b = eyeY - mouseY;
    var c = Math.sqrt(a ** 2 + b ** 2);

    var angle = Math.asin(a / c) * (180 / Math.PI);

    // if mouse is below eye - works for quadrants 2 and 3
    if (b < 0) {
      angle = 90 + (90 - angle);
    }

    // quadrant 4
    if (a < 0 && b > 0) {
      angle += 360;
    }

    $('.eyes').css('transform', 'rotate(' + angle + 'deg)');
  }

  $(document).mousemove(function(event) {
    var mouseX = event.pageX;
    var mouseY = event.pageY;

    var eyeX = getOffset(document.getElementById('eye')).left;
    var eyeY = getOffset(document.getElementById('eye')).top;
    var eyeWidth = $('#eye').width();

    calculateRotation(mouseX, mouseY, eyeX, eyeY, eyeWidth);
  });


</script>

<footer>
	
</footer>

</html>