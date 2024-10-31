<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>

    <!-- Formulario con un campo de texto y un grupo de botones de radio -->
    <!-- El formulario se envía a la página procesa1.php mediante el método POST -->
    <form name="input" action="procesa1.php" method="post">

        <!-- Creará una variable nombre con valor vacío -->
        Nombre del alumno: <input type="text" name="nombre" /><br>
        <p>Ciclos que cursa:</p>

        <!-- Creará un array modulos[] --><!-- DWES es el valor del 1er elemento del array y DWEC el segundo -->
        <input type="checkbox" name="modulos[]" value="DWES" />Desarrollo Web en Entorno Servidor<br/>
        <input type="checkbox" name="modulos[]" value="DWEC" />Desarrollo Web en Entorno Cliente<br/>

        <br/>
        <!-- Creará una variable cpn valor "Enviar" -->
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>