<div class="container">
    <div class="row">
    <?php 
        if(isset($validation)){
                print $validation->listErrors();
        }
        ?>

        <h2>Agregar Festividad</h2>

        <div class="col-8">
            <form action="<?= base_url('index.php/festividad/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre_festividad" class="form-label">Nombre de la festividad</label>
                    <input type="text" class="form-control" name="nombre_festividad" id="nombre_festividad">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>
                
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="double" class="form-control" name="precio" id="precio">
                </div>

                <div class="mb-3">
                    <label for="atracciones" class="form-label">Atracciones</label>
                    <input type="text" class="form-control" name="atracciones" id="atracciones">
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" id="fecha">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
    </div>
</div>