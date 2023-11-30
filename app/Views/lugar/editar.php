<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar Festividad</h2>
            <form action="<?=base_url('lugar/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?=$lugar->lugar_id ?>" />
                <div class="mb-3">
                    <label for="nombre_lugar" class="form-label">Nombre del lugar Turístico</label>
                    <input type="text" class="form-control" name="nombre_lugar" id="nombre_lugar" value=<?=$lugar->nombre_lugar ?>>
                </div>
                
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" 
                    id="descripcion"  value=<?=$lugar->descripcion ?>>
                </div>

                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" name="ubicacion" 
                    id="ubicacion"  value=<?=$lugar->ubicacion ?>>
                </div>

                <div class="mb-3">
                    <label for="horario" class="form-label">Horario de atención</label>
                    <input type="double" class="form-control" name="horario" 
                    id="horario"  value=<?=$lugar->horario ?>>
                </div>

                <div class="mb-3">
                    <label for="costo_entrada" class="form-label">Costo de entrada</label>
                    <input type="text" class="form-control" name="costo_entrada" 
                    id="costo_entrada"  value=<?=$lugar->costo_entrada?>>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>