<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidades de Medida</title>

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
                            <h3>Unidades de Medida</h3>
                            <span>Septiembre 13, 2021. ☕ 5 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Css divide las unidades en 2 grupos: absolutas y relativas.<br>
                        Las medidas relativas definen su valor en relación con otra medida, 
                        por lo que para obtener su valor real, se debe realizar alguna operación 
                        con el valor indicado. Las unidades absolutas establecen de forma completa 
                        el valor de una medida, por lo que su valor real es directamente el valor 
                        indicado.
                    </p>



                    <!--UNIDADES ABSOLUTAS-->
                    <h3>Unidades absolutas</h3>

                    <ul class="margen_50">

                        <li>
                            <strong>in, pulgadas</strong>
                            <p>
                            Equivale a 2.54 centímetros
                            </p>
                        </li>

                        <li>
                            <strong>cm, centímetros</strong>
                        </li>

                        <li>
                            <strong>mm, milímetros</strong>
                        </li>

                        <li>
                            <strong>pt, puntos</strong>
                            <p>
                            Equivale a 0.35 milímetros
                            </p>
                        </li>

                        <li>
                            <strong>pc, picas</strong>
                            <p>
                            Equivale a 4.23 milímetros.
                            </p>
                        </li>

                    </ul>



                    <!--UNIDADES RELATIVAS-->
                    <h3>Unidades relativas</h3>

                    <p>
                        Su valor está referenciado respecto a otro valor.
                    </p>

                    <ul class="margen_50">

                        <li>
                            <strong>em</strong>
                            <p>
                                Relativa respecto del tamaño de letra del elemento.
                                El valor que toma es el mismo valor al tamaño de letra del elemento
                            </p>
                        </li>

                        <li>
                            <strong>ex</strong>
                            <p>
                                Relativa respecto de la altura de la letra x ("equis minúscula") del tipo y tamaño de letra del elemento.
                            </p>
                        </li>

                        <li>
                            <strong>px</strong>
                            <p>
                                Relativa respecto de la resolución de la pantalla del dispositivo en el que se visualiza la página HTML.
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

    <script>
        const $miCheckbox = document.querySelector("#punto__switch");
        $miCheckbox.checked = true;
    </script>

</body>

</html>