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
        <h2>Paso 3: la variable ya ha sido destruida y su valor se ha perdido</h2>
        <?php
            if(isset($_SESSION['var'])){
                $var=$_SESSION['var'];
            }else{
                $var='';
            }
            print ("<P>Valor de la variable de sesion: $var<P>\n");
            session_destroy();
        ?>
        <a href="Lab121.php">Volver al paso 1</a>
    </body>
</html>