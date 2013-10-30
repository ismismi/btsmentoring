<?php 

    $entero = 7;
    $cadena = "foo bar";
    $flotante = 3.141516;
    $boleano = true;

    echo is_int($entero);
    echo is_string($entero);
?>  <br/>

<?php  

    echo "<$entero> es entero: " . is_int($entero);

    echo "<br/>";

    $intA = 7;
    $intB = 3;
    $fakeInt = '2';

    echo $intA + $intB . "<br/>";
    echo $intB + $fakeInt "<br/>";

    echo "PI: " . intval(3.1416);