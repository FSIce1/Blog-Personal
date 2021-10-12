<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces</title>

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
                            <h3>Enlaces</h3>
                            <span>Septiembre 15, 2021. ☕ 15 minutos de lectura</span>
                        </div>

                    </div>



                    <!--TAMAÑO, COLOR y DECORACIÓN-->
                    <h3>Tamaño, color y decoración</h3>

                    <p>
                        Para aplicar estos estilos se utilizan las propiedades: text-decoration,
                        font-weight
                    </p>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/enlaces/a.gif" alt="">
                            <p class="figure">Ejemplos de enlaces</p>
                        </picture>
                    </div>



                    <!--PSEUDO-CLASES-->
                    <h3>Pseudo-clases</h3>

                    <p>
                        Permite aplicar diferentes estilos a un enlace en función a su estado. 
                        Como con los id o class no se puede aplicar diferentes estilos a un mismo
                        elemento, css introduce un concepto llamado pseudoclases.
                    </p>
                    
                    <ul style="margin-left: 80px;" >
                        <li>
                            <strong>:link</strong>
                            <p>
                                Aplica estilo a los enlaces, que hacen referencia a una página.
                            </p>
                        </li>

                        <li>
                            <strong>:visited</strong>
                            <p>
                                Aplica el estilo cuando el enlace ya fue visitado anteriormente.
                            </p>
                        </li>

                        <li>
                            <strong>:hover</strong>
                            <p>
                                Aplica el estilo cuando el usuario pasa el puntero sobre el enlace.
                            </p>
                        </li>

                        <li>
                            <strong>:active</strong>
                            <p>
                                Aplica el estilo cuando esta presionando el enlace y desaparece cuando deja de hacerlo.
                            </p>
                        </li>

                    </ul>

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