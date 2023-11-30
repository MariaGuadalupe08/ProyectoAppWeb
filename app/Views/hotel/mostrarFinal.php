<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoteles en Teziutlán</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 10px; /* Ajusta según la altura de la barra de navegación */
        }

        h2 {
            margin-bottom: 30px;
            text-align: center;
        }

        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: yellowgreen;
            color: #ffffff;
        }

        .card-body {
            padding: 20px;
            text-align: left; /* Alinear el texto a la izquierda */
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .actions {
            text-align: right;
        }

        .actions a {
            margin-right: 10px;
        }

        /* Establece un tamaño fijo para las imágenes del carrusel */
        #myCarousel img {
            width: 50%; /* Tamaño del ancho de la ventana del carrusel */
            height: 50%; /* Mantener la proporción de aspecto */
            display: block;
    margin: 0 auto;
        }

        /* Ajustes en los estilos del carrusel */
        #myCarousel {
            margin-bottom: 50px; /* Espacio adicional entre el carrusel y las tarjetas */
            border: 1px solid #ddd; /* Borde gris claro */
            border-radius: 5px; /* Esquinas redondeadas */
            overflow: hidden; /* Para ocultar cualquier desbordamiento de las imágenes */
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.7); /* Fondo más oscuro */
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Barra de navegación de Bootstrap -->
<div style="text-align: center; margin-top: 20px;">
    <?php include('C:\xampp\htdocs\TeziuApp\app\Views\navegacion.php'); ?>
</div>

   

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Hoteles en Teziutlán</h2>

            <!-- Carrusel -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                   
                </ol>

               
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/9f/41/d0/hotel-central-teziutlan.jpg?w=700&h=-1&s=1" alt="Hotel 1">
                        <div class="carousel-caption">
                            
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/342635476.jpg?k=d3804f58c39fc6454776b660a854d58e974d16c21bcf9a248b4f29ce65ef6be4&o=&hp=1" alt="Hotel 2">
                        <div class="carousel-caption">
                            
                        </div>
                    </div>
                   
                </div>

                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Fin del carrusel -->

            <?php foreach($hoteles as $hotel): ?>
                <div class="card">
                    <div class="card-header">
                        <h3><?= $hotel->nombre_hotel ?></h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Dirección:</strong> <?= $hotel->direccion ?></p>
                        <p><strong>Teléfono:</strong> <?= $hotel->telefono ?></p>
                        <p><strong>Precio del Hospedaje:</strong> <?= $hotel->precio_hospedaje ?></p>
                        <p><strong>Descripción:</strong> <?= $hotel->descripcion ?></p>
                        <p><strong>Estrellas:</strong> <?= $hotel->estrellas ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
