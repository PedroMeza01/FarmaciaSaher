<?php
    require 'includes\funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <section class="seccion contenedor">
            <h2> Algunos De Nuestros Productos</h2>

            <div class="filtros">
                <div class= "buscar">
                    <label> Categoria: </label>
                </div>
                <div class = "categorias">
                    <label> Categoria: </label>
                    <select class="opciones" name="opciones">
                        <option value="cat1">Todos</option>
                        <option value="cat2">Antibiotico</option>
                        <option value="cat3">Genericos</option>
                        <option value="cat4">Perfumeria</option>
                    </select>
                </div>
            </div>
            
            <div class="contenedor_anuncios">
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
    </main>

<?php
    incluirTemplate('footer')
?>
