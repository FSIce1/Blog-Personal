<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animaciones</title>


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
                            <h3>Animaciones</h3>
                            <span>Septiembre 26, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>
                
                    <p>
                        Las animaciones en css consiguen un efecto entre un estado inicial y un estado final
                    </p>

                    <!--TRANSFORMACIONES EN 2D y 3D-->
                    <h3>Transformaciones en 2D y 3D</h3>
            
                    <p>
                        Visión general de las animaciones
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Transformaciones</th>
                            <th>Transiciones</th>
                            <th>Animaciones</th>
                        </tr>

                        <tr>
                            <td>transform</td>
                            <td>transition</td>
                            <td>animation</td>
                        </tr>

                        <tr>
                            <td>transform-origin</td>
                            <td>transition-property</td>
                            <td>animation-name</td>
                        </tr>

                        <tr>
                            <td>transform-style</td>
                            <td>transition-duration</td>
                            <td>animation-duration</td>
                        </tr>

                        <tr>
                            <td>perspective</td>
                            <td>transition-timing-function(opcional)</td>
                            <td>animation-timing-function(opcional)</td>
                        </tr>

                        <tr>
                            <td>perspective-origin</td>
                            <td>transition-delay (opcional)</td>
                            <td>animation-delay (opcional)</td>
                        </tr>

                    </table>


                    <!--TRANSFORM-->
                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Transform</strong>
                            <p>
                                Permite modificar el espacio de coordenadas en formato visual Css.
                                <br>Cuando se utiliza los elementos son trasladados, rotado, escalados
                                o sesgados de acuerdo al valor indiciado.
                            </p>
                        </li>
                    </ul>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img width="500px" src="../../../../img/tema/css/animaciones/transform.png" alt="">
                            <p class="figure">Ejemplos usados con la propiedad transform</p>
                        </picture>
                    </div>

                    <div class="ejemplo_filtros">
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="matrix" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">matrix(1, 2, 3, 4, 5, 6)</span>
                        </div>
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="translate" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">translate(120px, 50%)</span>
                        </div>
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="scale" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">scale(2, 0.5)</span>
                        </div>
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="rotate" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">rotate(0.5turn)</span>
                        </div>
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="skew" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">skew(30deg, 20deg)</span>
                        </div>
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="scale_translate" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">scale(0.5) translate(-100%, -100%);</span>
                        </div>

                    </div><br><br>
                    
                    

                    <!--TRANSITION-->
                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Transition</strong>
                            <p>
                                Las transiciones permiten cambiar los valores de la propiedad, 
                                durante un período determinado.<br>
                                
                            </p>
                        </li>
                    </ul>

                    <div class="caja_transition margen_50">
                    </div><br>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>Significado</th>
                            <th>Inicio/Transcurso/Final</th>
                        </tr>

                        <tr>
                            <td>ease</td>
                            <td>
                                Especifica un efecto de transición con un inicio lento, luego rápido, luego termina lentamente
                            </td>
                            <td>Lento/Rápido/Lento</td>
                        </tr>

                        <tr>
                            <td>linear</td>
                            <td>
                                Especifica un efecto de transición con la misma velocidad de principio a fin
                            </td>
                            <td>Normal/Normal/Normal</td>
                        </tr>

                        <tr>
                            <td>ease-in</td>
                            <td>
                                Especifica un efecto de transición con un inicio lento
                            </td>
                            <td>Lento/Normal/Normal</td>
                        </tr>                        

                        <tr>
                            <td>ease-out</td>
                            <td>
                                Especifica un efecto de transición con un final lento
                            </td>                        
                            <td>Normal/Normal/Lento</td>
                        </tr>
                        
                        <tr>
                            <td>ease-in-out</td>
                            <td>
                                Especifica un efecto de transición con un inicio y un final lentos
                            </td>
                            <td>Lento/Normal/Lento</td>
                        </tr>
                        
                        <tr>
                            <td>cubic-bezier(X1,Y1,X2,Y2)</td>
                            <td>
                                Le permite definir sus propios valores en una función cubic-bezier
                            </td>
                            <td>-</td>
                        </tr>

                    </table>

                    <div class="ejemplo_transition">
                        
                        <div class="caja_transition linear">
                            linear
                        </div>
                        
                        <div class="caja_transition ease">
                            ease
                        </div>
    
                        <div class="caja_transition ease-in">
                            ease-in
                        </div>
                        
                        <div class="caja_transition ease-out">
                            ease-out
                        </div>
                        
                        <div class="caja_transition ease-in-out">
                            ease-in-out
                        </div>

                    </div>

                    <div class="nota">
                        <p>
                            <strong>transition: delay</strong> esta propiedad indiica el tiempo de restraso(en segundo) para
                            el efecto de transición.
                        </p>
                    </div>

                    <div class="caja_transition linear delay">
                        transition-delay: 1s
                    </div>
                    
                    <div class="caja_transition ambos">
                        transition: width 2s, height 2s, transform 2s;
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