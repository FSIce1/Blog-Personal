<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especificidad</title>

    <link rel="icon" type="image/png" href="../../../../img/iconos/icono2_negro.png">

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



                    <!--TEMA-->
                    <div class="tema">

                        <img src="../../../../img/prueba/css.png" alt="Css">

                        <div class="tema__informacion">
                            <h3>Especificidad</h3>
                            <span>Septiembre 13, 2021. ☕ 5 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Es la manera en que los navegadores deciden que estilos son más relevantes para un 
                        elemento, está basado por una serie de reglas. <br>
                        La especificidad se aplica cuando el elemento tenga múltiples declaraciones.   
                    </p>



                    <!--TIPOS DE SELECTORES-->
                    <h3>Tipos de selectores</h3>

                    <ul class="margen_50">
                        
                        <li>
                            <strong>Estilos en línea (1000):</strong>
                            <p>
                            un estilo en línea se adjunta directamente al elemento que se va a diseñar. Ejemplo: <code>&#60;h1 style = "color: #ffffff;"&#62;</code>.
                            </p>
                        </li>

                        <li>
                            <strong>Selectores de id (100):</strong>
                            <p>
                                Una ID es un identificador único para los elementos de la página (#ejemplo)
                            </p>
                        </li>
                        
                        <li>
                            <strong>Selectores de clase, atributos y pseudoclases (01):</strong>
                            <p>
                                Esta categoría incluye .classes, [atributos] y pseudoclases como: hover,: focus, etc.
                            </p>
                        </li>
                        
                        <li>
                            <strong>Elementos y pseudoelementos (1):</strong>
                            <p>
                                Esta categoría incluye nombres de elementos y pseudoelementos, como h1, div,: before y: after.                            </p>
                            </p>
                        </li>
                        
                    </ul>

                    <p>
                        El selector universal (*), los combinadores  (+, >, ~, ' ', || (en-US)) 
                        y la pseudo-clase de negación (:not()) no tienen efecto sobre la especificidad
                    </p>

                    <div class="container__articulo-imagen">
                        <img src="../../../../img/tema/css/especificidad/especificidad.png" alt="">
                    </div>

                    <div class="nota">
                        <p>
                            <strong>!important: </strong>Esta desclaración sobreescribe cualquier otra
                            por lo tanto rompe la cascada natural de las hojas de estilo<br><br>
                            -Busca siempre una manera de emplear la especificidad antes de considerar el uso de !important.<br>
                            -Usa !important solo en declaraciones específicas de CSS que sobrescriban CSS externo (de librerías externas como Bootstrap o normalize.css).<br>
                            -Nunca uses !important cuando estés intentando escribir un plugin/mashup.<br>
                            -Nunca uses !important en todo el código CSS.<br><br>
                            Fuente: <a class="caso_especial" style="color: black" target="__blanck" href="https://developer.mozilla.org/es/docs/Web/CSS/Specificity">https://developer.mozilla.org/es/docs/Web/CSS/Specificity</a>
                        </p>
                    </div>

                </div>

                <?php

                    $nivel = 2;

                    //! ARTÍCULOS POR TEMAS
                    require('../../../components/relacionados.php');

                ?>

            </div>

        </main>

        <?php

            //! ÚLTIMOS VIDEOS RELACIONADOS
            require('../../../components/videos.php');

        ?>

    </div>

    <?php

        //! FOOTER
        require('../../../components/footer.php');

    ?>


    <!--SCRIPTS-->
    <script src="../../../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>

    <script>
        const $miCheckbox = document.querySelector("#punto__switch");
        $miCheckbox.checked = true;
    </script>

</body>

</html>