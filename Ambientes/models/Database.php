<?php 

class Database extends PDO
{

  protected $connection;

  public function __construct()
  {
    try {
      $driver=TYPEDB.":host=".HOSTDB.";dbname=".NAMEDB;
      $options=[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
      ];
      $this->connection=new PDO($driver,USERDB,PASSDB,$options);
    } catch (PDOException $e) {
      die("❌ Error [Error BD]: ".$e->getMessage());
    }
  }
}