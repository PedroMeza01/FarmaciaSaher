<?php
require '../../includes/funciones.php';
incluirTemplate('header');
?>
<!--BORRAR LAS /farmaciasaher/-->
    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/farmaciasaher/admin" class = "boton boton-azul2"> Regresar</a>

        <form class= "formulario">
            <fieldset>
                <legend> Informacion General </legend>

                <label for="titulo"> Titulo: </label>
                <input type="text" id="titulo" placeholder="Titulo producto">

                <label for="precio"> Precio: </label>
                <input type="number" id="precio" placeholder="Precio producto">

                <label for="imagen"> Imagen: </label>
                <input type="file" id="imagen" accept= "image/jpeg image/png">

                <label for="descripcion"> Descripcion: </label>
                <textarea id="descripcion"></textarea>


            </fieldset>
        </form>
    </main>

<?php
    incluirTemplate('footer')
?>
