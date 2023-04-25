<?php
    use MyApp\data\Database;
    include("../scr/data/database.php");

    $Database = new Database;

    $conexion = $Database -> conexion() ;

    $sql = "SELECT * FROM consolas WHERE Estatus='Activo'";
    $query = mysqli_query($conexion, $sql);

    $row=mysqli_fetch_array($query)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tablasCss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Consolas</title>
</head>
<body>
  <?php
  include("cabecera.php")
  ?>
  <br>
  <div class="container ">
      <a href="insertarConsola.php" type="button" class="btn btn-info">Agregar Consola</a>
  </div>
  <br>
  <br>
<table>
  <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Almacenamiento</th>
        <th>RAM</th>
        <th>Precio</th>
        <th>Color</th>
        <th>Lanzamiento</th>
        <th></th>
        <th></th>
      </tr>
  </thead>
  <tbody>
    <?php while($row=mysqli_fetch_array($query))
    {
        ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['Nombre'] ?></td>
        <td><?php echo $row['Almacenamiento'] ?></td>
        <td><?php echo $row['RAM'] ?></td>
        <td><?php echo $row['Precio'] ?></td>
        <td><?php echo $row['Color'] ?></td>
        <td><?php echo $row['Lanzamiento'] ?></d>
        <td><a href="actualizarConsola.php?id=<?php echo $row['id']?>" class="btn btn-primary">Editar</a></td>
            <td><a href="../scripts/eliminarConsola.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a></td>
    </tr>
    <?php
    }
    ?>

  </tbody>
</table>
</body>
</html>