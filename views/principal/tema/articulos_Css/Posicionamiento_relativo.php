<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posicionamiento Relativo</title>

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
    <link rel="stylesheet" href="../../../../css/main/loading.css?v=<?php echo time(); ?>">

    <!-- Fuentes -->
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
                            <h3>Posicionamiento Relativo</h3>
                            <span>Septiembre 14, 2021. ☕ 5 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Desplaza la caja respecto a su posición original establecida mediante
                        el posicionamiento normal. <br>
                        El desplazamiento de la caja se controla con las propiedades top, right,
                        bottom y left.
                    </p>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" src="../../../../img/tema/css/posicionamiento/position_relative.png" alt="">
                            <p class="figure">Position relative</p>
                        </picture>
                    </div>

                    <div class="nota">
                        <p><strong>Ejemplo: </strong>
                            Como vemos en el ejemplo hay 3 imágenes, la primera de ellas
                            tiene position relativa y un top de 40<span class="px">px</span>
                            , se desplazan 40<span class="px">px</span> hacia abajo respecto a su posición original.
                        </p>
                    </div>

                    <div style="margin-bottom: 40px;">
                        <img style="position: relative; top: 40px" width="60px" height="60px" src="../../../../img/prueba/barcelona.png" alt="Barcelona" />
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

</body>

</html>