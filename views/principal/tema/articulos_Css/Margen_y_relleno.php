<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Margen y Relleno</title>

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
                            <h3>Margen y Relleno</h3>
                            <span>Septiembre 13, 2021. ☕ 15 minutos de lectura</span>
                        </div>

                    </div>



                    <!--MARGIN-->
                    <h3>Margin</h3>

                    <p>
                        Se definen 4 propiedades para controlar los márgentes horizontales y Verticales
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>margin-top, margin-right, margin-bottom, margin-left</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>Unidades de Medidad | Porcentaje | Auto | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>0</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establecen los márgenes horizontales y verticales de un elemento</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <img class="imagen_tipo_4" src="../../../../img/tema/css/margen_y_relleno/margen.gif" alt="">
                    </div>



                    <!--PADDING-->
                    <h3>Padding</h3>

                    <p>
                        Controla los espacios dentro de la caja (relleno) horizontales y verticales de un elemento.
                    </p>    

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>padding-top, padding-right, padding-bottom, padding-left</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>Unidades de Medidad | Porcentaje | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>0</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el relleno horizontal y vertical de un elemento</td>
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

                    <div class="container__articulo-imagen">
                        <img class="imagen_tipo_4" src="../../../../img/tema/css/margen_y_relleno/padding.gif" alt="">
                    </div>

                    <pre class="nota">
<code><span class="comentario">/* Todos los rellenos valen 2em */</span>
<span class="rosado">body</span> {
    <span class="propiedad">padding: </span><span class="valor">2<span class="px">em</span></span>;
}

<span class="comentario">/*Arriba y abajo = 2em, izquierda 
y derecha = 4em */</span>
<span class="rosado">body</span> {
    <span class="propiedad">padding: </span><span class="valor">2<span class="px">em</span> 4<span class="px">em</span></span>;
}

<span class="comentario">/*Arriba, derecha = 4em, abajo e 
izquierda = 3em */</span>
<span class="rosado">body</span> {
    <span class="propiedad">padding: </span><span class="valor">2<span class="px">em</span> 4<span class="px">em</span> 3<span class="px">em</span></span>;
}

<span class="comentario">/*Arriba = 2em, abajo = 4em, 
derecha = 3em e izquierda = 1em */</span>
<span class="rosado">body</span> {
    <span class="propiedad">padding: </span><span class="valor">2<span class="px">em</span> 4<span class="px">em</span> 3<span class="px">em</span> 1<span class="px">em</span></span>;
}
</code></pre>

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