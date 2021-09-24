<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bordes</title>


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
                            <h3>Bordes</h3>
                            <span>Septiembre 13, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>

                    <p>
                        Permite modificar el aspecto de los 4 bordes de la caja de un elemento, 
                        entre ellos la anchura, grosor, color y el estilo.
                    </p>
                    
                    <h3>Ancho</h3>

                    <p>
                        Se definen 4 propiedades para controlar los márgentes horizontales y Verticales
                    </p>
                    
                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>border-top-width, border-right-width, border-bottom-width, border-left-width</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>( unidad de medida | thin(borde delgado) | medium(mediano) | thick(borde ancho) ) | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>Medium</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el ancho de cada borde</td>
                        </tr>

                    </table>

                    <pre class="nota">
<code><span class="px">#caja</span> {
    <span class="propiedad">border-top-width: </span><span class="valor">20</span> <span class="px">px</span>;
    <span class="propiedad">border-right-width: </span><span class="valor">1</span> <span class="px">em</span>;
    <span class="propiedad">border-bottom-width: </span><span class="valor">thick</span>;
    <span class="propiedad">border-left-width: </span><span class="valor">thin</span>;
}</code></pre>

                    <div id="ejemplo_ancho">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus blanditiis officiis, repellendus minus sequi sint enim? Ea deleniti, similique consequatur facilis dicta sint qui laudantium adipisci praesentium cupiditate fuga unde.
                    </div>
                    


                    <h3>Estilo</h3>

                    <p>
                        Se establece el estilo de cada uno de los bordes
                    </p>
                    
                    <table class="tabla">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>border-top-style, border-right-style, border-bottom-style, border-left-style</th>
                        </tr>

                        <tr>
                            <td>Valores</td>
                            <td>none | hidden | dotted | dashed | solid | double | groove | ridge | inset | outset | inherit</td>
                        </tr>

                        <tr>
                            <td>Valor inicial</td>
                            <td>none</td>
                        </tr>
                        
                        <tr>
                            <td>Descripción</td>
                            <td>Establece el estilo en cada borde</td>
                        </tr>

                    </table>

                    <div class="caja" style="border: none;">
                        None
                    </div>

                    <div class="caja" style="border: hidden;">
                        Hidden
                    </div>

                    <div class="caja" style="border: dotted;">
                        Dotted
                    </div>
                    
                    <div class="caja" style="border: dashed;">
                        Dashed
                    </div>
                    
                    <div class="caja" style="border: solid;">
                        Solid
                    </div>
                    
                    <div class="caja" style="border: double;">
                        Double
                    </div>
                    
                    <div class="caja" style="border: groove;">
                        Groove
                    </div>
                    
                    <div class="caja" style="border: ridge;">
                        Ridge
                    </div>
                    
                    <div class="caja" style="border: inset;">
                        Inset
                    </div>
                    
                    <div class="caja" style="border: outset;">
                        Outset
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