<?php
// Configuración de conexión a la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'biblio_t1');

// Nombre de la sesión
$usuarios_sesion = "pwd";

// Crear la conexión con MySQL usando mysqli
$objConexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verificar conexión
if ($objConexion->connect_error) {
    die("Error de conexión: " . $objConexion->connect_error);
}
?>


