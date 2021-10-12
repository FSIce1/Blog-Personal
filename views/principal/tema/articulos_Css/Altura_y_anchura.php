<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altura y Anchura</title>

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



                    <!--TÍTULO-->
                    <div class="tema">

                        <img src="../../../../img/prueba/css.png" alt="Css">

                        <div class="tema__informacion">
                            <h3>Altura y Anchura</h3>
                            <span>Septiembre 13, 2021. ☕ 10 minutos de lectura</span>
                        </div>

                    </div>



                    <!--ALTURA--> 
                    <h3>Altura</h3>

                    <p>
                        La propiedad de Css que controla la altura de los elementos llamado "height".
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>Height</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>Unidades de Medidad | Porcentaje | Auto | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>Auto</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece la altura de un elemento</td>
                        </tr>

                    </table>



                    <!--ANCHO-->
                    <h3>Ancho</h3>

                    <p>
                        La propiedad de Css que controla el ancho de los elementos llamado "width".
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>Width</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>Unidades de Medidad | Porcentaje | Auto | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>Auto</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece la anchura de un elemento</td>
                        </tr>

                    </table>

                    <div class="nota">
                        <p>
                            La propiedad width no admite valores negativos y los porcentajes 
                            se pueden calcular a partir de la anchura de su elemento padre.<br>
                            El valor inherit indica que la anchura se hereda del elemento padre.<br>
                            El valor auto se calcula automáticamente de la anchura del elemento
                        </p>
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