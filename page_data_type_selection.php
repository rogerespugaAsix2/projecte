<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Tipo de Datos</title>
</head>
<body>
    <h1>Seleccione el tipo de datos</h1>
    <form method='post' action='process.php'>
        <label for="data_type">Seleccione el tipo de datos:</label>
        <select name="data_type" required>
            <option value="basic">Datos Básicos</option>
            <option value="advanced">Datos Avanzados</option>
        </select><br>

        <input type='hidden' name='page' value='5'> <!-- Siguiente página siempre será 5 -->
        <button type='submit'>Siguiente página</button>
    </form>
</body>
</html>
