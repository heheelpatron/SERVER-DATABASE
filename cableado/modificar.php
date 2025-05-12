<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar inventario</title>
</head>
<body>
<form action="modificar.php" method="POST">
    <label for="tabla">Selecciona la tabla:</label>
    <select name="tabla">
        <option value="RJ45">RJ45</option>
        <option value="MONOMODO">Monomodo</option>
        <option value="MULTIMODO">Multimodo</option>
        <option value="SCHUCKO">Schuko</option>
    </select>

    <label for="columna">Id del cable a modificar:</label>
    <input type="text" name="id" placeholder="Insertar el NÚMERO del id" required>

    <label for="valor">Columna a modificar:</label>
    <input type="text" name="columna" placeholder="poner colum como en la tabla" required>

    <label for="id">Nuevo valor:</label>
    <input type="text" name="valor" required>

    <button type="submit">Modificar</button>
</form>

    <?php 
        $servername = "localhost";
        $username = "phpmyadmin";
        $password = "kali";
        $dbname = "phpmyadmin";
        
        // Se conecta a la base de datps
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // En caso de que falle 
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $tabla=$_POST['tabla'];
        $columna = strtoupper($_POST['columna']); 
        $valor = $_POST['valor']; 
        $id = $_POST['id']; 

            // Definir las tablas y sus columnas permitidas
        $tablas = [
            "RJ45" => ["ID", "CANTIDAD", "TAMANO", "COLOR"],
            "MONOMODO" => ["ID", "CABLEADO", "CANTIDAD", "TAMANO", "COLOR", "CONECTOR"],
            "MULTIMODO" => ["ID", "CABELADO", "CANTIDAD", "TAMANO", "COLOR", "CONECTOR"],
            "SCHUKO" => ["ID", "TIPO", "CANTIDAD"]
        ];

        // Validar si la tabla seleccionada es válida
        if (!array_key_exists($tabla, $tablas)) {
            die("Tabla no permitida.");
        }

        // Validar si la columna existe en la tabla elegida
        if (!in_array($columna, $tablas[$tabla])) {
            die("Columna no válida para la tabla seleccionada.");
        }

        // Ejecutar la consulta de actualización
        $sql = "UPDATE $tabla SET $columna = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $valor, $id);

        if ($stmt->execute()) {
            echo "Registro actualizado correctamente en la tabla $tabla.";
        } else {
            echo "Error al actualizar la tabla: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    ?>
</body>
</html>