<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar Hotel</h2>
            <form action="<?=base_url('hotel/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?=$hotel->hotel_id ?>" />
                <div class="mb-3">
                    <label for="nombre_hotel" class="form-label">Nombre del hotel</label>
                    <input type="text" class="form-control" name="nombre_hotel" id="nombre_hotel" value=<?=$hotel->nombre_hotel ?>>
                </div>
                
                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" 
                    id="direccion"  value=<?=$hotel->direccion ?>>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" 
                    id="telefono"  value=<?=$hotel->telefono ?>>
                </div>

                <div class="mb-3">
                    <label for="precio_hospedaje" class="form-label">Precio de hospedaje</label>
                    <input type="double" class="form-control" name="precio_hospedaje" 
                    id="precio_hospedaje"  value=<?=$hotel->precio_hospedaje ?>>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" 
                    id="descripcion"  value=<?=$hotel->descripcion ?>>
                </div>

                <div class="mb-3">
                    <label for="estrellas" class="form-label">Estrellas</label>
                    <input type="int" class="form-control" name="estrellas" 
                    id="estrellas"  value=<?=$hotel->estrellas ?>>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>