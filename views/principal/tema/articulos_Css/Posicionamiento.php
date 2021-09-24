<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Posicionamiento</title>


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
                            <h3>Tipos de Posicionamiento</h3>
                            <span>Septiembre 13, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>
                    
                    <p>
                        Los navegadores por defecto posicionan de forma automática todas las cajas,
                        con el posicionamiento es posible modificar la posición de la o las cajas.
                    </p>

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Posicionamiento Normal (Position static)</strong>
                            <p>
                                Este posicionamiento es el que tienen los navegadores por defecto.
                            </p>
                        </li>
                        
                        <li>
                            <strong>Posicionamiento Relativo (Position Relative)</strong>
                            <p>
                                Posiciona una caja según el posicionamiento normal y después la desplaza
                                respecto a su posición original.
                            </p>
                        </li>

                        <li>
                            <strong>Posicionamiento Absoluto (Position Absolute)</strong>
                            <p>
                                Posiciona la caja de forma absoluta respecto a su contenedor y el resto de 
                                elementos ignoran la nueva posición original.  
                            </p>
                        </li>

                        <li>
                            <strong>Posicionamiento Fijo (Position Fixed)</strong>
                            <p>
                                Con este posicionamiento logra que la caja se quede en su mismo lugar, de forma
                                que la posición en la pantalla siempre es la misma cuando se realice scroll.  
                            </p>
                        </li>

                        <li>
                            <strong>Posicionamiento Flotante (Position Inherit)</strong>
                            <p>
                                Desplaza las cajas todo lo posible hacia la izquierda o hacia la derecha de la línea 
                                en la que se encuentran.
                            </p>
                        </li>

                    </ul><br>

                    <table style="margin-left: 50px;" class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>position</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>static | relative | absolute | fixed | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>static</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Selecciona el posicionamiento con el que se mostrará el elemento</td>
                        </tr>

                    </table><br>

                    <table style="margin-left: 50px;" class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>top, right, bottom, left</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>unidad de medida | porcentaje | auto | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>auto</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Indican el desplazamiento horizontal y vertical del elemento respecto de su posición original</td>
                        </tr>

                    </table>


                    <div class="container__articulo-imagen">
                        <picture>
                            <img width="500px" class="imagen_tipo_3" src="../../../../img/tema/css/posicionamiento/posicionamiento_ejemplo.png" alt="">
                            <p class="figure">Tipos de Posicionamiento</p>
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