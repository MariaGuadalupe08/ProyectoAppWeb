<div class="container">
    <div class="row">
    <?php 
        if(isset($validation)){
                print $validation->listErrors();
        }
        ?>

        <h2>Agregar Lugar Turístico</h2>

        <div class="col-8">
            <form action="<?= base_url('index.php/lugar/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre_lugar" class="form-label">Nombre del Lugar turistico</label>
                    <input type="text" class="form-control" name="nombre_lugar" id="nombre_lugar">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>
                
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicacion </label>
                    <input type="text" class="form-control" name="ubicacion" id="ubicacion">
                </div>

                <div class="mb-3">
                    <label for="horario" class="form-label">Horario</label>
                    <input type="text" class="form-control" name="horario" id="horario">
                </div>

                <div class="mb-3">
                    <label for="costo_entrada" class="form-label">Costo de entrada</label>
                    <input type="double" class="form-control" name="costo_entrada" id="costo_entrada">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
    </div>
</div>