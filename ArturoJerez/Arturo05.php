<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "jerezhdz";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $sql_posiciones = "SELECT id, nombre FROM posiciones";
    $sql_nacionalidades = "SELECT id, nombre FROM nacionalidades";
    $sql_equipos = "SELECT id, nombre FROM equipos";
    $sql_ligas = "SELECT id, nombre FROM ligas";
    $sql_entrenadores = "SELECT id, nombre_apellido FROM entrenadores";

    $result_posiciones = $conn->query($sql_posiciones);
    $result_nacionalidades = $conn->query($sql_nacionalidades);
    $result_equipos = $conn->query($sql_equipos);
    $result_ligas = $conn->query($sql_ligas);
    $result_entrenadores = $conn->query($sql_entrenadores);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $conn->real_escape_string($_POST["nombre"]);
        $apellido = $conn->real_escape_string($_POST["apellido"]);
        $edad = $conn->real_escape_string($_POST["edad"]);
        $id_posicion = $conn->real_escape_string($_POST["posicion"]);
        $id_nacionalidad = $conn->real_escape_string($_POST["nacionalidad"]);
        $id_equipo = $conn->real_escape_string($_POST["equipo"]);
        $id_liga = $conn->real_escape_string($_POST["liga"]);
        $numero = $conn->real_escape_string($_POST["numero"]);
        $altura = $conn->real_escape_string($_POST["altura"]);
        $peso = $conn->real_escape_string($_POST["peso"]);
        $partidos = $conn->real_escape_string($_POST["partidos"]);
        $puntos = $conn->real_escape_string($_POST["puntos"]);
        $bloqueos = $conn->real_escape_string($_POST["bloqueos"]);
        $recepciones = $conn->real_escape_string($_POST["recepciones"]);
        $salto = $conn->real_escape_string($_POST["salto"]);
        $mejor_salto = $conn->real_escape_string($_POST["mejor_salto"]);
        $potencia_salto = $conn->real_escape_string($_POST["potencia_salto"]);
        $bloqueo = $conn->real_escape_string($_POST["bloqueo"]);
        $id_entrenador = $conn->real_escape_string($_POST["entrenador"]);

        $sql = "INSERT INTO jugadores (nombre, apellido, edad, id_posicion, id_nacionalidad, id_equipo, id_liga, numero, altura, peso, partidos, puntos, bloqueos, recepciones, salto, mejor_salto, potencia_salto, bloqueo, id_entrenador)
                VALUES ('$nombre', '$apellido', '$edad', '$id_posicion', '$id_nacionalidad', '$id_equipo', '$id_liga', '$numero', '$altura', '$peso', '$partidos', '$puntos', '$bloqueos', '$recepciones', '$salto', '$mejor_salto', '$potencia_salto', '$bloqueo', '$id_entrenador')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<p class='success'>Nuevo registro agregado con éxito.</p>";
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "<p class='error'>Error al agregar el registro: " . $conn->error . "</p>";
        }
    }

    $sql = "SELECT j.id, j.nombre, j.apellido, j.edad, p.nombre AS posicion, n.nombre AS nacionalidad, e.nombre AS equipo, l.nombre AS liga, j.numero, j.altura, j.peso, j.partidos, j.puntos, j.bloqueos, j.recepciones, j.salto, j.mejor_salto, j.potencia_salto, j.bloqueo, en.nombre_apellido AS entrenador
        FROM jugadores j
        JOIN posiciones p ON j.id_posicion = p.id
        JOIN nacionalidades n ON j.id_nacionalidad = n.id
        JOIN equipos e ON j.id_equipo = e.id
        JOIN ligas l ON j.id_liga = l.id
        JOIN entrenadores en ON j.id_entrenador = en.id
        ORDER BY j.id ASC";

    $resultado = $conn->query($sql);

    $conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link href="https://fonts.cdnfonts.com/css/coffee-butter" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <link href="https://fonts.cdnfonts.com/css/major-birch" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/montagu-slab" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/waiting-summer" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/fjalla-one" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/overpass-mono-2" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="P-Primaveral.css">
        <title>Arturo Jerez Hdz Index</title>
