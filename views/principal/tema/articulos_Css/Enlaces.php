<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces</title>


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
                            <h3>Enlaces</h3>
                            <span>Septiembre 15, 2021. ☕ 15 minutos de lectura</span>
                        </div>
                        
                    </div>
                
                    
                    <!-- Tamaño, color y decoración -->

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Tamaño, color y decoración</strong>
                            <p>
                                Para aplicar estos estilos se utilizan las propiedades: text-decoration,
                                font-weight
                            </p>
                        </li>
                    </ul>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_3" width="300px" src="../../../../img/tema/css/enlaces/a.gif" alt="">
                            <p class="figure">Ejemplos de enlaces</p>
                        </picture>
                    </div>


                    <!-- Pseudo-clases -->

                    <ul style="margin-left: 50px;">
                        <li>
                            <strong>Pseudo-clases</strong>
                            <p>
                                Permite aplicar diferentes estilos a un enlace en función a su estado. 
                                Como con los id o class no se puede aplicar diferentes estilos a un mismo
                                elemento, css introduce un concepto llamado pseudoclases.
                            </p>
                        </li>
                    </ul>

                    <ul style="margin-left: 80px;" >
                        <li>
                            <strong>:link</strong>
                            <p>
                                Aplica estilo a los enlaces, que hacen referencia a una página.
                            </p>
                        </li>

                        <li>
                            <strong>:visited</strong>
                            <p>
                                Aplica el estilo cuando el enlace ya fue visitado anteriormente.
                            </p>
                        </li>

                        <li>
                            <strong>:hover</strong>
                            <p>
                                Aplica el estilo cuando el usuario pasa el puntero sobre el enlace.
                            </p>
                        </li>

                        <li>
                            <strong>:active</strong>
                            <p>
                                Aplica el estilo cuando esta presionando el enlace y desaparece cuando deja de hacerlo.
                            </p>
                        </li>

                    </ul>

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