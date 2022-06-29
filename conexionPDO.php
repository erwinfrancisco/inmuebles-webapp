<?php

try{
    $mbd = new PDO('mysql:host=localhost;dbname=fgj', "root", null);
    
    foreach($mbd->query("SELECT * from inmuebles where municipio = 'Nuevo Laredo'") as $fila) {
        echo "<pre>";
        print_r("<br>Tipo de inmueble: " . $fila[1]);
        print_r("<br>Nombre: " . $fila[2]);
        print_r("<br>Domicilio: " . $fila[10]);
        print_r("<br>" . $fila[11] . " C.P." . $fila[12]);
        print_r("<br>Superficie Terreno: " . $fila[5] ." m2");
        print_r("<br>Construcción: " . $fila[6] . " m2");

        echo "</pre>";
    }
    $mbd = null;
}catch(PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
};
?>