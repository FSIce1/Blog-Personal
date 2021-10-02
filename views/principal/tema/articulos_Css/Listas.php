<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas</title>


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
                            <h3>Listas</h3>
                            <span>Septiembre 16, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>
                
                    
                    <!-- Estilos básicos -->

                    <h3>Estilos Básicos</h3>



                    <!-- Viñeta personalizados -->

                    <ul class="margen_50">
                        <li>
                            <strong>Viñetas personalizadas</strong>
                            <p>
                                Por defecto los navegadores muestran viñetas en forma de círculo, con el list-style-type
                                se pueden cambiar de forma.
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>list-style-type</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>disc | circle | square | decimal | decimal-leading-zero | lower-roman | upper-roman | lower-greek | lower-latin | upper-latin | armenian | georgian | lower-alpha | upper-alpha | none | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>disc</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Permite establecer el tipo de viñeta mostrada para una lista</td>
                        </tr>

                    </table>

                    <ul style="margin-left: 80px;">
                        <li>
                            <p>
                                Los valores gráficos son disc, circle y square y muestran como viñeta un círculo relleno, un círculo vacío y un cuadrado relleno respectivamente.
                            </p>
                        </li>
                        <li>
                            <p>
                            Los valores numéricos están formados por decimal, decimal-leading-zero, lower-roman, upper-roman, armenian y georgian.
                            </p>
                        </li>
                        <li>
                            <p>
                            Por último, los valores alfanuméricos se controlan mediante lower-latin, lower-alpha, upper-latin, upper-alpha y lower-greek.
                            </p>
                        </li>
                    </ul>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/listas/viñeta.png" alt="">
                            <p class="figure">Tipos de viñetas</p>
                        </picture>
                    </div>



                    <!-- Posición de Viñetas  -->
                    
                    <ul class="margen_50">
                        <li>
                            <strong>Posición de Viñetas</strong>
                            <p>
                                Establece la posición de la viñeta de cada texto de una lista
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>list-style-position</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>inside | outside | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>outside</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Permite establecer la posición de la viñeta de cada elemento de una lista</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/listas/outside_inside.png" alt="">
                            <p class="figure">Outside vs Inside</p>
                        </picture>
                    </div>



                    <!-- Viñetas con imágenes  -->
                    
                    <ul class="margen_50">
                        <li>
                            <strong>Imagen en Viñeta</strong>
                            <p>
                                Reemplazamos la viñeta por una imagen
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>list-style-image</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>url | none | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>none</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>	Permite reemplazar las viñetas automáticas por una imagen personalizadas</td>
                        </tr>

                    </table>
                    
                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/listas/viñeta_con_imagen.gif" alt="">
                            <p class="figure">Viñeta con imagen</p>
                        </picture>
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