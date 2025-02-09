<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container position-static top-50 start-50">
        <div class="row justify-content-center p-5">
            <h1 class="text-center shadow-lg p-3 mb-5 bg-body-tertiary bg-info-subtle rounded-5">Modificar clientes</h1>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 bg-info-subtle text-info-emphasis p-5 border border-danger rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary">
                <form action="<?= base_url('modificar_cliente')?>" method="post">
                    <div class="mb-3">
                        <label for="txtId" class="form-label">ID</label>
                        <input type="text" id="txtId" name="txtId" class="form-control"
                        value="<?= $datos['cliente_id'];?>"
                        readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control"
                        value="<?= $datos['nombre'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                        value="<?= $datos['apellido'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCorreo" class="form-label">Correo Electronico</label>
                        <input type="email" id="txtCorreo" name="txtCorreo" class="form-control"
                        value="<?= $datos['correo_electronico'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCalleAvenida" class="form-label">Calle o Avenida</label>
                        <input type="text" id="txtCalleAvenida" name="txtCalleAvenida" class="form-control"
                        value="<?= $datos['calle_avenida'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtNoCasa" class="form-label">Numero de Casa</label>
                        <input type="txt" id="txtNoCasa" name="txtNoCasa" class="form-control"
                        value="<?= $datos['no_casa'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtZona" class="form-label">Zona</label>
                        <input type="number" id="txtZona" name="txtZona" class="form-control"
                        value="<?= $datos['zona'];?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardar" name="btnGuardar" class="form-control btn btn-primary" value="Guardar">
                    </div>

                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>