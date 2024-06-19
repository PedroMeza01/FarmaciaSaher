<?php
require '../../includes/config/database.php';
 conectarBD();
 
//selectPrueba();
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

                <label for="titulo"> Código(artcdartn): </label>
                <input type="number" id="codigo" placeholder="123" readonly>

                <label for="titulo"> Nombre(artdsartc): </label>
                <input type="text" id="titulo" placeholder="Titulo producto">

                <label for="descripcion"> DescripcionGenerica (artdsgenc): </label>
                <textarea id="descripcion"></textarea>

                <label for="clasificacion">artclfisc: </label>
                <select id="opciones">
                    <option value="" disable selected> -- Seleccione --</option>
                    <option value="H">H</option>
                    <option value="B">B</option>
                    <option value="N">N</option>
                </select>

                <label for="ivacdivan">Ivacdivan: </label>
                <select id="opcionesIva">
                    <option value="" disable selected> -- Seleccione --</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                
                <label for="arttempon">arttempon: </label>
                <select id="opciones2">
                    <option value="" disable selected> -- Seleccione --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>


                <label for="artcaducc">Caducidad(artcaducc):</label>
                <select id="opcionesCad">
                    <option value="" disable selected> -- Seleccione --</option>
                    <option value="S">Si</option>
                    <option value="N">No</option>
                </select>

                <label for="artclasic">(artclasic):</label>
                <select id="opcionesartclasic">
                    <option value="" disable selected> -- Seleccione --</option>
                    <option value="G">G</option>
                    <option value="D">D</option>
                    <option value="M">M</option>
                </select>

                

                <label for="imagen"> Imagen: </label>
                <input type="file" id="imagen" accept= "image/jpeg image/png">


                <label for="precio"> Precio: </label>
                <input type="number" id="precio" placeholder="Precio producto">

               


            </fieldset>
        </form>
    </main>

<?php
    incluirTemplate('footer')
?>
