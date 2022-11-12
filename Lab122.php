<?php
    session_start();
?>
<html lang="es">
    <head>
        <title>Laboratorio 12</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <h1>Manejo de sesiones</h1>
        <h2>Paso 2: se accede a la variable de sesiom almacenada y se destruye</h2>
        <?php
            if(isset($_SESSION['var'])){
                $var=$_SESSION['var'];
                print("<P>Valor de la variable de sesion: $var</P>\n");
                unset($_SESSION['var']);
                print ("<A HREF='Lab123.php'>Paso 3<A>");
            }else{
                print ("Sesion no iniciado, ir al <A HREF='Lab121.php'>Paso 1<A> para iniciar sesion");
            }
        ?>
    </body>
</html>