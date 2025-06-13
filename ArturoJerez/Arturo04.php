<?php
    ob_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "escuela";

    $conexion = new mysqli($servername, $username, $password, $database);
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $sql_edad = "SELECT id, edad FROM edades";
    $sql_colonias = "SELECT id, nombre_colonias FROM colonias";
    $sql_especialidades = "SELECT id, nombre_especialidad FROM especialidades";
    $sql_generos = "SELECT id, nombre_genero FROM generos";

    $result_edad = $conexion->query($sql_edad);
    $result_colonias = $conexion->query($sql_colonias);
    $result_especialidades = $conexion->query($sql_especialidades);
    $result_generos = $conexion->query($sql_generos);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link href="https://fonts.cdnfonts.com/css/major-birch" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/montagu-slab" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/waiting-summer" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/fjalla-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/overpass-mono-2" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>Arturo Jerez Hdz Index</title>
</head>

<style>
    .dropdown-menu {
    background-color: #5b3a3a;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    padding: 10px 0;
    z-index: 1000;
    transition: all 0.3s ease;
    }
    .dropdown-item {
        color: #eef0f2;
        padding: 12px 20px;
        text-decoration: none !important;
        display: block;
        border-radius: 4px;
    }
    .dropdown-item:hover {
        background-color: rgba(238, 240, 242, 0.3);
        color: #ffffff;
        transform: scale(1.05);
    }
    .container1 {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 50%;
        background-color: #282a36;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        color: white;
        margin: auto;
    }
    h1 {
        text-align: center;
        color: #846a6a;
        margin-bottom: 15px;
    }
    form {
        display: flex;
        flex-direction: column;
    }
    label {
        font-size: 16px;
        margin-bottom: 5px; 
    }
    input[type="text"], input[type="number"], input[type="date"], input[type="email"] {
        padding: 8px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        background-color: #44475a;
        color: #fff;
    }
    input[type="submit"] {
        padding: 10px;
        background-color: #50fa7b;
        border: none;
        color: #282a36;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }
    input[type="submit"]:hover {
        background-color: #3ae374;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
    text-align: center;
    }

    th {
        background-color:rgb(199, 150, 150);
        color: white;
    }
</style>

<body>
    <div class="contener" style="font-family: 'Overpass Mono', sans-serif; font-weight: 600; background-color: #846a6a;">
        <a class="navbar-brand" href="/ArturoJerez/index.html" style="color: #eef0f2; font-size: 24px;;">Inicio</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav" style="font-family: 'Overpass Mono', sans-serif; font-weight: 500; background-color: none; font-size: 18px;">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Unidad 1
                    </a>
                
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/ArturoJerez/Arturo01.php">(1) Base de Datos</a><br>
                        <a class="dropdown-item" href="/ArturoJerez/Arturo02.php">(2) Solicitar Datos</a><br>
                        <a class="dropdown-item" href="/ArturoJerez/Arturo03.php">(3) Mostrar Datos</a><br>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Unidad 2
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/ArturoJerez/Arturo04.php">(4) Escuela</a><br>
                        <a class="dropdown-item" href="/ArturoJerez/Arturo05.php">(5) Proyecto Primaveral</a><br>
                        <a class="dropdown-item" href="/ArturoJerez/Arturo06.html">(6) DB Pokedex</a><br>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Unidad 3
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/ArturoJerez/Arturo07.html">(7) DB Peliculas</a><br>
                        <a class="dropdown-item" href="/ArturoJerez/Arturo08.html">(8) DB Dragon Ball</a><br>
                        <a class="dropdown-item" href="/ArturoJerez/Arturo09.html">(9) DB HP + RICK</a><br>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Otros 1
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/ArturoJerez/extra01.php">(3.1) Mostrar Datos</a><br>
                        <a class="dropdown-item" href="/ArturoJerez/extra02.php">(4.1) Mi tienda</a><br>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="jumbotron" style="text-align: center; background-color: #eef0f2; margin-bottom: 0; padding-bottom: 10px; padding-top: 15px;">
        <h1 class="display-4" style="color: #a99985; font-size: 80px; font-weight: 700; font-family: 'Major Birch', sans-serif;">
            Cuarto Semestre
        </h1>
        <hr class="my-4" style="border: 2px solid #846a6a;">
        <p class="lead" style="color: #353b3c; font-family: Verdana, Geneva, Tahoma, sans-serif;">
            Esta página esta dedicada a la materia de "Implementa Base de Datos Relaciones en un Sistema de Informacion"
        </p>
        <p style="color: #353b3c; font-weight: 600; font-family: Verdana, Geneva, Tahoma, sans-serif">
            Arturo Gaddiel Jerez Hernandez
        </p>
    </div>
    
    <h1>Ingresar y mostrar datos</h1>

    <div class="container1">
        <form method="post" id="formulario">
            <label for="numero_control">Numero de control </label>
            <input type="text" id="numero_control" name="numero_control" requiered><br>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" requiered><br>
            <label for="apellido_paterno">Apellido Paterno: </label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" requiered><br>
            <label for="apellido_materno">Apellido Materno: </label>
            <input type="text" id="apellido_materno" name="apellido_materno" requiered><br>
            <label for="id_edad">Edad: </label>
            <input type="text" id="id_edad" name="id_edad" requiered><br>
            <label for="id_colonia">Colonia: </label>
            <input type="text" id="id_colonia" name="id_colonia" requiered><br>
            <label for="id_especialidades">Especialidad: </label>
            <input type="text" id="id_especialidad" name="id_especialidad" requiered><br>
            <label for="id_genero">Genero: </label>
            <input type="text" id="id_genero" name="id_genero" requiered><br>
            <label for="correo">Correo: </label>
            <input type="email" id="correo" name="correo" requiered><br>
            <label for="telefono">Telefono: </label>
            <input type="text" id="telefono" name="telefono" requiered><br>
            <label for="fecha_ingreso">Fecha de ingreso: </label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" requiered><br>

            <input type="submit" value="Agregar Registro">
        </form>
    </div>

    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $username = "root";
        $password = "";
        $servername = "localhost"; 
        $database = "escuela";
        $conexion = new mysqli($servername, $username, $password, $database);

        if ($conexion->connect_error) {
            die("La conexión falló: " . $conexion->connect_error);
        }

        function insertarAlumno($conexion) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
                $nombre = $conexion->real_escape_string($_POST["nombre"]);
                $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
                $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
                $id_edad = $conexion->real_escape_string($_POST["id_edad"]);
                $id_colonia = $conexion->real_escape_string($_POST["id_colonia"]);
                $id_especialidad = $conexion->real_escape_string($_POST["id_especialidad"]);
                $id_genero = $conexion->real_escape_string($_POST["id_genero"]);
                $correo = $conexion->real_escape_string($_POST["correo"]);
                $telefono = $conexion->real_escape_string($_POST["telefono"]);
                $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);

                $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso) VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$id_edad', '$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_ingreso')";

                if ($conexion->query($sql) == TRUE) {
                    echo "<p class='success'>Nuevo alumno agregado con éxito.</p>";
                } else {
                    echo "<p class='error'>Error al agregar al alumno:</p>" . $conexion->error . "<p>";
                }
            }
        }

        insertarAlumno($conexion);

        $sql = "SELECT a.numero_control, a.nombre, a.apellido_paterno, a.apellido_materno, e.edad, c.nombre_colonias, es.nombre_especialidad, g.nombre_genero, a.correo, a.telefono, a.fecha_ingreso 
            FROM alumnos a
            JOIN edades e ON a.id_edad = e.id
            JOIN colonias c ON a.id_colonia = c.id
            JOIN especialidades es ON a.id_especialidad = es.id
            JOIN generos g ON a.id_genero = g.id";

        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            echo "<table class='table table-bordered'>";
            echo "<tr><th>Número de Control</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Edad</th><th>Colonia</th><th>Especialidad</th><th>Género</th><th>Correo</th><th>Teléfono</th><th>Fecha de Ingreso</th></tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["numero_control"] . "</td>
                    <td>" . $row["nombre"] . "</td>
                    <td>" . $row["apellido_paterno"] . "</td>
                    <td>" . $row["apellido_materno"] . "</td>
                    <td>" . $row["edad"] . "</td>
                    <td>" . $row["nombre_colonias"] . "</td>
                    <td>" . $row["nombre_especialidad"] . "</td>
                    <td>" . $row["nombre_genero"] . "</td>
                    <td>" . $row["correo"] . "</td>
                    <td>" . $row["telefono"] . "</td>
                    <td>" . $row["fecha_ingreso"] . "</td>
                    </tr>";
            }
            echo "</table>";
        }
        else {
            echo "No se encontraron registros en la base de datos";
        }
        $conexion->close();
    ?>

    

    
</body>
</html>