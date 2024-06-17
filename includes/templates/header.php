<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacias Saher</title>
    <link rel="stylesheet" href="/farmaciasaher/build/css/app.css">
</head>
<!--RECUERDA BORRAR EL /farmaciasaher/ de todas las referencias -->
<body>
    <header class="header <?php echo $inicio ? 'inicio' : '';?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img class="logo" src="/farmaciasaher/build/img/ic_saher.png" alt="Logotipo de Farmacias">
                </a>  
                <div class="mobile-menu">
                    <img src="/farmaciasaher/build/img/barras.svg" alt="">
                </div>
                <nav class="navegacion">
                    <a href="index.php">Inicio</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="productos.php">Productos</a>
                    <a href="preguntasfrecuentes.php">Preguntas Frecuentes</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div> <!--Cierre de barra-->
            <?php echo $inicio ? 
            "<h1>Distribuidores de Medicamentos de Genéricos, Patentes y Perfumería</h1>" : ''; ?>

        </div>
    </header>