</head>

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
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/Arturo03.html">(9) DB HP + RICK</a><br>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Otros 1
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/extra1.php">(3.1) Mostrar Datos</a><br>
                        <a class="dropdown-item" href="/PrimerParcial/ArturoJerez/extra2.php">(4.1) Mi tienda</a><br>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="jumbotron">
        <h1 class="display-4">Proyecto Primaveral</h1>
        <hr class="my-4">
        <p class="lead" id="Miau">Mejores jugadores de voleyball</p>
        <p>Arturo Gaddiel Jerez Hernandez</p>
    </div>

    <div class="container1">
        <form method="post" id="formulario">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" required>
            <br>
            <label for="edad">Edad</label>
            <input type="text" id="edad" name="edad" required>
            <br>
            <label for="posicion">Posición</label>
            <select name="posicion" required>
                <option value="">Seleccione una posición</option>
                <?php
                    while ($row = $result_posiciones->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                    }
                ?>
            </select>
            <br>
            <label for="nacionalidad">Nacionalidad</label>
            <select name="nacionalidad" required>
                <option value="">Seleccione una nacionalidad</option>
                <?php
                    while ($row = $result_nacionalidades->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                    }
                ?>
            </select>
            <br>
            <label for="equipo">Equipo</label>
            <select name="equipo" required>
                <option value="">Seleccione un equipo</option>
                <?php
                    while ($row = $result_equipos->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                    }
                ?>
            </select>
            <br>
            <label for="liga">Liga</label>
            <select name="liga" required>
                <option value="">Seleccione una liga</option>
                <?php
                    while ($row = $result_ligas->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                    }
                ?>
            </select>
            <br>
            <label for="numero">Número</label>
            <input type="text" id="numero" name="numero" required>
            <br>
            <label for="altura">Altura</label>
            <input type="text" id="altura" name="altura" required>
            <br>
            <label for="peso">Peso</label>
            <input type="text" id="peso" name="peso" required>
            <br>
            <label for="partidos">Partidos</label>
            <input type="text" id="partidos" name="partidos" required>
            <br>
            <label for="puntos">Puntos</label>
            <input type="text" id="puntos" name="puntos" required>
            <br>
            <label for="bloqueos">Bloqueos</label>
            <input type="text" id="bloqueos" name="bloqueos" required>
            <br>
            <label for="recepciones">Recepciones</label>
            <input type="text" id="recepciones" name="recepciones" required>
            <br>
            <label for="salto">Salto</label>
            <input type="text" id="salto" name="salto" required>
            <br>
            <label for="mejor_salto">Mejor Salto</label>
            <input type="text" id="mejor_salto" name="mejor_salto" required>
            <br>
            <label for="potencia_salto">Potencia de Salto</label>
            <input type="text" id="potencia_salto" name="potencia_salto" required>
            <br>
            <label for="bloqueo">Bloqueo</label>
            <input type="text" id="bloqueo" name="bloqueo" required>
            <br>
            <label for="entrenador">Entrenador</label>
            <select name="entrenador" required>
                <option value="">Seleccione un entrenador</option>
                <?php
                    while ($row = $result_entrenadores->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre_apellido"] . "</option>";
                    }
                ?>
            </select>
            <br>
            <input type="submit" value="Agregar Registro">
        </form>
    </div>
    <br>
    <div class="table-container">
        <?php
        if ($resultado->num_rows > 0) {
            echo "<h2 class='miau'>Tabla de Jugadores</h2>";
            echo "<table class='table table-striped table-hover'>";
            echo "<thead class='thead-dark'><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Posición</th><th>Nacionalidad</th><th>Equipo</th><th>Liga</th><th>Número</th><th>Altura</th><th>Peso</th><th>Partidos</th><th>Puntos</th><th>Bloqueos</th><th>Recepciones</th><th>Salto</th><th>Mejor Salto</th><th>Potencia Salto</th><th>Bloqueo</th><th>Entrenador</th></tr></thead>";

            while ($row = $resultado->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["edad"] . "</td><td>" . $row["posicion"] . "</td><td>" . $row["nacionalidad"] . "</td><td>" . $row["equipo"] . "</td><td>" . $row["liga"] . "</td><td>" . $row["numero"] . "</td><td>" . $row["altura"] . "</td><td>" . $row["peso"] . "</td><td>" . $row["partidos"] . "</td><td>" . $row["puntos"] . "</td><td>" . $row["bloqueos"] . "</td><td>" . $row["recepciones"] . "</td><td>" . $row["salto"] . "</td><td>" . $row["mejor_salto"] . "</td><td>" . $row["potencia_salto"] . "</td><td>" . $row["bloqueo"] . "</td><td>" . $row["entrenador"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No se encontraron registros en la base de datos</p>";
        }
        ?>
    </div>
</body>
</html>