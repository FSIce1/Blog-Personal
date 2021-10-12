<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces Extras</title>

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
                            <h3>Enlaces Extras</h3>
                            <span>Septiembre 23, 2021. ☕ 15 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Algunos enlaces que nos pueden ayudar en la creación de nuestros proyectos
                    </p>



                    <!-- ÍCONOS -->
                    <h3>Íconos</h3>

                    <ul class="margen_50">
                        <li>
                            <strong>Fontawesome</strong>
                            <p>
                                Diversos ejemplos de íconos
                            </p>
                            <a class="enlace_ul" href="https://fontawesome.com/v5/cheatsheet" target="_blank">Ver Fontawesome</a>
                        </li>

                        <li>
                            <strong>React icons</strong>
                            <p>
                                Íconos para react
                            </p>
                            <a class="enlace_ul" href="https://react-icons.github.io/react-icons" target="_blank">Ver React-icons</a>
                        </li>
                    </ul>



                    <!-- COLORES -->
                    <h3>Colores</h3>

                    <ul class="margen_50">
                        <li>
                            <strong>Uigradients</strong>
                            <p>
                                Nos permite crear fondos con degradados
                            </p>
                            <a class="enlace_ul" href="https://uigradients.com/" target="_blank">Ver uigradients</a>
                        </li>

                        <li>
                            <strong>Mycolor</strong>
                            <p>
                                Generamos gradientes
                            </p>
                            <a class="enlace_ul" href="https://mycolor.space/?hex=%23845EC2&sub=1" target="_blank">Ver Mycolor</a>
                        </li>

                        <li>
                            <strong>Cssgradient</strong>
                            <p>
                                Genera gradientes
                            </p>
                            <a class="enlace_ul" href="https://cssgradient.io/" target="_blank">Ver Cssgradient</a>
                        </li>

                        <li>
                            <strong>Colors.muz</strong>
                            <p>
                                Paleta de colores
                            </p>
                            <a class="enlace_ul" href="https://colors.muz.li/" target="_blank">Ver Colors.muz</a>
                        </li>

                        <li>
                            <strong>Coolors.co</strong>
                            <p>
                                Paletas de colores
                            </p>
                            <a class="enlace_ul" href="https://coolors.co" target="_blank">Ver Coolors.co</a>
                        </li>

                        <li>
                            <strong>Color.adobe</strong>
                            <p>
                                Combinaciones de colores
                            </p>
                            <a class="enlace_ul" href="https://color.adobe.com/es/explore" target="_blank">Ver Color.adobe</a>
                        </li>

                        <li>
                            <strong>Colormind</strong>
                            <p>
                                Templates de colores
                            </p>
                            <a class="enlace_ul" href="http://colormind.io/" target="_blank">Ver Colormind</a>
                        </li>

                        <li>
                            <strong>Paletton</strong>
                            <p>
                                Combinadores para colores
                            </p>
                            <a class="enlace_ul" href=https://paletton.com/" target="_blank">Ver Paletton</a>
                        </li>

                        <li>
                            <strong>Material.io</strong>
                            <p>
                                Ver combinaciones de colores
                            </p>
                            <a class="enlace_ul" href="https://material.io/resources/color/#!/?view.left=0&view.right=0" target="_blank">Ver Material.io</a>
                        </li>

                    </ul> 



                    <!-- IMÁGENES -->
                    <h3>Imágenes</h3>

                    <ul class="margen_50">
                        <li>
                            <strong>Bennettfeely</strong>
                            <p>
                                Permite crear formas complejas en CSS recortando un elemento a una forma básica (círculo, elipse, polígono, etc).
                            </p>
                            <a class="enlace_ul" href="https://bennettfeely.com/clippy/" target="_blank">Ver Bennettfeely</a>
                        </li>

                        <li>
                            <strong>Storyset</strong>
                            <p>
                                Imágenes que podemos utilizar para nuestros proyectos
                            </p>
                            <a class="enlace_ul" href="https://storyset.com/" target="_blank">Ver Storyset</a>
                        </li>

                    </ul>



                    <!-- FRAMEWORKS -->
                    <h3>Frameworks</h3>

                    <ul class="margen_50">
                        <li>
                            <strong>Bulma.io</strong>
                            <p>
                            Bulma es un marco de trabajo de código abierto gratuito que proporciona componentes frontend listos para usar que puede combinar fácilmente para crear interfaces web receptivas.
                            </p>
                            <a class="enlace_ul" href="https://bulma.io/" target="_blank">Ver Bulma.io</a>
                        </li>

                        <li>
                            <strong>Bootstrap</strong>
                            <p>
                            Bootstrap es una biblioteca multiplataforma o conjunto de herramientas de código abierto para diseño de sitios y aplicaciones web.
                            </p>
                            <a class="enlace_ul" href="https://getbootstrap.com/" target="_blank">Ver Bootstrap</a>
                        </li>
                        
                        <li>
                            <strong>Tailwind CSS</strong>
                            <p>
                            Tailwind CSS es un framework CSS de bajo nivel altamente personalizable que le permite crear diseños personalizados eliminando los estilos de componentes pre-definidos. 
                            </p>
                            <a class="enlace_ul" href="https://tailwindcss.com/" target="_blank">Ver Tailwind Css</a>
                            <a class="enlace_ul" href="https://nerdcave.com/tailwind-cheat-sheet" target="_blank">Ver Documentación rápida</a>
                        </li>
                    </ul>



                    <!-- JUEGOS -->
                    <h3>Juegos</h3>

                    <ul class="margen_50">
                        <li>
                            <strong>Css Garden</strong>
                            <p>
                                Pequeño juego para aprender Css Grid
                            </p>
                            <a class="enlace_ul" href="https://cssgridgarden.com/#es" target="_blank">Ver Grid Garden</a>
                        </li>
                        
                        <li>
                            <strong>FlexBox Froggy</strong>
                            <p>
                                Pequeño juego para aprender Flexbox
                            </p>
                            <a class="enlace_ul" href="https://flexboxfroggy.com/#es" target="_blank">Ver Flexbox Froggy</a>
                        </li>
                    </ul>



                    <!--APIS-->
                    <h3>Apis</h3>

                    <ul class="margen_50">
                        <li>
                            <strong>Devresourc</strong>
                            <p>
                                Diversas apis para utilizar en nuestros proyectos
                            </p>
                            <a class="enlace_ul" href="https://devresourc.es/tools-and-utilities/public-apis" target="_blank">Ver Frontend Mentor</a>
                        </li>
                    </ul>



                    <!--DESAFÍOS-->
                    <h3>Desafíos</h3>

                    <ul class="margen_50">
                        <li>
                            <strong>Frontend Mentor</strong>
                            <p>
                                Web que nos da retos de frontend 
                            </p>
                            <a class="enlace_ul" href="https://www.frontendmentor.io/challenges" target="_blank">Ver Frontend Mentor</a>
                        </li>
                        
                        <li>
                            <strong>SingleDiv</strong>
                            <p>
                                Retos de imágenes hechas con solo Css 
                            </p>
                            <a class="enlace_ul" href="https://a.singlediv.com/" target="_blank">Ver SingleDiv</a>
                        </li>
                    </ul>



                    <!--ÚTILES-->
                    <h3>Útiles</h3>

                    <ul class="margen_50">
                        <li>
                            <strong>Jonassebastianohlsson</strong>
                            <p>
                                Nos ayuda a saber nuestra especificidad en nuestro estilo css. 
                            </p>
                            <a class="enlace_ul" href="https://jonassebastianohlsson.com/specificity-graph/" target="_blank">Ver Jonassebastianohlsson</a>
                        </li>
                        
                        <li>
                            <strong>Ianlunn</strong>
                            <p>
                                Algunos efectos hover que podemos utilizar 
                            </p>
                            <a class="enlace_ul" href="http://ianlunn.github.io/Hover/" target="_blank">Ver Ianlunn</a>
                        </li>
                        
                        <li>
                            <strong>Elrumordelaluz</strong>
                            <p>
                                Efectos hover que podemos utilizar 
                            </p>
                            <a class="enlace_ul" href="https://elrumordelaluz.github.io/csshake/" target="_blank">Ver Elrumordelaluz</a>
                        </li>
                        
                        <li>
                            <strong>Anijs</strong>
                            <p>
                                Animaciones en Css3 
                            </p>
                            <a class="enlace_ul" href="https://anijs.github.io/" target="_blank">Ver Anijs</a>
                        </li>
                        
                        <li>
                            <strong>Csswand</strong>
                            <p>
                                Efectos para botones
                            </p>
                            <a class="enlace_ul" href="https://www.csswand.dev/?ref=producthunt" target="_blank">Ver Csswand</a>
                        </li>
                        
                        <li>
                            <strong>Anicollection</strong>
                            <p>
                                Variedad de efetos hover 
                            </p>
                            <a class="enlace_ul" href="https://anicollection.github.io/#/" target="_blank">Ver Anicollection</a>
                        </li>
                        
                        <li>
                            <strong>Tobiasahlin</strong>
                            <p>
                                Ejemplos de loading
                            </p>
                            <a class="enlace_ul" href="https://tobiasahlin.com/spinkit/" target="_blank">Ver Tobiasahlin</a>
                        </li>
                        
                        <li>
                            <strong>Ui-avatars</strong>
                            <p>
                                Generador de imágenes por nombres
                            </p>
                            <a class="enlace_ul" href="https://ui-avatars.com/" target="_blank">Ver Ui-avatars</a>
                        </li>
                        
                        <li>
                            <strong>Loading</strong>
                            <p>
                                Ejemplos de loading
                            </p>
                            <a class="enlace_ul" href="https://loading.io/" target="_blank">Ver Ui-Loading</a>
                        </li>
                        
                        <li>
                            <strong>Cssreference</strong>
                            <p>
                                Propiedades de Css
                            </p>
                            <a class="enlace_ul" href="https://cssreference.io/" target="_blank">Ver Cssreference</a>
                        </li>
                        
                        <li>
                            <strong>Css3generator</strong>
                            <p>
                                Generar algunos elementos de usando Css
                            </p>
                            <a class="enlace_ul" href="https://css3generator.com/" target="_blank">Ver Css3generator</a>
                        </li>
                    </ul>

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