<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>


    <link rel="icon" type="image/png" href="../../img/iconos/icono2_negro.png">

    <!-- Estilos -->

    <!-- <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/texto.css">
    -->

    <link rel="stylesheet" href="../../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/contacto.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/switch.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/main/loading.css?v=<?php echo time(); ?>">

    <!-- Fuentes -->
    <link rel="stylesheet" href="../../css/fuentes/fuentes.css?v=<?php echo time(); ?>">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

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

    $nivel = 0;

    //! HEADER
    require('../components/header.php');

    //! BARRA DE NAVEGACIÓN
    require('../components/barraNavegacion.php');

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

                    <!-- action="mail/correo.php"  -->
                    <!-- action="?c=CorreoModel&a=enviar"  -->
                    <form method="post" autocomplete="off" action="mail/correo.php" class="formulario">

                        <div class="formulario__control">

                            <input id="txtNombres" name="txtNombres" required type="text" placeholder="Nombre">
                            <input id="txtApellidos" name="txtApellidos" required type="text" placeholder="Apellido">

                        </div>

                        <input id="txtEmail" name="txtEmail" type="email" required placeholder="Email">


                        <input name="opcion" type="hidden" value="ENVIAR">

                        <textarea id="txtMensaje" name="txtMensaje" required placeholder="Mensaje" rows="5"></textarea>

                        <input type="submit" id="boton" value="Enviar">

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
    require('../components/footer.php');
    ?>

    

    <script src="../../js/guardaModoOscuro.js?v=<?php echo time(); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        switch ("<?php echo $_GET["m"] ?>") {
            
            case "ce": // Correo Enviado
                Toast.fire({
                        icon: 'success',
                        title: 'Correo enviado correctamente'
                    });
                break;

            case "cne": // Correo no enviado
                Toast.fire({
                        icon: 'warning',
                        title: 'El correo no puso ser enviado'
                    });
                break;
            
            case "er": // Error
                Toast.fire({
                        icon: 'error',
                        title: 'Ups! Error interno'
                    });
                break;

            default:
                break;
        }


    </script>


</body>

</html>