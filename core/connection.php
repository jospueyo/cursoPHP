<?php

class Connection
{
  private $driver='mysql';
  private $host='localhost'; //ip del servidor
  private $user='root';
  private $pass='';
  private $dbName='sunny_side';
  private $charset='utf8';

  protected function connection()
  {
    try
    {
      $pdo=new PDO("{$this->driver}:host={$this->host};dbname={$this->dbName};charset:{$this->charset}",$this->user,$this->pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    }catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }
}

 ?>
