<?php
    require_once 'model/animal.php';
    require_once 'model/user.php';
    require_once 'model/adoption.php';

    //INSTANTIATE ANIMAL
    $animal=new Animal();

    $animal->name='ozzy';
    $animal->specie='Gato';
    $animal->breed='akita';
    $animal->gender='macho';
    $animal->age=12;
    $animal->color='marró';

    $animal->create();

    //$animal->delete(3);

    $animal->id='2';
    $animal->update();

    print_r($animal->getAll());

    //INSTANTIATE USER
    $user=new User();

    $user->name="Josep";
    $user->lastName="Pueyo";
    $user->sex="Hombre";
    $user->addres="Madremanya";
    $user->phone="688 920 590";
    $user->age=38;

    //$user->create();
    print_r($user->getAll());

    //INSTANTIATE ADOPTION
    $adoption=new Adoption();

    $adoption->idAnimal=1;
    $adoption->idUser=1;
    $adoption->date="09/09/2020";
    $adoption->reason="Perquè em dona la gana";

    //$adoption->create();
    print_r($adoption->getAll());
?>
