<?php


    $hey = array (29, 30, 1983, "November", "test");



    foreach ($hey as $value) {
        echo ($value) . "<br/>";   
    }


    $days = array ("sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday");

    for ($i = 0; $i <= 6; $i++) {
        echo $days[$i] . "<br/>";   
    } 

    print_r($days);

    $info= array (
        Name => 'Ismael', 
        Surname => 'Perez', 
        BirthMonth =>'November', 
        BirthDay => 8, 
        BirthYear => 1983
    );

    $volmar = array (
        Name => "Volmar",
        Surname => "Machado",
        Position => "Developer",
        Age => 27
    );

    $employees = array ($info, $volmar);

    foreach ($info as $value) {
        echo $value . "<br/>";   
    }


    foreach ($volmar as $value) {
        echo $value . "<br/>";   
    } 

    echo "<br/>";

array_push($employees, array(
    Name => "Raul",
    Surname => "Dominguez",
    Age => 31
));

    print_r($employees);

    