<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEZIUAPP</title>
    <!-- Agrega los estilos de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        .navbar-brand img {
            max-height: 40px;
            margin-right: 10px;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff !important;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            TEZIUAPP
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lugar Turistico</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?=base_url('index.php/lugar/mostrar') ?>">Mostrar</a>
                        <a class="dropdown-item" href="<?=base_url('index.php/lugar/agregar') ?>">Agregar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gastronomia</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?=base_url('index.php/gastronomia/mostrar') ?>">Mostrar</a>
                        <a class="dropdown-item" href="<?=base_url('index.php/gastronomia/agregar') ?>">Agregar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hoteles</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?=base_url('index.php/hotel/mostrar'); ?>">Mostrar</a>
                        <a class="dropdown-item" href="<?=base_url('index.php/hotel/agregar') ?>">Agregar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Festividades</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?=base_url('index.php/festividad/mostrar'); ?>">Mostrar</a>
                        <a class="dropdown-item" href="<?=base_url('index.php/festividad/agregar') ?>">Agregar</a>
                    </div>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- Agrega los scripts de Bootstrap al final del documento -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
