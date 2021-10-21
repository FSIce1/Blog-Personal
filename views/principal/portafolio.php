<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>

    <link rel="icon" type="image/png" href="../../img/iconos/icono2_negro.png">

    <!-- Estilos -->

    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/texto.css">
    -->
    
    <link rel="stylesheet" href="../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/portafolio.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/switch.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/footer.css?v=<?php echo time(); ?>">

    
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="../../css/fuentes/fuentes.css?v=<?php echo time(); ?>">


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

    $nivel = 0;

    //! HEADER
    require('../components/header.php');

    //! BARRA DE NAVEGACIÓN
    require('../components/barraNavegacion.php');

    ?>

    <main>

        <div class="container">
            <h3>Portafolio</h3>

            <div class="proyectos">

                <a href="https://fsice1.github.io/Mis-Cursos/" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Platzi-cursos.png" alt="Platzi Cursos">
                    <p>Platzi Cursos</p>
                    <div></div>
                </a>

                <a href="https://fsice1.github.io/Web-Homer/" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Web-Homer.png" alt="Web Homer">
                    <p>Web Homer</p>
                    <div></div>
                </a>

                <a href="https://fsice1.github.io/Taller-Practico-1-Css/" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Reto1-Css.png" alt="Taller Práctico Css">
                    <p>Taller Práctico Css</p>
                    <div></div>
                </a>

                <a href="https://codepen.io/LuisFelipe1/pen/QWgBMNj" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Mario-Bros.PNG" alt="Mario Bros">
                    <p>Marios Bross</p>
                    <div></div>
                </a>

                <a href="https://fsice1.github.io/Taller-Practico-Js/" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Taller-Práctico-Js.PNG" alt="Taller Práctico Js">
                    <p>Taller Práctico Js</p>
                    <div></div>
                </a>

                <a href="https://github.com/FSIce1/Venta-Bebidas-Alcoholicas" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Venta-Bebidas-Alcoholicas.png" alt="Venta de bebidas alchólicas">
                    <p>Venta Bebidas Alcohólicas</p>
                    <div></div>
                </a>

                <a href="https://github.com/FSIce1/Sistema-Incidencias" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Sistemas-Incidencias.png" alt="Sistemas de incidencias">
                    <p>Sistema De Incidencias</p>
                    <div></div>
                </a>

                <a href="https://github.com/FSIce1/Sistema-De-Actividades" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Sistema-Actividades.png" alt="Sistemas de actividades">
                    <p>Sistema De Actividades</p>
                    <div></div>
                </a>

                <a href="https://fsice1.github.io/Taller-Practico-2-Css/index.html" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Taller-Práctico-2-Css.PNG" alt="Taller Práctico 2 Css">
                    <p>Taller Práctico 2 - Css</p>
                    <div></div>
                </a>

                <a href="https://fsice1.github.io/Taller-Practico-3-Css/public/header.html" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Taller-Práctico-3-Css.PNG" alt="Taller Práctico 3 Css">
                    <p>Taller Práctico 3 - Css</p>
                    <div></div>
                </a>

                <a href="https://fsice1.github.io/Taller-Practico-4-Css/index.html" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Taller-Práctico-4-Css.PNG" alt="Taller Práctico 4 Css">
                    <p>Taller Práctico 4 - Css</p>
                    <div></div>
                </a>

                <a href="https://github.com/FSIce1/Lista-Platzi-Conf" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Lista-Platzi-Conf.PNG" alt="Lista PLatzi Conf">
                    <p>Lista Platzi Conf</p>
                    <div></div>
                </a>

                <a href="http://lista-cursos-tecnologia.herokuapp.com/" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Lista-Cursos-Aleatorios.PNG" alt="Lista Cursos Aleatorios">
                    <p>Lista Cursos Aleatorios</p>
                    <div></div>
                </a>

                <a href="https://fsice1.github.io/Taller-Practico-2-Js" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Taller-Practico-2-Js.PNG" alt="Taller Práctico 2 Js">
                    <p>Taller Práctico 2 - Js</p>
                    <div></div>
                </a>

                <a href="http://listado-fakers.herokuapp.com/" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Lista-Datos-Falsos.PNG" alt="Lista Datos Falsos">
                    <p>Listado de Datos Falsos</p>
                    <div></div>
                </a>

                <a href="https://fsice1.github.io/Personajes-Rick-And-Morty/index" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Lista-Personajes.PNG" alt="Lista Rick and Morty">
                    <p>Listado Personajes Rick and Morty</p>
                    <div></div>
                </a>

            </div>

        </div>
    
    </main>

    <?php
    //! FOOTER
    require('../components/footer.php');
    ?>

    <script src="../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>

</body>

</html>