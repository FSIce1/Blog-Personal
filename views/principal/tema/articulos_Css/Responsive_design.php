<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Design</title>


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
<code>&#60;<span class="rosado">meta</span> <span class="px">name</span><span class="turqueza">=</span><span class="enlace">"viewport"</span> <span class="px">content</span><span class="turqueza">=</span><span class="enlace">"initial-scale=1, width=device-width"</span>&#62;
</code></pre>

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
                
                <section>
                    <p class="titulo">Artículos por temas</p>
                        
                    <div class="articulos-relacionados">
                        <a href="#">
                            <img src="../../../../img/prueba/css.png" alt="Imagen1">
                            <h3>Selectores Css</h3>
                            <p>
                            Un selector de CSS selecciona los elementos HTML a los que desea aplicar estilo.
                            </p>

                        </a>
                        
                        <a href="#">
                            <img src="../../../../img/prueba/css.png" alt="Imagen2">
                            <h3>Css</h3>
                            <p>Al centrar con el positión sidajasdk kasdkasnd aksdlsad alskdjaskd laskjdkjlasjd asjkdsad </p>
                        </a>
                        
                        <a href="#">
                            <img src="../../../../img/prueba/css.png" alt="Imagen3">
                            <h3>Css</h3>
                            <p>Al centrar con el positión sidajasdk kasdkasnd aksdlsad alskdjaskd laskjdkjlasjd asjkdsad </p>
                        </a>
                    </div>
    
                </section>
    
                
            </div>
        
        </main>
    
        
        <aside>
    
            <h3>Últimos videos en youtube</h3>
            <div class="video">
                <a href="https://www.youtube.com/watch?v=6oKCZGeAH0c&ab_channel=ElJard%C3%ADndelc%C3%B3digo" target="__blanck" class="youtube-link" data-id="FMNuTj89RzU" rel="nofollow noopener noreferrer">
                    <picture>
                        <!-- <source srcset="https://i3.ytimg.com/vi_webp/FMNuTj89RzU/mqdefault.webp" type="image/webp"> -->
                        <img class="cover" alt="Creando calculadora en JAVA 👀 - Parte 1 (Diseño)" src="../../../../img/videos-youtube/calculadora.jpg">
                    </picture>
                    <h4>Creando calculadora en JAVA 👀 - Parte 1 (Diseño)</h4>
                </a>
            </div>
    
            <div class="video">
                <a href="https://www.youtube.com/watch?v=HVizjMAMLHc" target="__blanck" class="youtube-link" data-id="FMNuTj89RzU" rel="nofollow noopener noreferrer">
                    <picture>
                        <!-- <source srcset="https://i3.ytimg.com/vi_webp/FMNuTj89RzU/mqdefault.webp" type="image/webp"> -->
                        <img class="cover" alt="Juego Piedra , Papel, Tijera, Lagarto, Spock 💻 hecho en JAVA" src="../../../../img/videos-youtube/piedra-papel-tijera.jpg">
                    </picture>
                    <h4>Juego Piedra , Papel, Tijera, Lagarto, Spock 💻 hecho en JAVA</h4>
                </a>
            </div>
    
            <div class="video">
                <a href="https://www.youtube.com/watch?v=f6rP8eRafMY" target="__blanck" class="youtube-link" data-id="FMNuTj89RzU" rel="nofollow noopener noreferrer">
                    <picture>
                        <!-- <source srcset="https://i3.ytimg.com/vi_webp/FMNuTj89RzU/mqdefault.webp" type="image/webp"> -->
                        <img class="cover" alt="Creando primer login en JAVA 💻" src="../../../../img/videos-youtube/primer-login.png">
                    </picture>
                    <h4>Creando primer login en JAVA 💻</h4>
                </a>
            </div>
    
        </aside>
        
    </div>
    

    <?php
    //! FOOTER
    require('../../../components/footer.php');
    ?>

    <script src="../../../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>
    
    <script>
        const $miCheckbox = document.querySelector("#punto__switch");
        $miCheckbox.checked = true;
    </script>

</body>

</html>