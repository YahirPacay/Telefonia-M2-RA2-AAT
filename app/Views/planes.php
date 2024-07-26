<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <br>
    <?php echo $this->include('plantilla/menu'); ?>

    <div class="container p-5">
        <h1>Planes</h1>
        <a href="nuevoplan" class="btn btn-primary">Nuevo Plan</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>pago mensual</th>
                    <th>cantidad de minutos</th>
                    <th>cantidad de mensajes</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($datos as $plan) : ?>

                    <tr>
                        <td><?php echo $plan['plan_id']; ?></td>
                        <td><?php echo $plan['nombre']; ?></td>
                        <td><?php echo $plan['pago_mensual']; ?></td>
                        <td><?php echo $plan['cantidad_minutos']; ?></td>
                        <td><?php echo $plan['cantidad_mensajes']; ?></td>
                        <td>
                            <a href="<?= base_url('buscar_plan/').$plan['plan_id'];?>" class="btn btn-success bi-feather">Actualizar</a>
                        </td>
                        <td>
                            <a href=" <?= base_url('eliminar_plan/').$plan['plan_id']; ?>" class="btn btn-danger bi-x-circle-fill">Eliminar</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>