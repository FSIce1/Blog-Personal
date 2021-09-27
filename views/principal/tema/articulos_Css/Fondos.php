<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondos</title>


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
                            <h3>Fondos</h3>
                            <span>Septiembre 13, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>

                    <p>
                        El fondo puede ser un color simple o una imagen, en el caso de querer una página de color 
                        entera se establece un fondo al elemento &#60;body&#62;.
                    </p>


                    <!--Background-color-->
                    
                    <h3>Background-color</h3>

                    <p>
                        Permite mostrar un color sólido en la caja del elemento seleccionado.
                    </p>
                    
                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>background-color</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>color | transparent | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>transparent</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el fondo para los elementos</td>
                        </tr>

                    </table><br>

                    
                    
                    <!--Background-image-->

                    <h3>Background-image</h3>

                    <p>
                        Para colocar una imagen de fondo, se usa background-image 
                        con el valor (url="link_de_la_imagen").
                    </p>
                    
                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>background-image</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>url | transparent | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>none</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece una imagen como fondo para los elementos</td>
                        </tr>

                    </table><br>

                    

                    <!--Background-repeat-->

                    <h3>Background-repeat</h3>

                    <p>
                        En caso de repetirse la imagen de fondo se repita horizotal y verticalmente,
                        el background-repeat permite controlar la forma de repetición de imágenes.    
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>background-repeat</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>repeat | repeat-x | repeat-y | no-repeat | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>repeat</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Controla la forma en que se repiten las imágenes de fondo</td>
                        </tr>

                    </table><br>


                    <!--Background-position-->

                    <h3>Background-position</h3>

                    <p>
                        Permite controlar la posición de la imagen dentro del fondo del elemento
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>background-position</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>( ( porcentaje | unidad de medida | left | center | right ) ( porcentaje | unidad de medida | top | center | bottom ) ) | ( ( left | center | right ) | ( top | center | bottom ) ) | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>0% 0%</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Controla la posición en la que se muestra la imagen de fondo del elemento</td>
                        </tr>

                    </table><br>


                    <!--Background-attachment-->
                    
                    <h3>Background-attachment</h3>

                    <p>
                        Permite controlar la posición de la imagen dentro del fondo del elemento
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>background-position</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>scroll | fixed | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>scroll</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>La imagen permanece fija cuando se hace scroll, para ello se utilizará fixed</td>
                        </tr>

                    </table><br>

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