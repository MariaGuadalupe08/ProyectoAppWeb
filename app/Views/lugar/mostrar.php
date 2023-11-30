<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastronomía en Teziutlán</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        h2 {
            margin-bottom: 30px;
            text-align: center;
        }

        table {
            background-color: #ffffff;
            border-collapse: collapse;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .actions a {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <div class="col-12">
            <h2>Lugares Turísticos</h2>


            <table class="table table-responsive table-striped">
                <thead>
                    <th>Nombre del Lugar</th>
                    <th>Descripción</th>
                    <th>Ubicación</th>
                    <th>Horario de atención</th>
                    <th>Costo de entrada</th>
                    <th>Acciones</th>

                </thead>
                <tbody>
                <?php foreach($lugares as $lugar): ?>
                    <tr>
                        <td><?=$lugar->nombre_lugar ?></td>
                        <td><?=$lugar->descripcion ?></td>
                        <td><?=$lugar->ubicacion ?></td>
                        <td><?=$lugar->horario ?></td>
                        <td><?=$lugar->costo_entrada ?></td>
                        <td class="actions">
                                <a href="<?= base_url('index.php/lugar/delete/'.$lugar->lugar_id); ?>" class="btn btn-danger btn-xs">Eliminar</a>
                                <a href="<?= base_url('index.php/lugar/editar/'.$lugar->lugar_id); ?>" class="btn btn-primary btn-xs">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- Agrega los scripts de Bootstrap al final del documento -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>


