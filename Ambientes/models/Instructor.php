<?php
require_once "./Database.php";

class Instructor
{
  private $pdo;
  public $nombre;
  public $cedula;
  public $area;
  public $tipo;
  public $vinculacion;
  public $totalhoras;

  public function __construct()
  {
    $this->pdo=new Database();
  }

  public function Insert(Instructor $data)
  {
    try {
      $query="INSERT INTO instructores (nombre,cedula,area,tipo,vinculacion,totalhoras) VALUES (?,?,?,?,?,?)";
      $this->pdo->prepare($query)->execute(
        array(
          $data->nombre,
          $data->cedula,
          $data->area,
          $data->tipo,
          $data->vinculacion,
          $data->totalhoras
        )
        );
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}