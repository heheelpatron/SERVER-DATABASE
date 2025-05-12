<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RJ-45 Inventario</title>
</head>
<style>
    .container {
        margin-top: 20px;
    }
    .cabecera { 
        background-color: beige;
       
    }
    .cabecera thead { 
        color: white;
        font-size: 30px;
        word-spacing: 25px;
    }
    .cabecera tr { 
        font-size: 15px;
    }
    .cabecera td { 
        padding: 10px;
        text-align: center;
    }
    .cabecera thead td {
        color: black;
    }
</style>
<body>
    <div class="container">
        <div class="cabecera">
            <table cellspacing="0" border="1" width="100%">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Cantidad</td> 
                        <td>Tamaño</td> 
                        <td>Color</td> 
                        <td>Cambiar información</td>
                    </tr>
                </thead>
                <tbody> 
                    <tr>
                        <td>1</td>
                        <td>171</td>
                        <td>15cm</td>
                        <td>BLANCO</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1</td>
                        <td>15cm</td>
                        <td>NEGRO</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>6</td>
                        <td>25cm</td>
                        <td>AMARILLO</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>3</td>
                        <td>25cm</td>
                        <td>VERDE</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>4</td>
                        <td>25cm</td>
                        <td>GRISES</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                   
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>67</td>
                        <td>25cm</td>
                        <td>ROJO</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>20</td>
                        <td>25cm</td>
                        <td>BLANCO</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>16</td>
                        <td>25cm</td>
                        <td>AZUL</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>1</td>
                        <td>25cm</td>
                        <td>NEGRO</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>29</td>
                        <td>50cm</td>
                        <td>X</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>43</td>
                        <td>100cm</td>
                        <td>X</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>5</td>
                        <td>200cm</td>
                        <td>X</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>4</td>
                        <td>300cm</td>
                        <td>X</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>1</td>
                        <td>500cm</td>
                        <td>X</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                    
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>1</td>
                        <td>150cm</td>
                        <td>X</td>
                        <td>
                            <form action="modificar.php" method="post">
                                <input type="submit" value="Modificar"> </td>
                            </form>                   
                    </tr>
                    <tr>
                        <td colspan="7">
                            <form action="añadir.php" method="post">
                                <input type="submit" value="Añadir" style="width: 30%; height: 50px;">
                            </form>                             
                        </td>
                    </tr>
                </tbody>
                </tr>
            </table>
        </div>    
    </div>
    <?php
// Conectar a la base de datos
$servername = "localhost";
$username = "phpmyadmin";
$password = "kali";
$dbname = "phpmyadmin";

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos actualizados
$resultado = $conexion->query(query: "SELECT * FROM RJ45");
?>
</body>
</html>