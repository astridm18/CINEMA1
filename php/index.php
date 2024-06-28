<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Inicio - Cinema Night</title>
   
   <link rel="icon" href="../resources/img/logo.ico" type="image/x-icon">
   <link rel="stylesheet" href="../css/i.css">
</head>


   <header>
  
      <nav class="panel">
         <ul class="menucine">
            <li>
               <a href="index.php">Cartelera</a>
            </li>
            <li>
               <a href="proxEstrenos.php">Próximos Estrenos</a>
            </li>

            <?php      session_start();
             if (isset($_SESSION['nombre'])) {
                  $nombre = $_SESSION['nombre'];      
            ?>

            <li>
               <a href="pruebbutaca.php">Tu ticket</a>
            </li>

            <?php
               } else { 
            ?>

                <li>
               <a href="#" class = "ticket">Tu ticket</a>
            </li>
             
            <?php
               }
            ?>

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
             if (isset($_SESSION['nombre'])) {
                  $nombre = $_SESSION['nombre'];      
            ?>
                     <li class="icono">
                        <a href="#">

                     <?php
                        echo $nombre; 
                     ?>

                     <img src="../resources/img/user.png" width="16" height="16" align="center" />
                     <img src="../resources/img/desplegable.png" width="16" height="16" align="center" />
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

   <body>

<h1 class="titulo-central">¡Bienvenido a Cinema Night!</h1>

<!--SLIDER -->

<?php     
   if (isset($_SESSION['nombre'])) {
      $nombres = $_SESSION['nombre'];      
?>

<div class="container">
  <div class="slider" id="slider1">
  <ul class="slides">

  <li class="slide" id="slide2">
  <div class="pelicula-principal2">
         <div class="contenedor">
            <h3 class="titulo">Spider-Man: Cruzando el multiverso</h3>
            <p class="descripcion">
                  Miles Morales regresa para una aventura épica que transportará al amigable vecino de Brooklyn Spider-Man a través del Multiverso para unir fuerzas con Gwen Stacy y un nuevo equipo de Spider-People, y enfrentarse así a un villano mucho más poderoso que cualquier cosa que hayan conocido antes.</p>
               <button role="button" class="boton"><a href="pruebbutaca.php"><img src="../resources/img/billete.png ">Compra tu ticket</a></button>
               <button role="button" class="boton"><a href="https://www.youtube.com/watch?v=oBmazlyP220" target="_blank"><img src="../resources/img/informacion.png">Ver trailer</a></button>
         </div>
      </div>
</li>


  <li class="slide" id="slide3">
  <div class="pelicula-principal3">
      <div class="contenedor">
         <h3 class="titulo">Fast & Furious X</h3>
          <p class="descripcion">
               Durante numerosas misiones más que imposibles, Dom Toretto y su familia han sido capaces de ser más listos, de tener más valor y de ir más rápido que cualquier enemigo que se cruzara con ellos. Pero ahora tendrán que enfrentarse al oponente más letal que jamás hayan conocido: un terrible peligro que resurge del pasado, que se mueve por una sangrienta sed de venganza y que está dispuesto a destrozar a la familia y destruir para siempre todo lo que a Dom le importa.</p>
            <button role="button" class="boton"><a href="pruebbutaca.php"><img src="../resources/img/billete.png ">Compra tu ticket</a></button>
            <button role="button" class="boton"><a href="https://youtu.be/FDhvbIqTQwI" target="_blank"><img src="../resources/img/informacion.png">Ver trailer</a></button>
         </div>
  </div>
</li>

  <li class="slide" id="slide1">
  <div class="pelicula-principal1">
         <div class="contenedor">
            <h3 class="titulo">Mario Bros</h3>
         
            <p class="descripcion">
                  Una aventura en la que Mario y el resto de los personajes de los juegos viajan a través del Mushroom Kingdom para llevar a cabo una misión de rescate, mientras intentan salvar al mundo también1. En la película, Mario y su hermano pequeño, Luigi, caen por un misterioso portal.</p>
               <button role="button" class="boton"><a href="pruebbutaca.php"><img src="../resources/img/billete.png ">Compra tu ticket</a></button>
               <button role="button" class="boton"><a href="https://youtu.be/SvJwEiy2Wok" target="_blank"><img src="../resources/img/informacion.png">Ver trailer</a></button>
         </div>
      </div>
</li>

</ul>
  <ul class="menu">
    <li>
      <a href="#slide1"></a>
    </li>
    <li>
      <a href="#slide2"></a>
    </li>
     <li>
      <a href="#slide3"></a>
    </li>
  </ul>

</div>
</div>

<?php
 } else { 
?>

   <div class="container">
  <div class="slider" id="slider1">
  <ul class="slides">
  

  <li class="slide" id="slide2">
  <div class="pelicula-principal2">
      <div class="contenedor">
         <h3 class="titulo">Spider-Man: Cruzando el multiverso</h3>
         
          <p class="descripcion">
                Miles Morales regresa para una aventura épica que transportará al amigable vecino de Brooklyn Spider-Man a través del Multiverso para unir fuerzas con Gwen Stacy y un nuevo equipo de Spider-People, y enfrentarse así a un villano mucho más poderoso que cualquier cosa que hayan conocido antes.</p>
               <button role="button" class="boton"><a href="#" class = "compeli2"><img src="../resources/img/billete.png ">Compra tu ticket</a></button>
            <button role="button" class="boton"><a href="https://www.youtube.com/watch?v=oBmazlyP220" target="_blank"><img src="../resources/img/informacion.png">Ver trailer</a></button>
         </div>
  </div>
</li>


<li class="slide" id="slide3">
<div class="pelicula-principal3">
      <div class="contenedor">
         <h3 class="titulo">Fast & Furious X</h3>
         
          <p class="descripcion">
              Durante numerosas misiones más que imposibles, Dom Toretto y su familia han sido capaces de ser más listos, de tener más valor y de ir más rápido que cualquier enemigo que se cruzara con ellos. Pero ahora tendrán que enfrentarse al oponente más letal que jamás hayan conocido: un terrible peligro que resurge del pasado, que se mueve por una sangrienta sed de venganza y que está dispuesto a destrozar a la familia y destruir para siempre todo lo que a Dom le importa.</p>
               <button role="button" class="boton"><a href="#" class = "compeli3"><img src="../resources/img/billete.png ">Compra tu ticket</a></button>
            <button role="button" class="boton"><a href="https://youtu.be/FDhvbIqTQwI" target="_blank"><img src="../resources/img/informacion.png">Ver trailer</a></button>
         </div>
  </div>
</li>

  <li class="slide" id="slide1">
  <div class="pelicula-principal1">
         <div class="contenedor">
            <h3 class="titulo">Mario Bros</h3>
         
            <p class="descripcion">
                 Una aventura en la que Mario y el resto de los personajes de los juegos viajan a través del Mushroom Kingdom para llevar a cabo una misión de rescate, mientras intentan salvar al mundo también1. En la película, Mario y su hermano pequeño, Luigi, caen por un misterioso portal.</p>
               <button role="button" class="boton"><a href="#" class = "compeli1"><img src="../resources/img/billete.png ">Compra tu ticket</a></button>
               <button role="button" class="boton"><a href="https://youtu.be/SvJwEiy2Wok" target="_blank"><img src="../resources/img/informacion.png">Ver trailer</a></button>
         </div>
      </div>
</li>


</ul>
  <ul class="menu">
    <li>
      <a href="#slide1"></a>
    </li>
    <li>
      <a href="#slide2"></a>
    </li>
     <li>
      <a href="#slide3"></a>
    </li>
  </ul>

</div>
</div>

<?php
   }
?>

<!-- CARTELERA -->
   <div class="bloque">
      <br>
      <h2 class="t-especial">Échale un vistazo a las películas en cartelera</h2>
      </br>
      <ul class="cartelera">
         <li>
            <a href="#" class="pelifuncion1" ><img src="../resources/img/Mario Bros.jpg" alt="poster peli 1"></a>
         </li>
         <li>
            <a href="#" class="pelifuncion2"><img src="../resources/img/Guardianes de la Galaxia.jpg" alt="poster peli 2" class = "pelicula-img"></a>
         </li>
         <li>
            <a href="#" class="pelifuncion3"><img src="../resources/img/Los Caballeros del Zodiaco.jpg" alt="poster peli 3"></a>
         </li>
         <li>
            <a href="#" class="pelifuncion4"><img src="../resources/img/Calabozos y Dragones.jpg" alt="poster peli 4"></a>
         </li>
         <li>
            <a href="#" class="pelifuncion5"><img src="../resources/img/RapidosYFuriosos.jpg" alt="poster peli 5"></a>
         </li>
         <li>
            <a href="#" class="pelifuncion6"><img src="../resources/img/AIR.jpg" alt="poster peli 6"></a>
         </li>
         <li>
            <a href="#" class="pelifuncion7"><img src="../resources/img/Sirenita.jpg" alt="poster peli 7"></a>
         </li>
         <li>
            <a href="#" class="pelifuncion8"><img src="../resources/img/Renfield.jpg" alt="poster peli 8"></a>
         </li>
         <li>
            <a href="#" class="pelifuncion9"> <img src="../resources/img/Spiderverse2.jpg" alt="poster peli 9"></a>
         </li>
      </ul>
   </div>

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
                  <img src="../resources/img/instagram.png" alt="Instagram de Cinema Night">
               </a>
            </li>

            <li>
               <a href="https://twitter.com/g937473?s=20" target="_blank">
                  <img src="../resources/img/twitter.png" alt="Twitter de Cinema Night">
               </a>
            </li>
            
            <li>
               <a href="https://www.tiktok.com/@cinemanights?_t=8czwNPzR85O&_r=1" target="_blank">
                  <img src="../resources/img/tiktok.png" alt="Tik Tok de Cinema Night">
               </a>
            </li>
         </ul>

            <p>cinemanight@gmail.com ||  0295-2631850 || S.A. RIF: J-00045832-7 || © Copyright 2023. Cinema Night. Todos los derechos reservados.</p></br>

      </nav>
   </footer>
  
<!-- MODALES FUNCIONES -->

<?php     
   if (isset($_SESSION['nombre'])) {
      $nombre = $_SESSION['nombre'];      
?>
      <div class="modalp1">
         <div class="modal-contentp1">
            <span class="closep1">&times;</span>
            <h2>Mario Bros</h2>
            <p><strong class="cinema-synopsis">Sinopsis:</strong> Una aventura en la que Mario y el resto de los personajes de los juegos viajan a través del Mushroom Kingdom para llevar a cabo una misión de rescate, mientras intentan salvar al mundo también1. En la película, Mario y su hermano pequeño, Luigi, caen por un misterioso portal.</p>
            <p><strong class="cinema-censorship">Censura:</strong> A</p>
            <img src="../resources/img/Mario Bros.jpg" alt="poster peli 1">
            <div class="cinema-schedule">
               <p class="schedule-title">Horarios:</p>
               <div class="schedule-buttons">
                  <button ><a href="pruebbutaca.php">05:00 p.m</a></button>
                  <button>06:50 p.m</button>
                  <button>8:20 p.m</button>
               </div>
            </div>
         </div>
      </div>

<?php
   } else {
?>

      <div class="modalp1">
      <div class="modal-contentp1">
         <span class="closep1">&times;</span>
         <h2>Mario Bros</h2>
         <p><strong class="cinema-synopsis">Sinopsis:</strong> Una aventura en la que Mario y el resto de los personajes de los juegos viajan a través del Mushroom Kingdom para llevar a cabo una misión de rescate, mientras intentan salvar al mundo también1. En la película, Mario y su hermano pequeño, Luigi, caen por un misterioso portal.</p>
         <p><strong class="cinema-censorship">Censura:</strong> A</p>
         <img src="../resources/img/Mario Bros.jpg" alt="poster peli 1">
         <div class="cinema-schedule">
            <p class="schedule-title">Horarios:</p>
            <div class="schedule-buttons">
               <button class = "func1">05:00 p.m</button>
               <button>06:50 p.m</button>
               <button>8:20 p.m</button>
            </div>
         </div>
      </div>
   </div>

<?php
   }
?>
      
<div class="modalp2">
   <div class="modal-contentp2">
      <span class="closep2">&times;</span>
      <h2>Guardianes de la Galaxia</h2>
      <p><strong class="cinema-synopsis">Sinopsis:</strong> Los Guardianes de la Galaxia se están adaptando a la vida en Knowhere cuando partes del pasado de Rocket resurgen. Para protegerlo, Peter Quill debe liderar a los Guardianes, junto con su nuevo miembro, Cosmo el perro espacial, en una peligrosa misión que podría conducir a la disolución del equipo actual. </p>
      <p><strong class="cinema-censorship">Censura:</strong> A</p>
      <img src="../resources/img/Guardianes de la Galaxia.jpg" alt="poster peli 2">
      <div class="cinema-schedule">
         <p class="schedule-title">Horarios:</p>
         <div class="schedule-buttons">
            <button>05:00 p.m</button>
            <button>06:50 p.m</button>
            <button>8:20 p.m</button>
         </div>
      </div>
   </div>
</div>

<div class="modalp3">
   <div class="modal-contentp3">
      <span class="closep3">&times;</span>
      <h2>Los Caballeros del Zodiaco</h2>
      <p><strong class="cinema-synopsis">Sinopsis:</strong> Cuando una diosa de la guerra se reencarna en el cuerpo de una joven, el huérfano de la calle Seiya descubre que está destinado a protegerla y salvar al mundo. Pero solo si puede enfrentar su propio pasado y convertirse en un Caballero del Zodíaco.</p>
      <p><strong class="cinema-censorship">Censura:</strong> A</p>
      <img src="../resources/img/Los Caballeros del Zodiaco.jpg" alt="poster peli 3">
      <div class="cinema-schedule">
         <p class="schedule-title">Horarios:</p>
         <div class="schedule-buttons">
            <button>05:00 p.m</button>
            <button>06:50 p.m</button>
            <button>8:20 p.m</button>
         </div>
      </div>
   </div>
</div>

<div class="modalp4">
   <div class="modal-contentp4">
      <span class="closep4">&times;</span>
      <h2>Calabozos y Dragones</h2>
      <p><strong class="cinema-synopsis">Sinopsis:</strong> El programa se enfoca en un grupo de seis jóvenes amigos que son transportados al mundo de Dungeons & Dragons, siguiendo sus aventuras mientras intentan encontrar el camino a casa con la ayuda de su guía, el Dungeon Master (Amo del Calabozo), mientras luchan contra un mago malvado. </p>
      <p><strong class="cinema-censorship">Censura:</strong> A</p>
      <img src="../resources/img/Calabozos y Dragones.jpg" alt="poster peli 4">
      <div class="cinema-schedule">
         <p class="schedule-title">Horarios:</p>
         <div class="schedule-buttons">
            <button>05:00 p.m</button>
            <button>06:50 p.m</button>
            <button>8:20 p.m</button>
         </div>
      </div>
   </div>
</div>

<div class="modalp5">
   <div class="modal-contentp5">
      <span class="closep5">&times;</span>
      <h2> Rapidos y Furiosos X</h2>
      <p><strong class="cinema-synopsis">Sinopsis:</strong> A lo largo de infinidad de misiones imposibles, Dom Toretto (Vin Diesel) y su familia han sido más astutos, más nerviosos y más rápidos que todos los enemigos en su camino. Ahora, se enfrentan al oponente más letal al que se han enfrentado jamás: una amenaza aterradora.</p>
      <p><strong class="cinema-censorship">Censura:</strong> B</p>
      <img src="../resources/img/RapidosYFuriosos.jpg" alt="poster peli 5">
      <div class="cinema-schedule">
         <p class="schedule-title">Horarios:</p>
         <div class="schedule-buttons">
            <button>05:00 p.m</button>
            <button>06:50 p.m</button>
            <button>8:20 p.m</button>
         </div>
      </div>
   </div>
</div>

<div class="modalp6">
   <div class="modal-contentp6">
      <span class="closep6">&times;</span>
      <h2>AIR</h2>
      <p><strong class="cinema-synopsis">Sinopsis:</strong> La historia narra la improbable y revolucionaria asociación que a mediados de los 80 se firmó entre Michael Jordan -un novato en ese momento- y la incipiente sección de baloncesto de la empresa de calzado deportivo Nike; un acuerdo que revolucionaría el mundo del deporte y la cultura contemporánea.</p>
      <p><strong class="cinema-censorship">Censura:</strong> B</p>
      <img src="../resources/img/AIR.jpg" alt="poster peli 6">
      <div class="cinema-schedule">
         <p class="schedule-title">Horarios:</p>
         <div class="schedule-buttons">
            <button>05:00 p.m</button>
            <button>06:50 p.m</button>
            <button>8:20 p.m</button>
         </div>
      </div>
   </div>
</div>

<div class="modalp7">
   <div class="modal-contentp7">
      <span class="closep7">&times;</span>
      <h2>La Sirenita</h2>
      <p><strong class="cinema-synopsis">Sinopsis:</strong> Ariel, la más joven de las hijas del Rey Tritón y la más desafiante, desea saber más sobre el mundo más allá del mar y, mientras visita la superficie, se enamora del apuesto Príncipe Eric. Si bien las sirenas tienen prohibido interactuar con los humanos, Ariel debe seguir su corazón.</p>
      <p><strong class="cinema-censorship">Censura:</strong> A+</p>
      <img src="../resources/img/Sirenita.jpg" alt="poster peli 7">
      <div class="cinema-schedule">
         <p class="schedule-title">Horarios:</p>
         <div class="schedule-buttons">
            <button>05:00 p.m</button>
            <button>06:50 p.m</button>
            <button>8:20 p.m</button>
         </div>
      </div>
   </div>
</div>

<div class="modalp8">
   <div class="modal-contentp8">
      <span class="closep8">&times;</span>
      <h2>Renfield</h2>
      <p><strong class="cinema-synopsis">Sinopsis:</strong> Renfield es el torturado asistente del vampiro más narcisista de la historia: Drácula. Renfield se ve obligado a procurarle víctimas a su amo y hacer todo aquello que este le ordene, por inmoral que sea. Tras siglos de servidumbre, Renfield está listo para descubrir si hay vida lejos de la sombra del Príncipe.</p>
      <p><strong class="cinema-censorship">Censura:</strong> A</p>
      <img src="../resources/img/Renfield.jpg" alt="poster peli 8">
      <div class="cinema-schedule">
         <p class="schedule-title">Horarios:</p>
         <div class="schedule-buttons">
            <button>05:00 p.m</button>
            <button>06:50 p.m</button>
            <button>8:20 p.m</button>
         </div>
      </div>
   </div>
</div>

<div class="modalp9">
   <div class="modal-contentp9">
      <span class="closep9">&times;</span>
      <h2>Spider-Man: Cruzando el multiverso</h2>
      <p><strong class="cinema-synopsis">Sinopsis:</strong> Miles Morales regresa para una aventura épica que transportará al amigable vecino Spider-Man de Brooklyn a través del multiverso para que una fuerzas con Gwen Stacy y un nuevo equipo de Spider-gente en aras de combatir al villano más poderoso que cualquier cosa a la que se hayan enfrentado.</p>
      <p><strong class="cinema-censorship">Censura:</strong> A</p>
      <img src="../resources/img/Spiderverse2.jpg" alt="poster peli 9">
      <div class="cinema-schedule">
         <p class="schedule-title">Horarios:</p>
         <div class="schedule-buttons">
            <button>05:00 p.m</button>
            <button>06:50 p.m</button>
            <button>8:20 p.m</button>
         </div>
      </div>
   </div>
</div>

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
<p class="terminoa"><input type="checkbox" required>&nbsp; Estoy de acuerdo con <a class="terminob" href="../resources/fonts y pdfs/Términos y Condiciones Cinema Night.pdf"                       target="_blank">Términos y Condiciones</a></p>

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


<p class="terminoa">¿Primera vez por aquí? <a href="#" class="cambio-mod">Regístrate</a></p>

      </form>
    </div>
  </div>
   <script src="../js/modales.js"></script>
   <script src="../js/modaleslg.js"></script>
</body>
</html>
G