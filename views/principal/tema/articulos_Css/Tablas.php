<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>

    <link rel="icon" type="image/png" href="../../../../img/logo_v1.png">

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
                            <h3>Tablas</h3>
                            <span>Septiembre 16, 2021. ☕ 15 minutos de lectura</span>
                        </div>

                    </div>



                    <!-- ESTILOS BÁSICOS -->
                    <h3>Estilos Básicos</h3>


                    <!-- Viñetas personalizadas -->
                    <ul class="margen_50">
                        <li>
                            <strong>Tabla común</strong>
                            <p>
                                Veremos un ejemplo de una tabla común
                            </p>
                        </li>
                    </ul>

                    <table class="tabla_ejemplo margen_50">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>

                    </table><br><br>


                    <!-- Border Collapse -->
                    <ul class="margen_50">
                        <li>
                            <strong>Border Collapse</strong>
                            <p>
                                Combina los bordes de las celdas continuos de una tabla
                            </p>
                        </li>
                    </ul>

                    <table class="tabla_ejemplo colapsa margen_50">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>

                    </table>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>border-collapse</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>	collapse | separate | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>separate</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Define el mecanismo de fusión de los bordes de las celdas adyacentes de una tabla</td>
                        </tr>

                    </table><br>


                    <!-- Border Collapse -->
                    <ul class="margen_50">
                        <li>
                            <strong>Border Spacing</strong>
                            <p>
                                Controla la separación entre los bordes de una celda, 
                                el espacio que vemos entre las celdas es el que podemos 
                                controlar en este caso le he puesto un boder-spacing de 10<span class="px">px</span>.
                            </p>
                        </li>
                    </ul>

                    <table class="tabla_ejemplo espacio margen_50">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>

                    </table>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>border-collapse</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>unidad de medida | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>0</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece la separación entre los bordes de las celdas adyacentes de una tabla</td>
                        </tr>

                    </table><br>



                    <!--ESTILOS AVANZADOS-->
                    <h3>Estilos Avanzados</h3>


                    <!-- Empty Cells -->
                    <ul class="margen_50">
                        <li>
                            <strong>Empty Cells</strong>
                            <p>
                                Aplica los estilos a las celdas vacías, en este ejemplo he puesto
                                que cuando no exista contenido en la celda la oculte con el código
                                empty-cells: hide;
                            </p>
                        </li>
                    </ul>

                    <table class="tabla_ejemplo celda margen_50">
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td></td>
                            <td>4</td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>3</td>
                            <td>4</td>
                        </tr>

                    </table>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>empty-cells</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>show | hide | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>show</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Define el mecanismo utilizado para el tratamiento de las celdas vacías de una tabla</td>
                        </tr>

                    </table><br>


                    <!-- Caption Side -->
                    <ul class="margen_50">
                        <li>
                            <strong>Caption Side</strong>
                            <p>
                                Sirve como controlar la posición de un título para una tabla, para ello 
                                se utiliza la propiedad caption-side.
                            </p>
                        </li>
                    </ul>

                    <table class="tabla_ejemplo colapsa caption margen_50">
                        <caption>Tabla.- Tabla de ejemplo</caption>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td></td>
                            <td>4</td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>3</td>
                            <td>4</td>
                        </tr>

                    </table>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>caption-side</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>top | bottom | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>top</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece la posición del título de la tabla</td>
                        </tr>

                    </table><br>

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