<!--@arodriguez0605 -->

<!DOCTYPE html>
<html lang="en">

  <head>

    



   
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
        <!--        <a class="dropdown-item" href="portfolio-3-col.html"></a>
                <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a> -->
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

       <!-- <form class="login100-form validate-form">-->
          <span class="login100-form-title">
            Inicio de sesión | Estudiante
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Cuenta requerida">
            <input class="input100" type="text" id="txt-cuenta" name="cuenta" placeholder="Cuenta">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Contraseña requerida">
            <input class="input100" type="password" id="txt-password" name="contraseña" placeholder="Contraseña">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button  class="login100-form-btn" id="btn-iniciar-sesion-estudiante">
              Iniciar sesión
          </div>

          <div class="text-center p-t-12">
            <span class="txt1">
              Olvidaste
            </span>
            <a class="txt2" href="#">
              ¿Tu Cuenta / Contraseña?
            </a>
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="registro.php">
              Registrarse
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        <!--</form>-->
      </div>
    </div>
  </div>
  
        <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Base de Datos I &copy; Proyecto final 2018</p>
      </div>
      <!-- /.container -->
    </footer>

  

</body>
</html>
