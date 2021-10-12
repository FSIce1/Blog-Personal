<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>

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
                            <h3>Formularios</h3>
                            <span>Septiembre 16, 2021. ☕ 5 minutos de lectura</span>
                        </div>

                    </div>



                    <!--ESTILOS BÁSICOS-->
                    <h3>Estilos Básicos</h3>


                    <!-- Input: type:button -->
                    <ul class="margen_50">
                        <li>
                            <strong>Input- type:button</strong>
                            <p>
                                Veremos un ejemplo de un input por defecto con el tipo botón y el siguiente 
                                aplicando los estilos css.
                            </p>
                        </li>
                    </ul>

                    <input style="margin-left: 50px;" type="button" value="Botón sin estilo">
                    <br>
                    <input style="cursor: pointer;margin-left: 50px; margin-top: 20px; padding: 10px; background-color: #4CAF50; color: white; border: none" type="button" value="Botón con estilo">


                    <!-- Input: type:button -->
                    <ul style="margin-left: 50px; margin-top: 50px">
                        <li>
                            <strong>Input- type:text</strong>
                            <p>
                                Veremos un ejemplo de un input por defecto con el tipo text y el siguiente 
                                aplicando los estilos css.
                            </p>
                        </li>
                    </ul>

                    <input style="margin-left: 50px;" type="text" value="Campo de texto sin estilo">
                    <br>
                    <input style="margin-left: 50px; margin-top: 20px; padding: 10px; color: black;" type="text" placeholder="Botón con estilo">


                    <!-- Labels-->
                    <ul style="margin-left: 50px; margin-top: 50px">
                        <li>
                            <strong>Labels</strong>
                            <p>
                                Los labels son elementos en líneas que generalmente van acompañados de un input
                                sirven como texto de referencia.
                            </p>
                        </li>
                    </ul>

                    <label style="margin-left: 50px;">Nombre: </label>
                    <input type="text" value="Campo de texto sin estilo">
                    <br>

                    <label style="margin-left: 50px; margin-top: 20px; display: block" for="aa">Nombre: </label>
                    <input id="aa" style="margin-left: 50px; padding: 10px; color: black;" type="text" placeholder="Botón con estilo">

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