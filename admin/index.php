<?php
require '../includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador Farmacias Saher </h1>

        <a href="productos/crear.php" class = "boton boton-azul2"> Nuevo producto</a>
        
        <table class="productos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tempra</td>
                    <td>Paracetamol</td>
                    <td><img src="../build/img/tempraforteAnuncio1.png" class= "imagen_tabla"></td>
                    <td>$50.00</td>
                    <td>
                        <a href="">Eliminar</a>
                        <a href="">Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

<?php
    incluirTemplate('footer')
?>
