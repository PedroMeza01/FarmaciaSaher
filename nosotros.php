<?php
    require 'includes\funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <img loading="lazy" src="build/img/nosotross.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Repellendus adipisci, sapiente dolor nisi ex consequatur quis libero nihil 
                     aliquid cum quibusdam necessitatibus suscipit, expedita, ratione officia aperiam
                      beatae incidunt alias?Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                       Cum minima iste expedita libero. Quos nemo ipsum debitis eaque? Neque incidunt 
                       cumque deleniti hic officiis saepe est possimus rem modi eum!
                </p>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus magni corporis velit 
                    libero quos tenetur quas aliquid veniam, adipisci qui consectetur eos soluta reprehenderit,
                     molestiae perspiciatis fuga praesentium necessitatibus nesciunt?</p>
            </div>
        </div>
    </main>

    
    <section class="contenedor seccion">
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
    </section>

<?php
    incluirTemplate('footer')
?>
