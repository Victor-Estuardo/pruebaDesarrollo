<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Persona</title>
    <!-- Agrega aquí tus enlaces a archivos CSS, si los tienes -->
</head>
<body>
    <h1>Crear Persona</h1>
    <form action="<?php echo site_url('PersonaController/crear_persona'); ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="DPI">DPI:</label>
        <input type="text" id="DPI" name="DPI" required>
        <br>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>
        <br>
        <!-- Agrega aquí más campos según tus necesidades -->
        <button type="submit">Guardar</button>
    </form>

    <a href="<?php echo site_url('LogoutController/logout'); ?>">Cerrar sesión</a>
</body>
</html>
