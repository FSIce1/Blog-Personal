<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualización</title>

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
                            <h3>Visualización</h3>
                            <span>Septiembre 15, 2021. ☕ 20 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Esta propiedad contra la visualización de los elementos con: 
                        display, visibility, overflow y z-index. 
                    </p>



                    <!--PROPIEDADES DISPLAY Y VISIBILITY-->
                    <h3>Propiedades display y visibility</h3>


                    <!-- Display -->
                    <ul class="margen_50" >
                        <li>
                            <strong>Display</strong>
                            <p>
                                Permite ocultar completamente un elemento haciendo que no aparezca
                                en la página, haciendo así que el resto de elementos ocupen su lugar.
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>display</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>inline | block | none | list-item | run-in | inline-block | table | inline-table | table-row-group | table-header-group | table-footer-group | table-row | table-column-group | table-column | table-cell | table-caption | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>inline</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Permite controlar la forma de visualizar un elemento e incluso ocultarlo</td>
                        </tr>

                    </table>

                    <ul style="margin-left: 80px; list-style-type: upper-latin">
                        <li>
                            <strong>Inline</strong>
                            <p>Visualiza un elemento en forma de elemento en línea</p>
                        </li>

                        <li>
                            <strong>Block</strong>
                            <p>Muestra un elemento como si fuera un elemento de bloque</p>
                        </li>
                        
                        <li>
                            <strong>None</strong>
                            <p>Oculta un elemento y hace que desaparezca de la página</p>
                        </li>
                    </ul>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/block_inline.png" alt="">
                            <p class="figure">Block vs Inline</p>
                        </picture>
                    </div>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/block_inline_2.png" alt="">
                            <p class="figure">Block Direction vs Inline Direction</p>
                        </picture>
                    </div>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/block_inline.jpeg" alt="">
                            <p class="figure">Valor predefinido de las etiquetas</p>
                        </picture>
                    </div>


                    <!-- Visibilidad -->
                    <ul class="margen_50">
                        <li>
                            <strong>Visibility</strong>
                            <p>
                                Hace invisible un elemento, a diferencia del display no modifica su posición
                                y aunque la caja no se ve sigue ocupando sitio.
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>visibility</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>visible | hidden | collapse | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>visible</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Permite hacer visibles e invisibles a los elementos</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/Visibility.jpg" alt="">
                            <p class="figure">Visibility Css</p>
                        </picture>
                    </div>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/hidden.png" alt="">
                            <p class="figure">Propiedad hidden</p>
                        </picture>
                    </div>



                    <!--OVERFLOW-->
                    <h3>Propiedad overflow</h3>

                    <p>
                        Controla el contenido que es demasiado grande para 
                        poder caber en un área.
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>overflow</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>visible | hidden | scroll | auto | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>visible</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Permite controlar los contenidos sobrantes de un elemento</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/overflow.png" alt="">
                            <p class="figure">Propiedad Overflow</p>
                        </picture>
                    </div>



                    <!--Z-INDEX-->
                    <h3>Propiedad z-index</h3>

                    <p>
                        Nos permite definir el nivel de suporposición de los elementos.
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>z-index</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>auto | numero | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>auto</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el nivel tridimensional en el que se muestra el elemento</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/visualización/z-index.gif" alt="">
                            <p class="figure">Propiedad Z-index</p>
                        </picture>
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