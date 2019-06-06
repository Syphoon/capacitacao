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

<header>
</header>

<body>
    <main class="container">

        <div class="box row">
        <img class="logo_tecno" src="../img/Logo_Tecnojr.svg" alt="">
            <form action="../php/functions.php" method="post"  enctype = "multipart/form-data" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                      <input  name="username" id="username" type="text" class="validate">
                      <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <input  name="password" id="password" type="password" class="validate">
                      <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <input name="email"  id="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                </div>
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    <input name="image" type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
                <button name="cadastro" type="submit" class="col m12 s6 btn" style="background-color: transparent;">OK!!</button>
            </form>
        </div>

    </main>
  
</body>

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<footer>
	
</footer>

</html>