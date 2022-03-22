<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Instructor</title>
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../css/adminlte/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
    <?php include_once "../menu.php"; ?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Crear un nuevo registro de Instructor</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Volver al Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Ver Tabla</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" action="../../../controllers/Instructor.controlador.php">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="nombreInstructor">Nombre de Instructor</label>
                                            <input type="text" class="form-control" id="nombreInstructor" name="nombreInstructor" placeholder="Ingrese nombre aquí...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cedulaInstructor">Numero de Documento</label>
                                            <input type="text" class="form-control" id="cedulaInstructor" name="cedulaInstructor" placeholder="Ingrese documento aquí...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="area">Área</label>
                                            <select class="form-control" id="area" name="area">
                                                <option disabled selected>Seleccione un área</option>
                                                <option>AREA DE SISTEMAS, MANTENIMIENTO DE EQUIPOS DE COMPUTO Y DISEÑO GRAFICO Y MULTIMEDIAL</option>
                                                <option>AREA DE ELECTRONICA Y MANTENIMIENTO ELECTRONICO</option>
                                                <option>AREA DE DISEÑO, IMPLEMENTACION Y MANTENIMIENTO DE SISTEMAS DE TELECOMUNICACIONES</option>
                                                <option>AREA DE TELEINFORMATICA Y ADSI</option>
                                                <option>AREA DE CNC</option>
                                                <option>GESTION DE LA PRODUCCION INDUSTRIAL</option>
                                                <option>AREA DE AUTOMATIZACION INDUSTRIAL Y DISEÑO E INTEGRACION DE AUTOMATISMOS MECATRONICOS</option>
                                                <option>INTERACCION IDONEA COMUNICACION</option>
                                                <option>AREA DE INGLES</option>
                                                <option>AREA DE MANTENIMIENTO BIOMEDICO</option>
                                                <option>CULTURA FISICA</option>
                                                <option>EMPRENDIMIENTO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tipo de Instructor</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tipoinstructor">
                                                <label class="form-check-label">Virtual</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tipoinstructor">
                                                <label class="form-check-label">Presencial</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tipo de Contrato</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="vinculacion">
                                                <label class="form-check-label">Planta</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="vinculacion">
                                                <label class="form-check-label">Contratista</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="totalhoras">Total/horas del Instructor</label>
                                            <input type="number" class="form-control" id="totalhoras" name="totalhoras">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-dark">
                                            Guardar Registro
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn-btn-primary" name="limpiar">
                                            Limpiar Formulario
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include_once "../footer.php"; ?>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>