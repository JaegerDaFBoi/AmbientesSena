<?php
    define ('APP_URL', 'http://localhost/repositorios/AmbientesSena');// URL de PC en casa
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
            <img src="<?php echo APP_URL;?>/Formularios/views/logo-sena.jpg" width="100" height="100" alt="logosena">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Ver Horarios</a>
            </li>
        </ul>
    </div>
    </div>
</nav>