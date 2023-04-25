<?php
    use MyApp\data\Database;
    include("../scr/data/database.php");

    $Database = new Database;

    $conexion = $Database -> conexion() ;

    $id = $_GET['id'];

    $sql="SELECT * FROM consolas WHERE id='$id'";

    $query=mysqli_query($conexion,$sql);
    $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formularioCss.css">
    <title>actualizarConsola</title>
</head>
<body>    
    <form action="../scripts/actualizarConsola.php" method="post">
        <h2>Consolas</h2>
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" value="<?php echo $row['Nombre'] ?>" required>
    
        <label for="Almacenamiento">Almacenamiento:</label>
        <input type="text" id="Almacenamiento" name="Almacenamiento" value="<?php echo $row['Almacenamiento'] ?>" required>
    
        <label for="RAM">RAM:</label>
        <input type="text" id="RAM" name="RAM" value="<?php echo $row['RAM'] ?>" required>
    
        <label for="Precio">Precio:</label>
        <input type="number" id="Precio" name="Precio" value="<?php echo $row['Precio'] ?>" required>

        <label for="Color">Color:</label>
        <input type="text" id="Color" name="Color" value="<?php echo $row['Color'] ?>" required>

        <label for="Lanzamiento">Lanzamiento:</label>
        <input type="date" id="Lanzamiento" name="Lanzamiento" value="<?php echo $row['Lanzamiento'] ?>" required>
        
        <br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>