<?php
    class Connection
    {
        public function connect()
        {
            $dbs='mysql:dbname=ambientes;host=localhost';
            $usuario='root';
            $contraseña='';
            try{
                $base=new PDO($dbs,$usuario,$contraseña);
                echo "Conexion exitosa <br>";
                return $base;
            } catch (PDOException $e) {
                echo "Fallo la conexion: ". $e->getMessage();
            }
        }
    }
?>