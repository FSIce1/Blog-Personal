<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>

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
                            <h3>Texto</h3>
                            <span>Septiembre 15, 2021. ☕ 15 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Veremos algunas propiedades para dar formato al texto
                    </p>



                    <!--TIPOGRAFÍA--> 
                    <h3>Tipografía</h3>

                    <p>
                        Se encarga de modificar la apariencia del texto.
                    </p>


                    <!-- Color -->
                    <ul class="margen_50">
                        <li>
                            <strong>Color</strong>
                            <p>
                                Modifica el color de la letra que se utiliza en el texto 
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>color</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>	color | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>Depende del navegador</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el color de letra utilizado para el texto</td>
                        </tr>

                    </table>

                    <pre class="nota margen_50"><code>
<span class="rosado">h1, h2</span> {
    <span class="propiedad">color: </span><span class="valor">#FFF</span>;
}

<span class="rosado">p, div</span> {
    <span class="propiedad">color: </span><span class="valor">red</span>;
}

<span class="rosado">span</span> {
    <span class="propiedad">color: </span><span class="valor">#121212</span>;
}

<span class="rosado">a</span> {
    <span class="propiedad">color: </span><span class="valor">rgb(62, 12, 12)</span>;
}
</code></pre><br>


                    <!-- Font-Family -->
                    <ul class="margen_50">
                        <li>
                            <strong>Font Family</strong>
                            <p>
                                Se utiliza para cambiar el tipo de letra que se muestra en el texto
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>font-family</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>(( nombre_familia | familia_generica ) (,nombre_familia | familia_generica)* ) | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>Depende del navegador</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el tipo de letra utilizado para el texto</td>
                        </tr>

                    </table>

                    <div class="nota margen_50">
                        <p>
                            Ejemplos de nombres de familias tipográficas: "Arial", "Verdana", etc.<br>
                            Ejemplo de nombres genéricos de una familia tipográficas: sans serif (Tipo Arial), 
                            cursive(tipo Comic Sans), etc.
                        </p>
                    </div><br>


                    <!-- Font-Size -->
                    <ul class="margen_50">
                        <li>
                            <strong>Font Size</strong>
                            <p>
                                Se utiliza para cambiar el tamaño de letra que se muestra en el texto
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>font-size</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>tamaño_absoluto | tamaño_relativo | unidad de medida | porcentaje | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>medium</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el tamaño de letra utilizado para el texto</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/texto/font_family.png" alt="">
                            <p class="figure">Tipos de letras</p>
                        </picture>
                    </div>


                    <!-- Font-Weight -->
                    <ul class="margen_50">
                        <li>
                            <strong>Font Weight</strong>
                            <p>
                                Se utiliza para establecer el ancho de la letra que se muestra en el texto
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>font-weight</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>normal | bold | bolder | lighter | 100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900 | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>normal</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece la anchura de la letra utilizada para el texto</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/texto/font_weight.png" alt="">
                            <p class="figure">Tipos de anchuras</p>
                        </picture>
                    </div>


                    <!-- Font-Style -->
                    <ul class="margen_50">
                        <li>
                            <strong>Font Style</strong>
                            <p>
                                Se utiliza para establecer el estilo de la letra que se muestra en el texto
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>font-style</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>	normal | italic | oblique | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>normal</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el estilo de la letra utilizada para el texto</td>
                        </tr>

                    </table>

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