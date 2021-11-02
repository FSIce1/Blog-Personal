<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colores</title>

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
    <link rel="stylesheet" href="../../../../css/main/loading.css?v=<?php echo time(); ?>">

    <!-- Fuentes -->
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
                            <h3>Colores</h3>
                            <span>Septiembre 13, 2021. ☕ 10 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Los colores se pueden indicar en formas diferentes.
                    </p>



                    <!--PALABRAS CLAVE-->
                    <h3>Palabras clave</h3>

                    <p>
                        Se definen 17 palabras para los colores básicos en Css los cuáles podemos
                        ver en la siguiente imagen:
                    </p>

                    <div class="container__articulo-imagen">
                        <img class="imagen_tipo_2" src="../../../../img/tema/css/colores/colores.gif" alt="">
                    </div>



                    <!--RGB DECIMAL-->
                    <h3>RGB decimal</h3>

                    <p>
                        Se definen con 3 componentes R(rojo), G(verde) y B(azul)<br>
                        RGB decimal pueden tomar valores entre 0 y 255.
                    </p>

                    <pre class="nota">
<code><span class="rosado">p</span> {
    <span class="propiedad">color: </span><span class="valor">rgb(40,22,123)</span>;
}</code></pre>

                    <div class="container__articulo-imagen">
                        <img class="imagen_tipo_1" src="../../../../img/tema/css/colores/Rgb.png" alt="">
                    </div>



                    <!--RGB HEXADECIMAL--> 
                    <h3>RGB hexadecimal</h3>

                    <p>
                        Se utilizan 16 números para representar sus números, se utilizan 6 letras 
                        (de la A hasta la F del número 10 al 15 respectivamente).
                    </p>

                    <pre class="nota">
<code><span class="rosado">p</span> {
    <span class="propiedad">color: </span><span class="valor">#222330</span>;
}</code></pre>      

                    <div class="container__articulo-imagen">
                        <img class="imagen_tipo_3" src="../../../../img/tema/css/colores/hexadecimal.gif" alt="">
                    </div>

                    <div class="nota">
                        <p>
                        Se puede escribir de forma abreviada cuando se repite 2 veces solo basta escribiéndola una vez.<br><br>
                        
                        #B0G = #BB00GG<br>
                        #123 = #112233
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

</body>

</html>