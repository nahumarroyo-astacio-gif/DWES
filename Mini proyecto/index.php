<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>
<body>

    <h1>Catálogo de productos</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Caducidad</th>
        </tr>

        <?php foreach ($productosFiltrados as $producto) { ?>

            <tr>
                <td><?= $producto["nombre"] ?></td>
                <td><?= $producto["precio"] ?> €</td>
                <td><?= $producto["stock"] ?></td>
                <td><?= $producto["caducidad"] ?></td>
            </tr>

        <?php } ?>

    </table>

    <h3>Valor total del inventario:</h3>

    <?= valorInventario($productosFiltrados) ?> €

</body>
</html>