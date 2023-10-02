<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Inicio - Cinema Night</title>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css'>
   <link rel="icon" href="../resources/img/logo.ico" type="image/x-icon">
   <link rel="stylesheet" href="../css/proxEs.css">
</head>

<body>
   <header>
      <nav class="panel">
         <ul class="menucine">
            <li>
               <a href="index.php">Cartelera</a>
            </li>
            <li>
               <a href="proxEstrenos.php">Próximos Estrenos</a>
            </li>
            <li>
               <a href="pruebbutaca.php" class="ticket">Tu ticket</a>
            </li>
            <li class = "icono">
               <a href="#">Contacto <img src="../resources/img/desplegable.png" width="16" height="16" align="center" /></a>
               <ul class="Scontacto">
                  <li>
                     <a href="#footer">Télefono</a>
                  </li>
                  <li>
                     <a href="#footer">Correo</a>
                  </li>
               </ul>
            </li>
            <img src="../resources/img/logo1.png" alt="logo de cinema night" width="180" height="80" align="center" />

              <?php 
                  session_start();
                  if (isset($_SESSION['nombre'])) {
                     $nombre = $_SESSION['nombre'];      
               ?>

                  <li class="icono">
                     <a href="#">

                        <?php echo $nombre; ?>

                        <img src="../resources/img/user.png" width="16" height="16" align="center" />
                        <img src="../resources/img/desplegable.png " width="16" height="16" align="center" />
                     </a>
                     <ul class="Scontacto">
                        <li class="cerrar-sesion">
                              <a href="cierre.php">Cerrar Sesión</a>
                        </li>
                     </ul>
                  </li>
            
            <?php
               } else { 
            ?>

               <li class="regist1">
                  <a href="#" class="login" >Iniciar Sesión</a>
               </li>
               <li class="regist1">
                  <a href="#" class="regist">Registrar</a>
               </li>
            <?php
               }
            ?>

         </ul>
      </nav>
   </header>

 <!--CARROUSEL PROX ESTRENOS------>

   <h1 class="titulo-central">¡Lo que viene próximamente a Cinema Night!</h1>
  <section class="game-section">
    <h2 class="line-title">Próximos Estrenos</h2>
    <div class="owl-carousel custom-carousel owl-theme">
      <div class="item active" style="background-image: url(../resources/img/prox1.jpg);">
        <div class="item-desc" style="background: linear-gradient(rgba(0, 0, 0, .50) 0%, rgba(0, 0, 0, .50) 100%);">
          <h3>Krakens y Sirenas</h3>
          <p>Una tímida adolescente descubre que forma parte de la legendaria realeza de los míticos Kraken, los señores del mar, y que su destino en las profundidades del océano es mucho mayor de lo que jamás había soñado.</p>
        </div>
      </div>
      <div class="item"
        style="background-image: url(../resources/img/prox2.jpg);">
        <div class="item-desc" style="background: linear-gradient(rgba(0, 0, 0, .50) 0%, rgba(0, 0, 0, .50) 100%);">
          <h3>Insidious: La puerta roja</h3>
          <p>Para enterrar sus demonios de una vez por todas, Josh Lambert y un ya universitario Dalton Lambert, deberán profundizar en El Mas Allá (The Further) más que nunca, enfrentándose al oscuro pasado familiar y a un huésped de nuevos horrores terroríficos que acechan tras la puerta roja.</p>
        </div>
      </div>
      <div class="item"
        style="background-image: url(../resources/img/prox3.jpg);">
        <div class="item-desc" style="background: linear-gradient(rgba(0, 0, 0, .50) 0%, rgba(0, 0, 0, .50) 100%);">
         <div>
          <h3>Barbie</h3>
          <p>Una muñeca Barbie es expulsada de Barbieland por no ser lo suficientemente perfecta y se embarca después en una aventura en el mundo real.</p>
            </div>
        </div>
      </div>
      <div class="item"
        style="background-image: url(../resources/img/prox4.jpg);">
        <div class="item-desc" style="background: linear-gradient(rgba(0, 0, 0, .50) 0%, rgba(0, 0, 0, .50) 100%);">
          <h3>Oppenheimer</h3>
          <p>Película sobre el físico J. Robert Oppenheimer y su papel como desarrollador de la bomba atómica. Basada en el libro 'American Prometheus: The Triumph and Tragedy of J. Robert Oppenheimer' de Kai Bird y Martin J. Sherwin.</p>
        </div>
      </div>
      <div class="item"
        style="background-image: url(../resources/img/prox5.jpg);">
        <div class="item-desc" style="background: linear-gradient(rgba(0, 0, 0, .50) 0%, rgba(0, 0, 0, .50) 100%);">
          <h3>Flash</h3>
          <p>Para salvar el mundo en el que se encuentra y volver al futuro que conoce, la única esperanza de Barry es correr por su vida. Pero, ¿bastará con llevar a cabo el sacrificio definitivo para reiniciar el universo?</p>
        </div>
      </div>
      <div class="item"
        style="background-image: url(../resources/img/prox6.jpg);">
        <div class="item-desc" style="background: linear-gradient(rgba(0, 0, 0, .50) 0%, rgba(0, 0, 0, .50) 100%);">
          <h3>Indiana Jones y el dial del destino</h3>
          <p>El arqueólogo Indiana Jones deberá emprender otra aventura contra el tiempo para intentar recuperar un dial legendario que puede cambiar el curso de la historia. Acompañado por su ahijada, Jones pronto se encuentra enfrentándose a Jürgen Voller, un ex nazi que trabaja para la NASA.</p>
        </div>
      </div>
    </div>
    </div>
  </section>

   <footer id="footer">
      <nav class="panel2">
         <ul class="menuc">
            <p>Legales</p>
            <li><a href="../resources/fonts y pdfs/Términos y Condiciones Cinema Night.pdf" target="_blank">Términos y
                  Condiciones</a></li>
            <li><a href="../resources/fonts y pdfs/Aviso de Privacidad Cinema Night.pdf" target="_blank">Aviso de Privacidad</a></li>
         </ul>
      </nav>

      <nav class="panel2">
         <ul class="menuc">
            <p>¡Síguenos en nuestras redes sociales!</p>

            <li>
               <a href="https://www.facebook.com/profile.php?id=100093377743584" target="_blank">
                  <img src="../resources/img/facebook.png" alt="Facebook de Cinema Night">
               </a>
            </li>

            <li>
               <a href="https://instagram.com/_cinema.night_?igshid=MmJiY2I4NDBkZg==" target="_blank">
                  <img src="..\resources\img\instagram.png" alt="Instagram de Cinema Night">
               </a>
            </li>

            <li>
               <a href="https://twitter.com/g937473?s=20" target="_blank">
                  <img src="../resources/img/twitter.png" alt="Twitter de Cinema Night">
               </a>
            </li>
            
            <li>
               <a href="https://www.tiktok.com/@cinemanights?_t=8czwNPzR85O&_r=1" target="_blank">
                  <img src="..\resources\img\tiktok.png" alt="Tik Tok de Cinema Night">
               </a>
            </li>
         </ul>

           <p>cinemanight@gmail.com ||  0295-2631850 || S.A. RIF: J-00045832-7 || © Copyright 2023. Cinema Night. Todos los derechos reservados.</p></br>

      </nav>
   </footer>

