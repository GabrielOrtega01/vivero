<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Service</title>
    <!-- Agregar enlaces -->
    <link rel="stylesheet" href="/WEBMVC/style.css">
    <link type="image/png" sizes="32x32" rel="icon" href="img/icons.png">
</head>

<body style="background-color: #f5f5f5">
    <header class="bg-darkgreen text-light text-center py-3">
        <div class="container">
            <img src="img/Logotipo1.png" alt="Logotipo Vivero Ortega Martínez" class="img-fluid" style="max-width: 100%;">
        </div>
    </header>

    <!-- Menú de Navegación -->
    <?php include "modulos/Navegacion.php"; ?>
    <section>
    
            <?php
            $mvc = new MvcController();
            $mvc->enlacespaginascontrol();
            ?>
        
    </section>
    <footer class="bg-dark text-light text-center py-3">
        <div class="container">
            <p>&copy; 2024 Vivero Ortega Martínez. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Agregar script de Bootstrap al final del body para mejorar la velocidad de carga -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    
</body>

</html>