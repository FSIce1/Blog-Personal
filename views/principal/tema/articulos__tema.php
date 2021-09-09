<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema Css</title>


    <link rel="icon" type="image/png" href="../../../img/logo_v1.png">

    <!-- Estilos -->

    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/texto.css">
    -->
    
    <link rel="stylesheet" href="../../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../css/main/articulos__tema.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../../css/switch.css?v=<?php echo time(); ?>">

    
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="../../../css/fuentes/fuentes.css?v=<?php echo time(); ?>">

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
    
    $nivel = 1;

    //! HEADER
    require('../../components/header.php');

    //! BARRA DE NAVEGACIÓN
    require('../../components/barraNavegacion.php');

    ?>

    <main>
        
        <div class="container">
            
            <div class="tema">
                <img src="../../../img/prueba/css.png" alt="Css">

                <div class="tema__informacion">
                    <h3>Css</h3>

                    <p>Css es un lenguaje de diseño gráfico para definir y crear la presentación de un documento estructurado escrito en un lenguaje de marcado.</p>
                </div>

            </div>

            <div class="articulos">
                
                <a class="articulo" href="articulos_Css/Qué_es_css.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>¿Qué es Css?</h3>
                        <span>Hace 1 minuto</span>
                    </div>
                </a>

                <div class="articulo">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Como centrar un div</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </div>

                <div class="articulo">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Como centrar un div</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </div>
                
                <div class="articulo">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Como centrar un div</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </div>

                <div class="articulo">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Como centrar un div</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </div>
                
                <div class="articulo">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Como centrar un div</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </div>

                <div class="articulo">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Como centrar un div</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </div>
                
            </div>

        </div>
    
    </main>

    <?php
    //! FOOTER
    require('../../components/footer.php');
    ?>

    <script src="../../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>
    
    <script>
        const $miCheckbox = document.querySelector("#punto__switch");
        $miCheckbox.checked = true;
    </script>

</body>

</html>