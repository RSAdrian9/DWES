<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Variables Especiales</title>
</head>
<body>
<h1>Prueba Variables Especiales en PHP</h1>
<h2>Variables Especiales</h2>

<h3>$_GET</h3>
<pre> <?php print_r($_GET); ?> </pre>

<h3>$_POST</h3>
<pre> <?php print_r($_POST); ?> </pre>

<h3>$_FILES</h3>
<pre> <?php print_r($_FILES); ?> </pre>

<h3>$_COOKIE</h3>
<pre> <?php print_r($_COOKIE); ?> </pre>

<h3>$_SESSION</h3>
<pre> <?php print_r($_SESSION); ?> </pre>

<h3>$_SERVER con print_r</h3>
<pre> <?php print_r($_SERVER); ?> </pre>

<h3>$_ENV</h3>
<pre> <?php print_r($_ENV); ?> </pre>

<h3>$_REQUEST (Combinación de $_GET, $_POST y $_COOKIE)</h3>
<pre> <?php print_r($_REQUEST); ?> </pre>



<h3>$_SERVER con foreach simple mostrando solo el valor</h3>
<pre> <?php 

    foreach ($_SERVER as $row ) {
        echo "$row <br>";
    }

?> </pre>

<h3>$_SERVER con foreach completo usando clave valor</h3>
<pre> <?php 

    foreach ($_SERVER as $key => $value ) {
        echo "[ $key ] => $value <br>";
    }

?> </pre>

    
</body>
</html>