<?php

require_once 'core/crud.php';

//id	idAnimal	idUser	date	reason

class Adoption extends Crud
{
  private $id;
  private $idAnimal;
  private $idUser;
  private $date;
  private $reason;

  const TABLE='adoption';

  private $pdo;

  public function __construct()
  {
    parent::__construct(self::TABLE);
    $this->pdo=parent::connection();
  }

  public function __set($name,$value)
  {
    $this->$name=$value;
  }

  public function __get($name)
  {
    $this->$name;
  }

  public function create(){
    try {
      $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (idAnimal,idUser,date,reason) VALUES(?,?,?,?)");
      $stm->execute([$this->idAnimal,$this->idUser,$this->date,$this->reason]);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }


  }

  public function update(){
    try {
      $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET idAnimal=?,=?,idUser=?,date=?,reason=? WHERE id=?");
      $stm->execute([$this->name,$this->idAnimal,$this->idUser,$this->date,$this->reason]);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
  }
}

 ?>
