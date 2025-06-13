<?php
    ob_start();
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
        color: white;
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
    input[type="text"], input[type="number"] {
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
        background-color:rgb(199, 150, 150);; 
    }
</style>

<body>
    <div class="contener" style="font-family: 'Overpass Mono', sans-serif; font-weight: 600; background-color: #846a6a;">
        <a class="navbar-brand" href="/PrimerParcial/ArturoJerez/index.html" style="color: #eef0f2; font-size: 24px;;">Inicio</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav" style="font-family: 'Overpass Mono', sans-serif; font-weight: 500; background-color: none; font-size: 18px;">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Unidad 1
                    </a>
                
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/Arturo01.php">(1) Base de Datos</a><br>
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/Arturo02.php">(2) Solicitar Datos</a><br>
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/Arturo03.php">(3) Mostrar Datos</a><br>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Unidad 2
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/Arturo04.php">(4) Escuela</a><br>
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/Arturo05.php">(5) Proyecto Primaveral</a><br>
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/Arturo06.html">(6) DB Pokedex</a><br>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Unidad 3
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/Arturo07.html">(7) DB Peliculas</a><br>
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/Arturo08.html">(8) DB Dragon Ball</a><br>
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/Arturo09.html">(9) DB HP + RICK</a><br>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Otros 1
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/extra01.php">(3.1) Mostrar Datos</a><br>
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/extra02.php">(4.1) Mi tienda</a><br>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="jumbotron" style="text-align: center; background-color: #eef0f2; margin-bottom: 15px; padding-bottom: 10px; padding-top: 15px;">
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
    
    <div class="container1" style="text-align: center;">
        <h1 style="margin: 10px 0px 10px 0px">Ingresa los datos</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="formulario">
            <label for="Nombre">Nombre:</label>
            <input type="text" id="Nombre" name="Nombre" required><br>
            <label for="Apellido">Apellido:</label>
            <input type="text" id="Apellido" name="Apellido" required><br>
            <label for="Posición">Posición:</label>
            <input type="text" id="Posición" name="Posición" required><br>
            <label for="Numero">Número:</label>
            <input type="number" id="Numero" name="Numero" required><br>

            <input type="submit" value="Agregar registro">
        </form>



        <?php
        $username = "root";
        $password = "";
        $servername = "localhost"; 
        $database = "voleyball";
        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("La conexion fallo: " . $conexion->connect_error);
        }

        function insertarJugador($conexion) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            var_dump($_POST);
            $Nombre = $conexion->real_escape_string($_POST["Nombre"]);
            $Apellido = $conexion->real_escape_string($_POST["Apellido"]); 
            $Posición = $conexion->real_escape_string($_POST["Posición"]);
            $Numero = $conexion->real_escape_string($_POST["Numero"]);
            
            $sql = "INSERT INTO setters (Nombre, Apellido, Posición, Numero) VALUES ('$Nombre', '$Apellido', '$Posición', '$Numero')";
            
            if ($conexion->query($sql) == TRUE) {
                echo "<p class='success'>Nuevo jugador agregado con éxito.</p>";
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
            echo "<p class='error'>Error al agregar al Jugador:</p>" . $conexion->error . "<p>";
            }
        }
        }  insertarJugador($conexion);

        $sql = "SELECT * FROM setters";
        $resultado = $conexion->query($sql);
    
        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Numero</th><th>Posición</th></tr>";
            
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Nombre"] . "</td><td>" . $row["Apellido"] . "</td><td>" . $row["Numero"] . "</td><td>" . $row["Posición"] . "</td></tr>";
            }
            echo "</table>";
        } 
        else {
            echo "No se encontraron registros en la base de datos";
        }
        
        $conexion->close();
        ?>
    </div>


</body>
</html>