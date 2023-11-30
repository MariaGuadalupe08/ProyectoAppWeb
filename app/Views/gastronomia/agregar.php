<div class="container">
    <div class="row">
    <?php 
        if(isset($validation)){
                print $validation->listErrors();
        }
        ?>


        <h2>Agregar Comida</h2>

        <div class="col-8">
            <form action="<?= base_url('index.php/gastronomia/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre_restaurante" class="form-label">Nombre del restaurante</label>
                    <input type="text" class="form-control" name="nombre_restaurante" id="nombre_restaurante">
                </div>

                <div class="mb-3">
                    <label for="tipo_comida" class="form-label">Tipo de comida</label>
                    <input type="text" class="form-control" name="tipo_comida" id="tipo_comida">
                </div>
                
                <div class="mb-3">
                    <label for="tipo_cocina" class="form-label">Tipo de cocina </label>
                    <input type="text" class="form-control" name="tipo_cocina" id="tipo_cocina">
                </div>


                <div class="mb-3">
                    <label for="capacidad" class="form-label">Capacidad</label>
                    <input type="int" class="form-control" name="capacidad" id="capacidad">
                </div>

                
                <div class="mb-3">
                    <label for="direccion" class="form-label">direccion</label>
                    <input type="text" class="form-control" name="direccion" id="direccion">
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
    </div>
</div>