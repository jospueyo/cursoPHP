<?php

require_once 'core/crud.php';

//Id	name	lastName	sex	addres	phone	age

class User extends Crud
{
  private $id;
  private $name;
  private $lastName;
  private $sex;
  private $addres;
  private $phone;
  private $age;

  const TABLE='user';

  private $pdo;

  public function __construct()
  {
    parent::__construct(self::TABLE);
    $this->pdo=parent::connection();
  }

  public function __set($name,$value)
  {
    $this ->$name=$value;
  }

  public function __get($name)
  {
    $this ->$name;
  }

  public function create(){
    try {
      $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (name,lastName,sex,addres,phone,age) VALUES(?,?,?,?,?,?)");
      $stm->execute([$this->name,$this->lastName,$this->sex,$this->addres,$this->phone,$this->age]);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }


  }

  public function update(){
    try {
      $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET name=?,lastName=?,sex=?,addres=?,phone=?,age=? WHERE id=?");
      $stm->execute([$this->name,$this->lastName,$this->sex,$this->addres,$this->phone,$this->age]);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
  }
}

 ?>
