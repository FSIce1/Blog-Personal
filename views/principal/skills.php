<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>

    <link rel="icon" type="image/png" href="../../img/iconos/icono2_negro.png">

    <!-- Estilos -->

    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/texto.css">
    -->

    <link rel="stylesheet" href="../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/skills.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/switch.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/loading.css?v=<?php echo time(); ?>">


    <!-- Fuentes -->
    <link rel="stylesheet" href="../../css/fuentes/fuentes.css?v=<?php echo time(); ?>">


    <!-- Para la caché -->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

</head>

<body>

    <?php
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
    ?> 

    <?php
    
        $nivel = 0;

        //! HEADER
        require('../components/header.php');

        //! BARRA DE NAVEGACIÓN
        require('../components/barraNavegacion.php');

    ?>

        <main>
    
            <div class="container">

                <div class="map">

                    <div class="container__map">
                        
                        <div class="adorno">
                            <div class="adorno-1"></div>
                            <div class="adorno-2"></div>
                        </div>

                        <h3>Skills<span>.map()</span> </h3>

                        <p>Habilidades técnicas que tengo <br />hasta la actualidad</p>

                    </div>

                </div>

                <div class="contenedor_habilidades">
                    <div class="habilidades">
                        <span class="lugar-1">Php</span>
                        <span class="lugar-2" >Java</span>
                        <span class="lugar-3" >Mysql</span>
                        <span class="lugar-4" >Postgresql</span>
                        <span class="lugar-5" >Laravel</span>
                        <span class="lugar-6" >GitHub</span>
                        <span class="lugar-7" >Html</span>
                        <span class="lugar-9" >Javascript</span>
                        <span class="lugar-10" >Git</span>
                        <span class="lugar-11" >Css</span>
                        <span class="lugar-13" >Jsp</span>
                    </div>
                </div>

            </div>

        </main>

    <?php

        //! FOOTER
        require('../components/footer.php');

    ?>

    <script src="../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>

</body>

</html>