<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEZIUAPP</title>
    <!-- Agrega los estilos de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-text {
            margin-bottom: 10px;
            text-align: center;
        }

        .btn-primary,
        .btn-success {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <h5 class="card-header">Lugar Turistico</h5>
                <div class="card-body">
                    <p class="card-text">Explora lugares turísticos y descubre su belleza.</p>
                    <a href="<?=base_url('index.php/lugar/mostrar') ?>" class="btn btn-primary">Mostrar</a>
                    <a href="<?=base_url('index.php/lugar/agregar') ?>" class="btn btn-success">Agregar</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card">
                <h5 class="card-header">Gastronomia</h5>
                <div class="card-body">
                    <p class="card-text">Descubre deliciosas comidas y sabores únicos.</p>
                    <a href="<?=base_url('index.php/gastronomia/mostrar') ?>" class="btn btn-primary">Mostrar</a>
                    <a href="<?=base_url('index.php/gastronomia/agregar') ?>" class="btn btn-success">Agregar</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card">
                <h5 class="card-header">Hoteles</h5>
                <div class="card-body">
                    <p class="card-text">Encuentra los mejores hoteles para tu estadía.</p>
                    <a href="<?=base_url('index.php/hotel/mostrar') ?>" class="btn btn-primary">Mostrar</a>
                    <a href="<?=base_url('index.php/hotel/agregar') ?>" class="btn btn-success">Agregar</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card">
                <h5 class="card-header">Festividades</h5>
                <div class="card-body">
                    <p class="card-text">Celebra eventos especiales con nosotros.</p>
                    <a href="<?=base_url('index.php/festividad/mostrar') ?>" class="btn btn-primary">Mostrar</a>
                    <a href="<?=base_url('index.php/festividad/agregar') ?>" class="btn btn-success">Agregar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Agrega los scripts de Bootstrap al final del documento -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
