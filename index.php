<?php
    require 'includes\funciones.php';
    incluirTemplate('header',  $inicio = true);
?>
    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos_nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="kazy">
                <h2>Seguridad</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam dicta
                     sequi voluptate distinctio asperiores, reprehenderit vel tenetur eius,
                      saepe eligendi et explicabo incidunt maiores voluptates vitae! Neque 
                      consequatur id sed.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono calidad" loading="kazy">
                <h2>Calidad</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam dicta
                     sequi voluptate distinctio asperiores, reprehenderit vel tenetur eius,
                      saepe eligendi et explicabo incidunt maiores voluptates vitae! Neque 
                      consequatur id sed.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="kazy">
                <h2>Tiempo</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam dicta
                     sequi voluptate distinctio asperiores, reprehenderit vel tenetur eius,
                      saepe eligendi et explicabo incidunt maiores voluptates vitae! Neque 
                      consequatur id sed.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2> Algunos De Nuestros Productos</h2>
        <div class="contenedor_anuncio">
            <div class="anuncio">
                <picture>
                <!--<source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">-->
                    <img loading ="lazy" src="build/img/tempraforteAnuncio1.png" alt="anuncio">
                </picture>

                <div class="contenido_anuncio">
                    <h3>Paracetamol</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Quibusdam hic, exercitationem sed blanditiis excepturi</p>
                    <p class="precio">desde $2.00</p>
                </div><!--DIV CONTENIDO ANUNCIO-->
            </div>
            <div class="anuncio">
                <picture>
                <!--<source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">-->
                    <img loading ="lazy" src="build/img/tempraforteAnuncio1.png" alt="anuncio">
                </picture>

                <div class="contenido_anuncio">
                    <h3>Paracetamol</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Quibusdam hic, exercitationem sed blanditiis excepturi</p>
                    <p class="precio">desde $20000.00</p>
                </div><!--DIV CONTENIDO ANUNCIO-->
            </div><!--DIV  ANUNCIO-->
            <div class="anuncio">
                <picture>
                <!--<source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">-->
                    <img loading ="lazy" src="build/img/tempraforteAnuncio1.png" alt="anuncio">
                </picture>

                <div class="contenido_anuncio">
                    <h3>Paracetamol</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Quibusdam hic, exercitationem sed blanditiis excepturi</p>
                    <p class="precio">desde $2.00</p>
                </div><!--DIV CONTENIDO ANUNCIO-->
            </div>
        </div><!--DIV CONTENEDOR ANUNCIO-->
        <div class="alinear-derecha">
            <a href="productos.html" class="boton-verde"> Ver todos</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>¿Interesado en ser nuestro cliente?</h2>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-verde">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="preguntas-frecuentes">
            <h3>Preguntas Frecuentes</h3>
            <article class="entrada-preguntas">
                <div class="imagen">
                    <picture>
                        <!--<source srcset="build/img/blog1.jpg" type="image/jpeg">-->
                        <img loading="lazy" src="build/img/pregunta.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="preguntasfrecuentes.html">
                        <h4>¿Donde se ubican?</h4>
                        <p>consejos para contruir una terraza en el techo de tu casa con los mejores materiales
                            y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-preguntas">
                <div class="imagen">
                    <picture>
                        <!--<source srcset="build/img/blog1.jpg" type="image/jpeg">-->
                        <img loading="lazy" src="build/img/pregunta.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="preguntasfrecuentes.html">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p>Escrito el <span>20/10/2021</span> por: <span>Admin</span> </p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit,
                             esse quod. Deserunt quibusdam</p>
                    </a>
                </div>
            </article>
        </section>
        <section class="recomendaciones">
            <h3>Recomendaciones</h3>
            <div class="recomendacion">
                <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur blanditiis
                     ad libero a sequi debitis 
                </blockquote>
                <p>- Pedro Meza</p>
            </div>
            <script src="js/app.js"></script>
        </section>
</div>
<?php
    incluirTemplate('footer')
?>

   