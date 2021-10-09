<?php
    $ruta = '';
    $i = 0;
    while($i < $nivel){
        $ruta = '../' . $ruta; 
        $i++;
    }
    $ruta = "$ruta";
?>

<section>
    <p class="titulo">Artículos por temas</p>
        
    <div class="articulos-relacionados">
        
        <?php 
            echo "<a href='".$ruta."tema/articulos_Css/Selectores_basicos'>
                    <img src='".$ruta."../../img/prueba/css.png' alt=''>
                    <h3>Selectores Básicos</h3>
                    <p>
                        Los selectores de Básicos y comunes en Css.
                    </p>
                </a>"
        ?>
        
        <?php 
            echo "<a href='".$ruta."tema/articulos_Css/Selectores_avanzados'>
                    <img src='".$ruta."../../img/prueba/css.png' alt=''>
                    <h3>Selectores Avanzados</h3>
                    <p>
                        Los selectores de Avanzados y comunes en Css.
                    </p>
                </a>"
        ?>

        <?php 
            echo "<a href='".$ruta."tema/articulos_Css/Flex'>
                    <img src='".$ruta."../../img/prueba/css.png' alt=''>
                    <h3>Flex</h3>
                    <p>
                        Propiedad resumida que indica la capacidad de un elemento flexible para alterar sus dimensiones y llenar el espacio disponible.
                    </p>
                </a>"
        ?>

    </div>

</section>
    