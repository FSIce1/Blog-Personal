<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>


    <link rel="icon" type="image/png" href="../../img/logo_v1.png">

    <!-- Estilos -->

    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/texto.css">
    -->
    
    <link rel="stylesheet" href="../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/contacto.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/switch.css?v=<?php echo time(); ?>">

    
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600&display=swap" rel="stylesheet">



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
    //! HEADER
    require('../components/header.html');

    //! BARRA DE NAVEGACIÓN
    require('../components/barraNavegacion.html');

    ?>


    <main>
        <div class="container__contacto">
            
            <div class="contacto">
                <code> &lt;html&gt; </code>
                <code> &lt;body&gt; </code>
                
                <code> &lt;h2&gt; </code>
                    <h2>Contáctame</h2>
                <code> &lt;/h2&gt; </code>

                <code> &lt;p&gt; </code>
                    <p>Si quieres iniciar un proyecto, escribe un mensaje</p>
                <code> &lt;/p&gt; </code>
                
                <code> &lt;form&gt; </code>
                
                    <form method="post" autocomplete="off" action="" class="formulario">
                            
                        <div class="formulario__control">

                                <input type="text" placeholder="Nombre">
                            
                                <input type="text" placeholder="Apellido">
                                
                        </div>

                        <input type="email" placeholder="Email">

                        <textarea placeholder="Mensaje" rows="5"></textarea>

                        <input type="button" class="boton" value="Enviar">

                    </form>

                <code> &lt;/form&gt; </code>

                <code> &lt;/body&gt; </code>
                <code> &lt;/html&gt; </code>
                

            </div>
            
        </div>
        
        <div class="container__mapa">    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.433821724102!2d-79.93659958776433!3d-6.8384786120442715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904cfac0a2300ebf%3A0x94da28176c9f5224!2sMalec%C3%B3n%20de%20Pimentel!5e0!3m2!1ses!2spe!4v1631046430662!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        

    </main>

    <?php
    //! FOOTER
    require('../components/footer.html');
    ?>

    <script src="../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>
    
    <script>
        const $miCheckbox = document.querySelector("#punto__switch");
        $miCheckbox.checked = true;
    </script>

</body>

</html>