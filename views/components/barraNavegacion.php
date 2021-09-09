<?php
    $ruta = '';
    $i = 0;
    while($i < $nivel){
        $ruta = '../' . $ruta; 
        $i++;
    }
    $ruta = "$ruta";
?>

<nav>
<li><a href="https://www.linkedin.com/in/luisfelipe1/" target="__blank" alt="Linkedin"><?php echo "<img src='".$ruta."../../img/iconos/linkedin/linkedin.svg' alt='Linkedin'>" ?></a></li>
    <li><a href="https://github.com/FSIce1" target="__blank" alt="Github"><?php echo "<img src='".$ruta."../../img/iconos/github/github.svg' alt='Github'>" ?></a></li>
    <li><a href="https://www.facebook.com/felipe.siesquenvaldivia/" target="__blank" alt="Facebook"><?php echo "<img src='".$ruta."../../img/iconos/facebook/facebook.svg' alt='Facebook'>" ?></a></li>
    <li><a href="https://www.instagram.com/luisfsv1/" target="__blank" alt="Instagram"><?php echo "<img src='".$ruta."../../img/iconos/instagram/instagram.svg' alt='Instagram'>" ?></a></li>
    <li><a href="https://twitter.com/SiesquenFelipe" target="__blank" alt="Twitter"><?php echo "<img src='".$ruta."../../img/iconos/twitter/twitter.svg' alt='Twitter'>" ?></a></li>
    <li><a href="https://www.pinterest.es/lsiesquenvaldivia/_saved/" target="__blank" alt="Pinterest"><?php echo "<img src='".$ruta."../../img/iconos/pinterest/pinterest.svg' alt='Pinterest'>" ?></a></li>
    <li><a href="https://www.youtube.com/channel/UCf-S9k1J8BQ5oMJWx4asz0w" target="__blank" alt="Youtube"><?php echo "<img src='".$ruta."../../img/iconos/youtube/youtube.svg' alt='Youtube'>" ?></a></li>

</nav>