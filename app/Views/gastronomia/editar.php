<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar Comida</h2>
            <form action="<?=base_url('gastronomia/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?=$gastronomia->gastronomia_id ?>" />
                <div class="mb-3">
                    <label for="nombre_restaurante" class="form-label">Nombre del restaurante</label>
                    <input type="text" class="form-control" name="nombre_restaurante" id="nombre_restaurante" value=<?=$gastronomia->nombre_restaurante ?>>
                </div>
                
                <div class="mb-3">
                    <label for="tipo_comida" class="form-label">Tipo de comida</label>
                    <input type="text" class="form-control" name="tipo_comida" 
                    id="tipo_comida"  value=<?=$gastronomia->tipo_comida ?>>
                </div>

                <div class="mb-3">
                    <label for="tipo_cocina" class="form-label">Tipo de cocina</label>
                    <input type="text" class="form-control" name="tipo_cocina" 
                    id="tipo_cocina"  value=<?=$gastronomia->tipo_cocina ?>>
                </div>

                <div class="mb-3">
                    <label for="capacidad" class="form-label">Capacidad de clientes</label>
                    <input type="int" class="form-control" name="capacidad" 
                    id="capacidad"  value=<?=$gastronomia->capacidad ?>>
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="direccion" 
                    id="direccion"  value=<?=$gastronomia->direccion?>>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" 
                    id="telefono"  value=<?=$gastronomia->telefono?>>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción del lugar</label>
                    <input type="text" class="form-control" name="descripcion" 
                    id="descripcion"  value=<?=$gastronomia->descripcion?>>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>