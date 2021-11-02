<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selectoress Básicos</title>

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
    <link rel="stylesheet" href="../../../../css/main/loading.css?v=<?php echo time(); ?>">

    <!-- Fuentes -->
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
                            <h3>Selectores Básicos</h3>
                            <span>Septiembre 11, 2021. ☕ 20 minutos de lectura</span>
                        </div>

                    </div>

                    <p>
                        Un selector de CSS selecciona los elementos HTML a los que desea aplicar estilo.
                    </p>


                    <!-- Selector Universal -->
                    <ul class="margen_50">
                        <li>
                            <strong>Selector Universal:</strong>
                            <p>
                                Es utilizado para aplicar estilos a todos los elementos de la página, por ejemplo en el
                                siguiente código elimina todo el margen y relleno de todos los elementos html. <br><br>

                                El selector universal se indica a través de un *, estas funciones generales que se indican
                                pueden ser modificadas en partes específicas de la página.
                            </p>
                        </li>
                    </ul>

                    <pre class="nota margen_50">
<code><span class="rosado">*</span> {
    <span class="propiedad">margin: </span><span class="valor">0</span>;
    <span class="propiedad">padding: </span><span class="valor">0</span>;
}</code></pre><br>


                    <!-- Selector de tipo -->
                    <ul class="margen_50">
                        <li>
                            <strong>Selector de tipo:</strong>
                            <p>
                                Este selector aplica unos estilos determinados y selecciona todos los elementos cuya etiqueta Html 
                                coincide con el valor del selector.
                                <br>
                                Para utilizar este selector no se utilizan los caracteres &#60; &#62;
                            </p>
                        </li>
                    </ul>

                    <pre class="nota margen_50">
<code><span class="rosado">p</span> {
    <span class="propiedad">color: </span><span class="valor">#FFFFFF</span>;
    <span class="propiedad">font-size: </span><span class="valor">10</span><span class="px">px</span>;
}</code></pre>

                    <ul style="list-style:none;" class="margen_50">
                        <li>
                            <p>
                                Css permite agrupar reglas individuales para así formar un selector múltiple, para 
                                esto se debe separar por una coma ',' como se puede apreciar en el siguiente código:
                                
                            </p>
                        </li>
                    </ul>

                    <pre class="nota margen_50">
<code><span class="rosado">h1, h2, h3</span> {
    <span class="propiedad">color: </span><span class="valor">#FFFFFF</span>;
    <span class="propiedad">font-family: </span><span class="valor">Arial, sans-serif</span>;
}</code></pre><br>


                    <!-- Selector descendente -->
                    <ul class="margen_50">
                        <li>
                            <strong>Selector descendente:</strong>
                            <p>
                                Selecciona a los elementos que se encuentran dentro de otro elemento 
                                En el siguiente ejemplo podemos ver como todos los elementos que tengan 
                                la etiqueta (a) que se encuentran dentro de la etiqueta (p) se ven seleccionados.
                                <br><br>
                                Selecciona <span style="color: red">TODOS</span> los que están dentro del selector padre,
                                no tiene porque ser descendiente directo del otro y se aplica al último elemento del estilo.
                            </p>
                        </li>
                    </ul>                    

                    <pre class="nota margen_50">
<code><span class="rosado">p a</span> {
    <span class="propiedad">color: </span><span class="valor">blue</span>;
    <span class="propiedad">font-family: </span><span class="valor">sans-serif</span>;
}</code></pre><br>


                    <!-- Selector de clase -->
                    <ul class="margen_50">
                        <li>
                            <strong>Selector de clase:</strong>
                            <p> 
                                Para aplicar un estilo a un elemento es específico se aplica este selector,
                                consiste en utilizar el atributo 'class' sobre el elemento para poder aplicarle el estilo. 
                                <br><br>
                                Estos selectores se pueden utilizar en cualquier elemento de la página.
                            </p>
                        </li>
                    </ul>   
                    
                    <pre class="nota margen_50">
<code>&#60;<span class="rosado">body</span>&#62;
    &#60;<span class="rosado">p</span> <span class="px">class</span><span class="turqueza">=</span><span class="enlace">"rojo"</span>&#62; texto &#60;/<span class="rosado">p</span>&#62;
    &#60;<span class="rosado">p</span> <span class="px">class</span><span class="turqueza">=</span><span class="enlace">"rojo"</span>&#62;&#60;/<span class="rosado">p</span>&#62;
    &#60;<span class="rosado">p</span> <span class="px">class</span><span class="turqueza">=</span><span class="enlace">"rojo"</span>&#62;&#60;/<span class="rosado">p</span>&#62;
&#60;<span class="rosado">/body</span>&#62;</code></pre>

                    <ul style="list-style:none;" class="margen_50">
                        <li>
                            <p>
                                En el caso de querer especificar un elemento con una clase se debe hacer lo siguiente:
                            </p>
                        </li>
                    </ul>

                    <pre class="nota margen_50">
<code>/* Todos los elementos
de tipo "p" con atributo 
class="aviso" */

    <span class="rosado">p</span><span class="selector">.aviso</span> { ... }


/* Todos los elementos 
con atributo class="aviso"
que estén dentro de cualquier 
elemento de tipo "p" */

    <span class="rosado">p</span> <span class="selector">.aviso</span> { ... }


/* Todos los elementos "p" 
de la página y todos los 
elementos con atributo 
class="aviso" de la página */

    <span class="rosado">p</span>, <span class="selector">.aviso</span> { ... }</code></pre>

                    <ul style="list-style:none;" class="margen_50">
                        <li>
                            <p>
                                También es posible aplicar diferentes selectores de clase solo aplicando un
                                espacio en blanco entre ellos
                            </p>
                        </li>
                    </ul>

                    <pre class="nota margen_50"><code>&#60;<span class="rosado">p</span> <span class="px">class</span><span class="turqueza">=</span><span class="enlace">"rojo margen tamaño"</span>&#62; 
texto 
&#60;/<span class="rosado">p</span>&#62;</code></pre><br>


                    <!-- Selector de ID -->
                    <ul class="margen_50">
                        <li>
                            <strong>Selector de ID:</strong>
                            <p>
                                Este selector de Id permite seleccionar un elemento a través de su atributo id
                                teniendo en cuenta que el atributo id no se puede repetir en dos o más elementos
                                de la misma página.
                            </p>
                        </li>
                    </ul>   

                    <pre class="nota margen_50">
<code>&#60;<span class="rosado">p</span> <span class="px">id</span><span class="turqueza">=</span><span class="enlace">"estilo"</span>&#62; texto &#60;/<span class="rosado">p</span>&#62;</code></pre>
                    
                    <pre class="nota margen_50">
<code><span class="rosado">#estilo</span> {
    <span class="propiedad">color: </span><span class="valor">blue</span>;
    <span class="propiedad">font-family: </span><span class="valor">sans-serif</span>;
}</code></pre>

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

</body>

</html>