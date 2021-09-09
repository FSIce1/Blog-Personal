<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos</title>


    <link rel="icon" type="image/png" href="../../img/logo_v1.png">

    <!-- Estilos -->
    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/articulos.css"> -->

    <link rel="stylesheet" href="../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/articulos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/switch.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/aside.css?v=<?php echo time(); ?>">


    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="../../css/fuentes/fuentes.css">

    
    <!-- Para la caché -->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

</head>

<body>

    <!-- 
        Para que no se almacene el caché
    -->
    <?php
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
    ?> 


    <?php
    //! HEADER
    require('../components/header.html');

    //! BARRA DE NAVEGACIÓN
    require('../components/barraNavegacion.html');

    ?>

    <div class="body">
        <main>
            <section class="articulos">
                <p>últimos artículos...</p>

                <article>
                    <div class="articulo">
                        <div class="articulo__imagen">
                            <img src="../../img/prueba/javascript.png" alt="">
                        </div>

                        <div class="articulo__informacion">
                            <a href="articulo.php">Npm tutorial add()</a>
                            <span>Julio 12, 2019 . ☕️ 15 minutos de lectura</span>
                            <p>Optimizaciones de renderizado que surgen...</p>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="articulo">
                        <div class="articulo__imagen">
                            <img src="../../img/prueba/javascript.png" alt="">
                        </div>

                        <div class="articulo__informacion">
                            <a href="#">Agregar modelos en Laravel</a>
                            <span>Julio 12, 2019 . ☕️ 15 minutos de lectura</span>
                            <p>Tutorial de como agregar correctamente</p>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="articulo">
                        <div class="articulo__imagen">
                            <img src="../../img/prueba/javascript.png" alt="">
                        </div>

                        <div class="articulo__informacion">
                            <a href="#">Función equals</a>
                            <span>Julio 12, 2019 . ☕️ 15 minutos de lectura</span>
                            <p>Optimizaciones de renderizado que surgen...</p>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="articulo">
                        <div class="articulo__imagen">
                            <img src="../../img/prueba/javascript.png" alt="">
                        </div>

                        <div class="articulo__informacion">
                            <a href="#">This</a>
                            <span>Julio 12, 2019 . ☕️ 15 minutos de lectura</span>
                            <p>Optimizaciones de renderizado que surgen...</p>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="articulo">
                        <div class="articulo__imagen">
                            <img src="../../img/prueba/javascript.png" alt="">
                        </div>

                        <div class="articulo__informacion">
                            <a href="#">Función equals</a>
                            <span>Julio 12, 2019 . ☕️ 15 minutos de lectura</span>
                            <p>Optimizaciones de renderizado que surgen...</p>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="articulo">
                        <div class="articulo__imagen">
                            <img src="../../img/prueba/javascript.png" alt="">
                        </div>

                        <div class="articulo__informacion">
                            <a href="#">Último Artículo</a>
                            <span>Julio 12, 2019 . ☕️ 15 minutos de lectura</span>
                            <p>Optimizaciones de renderizado que surgen...</p>
                        </div>
                    </div>
                </article>

                
                <p>Ver más artículos...</p>
            </section>

            <section>
                <p class="titulo">Artículos por temas</p>
                <div class="seccion">
                    <a href="articulos__tema" class="tema">
                        <img src="../../img/prueba/css.png" alt="Imagen1">
                        <p>Css</p>
                    </a>
                    <a class="tema">
                        <img src="../../img/prueba/javascript.png" alt="Imagen2">
                        <p>Javascript</p>
                    </a>
                    <a class="tema">
                        <img src="../../img/prueba/node.png" alt="Imagen3">
                        <p>Node</p>
                    </a>
                </div>

                <div class="seccion">
                    <a class="tema">
                        <img src="../../img/prueba/react.png" alt="Imagen1">
                        <p>React</p>
                    </a>
                    <a class="tema">
                        <img src="../../img/prueba/php.png" alt="Imagen2">
                        <p>Php</p>
                    </a>
                    <a class="tema">
                        <img src="../../img/prueba/java.png" alt="Imagen3">
                        <p>Java</p>
                    </a>
                </div>

            </section>

        </main>

        <aside>

            <h3>Últimos videos en youtube</h3>
            <div class="video">
                <a href="https://www.youtube.com/watch?v=6oKCZGeAH0c&ab_channel=ElJard%C3%ADndelc%C3%B3digo" target="__blanck" class="youtube-link" data-id="FMNuTj89RzU" rel="nofollow noopener noreferrer">
                    <picture>
                        <!-- <source srcset="https://i3.ytimg.com/vi_webp/FMNuTj89RzU/mqdefault.webp" type="image/webp"> -->
                        <img class="cover" alt="Creando calculadora en JAVA 👀 - Parte 1 (Diseño)" src="../../img/videos-youtube/calculadora.jpg">
                    </picture>
                    <h4>Creando calculadora en JAVA 👀 - Parte 1 (Diseño)</h4>
                </a>
            </div>

            <div class="video">
                <a href="https://www.youtube.com/watch?v=HVizjMAMLHc" target="__blanck" class="youtube-link" data-id="FMNuTj89RzU" rel="nofollow noopener noreferrer">
                    <picture>
                        <!-- <source srcset="https://i3.ytimg.com/vi_webp/FMNuTj89RzU/mqdefault.webp" type="image/webp"> -->
                        <img class="cover" alt="Juego Piedra , Papel, Tijera, Lagarto, Spock 💻 hecho en JAVA" src="../../img/videos-youtube/piedra-papel-tijera.jpg">
                    </picture>
                    <h4>Juego Piedra , Papel, Tijera, Lagarto, Spock 💻 hecho en JAVA</h4>
                </a>
            </div>

            <div class="video">
                <a href="https://www.youtube.com/watch?v=f6rP8eRafMY" target="__blanck" class="youtube-link" data-id="FMNuTj89RzU" rel="nofollow noopener noreferrer">
                    <picture>
                        <!-- <source srcset="https://i3.ytimg.com/vi_webp/FMNuTj89RzU/mqdefault.webp" type="image/webp"> -->
                        <img class="cover" alt="Creando primer login en JAVA 💻" src="../../img/videos-youtube/primer-login.png">
                    </picture>
                    <h4>Creando primer login en JAVA 💻</h4>
                </a>
            </div>

        </aside>

    </div>

    <?php
    //! FOOTER
    require('../components/footer.html');
    ?>

    <script src="../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>


</body>

</html>