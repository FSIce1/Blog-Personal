<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid</title>


    <link rel="icon" type="image/png" href="../../../../img/logo_v1.png">

    <!-- Estilos -->

    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/texto.css">
    -->
    
    <link rel="stylesheet" href="../../../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../../css/main/articulo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../../css/switch.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../../css/main/aside.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="../../../../css/main/grid.scss?v=<?php echo time(); ?>">

    
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
                            <h3>Grid Css</h3>
                            <span>Septiembre 17, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>

                    <!--Que és Grid-->
                    <h3>¿Qué es Grid?</h3>

                    <p>
                        Es un modelo de diseño basado en cuadrículas que facilita el diseño de 
                        las páginas web.   
                    </p>

                    <ul style="margin-left: 50px;">

                        <li>
                            <strong>Contenedor Padre (Flex Container)</strong>
                            <p>Elemento padre que definirá la cuadrícula</p>
                        </li>

                        <li>
                            <strong>Item (Elemento contenedor)</strong>
                            <p>Uno de los hijos que contiene la cuadrícula</p>
                        </li>

                        <li>
                            <strong>Celda (Grid cell)</strong>
                            <p>Es cada uno de los cuadros de la cuadrícula</p>
                        </li>

                        <li>
                            <strong>Área (Grid Area)</strong>
                            <p>Conjunto de celdas en una cuadrícula</p>
                        </li>
                        
                        <li>
                            <strong>Banda (Grid Track)</strong>
                            <p>Línea horizontal o  verical de celdas de la cuadrícula</p>
                        </li>
                        
                        <li>
                            <strong>Línea (Grid LIne)</strong>
                            <p>Separador horizontal o vertical de las celdas de la cuadrícula</p>
                        </li>

                    </ul><br>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/grid/grid_css.png" alt="">
                            <p class="figure">Tipos de letras</p>
                        </picture>
                    </div>

                    <div class="nota">
                        <p>
                            Para utilizar las cuadrículas se utilizaría el siguiente código:
                        </p>
                    </div>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="500px" src="../../../../img/tema/css/grid/codigo_grid.png" alt="">
                            <p class="figure"></p>
                        </picture>
                    </div>



                    <h3>Display</h3>

                    <!--Grid Template Columns-->
                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Grid Template Columns</strong>
                            <p>
                                Con ello podemos crear columnas
                            </p>
                        </li>
                    </ul>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/grid/grid_template_columns.png" alt="">
                            <p class="figure"></p>
                        </picture>
                    </div>
                    
                    
                    <!--Grid Template Rows-->
                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Grid Template Rows</strong>
                            <p>
                                Con ello podemos crear filas
                            </p>
                        </li>
                    </ul>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/grid/grid_template_rows.png" alt="">
                            <p class="figure"></p>
                        </picture>
                    </div>


                    <!--Attajo Grid Template-->
                    <div class="nota margen_50">
                        <p>
                            <strong>Atajo Grid Template:</strong>
                                Manera abreviada de dar dimensiones
                        </p>
                    </div>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/grid/grid_template_atajo1.png" alt="">
                            <p class="figure"></p>
                        </picture>
                    </div>
                    
                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/grid/grid_template_atajo2.png" alt="">
                            <p class="figure"></p>
                        </picture>
                    </div>



                    <!--Gap-->
                    <h3>Gap</h3>
                    
                    <p>Esta propiedad sirve para indicar cuanto será la separación entre filas y columnas</p>

                    <!--Column Gap-->
                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Column Gap</strong>
                            <p>
                                Espacio de separación entre las columnas
                            </p>
                        </li>
                    </ul>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/grid/column_gap.png" alt="">
                            <p class="figure"></p>
                        </picture>
                    </div>

                    <!--Row Gap-->
                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Row Gap</strong>
                            <p>
                                Espacio de separación entre las filas
                            </p>
                        </li>
                    </ul>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/grid/row_gap.png" alt="">
                            <p class="figure">Separación de 5<span class="px">px</span> entre filas</p>
                        </picture>
                    </div>

                    <!--Manera Abreviada-->

                    <div class="nota margen_50">
                        <p>
                            Se puede hace de <strong>manera abreviada</strong> el row-gap y el
                            column-gap con colocar solamente la propiedad gap. 
                        </p>
                    </div>
                    
                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/grid/gap.png" alt="">
                            <p class="figure">Separación de filas y columnas</p>
                        </picture>
                    </div>



                    <!--Grid Template Areas-->
                    <h3>Grid Template Areas</h3>
                    
                    <p>
                        Con esta propiedad creamos un área y con ello podemos ubicar elementos de manera más sencilla
                    </p>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/grid/grid_template_area.png" alt="">
                            <p class="figure">Creamos el grid template area</p>
                        </picture>
                    </div>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/grid/grid_template_area_items.png" alt="">
                            <p class="figure">Definimos las áreas a los items</p>
                        </picture>
                    </div>

                    <!--Nota-->
                    <div class="nota">
                        <p>
                            Aquí tenemos al ejemplo de forma visual
                        </p>
                    </div>

                    <div class="ejemplo">
                    
                        <div class="contenedor_area">
                            
                            <div class="item1">Header</div>
                            
                            <div class="item2">Menú</div>

                            <div class="item3">Main</div>
                            
                            <div class="item4">Footer</div>

                        </div>

                    </div><br>
                    
                    
                    
                    <!--Mínimo y Máximo-->
                    <h3>Mínimo y Máximo</h3>
                    
                    <p>
                        Definimos un rango de tamaño mínimo y máximo tomar nuestro elemento
                    </p>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/grid/max_min.png" alt="">
                            <p class="figure"></p>
                        </picture>
                    </div>



                    <!--Auto Fit-->
                    <h3>Auto Fit</h3>
                    
                    <p>
                        Si el contenedor (color turqueza) tiene un tamaño definido o máximo 
                        en el eje relevante, entonces el número de repeticiones es el mayor número posible
                        según las medidas.  

                    </p>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/grid/auto_fit.png" alt="">
                            <p class="figure"></p>
                        </picture>
                    </div>
                    
                    <div class="nota">
                        <p>
                            Se utliza para definir <strong>grid-template-rows</strong> o <strong>grid-template-columns</strong>
                        </p>
                    </div>

                    <div class="ejemplo">
                    
                        <div class="container_wrapper__auto_fit">
                            <div>1</div>
                            <div>2</div>
                            <div>3</div>
                        </div><br> 
                        
                        <div class="container_wrapper__auto_fit">
                            <div>1</div>
                            <div>2</div>
                            <div>3</div>
                            <div>4</div>
                            <div>5</div>
                            <div>6</div>
                            <div>7</div>
                            <div>8</div>
                            <div>9</div>
                        </div> 
                    </div><br>



                    <!--Auto Fill-->
                    <h3>Auto Fill</h3>
                    
                    <p>
                        Se comporta similar a auto-fit, excepto que después de colocar los elementos
                        de grid, se colapsan los tracks vacíos.<br>
                        Los tracks vacíos es aquellos espacios vacíos que se extienden a través del contenedor
                    </p>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/grid/auto_fill.png" alt="">
                            <p class="figure"></p>
                        </picture>
                    </div>
                    
                    <div class="ejemplo">
                    
                        <div class="container_wrapper__auto_fill">
                            <div>1</div>
                            <div>2</div>
                            <div>3</div>
                        </div><br> 
                        
                        <div class="container_wrapper__auto_fill">
                            <div>1</div>
                            <div>2</div>
                            <div>3</div>
                            <div>4</div>
                            <div>5</div>
                            <div>6</div>
                            <div>7</div>
                            <div>8</div>
                            <div>9</div>
                        </div> 
                    </div><br>



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