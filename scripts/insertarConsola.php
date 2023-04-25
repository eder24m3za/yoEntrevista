<?php
    use MyApp\data\Database;
    include("../scr/data/database.php");
 
    $Database = new Database;
 
    $conexion = $Database -> conexion() ;

    $nombre = $_POST['Nombre'];
    $almacenamiento = $_POST['Almacenamiento'];
    $ram = $_POST['RAM'];
    $precio = $_POST['Precio'];
    $color = $_POST['Color'];
    $lanzamiento = $_POST['Lanzamiento'];
    $estatus = "Activo";


    $sql = "INSERT INTO consolas (Nombre,Almacenamiento,RAM,Precio,Color,Lanzamiento,Estatus) VALUES('$nombre','$almacenamiento','$ram', '$precio', '$color', '$lanzamiento', '$estatus')";

    $query = mysqli_query($conexion,$sql);

    if($query)
    {
        Header("Location: ../views/consolas.php");
    }
?>