<!--MODAL REGISTRO------>
<div class="modal1">
    <div class="modal1-content">
    <a href="" class='close'><span class="close1">&times;</span></a>
      <form action="registbd.php" method="POST">
      <h1 class="titulo">Registrar</h1>

<!--datos a ingresar en registro------>
<input class="DATA" type="text" name="nombre" placeholder="Nombre" required maxlength="30">
<input class="DATA" type="text" name="apellido" placeholder="Apellido" required maxlength="30">
<input class="DATA" type="email" name="email" placeholder="Email" required maxlength="30">
<input class="DATA" type="password" name="pass" placeholder="Contraseña" required maxlength="30">

<!--condiciones para registro a redireccionar a pdf -->
<p class="terminoa"><input type="checkbox" required>&nbsp; Estoy de acuerdo con <a class="terminob" href="fonts y pdfs/Términos y Condiciones Cinema Night.pdf"                       target="_blank">Términos y Condiciones</a></p>

        <button type="submit" class ="btn">Registrar</button>
        <p class="terminoa">¿Ya tienes cuenta? <a href="#" class="cambio-mod2">Inicia Sesión</a></p>

      </form>
    </div>
  </div>

<!--MODAL INICIO DE SESION------>
  <div  class="modal2"> <!--id="loginModal"  -->
    <div class="modal2-content">
      <a href="" class='close'><span class="close1">&times;</span></a>
      <form action="login.php" method="POST">
      <h1 class="titulo">Iniciar sesión</h1>

<input class="DATA" type="email" name="email" placeholder="Email" required maxlength="80">

<input class="DATA" type="password" name="pass" placeholder="Contraseña" required maxlength="80">

  <button type="submit" class ="btn">Iniciar Sesión</button>

<!--te redirecciona al formreg para el registro---->
<p class="terminoa">¿Primera vez por aquí? <a href="#" class="cambio-mod">Regístrate</a></p>

      </form>
    </div>
  </div>
  
  
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
   
  <script>
    $(".custom-carousel").owlCarousel({
        autoWidth: true,
        loop: true
    });
    $(document).ready(function () {
        $(".custom-carousel .item").click(function () {
            $(".custom-carousel .item").not($(this)).removeClass("active");
            $(this).toggleClass("active");
        });
    });
  </script>
  <script src="../js/modal.js"></script>
   
</body>
</html>
