<?php

namespace MyApp\data;

use PDO;
use PDOException;

class Database 
{

    function conexion()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "juego";

        $conexion = mysqli_connect($host, $user, $password);

        mysqli_select_db($conexion, $database);

        return $conexion;
    }
}