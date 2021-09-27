<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros</title>


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
                            <h3>Filtros</h3>
                            <span>Septiembre 24, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>
                
                    <p>
                        Css nos permite efectos a nuestras imágenes entre ellos variaciones brillo, contraste, etc.
                        Estos efectos se aplican con la propiedad <strong>filter</strong> 
                    </p>
                    

                    <!-- Funciones de filtros -->
                    <h3>Funciones de filtros</h3>

                    <table style="margin-left: 50px;" class="tabla">
                        
                        <tr>
                            <th>Función</th>
                            <th>Definición</th>
                            <th>Valor</th>
                        </tr>

                        <tr>
                            <td>grayscale</td>
                            <td>Escala de blanco y negro</td>
                            <td>
                                <span class="etiqueta porcentaje">
                                    Porcentaje
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>blur</td>
                            <td>Grado de difuminado</td>
                            <td>
                                <span class="etiqueta size">
                                    Size
                                </span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>sepia</td>
                            <td>Grado de color sepia</td>
                            <td>
                                <span class="etiqueta porcentaje">
                                    Porcentaje
                                </span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>saturate</td>
                            <td>Grado de saturación</td>
                            <td>
                                <span class="etiqueta porcentaje">
                                    Porcentaje
                                </span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>opacity</td>
                            <td>Grado de transparencia</td>
                            <td>
                                <span class="etiqueta porcentaje">
                                    Porcentaje
                                </span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>brightness</td>
                            <td>Brillo</td>
                            <td>
                                <span class="etiqueta porcentaje">
                                    Porcentaje
                                </span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>contrast</td>
                            <td>Contraste</td>
                            <td>
                                <span class="etiqueta porcentaje">
                                    Porcentaje
                                </span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>hue-rotate</td>
                            <td>Rotación de color (matiz)</td>
                            <td>
                                <span class="etiqueta direccion">
                                    Dirección
                                </span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>invert</td>
                            <td>Invertir</td>
                            <td>
                                <span class="etiqueta porcentaje">
                                    Porcentaje
                                </span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>drop-shadow</td>
                            <td>Sombra idéntica</td>
                            <td><span class="etiqueta posx">PosX</span> 
                            | 
                            <span class="etiqueta posy">PosY</span>
                            | 
                            <span class="etiqueta size">Size</span> 
                            | 
                            <span class="etiqueta color">Color</span></td>
                        </tr>
                        
                    </table><br>

                    <div class="ejemplo_filtros">
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">Imagen normal</span>
                            </picture>
                        </div>

                        <!--FILTER-->
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: grayscale(50%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: grayscale(50%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: grayscale(100%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: grayscale(100%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: blur(0)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: blur(0)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: blur(5px)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: blur(5px)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: blur(10px)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: blur(10px)</span>
                            </picture>
                        </div>
                        
                        <!--SEPIA-->
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: sepia(50%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: sepia(50%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: sepia(100%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: sepia(100%)</span>
                            </picture>
                        </div>

                        <!--SATURATE-->
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: saturate(0%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: saturate(0%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: saturate(50%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: saturate(50%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: saturate(100%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: saturate(100%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: saturate(200%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: saturate(200%)</span>
                            </picture>
                        </div>

                        <!--OPACITY-->
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: opacity(0%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: opacity(0%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: opacity(50%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: opacity(50%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: opacity(100%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: opacity(100%)</span>
                            </picture>
                        </div>

                        <!--BRIGHTNESS-->
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: brightness(0%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: brightness(0%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: brightness(50%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: brightness(50%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: brightness(100%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: brightness(100%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: brightness(200%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: brightness(200%)</span>
                            </picture>
                        </div>

                        <!--CONSTRAST-->
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: contrast(0%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: contrast(0%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: contrast(50%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: contrast(50%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: contrast(100%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: contrast(100%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: contrast(200%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: contrast(200%)</span>
                            </picture>
                        </div>

                        <!--HUE-ROTATE-->
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: hue-rotate(0)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: hue-rotate(0)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: hue-rotate(90deg)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: hue-rotate(90deg)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: hue-rotate(180deg)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: hue-rotate(180deg)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: hue-rotate(270deg)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: hue-rotate(170deg)</span>
                            </picture>
                        </div>

                        <!--INVERT-->
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: invert(0%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: invert(0%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: invert(50%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: invert(50%)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: invert(100%)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: invert(100%)</span>
                            </picture>
                        </div>

                        <!--DROP-SHADOW-->
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: drop-shadow(2px 2px 5px gold)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: drop-shadow(2px 2px 5px gold)</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="filter: drop-shadow(5px 5px 10px green)" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">filter: drop-shadow(2px 2px 5px green)</span>
                            </picture>
                        </div>

                    </div> 


                    <h3>Modos de fusión</h3>
                    <p>
                        La fusión de dos elementos sumando la información de color de los píxeles de cada uno de ellos.
                    </p>

                    <table style="margin-left: 50px;" class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>Valores</th>
                        </tr>

                        <tr>
                            <td>mix-blend-mode</td>
                            <td>

                                <span class="etiqueta posx">multiply</span> 
                                
                                <span class="etiqueta posy">screen</span>
                                
                                <span class="etiqueta size">overlay</span> 
                                
                                <span class="etiqueta color">darken</span>

                                <span class="etiqueta posx">lighten</span> 
                                
                                <span class="etiqueta posy">color-dodge</span>
                                
                                <span class="etiqueta size">color-burn</span> 
                                
                                <span class="etiqueta color">hard-light</span>
                                
                                <span class="etiqueta posx">soft-light</span> 
                                
                                <span class="etiqueta posy">difference</span>
                                
                                <span class="etiqueta size">exclusion</span> 

                                <span class="etiqueta color">hue</span>
                                
                                <span class="etiqueta posx">saturation</span> 
                                
                                <span class="etiqueta posy">color</span>
                                
                                <span class="etiqueta size">luminosity</span> 
                                
                            </td>
                        </tr>
                        
                    </table><br>
                    
                    <table style="margin-left: 50px;" class="tabla">
                        
                        <tr>
                            <th>Valor</th>
                            <th>Significado</th>
                        </tr>

                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta posx">multiply</span> 
                            </td>
                            <td>Multiplicar</td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta posy">screen</span>
                            </td>
                            <td>Trama</td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta size">overlay</span>
                            </td>
                            <td>Superponer</td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta color">darken</span>
                            </td>
                            <td>Oscurecer</td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta posx">lighten</span>
                            </td> 
                            <td>Aclarar</td>
                        </tr>
                        <tr>    
                            <td class="celda_centrada">
                                <span class="etiqueta posy">color-dodge</span>
                            </td>
                            <td>Sobreexponer color</td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta size">color-burn</span>
                            </td>
                            <td>Subexponer color</td>
                        </tr> 
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta color">hard-light</span>
                            </td>
                            <td>Luz fuerte</td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta posx">soft-light</span>
                            </td> 
                            <td>Lus Suave</td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta posy">difference</span>
                            </td>
                            <td>Diferencia</td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta size">exclusion</span>
                            </td>
                            <td>Exclusión</td>
                        </tr> 
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta color">hue</span>
                            </td>
                            <td>Tono</td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta posx">saturation</span>
                            </td> 
                            <td>Saturación</td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta posy">color</span>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="celda_centrada">
                                <span class="etiqueta size">luminosity</span>
                            </td> 
                            <td>Luminosidad</td>
                        </tr>
                        
                    </table><br>

                    <div class="ejemplo_filtros">

                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">Imagen normal</span>
                            </picture>
                        </div>

                        <!--mix-blend-mode-->
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: multiply" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: multiply</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: screen" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: screen</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: overlay" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: overlay</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: darken" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: darken</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: lighten" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: lighten</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: color-dodge" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: color-dodge</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: color-burn" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: color-burn</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: hard-light" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: hard-light</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: soft-light" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: soft-light</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: difference" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: difference</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: exclusion" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: exclusion</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: hue" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: hue</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: saturation" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: saturation</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: luminosity" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: luminosity</span>
                            </picture>
                        </div>
                        <div class="caja_filtro centra_imagen">
                            <picture class="centra_imagen">
                                <img style="mix-blend-mode: color" src="../../../../img/tema/css/flitros/imagen1.png">
                                <span class="te">mix-blend-mode: color</span>
                            </picture>
                        </div>
                        
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