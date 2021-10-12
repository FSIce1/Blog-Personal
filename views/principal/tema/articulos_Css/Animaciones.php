<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animaciones</title>

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
                            <h3>Animaciones</h3>
                            <span>Septiembre 26, 2021. ☕ 15 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Las animaciones en css consiguen un efecto entre un estado inicial y un estado final
                    </p>



                    <!--TRANSFORMACIONES EN 2D y 3D-->
                    <h3>Transformaciones en 2D y 3D</h3>
            
                    <p>
                        Visión general de las animaciones
                    </p>

                    <table class="tabla">
                        
                        <tr>
                            <th>Transformación</th>
                            <th>Transiciones</th>
                            <th>Animaciones</th>
                        </tr>

                        <tr>
                            <td>transform</td>
                            <td>transition</td>
                            <td>animation</td>
                        </tr>

                        <tr>
                            <td>transform-<br>origin</td>
                            <td>transition-<br>property</td>
                            <td>animation-<br>name</td>
                        </tr>

                        <tr>
                            <td>transform-<br>style</td>
                            <td>transition-<br>duration</td>
                            <td>animation-<br>duration</td>
                        </tr>

                        <tr>
                            <td>perspective</td>
                            <td>transition-<br>timing-function<br>(opcional)</td>
                            <td>animation-<br>timing-function<br>(opcional)</td>
                        </tr>

                        <tr>
                            <td>perspective-<br>origin</td>
                            <td>transition-<br>delay <br>(opcional)</td>
                            <td>animation-<br>delay <br>(opcional)</td>
                        </tr>

                    </table>


                    <!-- Transform -->
                    <ul class="margen_50">
                        <li>
                            <strong>Transform</strong>
                            <p>
                                Permite modificar el espacio de coordenadas en formato visual Css.
                                <br>Cuando se utiliza los elementos son trasladados, rotado, escalados
                                o sesgados de acuerdo al valor indiciado.
                            </p>
                        </li>
                    </ul>

                    <div class="container__articulo-imagen">
                        <picture>
                            <img class="imagen_tipo_7" src="../../../../img/tema/css/animaciones/transform.png" alt="">
                            <p class="figure">Ejemplos usados con la propiedad transform</p>
                        </picture>
                    </div>

                    <div class="ejemplo_filtros">
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="matrix" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">matrix(1, 2, 3, 4, 5, 6)</span>
                        </div>
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="translate" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">translate(120px, 50%)</span>
                        </div>
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="scale" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">scale(2, 0.5)</span>
                        </div>
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="rotate" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">rotate(0.5turn)</span>
                        </div>
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="skew" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">skew(30deg, 20deg)</span>
                        </div>
                        
                        <div class="centra_imagen">
                            <picture class="centra_imagen caja_transform">
                                <img class="scale_translate" width="200px" height="200px" src="../../../../img/tema/css/flitros/imagen1.png">
                                
                            </picture>
                            <span class="te" style="color: black">scale(0.5) translate(-100%, -100%);</span>
                        </div>

                    </div><br><br>


                    <!-- Transition -->
                    <ul class="margen_50">
                        <li>
                            <strong>Transition</strong>
                            <p>
                                Las transiciones permiten cambiar los valores de la propiedad, 
                                durante un período determinado.<br>
                                
                            </p>
                        </li>
                    </ul>

                    <div class="caja_transition margen_50">
                    </div><br>

                    <table class="tabla margen_50">
                        
                        <tr>
                            <th>Propiedad</th>
                            <th>Significado</th>
                            <th>Inicio/<br>Transcurso/<br>Final</th>
                        </tr>

                        <tr>
                            <td>ease</td>
                            <td>
                                Especifica un efecto de transición con un inicio lento, luego rápido, luego termina lentamente
                            </td>
                            <td>Lento/<br>Rápido/<br>Lento</td>
                        </tr>

                        <tr>
                            <td>linear</td>
                            <td>
                                Especifica un efecto de transición con la misma velocidad de principio a fin
                            </td>
                            <td>Normal/<br>Normal/<br>Normal</td>
                        </tr>

                        <tr>
                            <td>ease-in</td>
                            <td>
                                Especifica un efecto de transición con un inicio lento
                            </td>
                            <td>Lento/<br>Normal/<br>Normal</td>
                        </tr>                        

                        <tr>
                            <td>ease-out</td>
                            <td>
                                Especifica un efecto de transición con un final lento
                            </td>                        
                            <td>Normal/<br>Normal/<br>Lento</td>
                        </tr>
                        
                        <tr>
                            <td>ease-in-out</td>
                            <td>
                                Especifica un efecto de transición con un inicio y un final lentos
                            </td>
                            <td>Lento/<br>Normal/<br>Lento</td>
                        </tr>
                        
                        <tr>
                            <td>cubic-bezier<br>(X1,Y1,<br>X2,Y2)</td>
                            <td>
                                Le permite definir sus propios valores en una función cubic-bezier
                            </td>
                            <td>-</td>
                        </tr>

                    </table>

                    <div class="ejemplo_transition">
                        
                        <div class="caja_transition linear">
                            linear
                        </div>
                        
                        <div class="caja_transition ease">
                            ease
                        </div>
    
                        <div class="caja_transition ease-in">
                            ease-in
                        </div>
                        
                        <div class="caja_transition ease-out">
                            ease-out
                        </div>
                        
                        <div class="caja_transition ease-in-out">
                            ease-in-out
                        </div>

                    </div>

                    <div class="nota">
                        <p>
                            <strong>transition: delay</strong> esta propiedad indiica el tiempo de restraso(en segundo) para
                            el efecto de transición.
                        </p>
                    </div>

                    <div class="caja_transition linear delay">
                        transition-delay: 1s
                    </div>
                    
                    <div class="caja_transition ambos">
                        transition: width 2s, height 2s, transform 2s;
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