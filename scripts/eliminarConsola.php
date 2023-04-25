<?php
    use MyApp\data\Database;
    include("../scr/data/database.php");

    $Database = new Database;

    $conexion = $Database -> conexion() ;

    $id = $_GET['id'];

    $sql = "UPDATE consolas SET Estatus='Inactivo' WHERE id='$id' ";

    $query = mysqli_query($conexion, $sql);

    if($query){
        Header("Location: ../views/consolas.php");
    }
?>