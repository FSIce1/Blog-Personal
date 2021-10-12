<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posicionamiento Absoluto</title>

    <link rel="icon" type="image/png" href="../../../../img/iconos/icono2_negro.png">

    <!-- Estilos -->

    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/texto.css">
    -->
    
    <link rel="stylesheet" href="../../../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../../css/main/articulo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../../css/switch.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../../css/main/aside.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../../css/main/footer.css?v=<?php echo time(); ?>">
    
    
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="../../../../css/fuentes/fuentes.css?v=<?php echo time(); ?>">

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

        $nivel = 2;

        //! HEADER
        require ('../../../components/header.php');

        //! BARRA DE NAVEGACIÓN
        require('../../../components/barraNavegacion.php');

    ?>

    <div class="body">

        <main>

            <div class="container">

                <div class="container__articulo">



                    <!--TEMA-->
                    <div class="tema">
    
                        <img src="../../../../img/prueba/css.png" alt="Css">

                        <div class="tema__informacion">
                            <h3>Posicionamiento Absoluto</h3>
                            <span>Septiembre 14, 2021. ☕ 5 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Se emplea para establecer de forma exacta la posición en la que se muestra la
                        caja de un elemento. La nueva posición de la caja se indica mediante las 
                        propiedades top, right, bottom y left.
                    </p>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" src="../../../../img/tema/css/posicionamiento/position_absolute.png" alt="">
                            <p class="figure">Position absolute</p>
                        </picture>
                    </div>

                    <div class="nota">
                        <p><strong>Ejemplo: </strong>
                            Como vemos en el ejemplo hay 3 imágenes, la primera de ellas
                            tiene position absoluta y un top de 765<span class="px">px</span>
                            , se desplazan 765<span class="px">px</span> hacia abajo respecto 
                            a su posición relativa.<br>
                            Se ve también que toma como referencia el navegador como tal haciendo así
                            que la imagen se sobreponga sobre la otra.
                        </p>
                    </div>

                    <div style="margin-bottom: 40px;">
                        <img style="position: absolute; top: 765px" width="60px" height="60px" src="../../../../img/prueba/barcelona.png" alt="Barcelona" />
                        <img src="../../../../img/prueba/real madrid.png" width="60px" height="60px" alt="Real Madrid" />
                        <img src="../../../../img/prueba/napoli.png" width="60px" height="60px" alt="Napoli" />
                    </div>

                </div>

                <?php

                    $nivel = 2;

                    //! ARTÍCULOS POR TEMAS
                    require('../../../components/relacionados.php');

                ?>    

            </div>

        </main>

        <?php

            //! ÚLTIMOS VIDEOS RELACIONADOS
            require('../../../components/videos.php');

        ?>

    </div>

    <?php

        //! FOOTER
        require('../../../components/footer.php');

    ?>


    <!--SCRIPTS-->
    <script src="../../../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>

    <script>
        const $miCheckbox = document.querySelector("#punto__switch");
        $miCheckbox.checked = true;
    </script>

</body>

</html>