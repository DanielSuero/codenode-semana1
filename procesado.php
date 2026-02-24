<?php

$nombre = $_POST["nombre"] ?? "";
$email = $_POST["email"] ?? "";
$mensaje = $_POST["mensaje"] ?? "";
$aviso = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($nombre == "" || $email == "" || $mensaje == "") {
        $aviso = "<p class='error'>Rellena todos los campos por favor.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $aviso = "<p class='error'>Ese correo no parece válido.</p>";
    } else {
        $aviso = "<p class='exito'>¡Gracias " . htmlspecialchars($nombre) . "! Tu mensaje fue enviado.</p>";
    }
}
