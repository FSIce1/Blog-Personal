<?php
    $ruta = '';
    $i = 0;
    while($i < $nivel){
        $ruta = '../' . $ruta; 
        $i++;
    }
    $ruta = "$ruta";
?>

<footer>

    <div class="footer__info">
        
        <div class="footer__servicios" style="color: black">
            <ul>
                <li>
                    <p>DESARROLLO DE APLICACIONES WEB</p>
                    <?php echo "<img src='".$ruta."../../img/footer/programacion-web.png' alt=''>" ?>
                </li>
                
                <li>
                    <p>DESARROLLO DE SISTEMAS WEB</p>
                    <?php echo "<img src='".$ruta."../../img/footer/programacion-web2.png' alt=''>" ?>
                </li>
                
                <li>
                    <p>DESARROLLO DE APLICACIONES DESKTOP</p>
                    <?php echo "<img src='".$ruta."../../img/footer/programacion-desktop.png' alt=''>" ?>
                </li>

                <li>
                    <p>DESARROLLO DE APLICACIONES MÓVILES</p>
                    <?php echo "<img src='".$ruta."../../img/footer/programacion-movil.png' alt=''>" ?>
                </li>
            </ul>
        </div>

        <!-- <div class="linea"></div> -->
        
        <div class="centra">
            <div class="linea"></div>
        </div>

        <div class="footer__abajo">

            <div class="footer__menu">
                <ul>
                    <li><?php echo "<a href='".$ruta."inicio.php'>Inicio</a>" ?></li>
                    <li><?php echo "<a href='".$ruta."articulos.php'>Artículos</a>" ?></li>
                    <li><?php echo "<a href='".$ruta."portafolio.php'>Portafolio</a>" ?></li>
                    <li><?php echo "<a href='".$ruta."contacto.php'>Contacto</a>" ?></li>
                    <li><?php echo "<a href='".$ruta."skills.php'>Skills</a>" ?></li>
                </ul>
            </div>

            <div class="footer__redes">
                <ul>
                    <!-- <li>Redes Sociales: </li> -->
                    
                    <li><a href="https://github.com/FSIce1" target="__blank"><?php echo "<img src='".$ruta."../../img/iconos/github/github.svg' alt=''>" ?></a></li>
                    <li><a href="https://www.linkedin.com/in/luisfelipe1/" target="__blank"><?php echo "<img src='".$ruta."../../img/iconos/linkedin/linkedin.svg' alt=''>" ?></a></li>
                    <li><a href="https://www.instagram.com/luisfsv1/" target="__blank"><?php echo "<img src='".$ruta."../../img/iconos/instagram/instagram.svg' alt=''>" ?></a></li>
                    <li><a href="https://www.youtube.com/channel/UCf-S9k1J8BQ5oMJWx4asz0w" target="__blank"><?php echo "<img src='".$ruta."../../img/iconos/youtube/youtube.svg' alt=''>" ?></a></li>
                    
                </ul>
            </div>

        </div>

        <p style="color: black">Luis Felipe Siesquen | Todos los derechos reservados © 2021.</p>
    
    </div>

</footer>