<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de elementos</title>


    <link rel="icon" type="image/png" href="../../../../img/logo_v1.png">

    <!-- Estilos -->

    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/texto.css">
    -->
    
    <link rel="stylesheet" href="../../../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../../css/main/articulo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../../css/switch.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../../css/main/aside.css?v=<?php echo time(); ?>">

    
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
                            <h3>Tipos de elementos</h3>
                            <span>Septiembre 13, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>
                    
                    <h3>Elementos de Bloque (block elements)</h3>

                    <ul style="margin-left: 50px;">
                        
                        <li>
                            <p>
                                Se colocan siempre en su propia línea, debajo de los elementos anteriores
                            </p>
                        </li>

                        <li>
                            <p>
                                Se expanden hasta ocupar toda la anchura disponible ( la del elemento padre )
                            </p>
                        </li>
                        
                        <li>
                            <p>
                                Pueden contener otros elementos inline o block
                            </p>
                        </li>
                        
                        <li>
                            <p>
                                Se les puede fijar altura y anchura con CSS ( width y height )
                            </p>
                        </li>
                        
                        <li>
                            <p>
                                Se les puede asignar margin y padding con CSS
                            </p>
                        </li>

                    </ul>

                    <div class="nota">
                        <p>
                        Los elementos en línea definidos por HTML son: a, abbr, acronym, b, basefont, bdo, big, br, cite, code, dfn, em, font, i, img, input, kbd, label, q, s, samp, select, small, span, strike, strong, sub, sup, textarea, tt, u, var.
                        </p>
                    </div>

                    <div class="container__articulo-imagen">
                        <img class="imagen_tipo_3" src="../../../../img/tema/css/tipos_de_elementos/bloque.png" alt="">
                    </div>



                    <h3>Elementos de Línea (Inline elements)</h3>

                    <ul style="margin-left: 50px;">
                        
                        <li>
                            <p>
                                No crean una nueva línea. Se colocan ‘en línea’ con otros elementos
                            </p>
                        </li>

                        <li>
                            <p>
                                Su anchura y altura se ajusta al contenido y no podemos cambiarlas con CSS ( ignora widht y height )
                            </p>
                        </li>
                        
                        <li>
                            <p>
                                Sólo podemos fijar margin-left y margin-right. Ignoran margin-top y margin-bottom
                            </p>
                        </li>
                        
                        <li>
                            <p>
                                Sólo pueden contener otros elementos inline
                            </p>
                        </li>
                        
                        <li>
                            <p>
                                Debe respetar la propiedad white-space de CSS
                            </p>
                        </li>

                    </ul>

                    <div class="nota">
                        <p>
                        Los elementos de bloque definidos por HTML son: address, blockquote, center, dir, div, dl, fieldset, form, h1, h2, h3, h4, h5, h6, hr, isindex, menu, noframes, noscript, ol, p, pre, table, ul.
                        </p>
                    </div>
                    
                    <div class="container__articulo-imagen">
                        <img class="imagen_tipo_3" src="../../../../img/tema/css/tipos_de_elementos/linea.png" alt="">
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