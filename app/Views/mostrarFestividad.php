<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festividades en Teziutlán</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        h2 {
            margin-top: 20px;
            text-align: center;
        }

        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .card-header {
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 15px;
            border-radius: 15px 15px 0 0;
        }

        .card-body {
            padding: 20px;
            text-align: left;
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

        .container-fluid {
            padding: 0;
        }

        .festividad-card {
            padding: 20px;
        }
    </style>
</head>
<body>

 <!-- Barra de navegación de Bootstrap -->
 <div style="text-align: center; margin-top: 20px;">
    <?php include('navegacion.php'); ?>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2>Festividades en Teziutlán</h2>

            <!-- Carrusel -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.e-consulta.com/_next/image?url=https%3A%2F%2Ffotos.e-consulta.com%2Fsite_uploads%2F2023%2Fjunio%2Fteziutlan_el_nuevo_pueblo_magico_como_llegar_que_hacer_y_que_comer.jpeg&w=3840&q=75" alt="Hotel 1">
                        <div class="carousel-caption">
                            <!-- Puedes agregar información adicional aquí -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i0.wp.com/larutadelaniebla.com/wp-content/uploads/2023/06/Virgen-del-Carmen-procesion-OPTI.webp?fit=1024%2C683&ssl=1" alt="Hotel 2">
                        <div class="carousel-caption">
                            <!-- Puedes agregar información adicional aquí -->
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Fin del carrusel -->

            <div class="row">
                <?php foreach($festividades as $festividad): ?>
                    <div class="col-md-4">
                        <div class="card festividad-card">
                            <div class="card-header">
                                <h5 class="mb-0"><?= $festividad->nombre_festividad ?></h5>
                            </div>
                            <div class="card-body">
                                <p><strong>Descripción:</strong> <?= $festividad->descripcion ?></p>
                                <p><strong>Precio de asistencia:</strong> <?= $festividad->precio ?></p>
                                <p><strong>Atracciones:</strong> <?= $festividad->atracciones ?></p>
                                <p><strong>Fecha del evento:</strong> <?= $festividad->fecha ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
