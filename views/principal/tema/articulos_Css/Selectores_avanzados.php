<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selectores Avanzados</title>

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
                            <h3>Selectores Avanzados</h3>
                            <span>Septiembre 12, 2021. ☕ 10 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Estos selectores nos ayudan a simplificar nuestra hoja de estilo
                    </p>


                    <!-- Selector Hijo -->
                    <ul class="margen_50">
                        <li>
                            <strong>Selector Hijo:</strong>
                            <p>
                                Selecciona al elemento que es hijo directo del padre, para utilizarlo se
                                coloca el signo ">", no confundir con el selector descendente que selecciona 
                                a todos sus hijos así pertenezcan a otro elemento 
                            </p>
                        </li>
                    </ul>

                    <pre class="nota margen_50">
<code><span class="rosado">p > span</span> {
    <span class="propiedad">color: </span><span class="valor">blue</span>;
}</code></pre><br>


                    <!-- Selector Adyacente -->
                    <ul class="margen_50">
                        <li>
                            <strong>Selector adyacente:</strong>
                            <p>
                                Se encarga de selecccionar los elementos que están a continuación de otros
                                elementos, para utilizarlo se
                                coloca el signo "+".
                            </p>
                        </li>
                    </ul>

                    <pre class="nota margen_50">
<code><span class="rosado">p + span</span> {
    <span class="propiedad">color: </span><span class="valor">blue</span>;
}</code></pre>


                    <!-- Selector de atributos -->
                    <ul class="margen_50">
                        <li>
                            <strong>Selector de atributos:</strong>
                            <p>
                                Permiten seleccionar elementos en función de sus atributos 
                                <br><br>
                                <p style="margin-left: 30px">
                                    <strong>[nombre_atributo]:</Strong> Selecciona los elemento que tienen el atributo con el nombre
                                    nombre_atributo.
                                    <br><br>
                                    <strong>[nombre_atributo=valor]:</strong> Selecciona los elementos que tiene el atributo nombre_atributo
                                    con el valor igual a 'valor'.
                                    <br><br>
                                    <strong>[nombre_atributo~=valor]:</strong>  Selecciona los elementos que tiene el atributo nombre_atributo 
                                    y al menos uno de los valores del atributo valor.
                                    <br><br>
                                    <strong>[nombre_atributo|=valor]:</strong> Selecciona los elementos que tiene el atributo nombre_atributo 
                                    y cuyo valor empiece por la palabra "valor".
                                </p>
                            </p>
                        </li>
                    </ul>

                    <pre class="nota" style="margin-left: 50px">
<code><span class="comentario">/* Se muestran de color azul 
todos los enlaces que tengan
un atributo "class", 
independientemente de 
su valor */</span>

<span class="rosado">a[class]</span> {
    <span class="propiedad">color: </span><span class="valor">blue</span>;
}


<span class="comentario">/* Se muestran de color azul 
todos los enlaces que tengan
un atributo "class" con el 
valor "externo" */</span>

<span class="rosado">a[class="externo"]</span> {
    <span class="propiedad">color: </span><span class="valor">blue</span>;
}


<span class="comentario">/* Se muestran de color azul 
todos los enlaces que 
apunten al sitio 
"http://www.ejemplo.com" */</span>

<span class="rosado">a[href="http://www.ejemplo.com"]</span> {
    <span class="propiedad">color: </span><span class="valor">blue</span>;
}


<span class="comentario">/* Se muestran de color azul 
todos los enlaces que tengan 
un atributo "class" en el 
que al menos uno de sus 
valores sea "externo" */</span>

<span class="rosado">a[class~="externo"]</span> {
    <span class="propiedad">color: </span><span class="valor">blue</span>;
}


<span class="comentario">/* Selecciona todos los 
elementos de la página cuyo 
atributo "lang" sea igual a 
"en", es decir, todos 
los elementos en inglés */</span>

<span class="rosado">*[lang=en]</span> {
    <span class="propiedad">... </span>;
}


<span class="comentario">/* Selecciona todos los 
elementos de la página cuyo 
atributo "lang" empiece por 
"es", es decir, "es" */</span>

<span class="rosado">*[lang|="es"]</span> {
    <span class="propiedad">color: </span><span class="valor">blue</span>;
}
</code></pre>

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