<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos de Prueba</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1>Datos de la tabla "prueba"</h1> <br>
    <table class="table table-striped table-dark">
        <tr>
            <th>ID Usuario</th>
            <th>Rol</th>
            <!-- Aquí puedes agregar más encabezados para cada columna -->
            <th>ID Persona</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>Fecha Crear</th>
            <th>Usuario Crear</th>
            <th>Fecha Mod</th>
            <th>Usuario Mod</th>
            <th>Estado</th>
        </tr>
        <?php foreach ($prueba_data as $row): ?>
            <tr>
                <td><?php echo $row->id_usuario; ?></td>
                <td><?php echo $row->id_rol; ?></td>
                <!-- Aquí puedes agregar más celdas para cada columna -->
                <td><?php echo $row->id_persona; ?></td>
                <td><?php echo $row->usuario; ?></td>
                <td><?php echo $row->clave; ?></td>
                <td><?php echo $row->fecha_crear; ?></td>
                <td><?php echo $row->usuario_crear; ?></td>
                <td><?php echo $row->fecha_mod; ?></td>
                <td><?php echo $row->usuario_mod; ?></td>
                <td><?php echo $row->estado; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
