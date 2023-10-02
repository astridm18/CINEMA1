<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Compra asientos - Cinema Night</title>
   <link rel="icon" href="../resources/img/logo.ico" type="image/x-icon">
   <link rel="stylesheet" href="../css/pruebcomprar.css">
</head>
<body>
<div class="container">
    <?php

    /**
    * Este sección almacena las butacas compradas en la bdd
    *
    *
    */

    // Paso 1: Establecer conexión con la base de datos
    $servidor = "Localhost";
    $user = "root";
    $pass = "";
    $dbname = "cinee";

    $conn = new mysqli($servidor, $user, $pass, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    // Obtener si existe el array
    if (isset($_POST['butacas'])) {
        $butacasSeleccionadas = $_POST['butacas'];
        $butacasCompradas = array();
        $precio = 2.00; // Precio por butaca
        $total = 0;

        
        // Paso 3: Guardar información en la base de datos
        foreach ($butacasSeleccionadas as $butaca) {
            // Insertar el registro en la tabla "butacas" con los parámetros establecidos
            $sql = "INSERT INTO butacas (butacas_id, estado, precio) VALUES ('$butaca', '1', '$precio')";
            if ($conn->query($sql) == true) {
                $butacasCompradas[] = $butaca;
                $total += $precio; // Sumar el precio de cada butaca al total
            } else {
                echo "Error al insertar en la base de datos: " . $conn->error;
            }
        }

        session_start();

        // Verificar si el usuario ha iniciado sesión
        if (isset($_SESSION['nombre'])) {
            $nombre = $_SESSION['nombre'];
            // Mostrar mensaje de butacas compradas
            if (!empty($butacasCompradas)) {
                echo "<h2>¡Felicidades $nombre, estás a solo unos pasos de realizar la compra de tus entradas exitosamente!</h2>";
                echo "<h2>Butacas elegidas:</h2>";
                echo "<ul>";
                foreach ($butacasCompradas as $butaca) {
                    echo "<li>Butaca $butaca</li>";
                }
                echo "</ul>";
                echo "<p>Total a pagar: $" . number_format($total, 2) . "</p>"; // Mostrar el total a pagar
            }
        }
    } else {
        echo "<h2>Error: No se seleccionó ninguna butaca.</h2>";
    }

    // Cerrar la conexión con la base de datos
    $conn->close();
    ?>
</div>
<div class="button-container">
    <a href="paypal.php?precio=<?php echo $total; ?>" class="custom-button">Realizar Pago</a>

    <a href="pruebbutaca.php" class="custom-button">Volver a la Sala</a>
</div>
</body>
</html>
