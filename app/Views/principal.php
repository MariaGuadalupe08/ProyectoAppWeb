<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pueblo Mágico - Bienvenido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: green;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }

        section {
            padding: 20px;
            text-align: center;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 5px;
            text-align: center;
            position: static;
            bottom: 0;
            width: 100%;
        }

        img {
            width: 30%; /* Tamaño del ancho de la ventana del carrusel */
            height: 30%; /* Mantener la proporción de aspecto */
            display: block;
    margin: 0 auto;
        }
        
    </style>
</head>
<body>



<header>
    <h1>¡Bienvenido a Teziuapp!</h1>
</header>

<!-- Barra de navegación de Bootstrap -->
<div>
    <?php include('navegacion.php'); ?>
</div>

<section id="lugares">
    <h2>Lugares Turísticos</h2>
    <p>Descubre los lugares encantadores que nuestro pueblo tiene para ofrecer.</p>
    <img src="https://i.ytimg.com/vi/Td7AfHcRZf4/maxresdefault.jpg" alt="Hotel 1">
    
</section>

<section id="festividades">
    <h2>Festividades</h2>
    <p>Bienvenidos a un mundo lleno de encanto y alegría, donde la magia cobra vida y las festividades se convierten en experiencias inolvidables. En Teziutlán, cada callejón emana la esencia de la tradición y la celebración.</p>
    <img src="https://escapadas.mexicodesconocido.com.mx/wp-content/uploads/2023/09/virgen-del-carmen_Samuel-Roldan-Live_1600.jpg" alt="Hotel 1">
</section>

<section id="gastronomia">
    <h2>Gastronomia</h2>
    <p>¡Descubre el deleite de nuestros sabores locales en el corazón de Teziutlán!</p>
    <img src="https://i0.wp.com/larutadelaniebla.com/wp-content/uploads/2022/11/gelatinas_con_rompope_portada02.jpg?resize=960%2C720&ssl=1" alt="Hotel 1">

<section id="hoteles">
    <h2>Hoteles</h2>
    <p>
¡Descubre el encanto y la comodidad en nuestros exclusivos hoteles! 
Sumérgete en una experiencia única donde el lujo se encuentra con la hospitalidad, y cada momento se convierte en un recuerdo inolvidable.</p>
<img src="https://hotelsuitesvirreynal.com/carousel/carousel-new.jpg" alt="Hotel 1">

<footer>
    <p>&copy; 2023 Teziutlán. Todos los derechos reservados.</p>
</footer>

</body>
</html>
