<!--@arodriguez0605 -->
<?php
session_start();

if(!(isset($_SESSION["PNOMBRE"])))
   {
     header('location: index.php');
   }

?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Catedrático - UNAH</title>
    <link rel="icon" href="img/imgunah/logo.png" sizes="24x24" type="image/svg">



  

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        <a class="navbar-brand" href="index.php"><img src="img/imgunah/logo.png">Universidad Nacional Autónoma de Honduras</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="index.php">Página Principal</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="about.php">Planes de Estudio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Registrarse</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ingresar
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="loginestudiante.php">Estudiante</a>
                <a class="dropdown-item" href="logincatedratico.php">Catedrático</a>

              </div>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Descargar
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="manualUsuario.pdf">Manual de usuario</a>
          
              </div>
              </div>
            </li> 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                  echo $_SESSION["PNOMBRE"].'  '.$_SESSION["NUMEROCUENTA"];
                ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="cerrarSesion.php">Salir</a>
          
              </div>
              </div>
            </li> 
          </ul>
        </div>
      </div>
    </nav>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        
        <div class="login100-pic js-tilt" data-tilt> 
          <img src="img/imgunah/logo2.png" alt="IMG"> 
        </div>

<div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" onclick="location.href='adicionarAsignatura.php'">
              Adicionar Asignatura
            </button>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" onclick="location.href='.php'">
              Cancelar Asignatura
            </button>
          </div>

          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" onclick="location.href='historial.php'">
              Historial Académico
            </button>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" onclick="location.href='forma03.php'">
             Forma 03
            </button>
          </div>

        </form>
      </div>
    </div>
  </div></div>
  
 

</body>
</html>
