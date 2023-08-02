<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos de Prueba</title>
</head>
<body>
    <h1>Datos de la tabla "prueba"</h1>
    <table>
        <tr>
            <th>ID Usuario</th>
            <th>Rol</th>
        </tr>
        <?php foreach ($prueba_data as $row): ?>
            <tr>
                <td><?php echo $row->id_usuario; ?></td>
                <td><?php echo $row->rol; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
