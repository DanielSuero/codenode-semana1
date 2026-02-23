<?php

$nombre = $_POST["nombre"] ?? "";

$email = $_POST["email"] ?? "";

$mensaje = $_POST["mensaje"] ?? "";

$aviso = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($nombre == "" || $email == "" || $mensaje == "") {

        $aviso = "<p style='color:red;'>Rellena todos los campos por favor.</p>";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $aviso = "<p style='color:red;'>Ese correo no parece válido.</p>";

    } else {

        $aviso = "<p style='color:lightgreen;'>¡Gracias " . htmlspecialchars($nombre) . "! Tu mensaje fue enviado.</p>";

    }
}
?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Contacto</title>

    <style>

        body { font-family: Arial; background: #1b2a4a; color: white; display: flex; justify-content: center; padding: 40px; }

        .caja { background: #16213e; padding: 25px; border-radius: 10px; width: 380px; }

        h1 { color: #a2b8ffff; }

        input, textarea { width: 100%; padding: 8px; margin: 5px 0 12px; border: 1px solid #333; border-radius: 5px; background: #406088ff; color: white; box-sizing: border-box; }

        textarea { height: 80px; }

        button { width: 100%; padding: 10px; background: #0000ffff; color: white; border: none; border-radius: 5px; cursor: pointer; }

    </style>

</head>

<body>

<div class="caja">

    <h1>Contáctanos</h1>

    <p style="color:gray;">Rellena el formulario y te responderemos.</p>

    <?php echo $aviso; ?>

    <form method="POST">

        <label>Nombre</label>

        <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">

        <label>Correo</label>

        <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

        <label>Mensaje</label>

        <textarea name="mensaje"><?php echo htmlspecialchars($mensaje); ?></textarea>

        <button type="submit">Enviar</button>

    </form>

</div>

</body>

</html>