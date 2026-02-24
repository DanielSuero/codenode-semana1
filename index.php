<?php require "procesado.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="caja">

        <h1>Contáctanos</h1>
        <p class="subtitulo">Rellena el formulario y te responderemos.</p>

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