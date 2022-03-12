<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Instructor</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
    <?php include_once "../menu.php"; ?>
    <div class="container">
        <?php
        if (isset($_GET['status'])) {
            ?>
            <div class="row">
                <div class="alert alert-success" role="alert">
                    Contacto almacenado
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="row">
        <form action="../../functions/instructores/save.php" method="POST" class="card-body">
            <h1 class="card-title">Crear registro de Instructor</h1>
            <div class="col-12">
                <label for="nombre_instructor" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_instructor" name="nombre_instructor" placeholder="Ingrese nombre aqui...">
            </div>
            <div class="col-12">
                <label for="doc_instructor" class="form-label">Documento</label>
                <input type="text" class="form-control" id="doc_instructor" name="doc_instructor" placeholder="Solo números...">
            </div>
            <div class="col-12">
                <label for="area_instructor" class="form-label">Area del Instructor</label>
                <input type="text" class="form-control" id="area_instructor" name="area_instructor">
            </div>
            <div class="col-12">
                <label for="tipo_instructor" class="form-label">Tipo de Contrato</label>
                <input type="text" class="form-control" id="tipo_instructor" name="tipo_instructor">
            </div>
            <button class="btn btn-primary col-12 mt-3">Guardar🖊</button>
        </form>
    </div>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>