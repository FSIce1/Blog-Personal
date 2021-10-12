<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="shortcut icon" type="image/png" href="../../img/iconos/icono2_negro.png">

    <!-- Estilos -->

    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/texto.css">
    -->
    
    <link rel="stylesheet" href="../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/texto.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/switch.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/footer.css?v=<?php echo time(); ?>">

    
    <!-- Fuentes -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->

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

        <div class="texto">
            <p>
                Hi, <br>
                I'm <span>Felipe</span> <br>
                And Programmer
            </p>
        </div>

    </main>

    <?php
        //! FOOTER
        require('../components/footer.php');
    ?>

    <script src="../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>

    <!-- <script>
        const $miCheckbox = document.querySelector("#punto__switch");
        $miCheckbox.checked = true;
    </script> -->

</body>

</html>