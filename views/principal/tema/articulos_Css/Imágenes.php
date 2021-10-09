<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imágenes</title>

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



                    <!--TEMA-->
                    <div class="tema">

                        <img src="../../../../img/prueba/css.png" alt="Css">

                        <div class="tema__informacion">
                            <h3>Imágenes</h3>
                            <span>Septiembre 16, 2021. ☕ 5 minutos de lectura</span>
                        </div>

                    </div>



                    <!--ESTILOS BÁSICOS-->
                    <h3>Estilos Básicos</h3>

                    <ul class="margen_50">
                        <li>
                            <strong>Establecer la altura y anchura de las imágenes</strong>
                            <p>
                                Utilizamos las propiedades width y height para mostrar su anchura y altura 
                                respetctivamente.
                            </p>
                        </li>
                    </ul>

                    <pre class="nota margen_50">
<code><span class="rosado">.enlace</span> {
    <span class="propiedad">width: </span><span class="valor">200<span class="px">px</span></span>;
    <span class="propiedad">height: </span><span class="valor">200<span class="px">px</span></span>;
}</code></pre>

<pre class="nota margen_50">
<code><span class="caso_especial2">&#60;<span class="rosado">img</span> <span class="px">class</span><span class="turqueza">=</span><span class="enlace">"enlace"</span> <span class="px">src</span><span class="turqueza">=</span><span class="enlace">"img/imagen.jpg"</span>&#62;
</span></code></pre>

                    <ul class="margen_50">
                        <li>
                            <strong>Eliminar bode de las imágenes con enlaces</strong>
                            <p>
                                Se aplica cuando una imagen pertenece a un enlace y suele quedar el borde por defecto
                            </p>
                        </li>
                    </ul>

                    <pre class="nota margen_50">
<code><span class="rosado">.enlace</span> {
    <span class="propiedad">border: </span><span class="valor">none</span>;
}</code></pre>

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