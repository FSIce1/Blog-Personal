<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualización</title>


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
                            <h3>Visualización</h3>
                            <span>Septiembre 15, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>
                    
                    <p>
                        Esta propiedad contra la visualización de los elementos con: 
                        display, visibility, overflow y z-index. 
                    </p>

                    <h3>Propiedades display y visibility</h3>

                    <ul style="margin-left: 50px;" >
                        <li>
                            <strong>Display</strong>
                            <p>
                                Permite ocultar completamente un elemento haciendo que no aparezca
                                en la página, haciendo así que el resto de elementos ocupen su lugar.
                            </p>
                        </li>
                    </ul>

                    <table style="margin-left: 50px;"  class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>display</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>inline | block | none | list-item | run-in | inline-block | table | inline-table | table-row-group | table-header-group | table-footer-group | table-row | table-column-group | table-column | table-cell | table-caption | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>inline</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Permite controlar la forma de visualizar un elemento e incluso ocultarlo</td>
                        </tr>

                    </table>

                    <ul style="margin-left: 80px; list-style-type: upper-latin">
                        <li>
                            <strong>Inline</strong>
                            <p>Visualiza un elemento en forma de elemento en línea</p>
                        </li>

                        <li>
                            <strong>Block</strong>
                            <p>Muestra un elemento como si fuera un elemento de bloque</p>
                        </li>
                        
                        <li>
                            <strong>None</strong>
                            <p>Oculta un elemento y hace que desaparezca de la página</p>
                        </li>
                    </ul>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/block_inline.png" alt="">
                            <p class="figure">Block vs Inline</p>
                        </picture>
                    </div>
                    
                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/block_inline_2.png" alt="">
                            <p class="figure">Block Direction vs Inline Direction</p>
                        </picture>
                    </div>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/block_inline.jpeg" alt="">
                            <p class="figure">Valor predefinido de las etiquetas</p>
                        </picture>
                    </div>


                    <!-- Visibilidad -->
                    
                    <ul style="margin-left: 50px;" >
                        <li>
                            <strong>Visibility</strong>
                            <p>
                                Hace invisible un elemento, a diferencia del display no modifica su posición
                                y aunque la caja no se ve sigue ocupando sitio.
                            </p>
                        </li>
                    </ul>

                    <table style="margin-left: 50px;"  class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>visibility</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>visible | hidden | collapse | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>visible</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Permite hacer visibles e invisibles a los elementos</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/Visibility.jpg" alt="">
                            <p class="figure">Visibility Css</p>
                        </picture>
                    </div>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/hidden.png" alt="">
                            <p class="figure">Propiedad hidden</p>
                        </picture>
                    </div>


                    <!-- Overflow -->

                    <h3>Propiedad overflow</h3>

                    <p>
                        Controla el contenido que es demasiado grande para 
                        poder caber en un área.
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>overflow</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>visible | hidden | scroll | auto | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>visible</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Permite controlar los contenidos sobrantes de un elemento</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/visualización/overflow.png" alt="">
                            <p class="figure">Propiedad Overflow</p>
                        </picture>
                    </div>

                    <!-- Z-index -->

                    <h3>Propiedad z-index</h3>

                    <p>
                        Nos permite definir el nivel de suporposición de los elementos.
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>z-index</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>auto | numero | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>auto</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el nivel tridimensional en el que se muestra el elemento</td>
                        </tr>

                    </table>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/visualización/z-index.gif" alt="">
                            <p class="figure">Propiedad Z-index</p>
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