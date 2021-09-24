<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex</title>


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
                            <h3>Flexbox</h3>
                            <span>Septiembre 17, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>

                    <h3>¿Qué es Flexbox?</h3>

                    <p>
                        Llamado también módulo de caja flexible, fue diseñado como modelo unidimensional para ayudar
                        a distribuir el espacio entre los elementos de una interaz y también la alineación de los mismos.
                        <br>
                        Flexbox como mencionamos es unidimensional es decir maneja una sola dimensión a la vez ya sea
                        como fila o como columna, pero no ambas a la vez. 
                    </p>

                    <ul>
                        <li><p>Contenedor Padre (Flex Container).</p></li>
                        <li><p>Elementos Hijos (Flex Items).</p></li>
                        <li><p>Eje Principal (Main Axis).</p></li>
                        <li><p>Eje Transversal (Cross Axis).</p></li>
                    </ul><br>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="400px" src="../../../../img/tema/css/flex/flex.png" alt="">
                            <p class="figure">Tipos de letras</p>
                        </picture>
                    </div>



                    <!-- Flex-Direction -->

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Flex Direction</strong>
                            <p>
                                Existen 2 ejes en flexbox, el eje principal y el eje cruzado.
                                Posee 4 valores: row, row-reverse, column y column-reverse
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>flex-direction</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>row | column | row-reverse | column-reverse</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>nowrap</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Define el eje principal (main axis)</td>
                        </tr>

                    </table><br>

                    <div style="width: 100%">
                        <p class="margen_50" ><strong>flex-direction: row</strong></p>
                        <div style="display: flex; flex-direction: row" class="margen_50">                        
                            <div class="caja_flex">
                                Caja 1
                            </div>
                            <div class="caja_flex">
                                Caja 2
                            </div>
                            <div class="caja_flex">
                                Caja 3
                            </div>
                        </div><br>

                        <p class="margen_50" ><strong>flex-direction: column</strong></p>
                        <div style="display: flex; flex-direction: column" class="margen_50">                        
                            <div class="caja_flex">
                                Caja 1
                            </div>
                            <div class="caja_flex">
                                Caja 2
                            </div>
                            <div class="caja_flex">
                                Caja 3
                            </div>
                        </div><br>
                        
                        <p class="margen_50" ><strong>flex-direction: row-reverse</strong></p>
                        <div style="display: flex; flex-direction: row-reverse" class="margen_50">                        
                            <div class="caja_flex">
                                Caja 1
                            </div>
                            <div class="caja_flex">
                                Caja 2
                            </div>
                            <div class="caja_flex">
                                Caja 3
                            </div>
                        </div><br>

                        <p class="margen_50" ><strong>flex-direction: column-reverse</strong></p>
                        <div style="display: flex; flex-direction: column-reverse" class="margen_50">                        
                            <div class="caja_flex">
                                Caja 1
                            </div>
                            <div class="caja_flex">
                                Caja 2
                            </div>
                            <div class="caja_flex">
                                Caja 3
                            </div>
                        </div><br><br>
                    </div>



                    <!--Flex Grow-->

                    <p class="margen_50" >Llena todos los espacios restantes en partes iguales<br><strong>flex-grow: 1</strong></p>
                    
                    <div style="display: flex; flex-direction: row;" class="margen_50">                        
                        <div class="caja_flex grow">
                            Caja 1
                        </div>
                        <div class="caja_flex grow">
                            Caja 2
                        </div>
                        <div class="caja_flex grow">
                            Caja 3
                        </div>
                    </div>
                    
                    <p class="margen_50" >Para alicar en diferentes tamaños podemos agregar flex-grow en cada cada,
                        en este caso 1, 2 y 3 respectivamente.</p>
                    <div style="display: flex; flex-direction: row;" class="margen_50">                        
                        <div class="caja_flex" style="flex-grow: 1;">
                            Caja 1
                        </div>
                        <div class="caja_flex grow" style="flex-grow: 2;">
                            Caja 2
                        </div>
                        <div class="caja_flex grow" style="flex-grow: 3;">
                            Caja 3
                        </div>
                    </div><br><br>



                    <!--Flex Wrap-->

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Flex Wrap</strong>
                            <p>
                                Cuando los elementos sean demasiados para ser mostrados en una línea, con la propiedad 
                                flex-wrap: wrap serán repartidos en la siguiente línea.
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>flex-wrap</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>wrap | nowrap</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>nowrap</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece que los elementos que ya no alcancen en una línea pasen a la siguiente</td>
                        </tr>

                    </table><br>

                    <div class="margen_50" style="width: 100%">
                        <p><strong>flex-wrap: nowrap</strong></p>
                        <div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: center;" class="margen_50">                        
                            
                            <div class="caja_flex">Caja 1</div>
                            <div class="caja_flex">Caja 2</div>
                            <div class="caja_flex">Caja 3</div>
                            <div class="caja_flex">Caja 4</div>
                            <div class="caja_flex">Caja 5</div>
                            <div class="caja_flex">Caja 6</div>
                            <div class="caja_flex">Caja 7</div>
                            <div class="caja_flex">Caja 8</div>
                            <div class="caja_flex">Caja 9</div>
                            <div class="caja_flex">Caja 10</div>

                        </div><br>
                        
                        <p><strong>flex-wrap: wrap</strong></p>
                        
                        <div style="display: flex; flex-direction: row; flex-wrap: wrap;" class="margen_50">                        
                            
                            <div class="caja_flex">Caja 1</div>
                            <div class="caja_flex">Caja 2</div>
                            <div class="caja_flex">Caja 3</div>
                            <div class="caja_flex">Caja 4</div>
                            <div class="caja_flex">Caja 5</div>
                            <div class="caja_flex">Caja 6</div>
                            <div class="caja_flex">Caja 7</div>
                            <div class="caja_flex">Caja 8</div>
                            <div class="caja_flex">Caja 9</div>
                            <div class="caja_flex">Caja 10</div>

                        </div><br><br>


                    </div>



                    <!--Align Content-->

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Align Content</strong>
                            <p>
                                Define la alineación de los hijos en el eje transversal (cross axis), NO funciona cuando los hijos están en UNA sóla línea (es decir cuando flex-wrap tiene el valor de nowrap, NO FUNCIONA).
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>align-content</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>flex-start | center | flex-end | space-between | space-around | stretch</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>normal</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece la posición vertical siempre y cuando tenga la propiedad flex-wrap: wrap</td>
                        </tr>

                    </table>

                    <div class="ejemplo margen_50" style="display: flex; flex-direction: column;">
                        
                        <div style="display: flex; flex-direction: row; justify-content: center;">
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 100px; height: 100px; flex-wrap: wrap; align-content: flex-start;" >
                                <div class="caja_flex3">flex-start</div>
                            </div>

                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 100px; height: 100px; flex-wrap: wrap; align-content: center;">
                                <div class="caja_flex3">Center</div>
                            </div>

                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 100px; height: 100px; flex-wrap: wrap; align-content: flex-end;">
                                <div class="caja_flex3">flex-end</div>
                            </div>
                        </div><br>

                        <div class="ejemplo margen_50" style="display: flex; flex-direction: row; justify-content: center;">
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; flex-wrap: wrap; align-content: space-between;">
                                <div class="caja_flex6">space</div>
                                <div class="caja_flex4_2">-</div>
                                <div class="caja_flex6">between</div>
                                <div class="caja_flex6">space</div>
                                <div class="caja_flex4_2">-</div>
                                <div class="caja_flex6">between</div>
                                <div class="caja_flex6">space</div>
                                <div class="caja_flex4_2">-</div>
                                <div class="caja_flex6">between</div>
                                <div class="caja_flex6">space</div>
                                <div class="caja_flex4_2">-</div>
                                <div class="caja_flex6">between</div>
                            </div>
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; flex-wrap: wrap; align-content: space-around;">
                                <div class="caja_flex6">space</div>
                                <div class="caja_flex4_2">-</div>
                                <div class="caja_flex6">around</div>
                                <div class="caja_flex6">space</div>
                                <div class="caja_flex4_2">-</div>
                                <div class="caja_flex6">around</div>
                                <div class="caja_flex6">space</div>
                                <div class="caja_flex4_2">-</div>
                                <div class="caja_flex6">around</div>
                                <div class="caja_flex6">space</div>
                                <div class="caja_flex4_2">-</div>
                                <div class="caja_flex6">around</div>
                                <div class="caja_flex6">space</div>
                                <div class="caja_flex4_2">-</div>
                                <div class="caja_flex6">around</div>
                            
                            </div>
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; flex-wrap: wrap; align-content: stretch;">
                                <div class="caja_flex6">stretch</div>
                                <div class="caja_flex6">stretch</div>
                                <div class="caja_flex6">stretch</div>
                                <div class="caja_flex6">stretch</div>
                                <div class="caja_flex6">stretch</div>
                                <div class="caja_flex6">stretch</div>
                                <div class="caja_flex6">stretch</div>
                            </div>

                        </div><br>
                        
                    </div><br><br>



                    <!--Justify Content-->

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Justify Content</strong>
                            <p>
                                Define la alineación de los hijos en el eje principal (main axis).
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>align-content</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>flex-start | center | flex-end | space-between | space-around | space-evenly</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>normal</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece la posición de los hijos en el eje horizontal</td>
                        </tr>

                    </table>

                    <div style="width: 100% ;display: flex; flex-direction: column; align-items: center;">
                        
                        <div class="ejemplo margen_50" style="display: flex; flex-direction: row;">
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 100px; height: 100px; justify-content: flex-start;" >
                                <div class="caja_flex3">flex-start</div>
                            </div>

                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 100px; height: 100px; justify-content: center;">
                                <div class="caja_flex3">Center</div>
                            </div>

                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 100px; height: 100px; justify-content: flex-end;">
                                <div class="caja_flex3">flex-end</div>
                            </div>
                            
                        </div><br>

                        <div class="ejemplo margen_50" style="display: flex; flex-direction: row;">
                        
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; justify-content: space-between;">
                                <div class="caja_flex5">space</div>
                                <div class="caja_flex4">-</div>
                                <div class="caja_flex5">between</div>
                            </div>
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; justify-content: space-around;">
                                <div class="caja_flex5">space</div>
                                <div class="caja_flex4">-</div>
                                <div class="caja_flex5">around</div>
                            </div>
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; justify-content: space-evenly;">
                                <div class="caja_flex5">space</div>
                                <div class="caja_flex4">-</div>
                                <div class="caja_flex5">evenly</div>
                            </div>
                            
                        </div><br>

                    </div><br><br>



                    <!--Align Items-->

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Align Items</strong>
                            <p>
                                Define la alineación de los hijos en el eje transversal (cross axis), dentro de cada línea.
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>align-items</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>flex-start | center | flex-end | stretch | baseline</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>normal</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece la posición de los hijos en el eje vertical</td>
                        </tr>

                    </table>

                    <div style="width: 100% ;display: flex; flex-direction: column; align-items: center;">
                        <div class="ejemplo margen_50" style="display: flex; flex-direction: row;">
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; align-items: flex-start;">
                                <div class="caja_flex5">flex</div>
                                <div class="caja_flex4">-</div>
                                <div class="caja_flex5">start</div>
                            </div>
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; align-items: center;">
                                <div class="caja_flex5">center</div>
                            </div>
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; align-items: flex-end;">
                                <div class="caja_flex5">flex</div>
                                <div class="caja_flex4">-</div>
                                <div class="caja_flex5">end</div>
                            </div>
                            
                        </div><br>

                        <div class="ejemplo margen_50" style="display: flex; flex-direction: row;">
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; align-items: stretch;">
                                <div class="caja_flex6">stretch 1</div>
                                <div class="caja_flex4_2">-</div>
                                <div class="caja_flex6">stretch 2</div>
                            </div>
                            
                            <div style="background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; align-items: baseline;">
                                <div class="caja_flex6">baseline 1</div>
                                <div class="caja_flex4_3">-</div>
                                <div class="caja_flex6">baseline 2</div>
                            </div>
                            
                        </div><br>

                    </div>

                    <div class="nota margen_50">
                        <p>
                            En el caso de <strong>strech</strong> las cajas deben tener su ancho o altura por defecto de caso contrario no ampliará las cajas dependiendo
                            hacia dónde va el flex-direction en nuestro caso está en la direción en fila por ende el ancho no es afectado si no el alto.<br>
                            Por otra parte en la propiedad <strong>baseline</strong> alinea los textos de todas las cajas en el mismo eje.
                        </p>
                    </div><br>



                    <!--Align Self-->

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Align Self</strong>
                            <p>
                                Sobreescribe la propiedad align-items para aplicarlo solo al hijo seleccionado
                            </p>
                        </li>
                    </ul>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>align-self</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>flex-start | center | flex-end</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>normal</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Aplica solo a un elemento en especifico</td>
                        </tr>

                    </table>

                    <div style="width: 100% ;display: flex; flex-direction: column; align-items: center;">
                        
                        <div class="ejemplo margen_50" style="display: flex; flex-direction: row;">
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; align-items: flex-start;">
                                <div class="caja_flex5" style="align-self: flex-end;">flex</div>
                                <div class="caja_flex4">-</div>
                                <div class="caja_flex5">start</div>
                            </div>
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; align-items: flex-end;">
                                <div class="caja_flex5" style="align-self: flex-start">flex</div>
                                <div class="caja_flex4">-</div>
                                <div class="caja_flex5">end</div>
                            </div>
                            
                            <div style="margin-right: 10px; background-color: lightcoral ;display: flex; flex-direction: row; width: 230px; height: 100px; align-items: flex-end;">
                                <div class="caja_flex5">center</div>
                                <div class="caja_flex4" style="align-self: center">-</div>
                                <div class="caja_flex5">center</div>
                            </div>
                            
                        </div><br>

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