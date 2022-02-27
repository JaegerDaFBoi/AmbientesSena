<?php
    require "config.php";

    $connection=mysqli_connect('HOST_DB','USER_DB','PASSWORD_DB','NAME_DB');

    if (!$connection) {
        die("Error connecting to database: ".mysqli_connect_error());
    }
?>