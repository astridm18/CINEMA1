<?php

/**
* Este documento permite que el user pueda cerrar sesión dentro de la página web
*
*
*/

session_start();
session_destroy();

header('Location: index.php');

