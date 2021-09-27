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
    <link rel="stylesheet" href="../../../css/main/footer.css?v=<?php echo time(); ?>">

    
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

                <a class="articulo" href="articulos_Css/Selectores_basicos.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Selectores Básicos</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>

                <a class="articulo" href="articulos_Css/Selectores_avanzados.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Selectores Avanzados</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Especificidad.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Especificidad</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>

                <a class="articulo" href="articulos_Css/Unidades_de_medida.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Unidades de Medida</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Colores.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Colores</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>

                <a class="articulo" href="articulos_Css/Modelo_de_cajas.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Modelo de Cajas</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>

                <a class="articulo" href="articulos_Css/Altura_y_anchura.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Altura y Anchura</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>

                <a class="articulo" href="articulos_Css/Margen_y_relleno.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Margen y Relleno</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>

                <a class="articulo" href="articulos_Css/Bordes.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Bordes</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>

                <a class="articulo" href="articulos_Css/Fondos.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Fondos</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Tipos_de_elementos.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Tipos de elementos</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Posicionamiento.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Tipos de Posicionamiento</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Posicionamiento_normal.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Posicionamiento Normal</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Posicionamiento_relativo.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Posicionamiento Relativo</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Posicionamiento_absoluto.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Posicionamiento Absoluto</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Posicionamiento_fijo.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Posicionamiento Fijo</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Posicionamiento_flotante.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Posicionamiento Flotante</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Visualización.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Visualización</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Texto.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Texto</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Propiedades_de_texto.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Propiedades de Texto</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Enlaces.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Enlaces</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Imágenes.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Imágenes</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Filtros.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Filtros</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Listas.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Listas</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Tablas.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Tablas</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Formularios.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Formularios</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>

                <a class="articulo" href="articulos_Css/Animaciones.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Animaciones</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>

                <a class="articulo" href="articulos_Css/Responsive_design.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Responsive Design</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Flex.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Flex</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                
                <a class="articulo" href="articulos_Css/Grid.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Grid</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
                <a class="articulo" href="articulos_Css/Enlaces_extras.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Enlaces Extras</h3>
                        <span>Hace 2 semanas</span>
                    </div>
                </a>

                <a class="articulo" href="articulos_Css/Otros.php">
                    <img src="../../../img/prueba/css.png" alt="">

                    <div class="articulo__info">
                        <h3>Otros</h3>
                        <span>Hace 3 semanas</span>
                    </div>
                </a>
                
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