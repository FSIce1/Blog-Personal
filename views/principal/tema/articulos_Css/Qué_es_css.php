<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué es Css?</title>


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
                            <h3>¿Qué es Css?</h3>
                            <span>Septiembre 9, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>
                    
                    <p>
                        Css significa "Hojas de Estilo en Cascada" en sus siglas en inglés "Cascade Style Sheets". </br> 
                        Css es utilizado para estilizar las páginas web creadas en código Html dándole así color, forma, 
                        posición, fuente, animaciones entre características visuales.
                    </p>

                    <div class="container__articulo-imagen">
                        <img src="../../../../img/tema/css/qué_es_css/Html + Css.png" alt="">
                    </div>

                    <div class="nota">
                        <p><strong>Nota: </strong>
                            Como se puede apreciar en la imagen se unifica Html como Css para tener como resultado nuestras
                            modificaciones visuales 
                        </p>
                    </div>

                    <p>Se le denomina "estilos en cascada" porque se aplican de arriba hacia abajo, en el siguiente cuadro podemos ver un poco de código Css: </p>

                    <pre class="nota">
<code><span class="selector">.container</span> {
    <span class="propiedad">position: </span><span class="valor">relative</span>;

    <span class="propiedad">display: </span><span class="valor">flex</span>;
    <span class="propiedad">flex-direction: </span><span class="valor">column</span>;

    <span class="propiedad">margin: </span><span class="valor">30</span><span class="px">px</span> <span class="valor">100</span><span class="px">px</span> <span class="valor">30</span><span class="px">px</span> <span class="valor">100</span><span class="px">px</span>;

    <span class="propiedad">color: var</span>(--negro);
}

<span class="selector">.tema</span> {
    <span class="propiedad">display: </span><span class="valor">flex</span>;

    <span class="propiedad">flex-direction: </span><span class="valor">row</span>;
    <span class="propiedad">align-items: </span><span class="valor">center</span>;

    <span class="propiedad">margin-bottom: </span><span class="valor">30</span><span class="px">px</span>;
}</code></pre>

                    <h3>¿Cómo añadir Css a nuestro documento Html?</h3>

                    <p>
                        Para poder vincular nuestro Css a un documento Html, primero debemos tener
                        debemos añadir la siguiente línea dentro de <code><head></code> de documento
                        HTML: 
                    </p>

                    <pre class="nota">
<code>&#60;<span class="rosado">link</span> <span class="px">rel</span><span class="turqueza">=</span><span class="enlace">"stylesheet"</span> <span class="px">href</span><span class="turqueza">=</span><span class="enlace">"styles.css"</span>&#62;</code></pre>

                    <div class="nota">
                        Este link le dice al navegador que tenemos una hoja de estilo, con el atributo href 
                        podemos indicar la ubicación de nuestro archivo y el atributo rel indica a realción del 
                        documento enlazado con el actual.
                    </div>

                    <h3>¿Cuál es la estructura de Css?</h3>
                    
                    <div class="container__articulo-imagen">
                        <img class="imagen_tipo_1" src="../../../../img/tema/css/qué_es_css/Css estructura.jpg" alt="">
                    </div>

                    <p>
                        En la imagen vemos la estructura Css. <br>
                    </p>

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Selector:</strong>
                            <p>
                                Es un elemento que es seleccionado para poder aplicarle un estilo en específico, 
                                puede ser un h1, h2 o como en la imagen un p entre otros 
                            </p>
                        </li>

                        <li>
                            <strong>Propiedad:</strong>
                            <p>
                                Son las características que nos ofrece Css
                            </p>
                        </li>

                        <li>
                            <strong>Valor de la propiedad:</strong>
                            <p>
                                Es lo que va ligado a la propiedad espcificándole un valor para así afectar 
                                a su comportamiento 
                            </p>
                        </li>

                        <li>
                            <strong>Declaración:</strong>
                            <p>
                                Estpa conformado por una propiedad y un valor, a esto se le denomina declaración; 
                                en la imagen de ejemplo lo podemos apreciar.
                            </p>
                        </li>

                    </ul>

                    <div class="nota" style="margin-left: 50px;">
                        En los archivos Css, se pueden hacer comentarios con los caracteres <code style="color: gray">/* */</code> con esto
                        el navegador ignora todo lo que esté allí, mayormente usado para explicar pequeños fragmentos de código
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