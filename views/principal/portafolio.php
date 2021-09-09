<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfalio</title>


    <link rel="icon" type="image/png" href="../../img/logo_v1.png">

    <!-- Estilos -->

    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/texto.css">
    -->
    
    <link rel="stylesheet" href="../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/portafolio.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/switch.css?v=<?php echo time(); ?>">

    
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600&display=swap" rel="stylesheet">



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
    //! HEADER
    require('../components/header.html');

    //! BARRA DE NAVEGACIÓN
    require('../components/barraNavegacion.html');

    ?>


    <main>
        
        <div class="container">
            <h3>Portafolio</h3>

            <div class="proyectos">
                
                <a href="https://fsice1.github.io/MisCursos/" target="_blank" class="proyecto">

                    <div class="capa"></div>
                    <img src="../../img/repositorios/Platzi-cursos.png" alt="">
                    <p>Platzi Cursos</p>
                    <div></div>
                </a>

                <a href="https://fsice1.github.io/WebHomer/" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Web-Homer.png" alt="">
                    <p>Web Homer</p>
                    <div></div>
                </a>

                <a href="https://fsice1.github.io/Reto1Css/" target="_blank" class="proyecto">
                    <img src="../../img/repositorios/Reto1-Css.png" alt="">
                    <p>Reto Css</p>
                    <div></div>
                </a>

            </div>

        </div>
    
    </main>

    <?php
    //! FOOTER
    require('../components/footer.html');
    ?>

    <script src="../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>
    
    <script>
        const $miCheckbox = document.querySelector("#punto__switch");
        $miCheckbox.checked = true;
    </script>

</body>

</html>