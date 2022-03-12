<?php
    if (empty($_POST)) {
        header("location: ./index.php");
    }

    function save($name,$doc,$area,$type)
    {
        require_once "../../database/connection.php";
        $query = "INSERT INTO instructores (Nombre,Documento,Area,Tipo) VALUES ('$name', '$doc', '$area', '$type')";
        $saved = mysqli_query($connection,$query);

        if ($saved) {
            header("location: ./add.php?status=success");
        } else {
            echo "Error insertando: ".mysqli_error($connection);
        }
    }

    $nombre = isset($_POST['nombre_instructor']) ? $_POST['nombre_instructor'] : "";
    $documento = $_POST['doc_instructor'] ?? "";
    $area = $_POST['area_instructor'] ?? "";
    $tipo = $_POST['tipo_instructor'] ?? "";

    save($nombre,$documento,$area,$tipo);
?>