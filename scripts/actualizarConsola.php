<?php
    use MyApp\data\Database;
    include("../scr/data/database.php");
 
    $Database = new Database;
 
    $conexion = $Database -> conexion() ;

    $id = $_POST['id'];
    $nombre = $_POST['Nombre'];
    $almacenamiento = $_POST['Almacenamiento'];
    $ram = $_POST['RAM'];
    $precio = $_POST['Precio'];
    $color = $_POST['Color'];
    $lanzamiento = $_POST['Lanzamiento'];

    $sql = "UPDATE consolas SET Nombre='$nombre', Almacenamiento='$almacenamiento', RAM='$ram', Precio='$precio', Color='$color', Lanzamiento='$lanzamiento' WHERE id='$id'";

    $query = mysqli_query($conexion,$sql);

    if($query){
        Header("Location: ../views/consolas.php");
    }
?>