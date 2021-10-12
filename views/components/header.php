<?php
    $ruta = '';
    $i = 0;
    while($i < $nivel){
        $ruta = '../' . $ruta; 
        $i++;
    }
    $ruta = "$ruta";
?>

<header>

    <div class="icono">
        <?php echo "<img class='lol' src='".$ruta."../../img/iconos/icono2_blanco.png' alt=''>" ?>

        <!-- <img class="lol" src="<?php $ruta ?>" alt="Logo Principal"> -->
        
        <p>El Jardín Del Código</p>
    </div>

    <!-- <div class="switch">
        <input type="checkbox" id="punto__switch" />
        <label for="punto__switch" class="caja__switch">
            <div class="punto__switch"></div>
        </label>
    </div> -->

    <div class="switch">
        <input type="checkbox" id="punto__switch" checked/>
        <label for="punto__switch" class="caja__switch" title="Cambiar Modo">
            <span class="punto__switch"></span>
        </label>
    </div>
    
</header>