<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambientes SENA</title>
    <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
    <!-- Iconos Font Awesome. Tomado de la plantilla AdminLTE -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Tema Admin LTE-->
    <link rel="stylesheet" href="./css/adminlte/adminlte.min.css">
    <!-- Api para fuentes de Google. Tomado de la plantilla AdminLTE -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Barra de navegación superior -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- Enlace que permite tener un boton que permita mostrar/ocultar la barra lateral -->
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <!-- Pagina principal a visualizar --> 
                    <a href="#" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Visualizar horarios</a>
                </li>
            </ul>
            <!-- Elemento Ul para enlaces en la parte derecha del navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Enlace que permite tener un boton que muestre/oculte la barra lateral derecha -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
                </li>
            </ul>
        </nav>
        <!--Finaliza codigo Barra de navegacion superior -->
        <!-- Barra lateral principal -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="./logosena.jpg" alt="logosena" class="brand-image img-circle elevation-3" style="opacity: .8;">
                <span class="brand-text font-weight-light">Ambientes</span>
            </a>
            <div class="sidebar"> 
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-thin fa-address-book"></i>
                            <p>
                                Directorio
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../pages/instructores/insert.php" class="nav-link active">
                                    <p>Instructores</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>Fichas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>Programas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>Historial de Asignaciones</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            </div>
        </aside>
        <!-- Finaliza codigo Barra lateral principal -->
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
</body>
</html>