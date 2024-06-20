<?php
    require 'includes\funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor contactos">
        <h1>Contacto</h1>

        <picture>
            <img loading="lazy" src="build/img/destacada22.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llene el formulario de Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre: </label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail: </label>
                <input type="email" placeholder="Tu Correo" id="email">

                <label for="telefono">Telefono: </label>
                <input type="tel" placeholder="Tu Telefono" id="telefono">

                <label for="mensaje">Mensaje: </label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" checked id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora</p>

                <label for="fecha">Fecha: </label>
                <input type="date"  id="fecha" disable>

                <label for="hora">Hora: </label>
                <input type="time"  id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-azul2-block">
        </form>
    </main>

<?php
    incluirTemplate('footer')
?>
