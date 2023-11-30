<!DOCTYPE html>
<html>
<head>
    <title>Bienvenida</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <!-- Incluye los archivos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- En bienvenida.php -->
<div style="text-align: center; margin-top: 20px;">
    <?php include('navegacion.php'); ?>
</div>

<div style="text-align: center;">
        <h1>Bienvenido a mi aplicación</h1>
        <img src="/ruta/a/tu/imagen.png" alt="Imagen de referencia">
        <br>
        <a href="/login">Iniciar Sesión</a>
        <br>
        <a href="/otra_pagina">Ir a Otra Página</a>
    </div>

</body>
</html>
