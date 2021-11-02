<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Design</title>

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
                            <h3>Responsive Design</h3>
                            <span>Septiembre 25, 2021. ☕ 15 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Conocido como diseño adaptable, es una técnica de diseño que usa estructuras
                        flexibles (contenedores, imágenes, videos, etc) logran adapatar un sitio web
                        a diferentes pantallas y resoluciones, con distintos tamaños
                    </p>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_1" src="../../../../img/tema/css/responsive_design/responsive2.gif" alt="">
                            <p class="figure">Representación de una pantalla adaptándose a móvil</p>
                        </picture>
                    </div>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_6" src="../../../../img/tema/css/responsive_design/adaptive2.gif" alt="">
                            <p class="figure">Representación delas unidades relativas y estáticas</p>
                        </picture>
                    </div>



                    <!--MEDIA QUERIES-->
                    <h3>Media Queries</h3>
                    <p>
                        Son tipo de reglas de Css que permite crear bloques de código que se ejecutarán siempre y cuando 
                        cumplan la condición.
                    </p>

                    <pre class="nota">
<code><span class="rosado">@media screen</span> <span class="px">and</span> (*condición*) {
    <span class="comentario">/*Regla Css*/</span>
}</code></pre>

                    <pre class="nota">
<code><span class="rosado">@media screen</span> <span class="px">and not</span> (*condición*) {
    <span class="comentario">/*Regla Css*/</span>
}</code></pre>

                    <p>
                        El siguiente fragmento de código se coloca en el <strong>head</strong> y sirve para indiciar
                        que el nuevo ancho de la pantalla es el ancho del dispositivo.
                    </p>

<pre class="nota">
<code><span class="caso_especial2">&#60;<span class="rosado">meta</span> <span class="px">name</span><span class="turqueza">=</span><span class="enlace">"viewport"</span> <span class="px">content</span><span class="turqueza">=</span><span class="enlace">"initial-scale=1, width=device-width"</span>&#62;
</span></code></pre>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_1" src="../../../../img/tema/css/responsive_design/device_width.png" alt="">
                            <p class="figure">COn esto preparamos la web para dispositivivos móviles</p>
                        </picture>
                    </div>

                    <div class="nota">
                        <p>
                            Con un tamaño de pantalla menor a 640<span class="px">px</span> el cuadro se hará de color <strong class="note azul">azul</strong>,
                            cuando está entre 640<span class="px">px</span> y 800<span class="px">px</span> será de color <strong class="note rojo">rojo</strong> 
                            y por último si es mayor que 800<span class="px">px</span> se hará de color <strong class="note verde">verde</strong>
                        </p>
                    </div>

                    <div class="caja_responsive" style="width: 100px; height: 100px">
                    </div>



                    <!--CARACTERÍSTICAS-->
                    <h3>Características</h3>

                    <table class="tabla">
                        
                        <tr>
                            <th>Tipo de Carácterística</th>
                            <th>¿Cuándo se aplica?</th>
                        </tr>

                        <tr>
                            <td>width</td>
                            <td>Si cumple el tamaño exacto</td>
                        </tr>

                        <tr>
                            <td>min-width</td>
                            <td>Si el dispositivo tiene un tamaño de ancho mayor al indicado</td>
                        </tr>
                        
                        <tr>
                            <td>max-width</td>
                            <td>Si el dispositivo tiene un tamaño de ancho mayor al indicado</td>
                        </tr>

                    </table>



                    <!--SUPPORTS-->
                    <h3>Supports</h3>

                    <p>Establece condicionales a través de la regla <span class="note amarillo">@supports</span>
                        crea reglas similares a @media pero dependiendo si el navegador soporta una característica 
                        concreta
                    </p>
s
                    <pre class="nota">
<code><span class="enlace">@supports </span> <span class="px">not</span> (<span class="rosado">display</span>: <span class="enlace">flex</span>) {
    <span class="rosado">.content</span> {
        <span class="propiedad">display: </span><span class="valor">block</span>;
    }
}</code></pre>

                    <div class="nota">
                        <p>
                            Internet Explorer no tienen soporte para la regla <span class="note amarillo">@supports</span>
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