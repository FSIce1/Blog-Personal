<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propiedades de texto</title>


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
                            <h3>Propiedades de texto</h3>
                            <span>Septiembre 15, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>



                    <!-- Text Align -->

                    <ul class="margen_50">
                        <li>
                            <strong>Text Align</strong>
                            <p>
                                Permite alinear el texto según los valores.
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>text-align</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>left | right | center | justify | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>left</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece la alineación del contenido del elemento</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/texto/text-align.gif" alt="">
                            <p class="figure">Alineación de texto</p>
                        </picture>
                    </div>



                    <!-- Line Height -->

                    <ul class="margen_50">
                        <li>
                            <strong>Line Height</strong>
                            <p>
                                Controla el interlineado entre las líneas de texto
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>line-height</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>normal | numero | unidad de medida | porcentaje | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>normal</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Permite establecer la altura de línea de los elementos</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/texto/line_height.png" alt="">
                            <p class="figure">Alineación de texto</p>
                        </picture>
                    </div>



                    <!-- Text Decoration -->

                    <ul class="margen_50">
                        <li>
                            <strong>Text Decoration</strong>
                            <p>
                                Aplica decoraciones al texto.
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>line-height</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>none | ( underline || overline || line-through || blink ) | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>none</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece la decoración del texto (subrayado, tachado, parpadeante, etc.)</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/texto/text_decoration.png" alt="">
                            <p class="figure">Tipos de decoración al texto</p>
                        </picture>
                    </div>



                    <!-- Text Transform -->

                    <ul class="margen_50">
                        <li>
                            <strong>Text Transform</strong>
                            <p>
                                
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>text-transform</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>capitalize | uppercase | lowercase | none | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>none</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Transforma el texto original (lo transforma a mayúsculas, a minúsculas, etc.)</td>
                        </tr>

                    </table><br>



                    <!-- Text Indent -->

                    <ul class="margen_50">
                        <li>
                            <strong>Text Indent</strong>
                            <p>
                                
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>text-indent</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>unidad de medida | porcentaje | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>0</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Tabula desde la izquierda la primera línea del texto original</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/texto/text_indent.png" alt="">
                            <p class="figure">Ejemplo de texto identado</p>
                        </picture>
                    </div>



                    <!-- White Space -->

                    <ul class="margen_50">
                        <li>
                            <strong>White Space</strong>
                            <p>
                                Controla los espacios en blanco en los textos.
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>white-space</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>normal | pre | nowrap | pre-wrap | pre-line | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>normal</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el tratamiento de los espacios en blanco del texto</td>
                        </tr>

                    </table><br>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Valor</th>
                            <th>Respeta espacios en blanco</th>
                            <th>Respeta saltos de línea</th>
                            <th>Ajusta las líneas</th>
                        </tr>

                        <tr>
                            <td>normal</td>
                            <td>no</td>
                            <td>no</td>
                            <td>si</td>
                        </tr>

                        <tr>
                            <td>pre</td>
                            <td>si</td>
                            <td>si</td>
                            <td>no</td>
                        </tr>
                        
                        <tr>
                            <td>nowrap</td>
                            <td>no</td>
                            <td>no</td>
                            <td>no</td>
                        </tr>

                        <tr>
                            <td>pre-wrap</td>
                            <td>si</td>
                            <td>si</td>
                            <td>si</td>
                        </tr>

                        <tr>
                            <td>pre-line</td>
                            <td>no</td>
                            <td>si</td>
                            <td>si</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/texto/white_space.gif" alt="">
                            <p class="figure">Ejemplos de White Space</p>
                        </picture>
                    </div>

                    <div class="nota">
                        <p>
                            Entre otros ejemplos:<br><br> 
                            letter-spacing: Permite establecer el espacio entre las letras que forman las palabras del texto
                            <br>word-spacing: Permite establecer el espacio entre las palabras que forman el texto.
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