<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Ítem</title>
</head>
<body>
    <h1>Crear item</h1>
    <form action="save_item.php" method="POST">
        <label for="name">Nombre del item:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Descripcion:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="type">Tipo:</label><br>
        <select id="type" name="type" required>
            <option value="weapon">Weapon</option>
            <option value="armor">Armor</option>
            <option value="potion">Potion</option>
            <option value="misc">Misc</option>
        </select><br><br>

        <label for="effect">Efecto:</label><br>
        <input type="number" id="effect" name="effect" required><br><br>

        <label for="img">Imagen (URL o archivo):</label><br>
        <input type="text" id="img" name="img" required><br><br>

        <button type="submit">Guardar Ítem</button>
    </form>
</body>
</html>
