<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otros</title>


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
                            <h3>Otros</h3>
                            <span>Septiembre 16, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>
                
                    
                    <!-- Personalizar el cursor -->

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Personalizar el cursor</strong>
                            <p>
                                Nos permite modificar el puntero del ratón, mediante la propiedad cursor
                            </p>
                        </li>
                    </ul>

                    <table style="margin-left: 50px;" class="tabla">
                    
                        <tr>
                            <th>Propiedad</th>
                            <th>cursor</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>( (url ,)* ( auto | crosshair | default | pointer | move | e-resize | ne-resize | nw-resize | n-resize | se-resize | sw-resize | s-resize | w-resize | text | wait | help | progress ) ) | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>auto</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Permite personalizar el puntero del ratón</td>
                        </tr>

                    </table><br>

                    <div class="container__articulo-imagen">
                        <div class="ejemplo" style="justify-content: center; flex-wrap:wrap ;margin-left: 50px; max-width: 300px; display: flex;">
                            
                            <div style="cursor: pointer; 
                            background-color: lightcoral; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: pointer;
                            </div>

                            <div style="cursor: move; 
                            background-color: gray; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: move;
                            </div>

                            <div style="cursor: text; 
                            background-color: lightgreen; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: text;
                            </div>
                            
                            <div style="cursor: wait; 
                            background-color: lightseagreen; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: wait;
                            </div>

                            <div style="cursor: help; 
                            background-color: lightgray; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: help;
                            </div>
                            
                            <div style="cursor: n-resize; 
                            background-color: lightgray; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: n-resize;
                            </div>
                            
                            <div style="cursor: ne-resize; 
                            background-color: red; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: ne-resize;
                            </div>
                            
                            <div style="cursor: e-resize; 
                            background-color: green; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: e-resize;
                            </div>
                            
                            <div style="cursor: se-resize; 
                            background-color: blue; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: se-resize;
                            </div>

                            <div style="cursor: s-resize; 
                            background-color: pink; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: s-resize;
                            </div>

                            <div style="cursor: sw-resize; 
                            background-color: saddlebrown; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: sw-resize;
                            </div>

                            <div style="cursor: w-resize; 
                            background-color: sandybrown; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: w-resize;
                            </div>
                            
                            <div style="cursor: progress; 
                            background-color: palevioletred; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: progress;
                            </div>
                            
                            <div style="cursor: not-allowed; 
                            background-color: khaki; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: not-allowed;
                            </div>
                            
                            <div style="cursor: col-resize; 
                            background-color: seagreen; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: col-resize;
                            </div>
                            
                            <div style="cursor: row-resize; 
                            background-color: teal; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: row-resize;
                            </div>
                            
                            <div style="cursor:  vertical-text; 
                            background-color: lawngreen; width:40px; height: 40px; font-size: 10px; color: black; text-align: center; margin-right: 10px; margin-top: 10px;">
                                cursor: vertical-text;
                            </div>

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