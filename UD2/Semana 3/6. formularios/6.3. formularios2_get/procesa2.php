<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 2 : Características del Lenguaje PHP -->
<!-- Ejemplo: Procesar datos post -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Procesa 1</title>
        <h1>Formulario 2 - GET</h1>
        <p>El Usuario ha puesto el nombre es <?php echo $_GET['nombre']; ?></p>
    </head>

    <body>
    <?php
        // Recogemos los valores de las variables
        $nombre = $_GET['nombre'];
        $modulos = $_GET['modulos']; // Array de valores

        print "Nombre: $nombre<br />";

        foreach ($modulos as $clave => $modulo) {
            print "Clave: ".$clave. "<br />" . "Modulo: " .$modulo. "<br />";
        }

        print_r($_GET);
    ?>
    </body>
</html>