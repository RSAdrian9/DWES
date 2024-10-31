<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 2 : Características del Lenguaje PHP -->
<!-- Ejemplo: Procesar datos post -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Procesa 1</title>
        <h1>Formulario 3 - REQUEST</h1>
        <p>El Usuario ha puesto el nombre es <?php echo $_REQUEST['nombre']; ?></p>
    </head>

    <body>
    <?php
        // Recogemos los valores de las variables
        $nombre = $_REQUEST['nombre'];
        $modulos = $_REQUEST['modulos']; // Array de valores

        print "Nombre: $nombre<br />";

        foreach ($modulos as $clave => $modulo) {
            print "Clave: ".$clave. "<br />" . "Modulo: " .$modulo. "<br />";
        }

        echo "el print_r es para ver el array GET <br />";
        print_r($_GET);

        echo "el print_r es para ver el array REQUEST <br />";
        print_r($_REQUEST);
    ?>
    </body>
</html>