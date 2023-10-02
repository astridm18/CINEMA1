<!DOCTYPE html> 
<html> 
<head> 

    <title>Compra de Butacas</title> 

    <link rel="icon" href="../resources/img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/i.css">
    <link rel="stylesheet" href="../css/pruebbutaca.css">

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
            <li>
           <a href="#" class = "ticket">Tu ticket</a>
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
                  $nombres = $_SESSION['nombre'];      
         ?>

            <li class="icono">
               <a href="#">
                  <?php echo $nombres; ?>
                  <img src="../resources/img/user.png" width="16" height="16" align="center" />
                  <img src="../resources/img/desplegable.png" width="16" height="16" align="center" />
               </a>
               <ul class="Scontacto">
                  <li class="cerrar-sesion">
                        <a href="cierre.php">Cerrar Sesión</a>
                  </li>
               </ul>
            </li>
</ul>
</li>
    
<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">Mario Bros</h3>
				<p class="descripcion">
            Una aventura en la que Mario y el resto de los personajes de los juegos viajan a través del Mushroom Kingdom para llevar a cabo una misión de rescate, mientras intentan salvar al mundo también. En la película, Mario y su hermano pequeño, Luigi, caen por un misterioso portal.</p>
				</p>
				
			</div>
		</div>
	</main>

     </ul>
  </nav>
</header>
<body> 
<br>
<h1>SALA 1 CINEMA NIGHT</h1> 
      </br>
    
<form method="post" action="pruebcomprar.php"> 
   <div class="butacas-container"> 
      <table>

      <?php

      /**
      * Esta sección muestra las butacas al momento de la compra
      *
      *
      */

      //Establecer conexión con la base de datos
      $servidor = "localhost";
      $user = "root";
      $pass = "";
      $dbname = "cinee";

      $conn = new mysqli($servidor, $user, $pass, $dbname);

               //Verificar la conexión
               if ($conn->connect_error) {
                  die("Error en la conexión: " . $conn->connect_error);
               }

               //Obtener el precio de la base de datos
               $sql = "SELECT precio FROM butacas LIMIT 1";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $precio = $row['precio'];
               } else {
                  //Si no se encuentra el precio en la base de datos, establecer un valor predeterminado
                  $precio = 2.00; // Precio por defecto
               }

               $counter = 1;
               //Identificar cada fila de la sala
               $letters = ['A', 'B', 'C', 'D', 'E'];

               //chequear butacas ocupadas registradas en la bdd
               $butacasOcupadas = array();
               $sql = "SELECT butacas_id FROM butacas WHERE estado = '1'";
               $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                     $butacasOcupadas[] = $row['butacas_id'];
                  }
               }

               for ($row = 4; $row >= 0; $row--) {
                  echo '<tr>';
                  echo "<td class='fila'>$letters[$row]</td>";
                  for ($col = 4; $col >= 0; $col--) {
                     echo '<td>';
                     $butacaNumber = ($row * 5) + $col + 1;
                     //se deshabilita para que no se pueda seleccionar nuevamente
                     $checked = in_array($butacaNumber, $butacasOcupadas) ? 'checked disabled' : '';
                     $class = in_array($butacaNumber, $butacasOcupadas) ? 'ocupada' : '';
                     echo "<input type='checkbox' name='butacas[]' id='butaca$butacaNumber' value='$butacaNumber' $checked>";
                     echo "<label for='butaca$butacaNumber' class='$class'></label>";
                     echo "<div id='butaca-tooltip-$butacaNumber' class='butaca-tooltip'>$butacaNumber</div>";
                     echo '</td>';
                  }
                  echo '</tr>';
               }
      ?>

      </table>
   </div>
    <div class="estado-butacas-container">
        <div class="estado-butacas">
            <div class="estado-disponible"></div>
            <span>Disponible</span>
        </div>
        <div class="estado-butacas">
            <div class="estado-seleccionado"></div>
            <span>Seleccionado</span>
        </div>
        <div class="estado-butacas">
            <div class="estado-ocupado"></div>
            <span>Ocupado</span>
        </div>
    </div>

    <div class="estado-butacas-container">
        <table>
            <tr>
                <td colspan="5" class="precio">Precio por butaca: <?php echo "$" . number_format($precio, 2); ?></td>
                
            </tr>
        </table>
    </div>
<br>
    <input type="submit" class="botn" value="Validar compra">
         </br>
</form>

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
</body>
</html>
