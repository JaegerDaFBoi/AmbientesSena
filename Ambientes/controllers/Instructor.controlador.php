<?php

require_once "../models/Instructor.php";

class InstructorController extends Controller
{
  private $model;

  public function __construct()
  {
    parent:: __construct();
    $this->model = new Instructor();
  }

  public function Index()
  {
    require_once "../views/pages/menu.php";
    require_once "../views/instructores/displaytable.php";
    require_once "../views/pages/footer.php";
  }

  public function Insert()
  {
    require_once "../views/pages/menu.php";
    require_once "../views/pages/instructores/insert.php";
    require_once "../views/pages/footer.php";
  }

  public function Save()
  {
    $data = new Instructor();

    $data->nombre = $_REQUEST['nombreInstructor'];
    $data->cedula = $_REQUEST['cedulaInstructor'];
    $data->area = $_REQUEST['area'];
    $data->tipo = $_REQUEST['tipoinstructor'];
    $data->vinculacion = $_REQUEST['vinculacion'];
    $data->totalhoras = $_REQUEST['totalhoras'];
    
    $this->model->Insert($data);
    header('Location:displaytable.php?c=instructores');
  }
}