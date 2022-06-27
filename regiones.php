<?php

include("./main.php");

if(isset($_REQUEST['fiscalia'])){
    if($_REQUEST['fiscalia'] == "nuevo-laredo"){
        echo "<h1>estas en nuevo laredo</h1>";
    }elseif($_REQUEST['fiscalia'] == "matamoros"){
        echo "<h1>estas en matamoros</h1>";
    }elseif($_REQUEST['fiscalia'] == "reynosa"){
        echo "<h1>estas en reynosa</h1>";
    }elseif($_REQUEST['fiscalia'] == "victoria"){
        echo "<h1>estas en victoria</h1>";
    }elseif($_REQUEST['fiscalia'] == "el-mante"){
        echo "<h1>estas en mante</h1>";
    }elseif($_REQUEST['fiscalia'] == "zona-sur"){
        echo "<h1>estas en Zona Sur</h1>";
    }else{
        echo "verifica tu solicitud";
    }



}


echo "<pre>";
echo print_r($_REQUEST);
echo "</pre>";
;

echo "<hr>";

$array = ['Imelda', 'Francisco', 'Bryan', 'Fátima', 'Erwin', 'Keily', 'Pedrito'];

foreach($array as $nombre){
    printf("<h3>Yo {$nombre} y soy parte de la familia Flores.</h3>");
    echo $array[1];
    echo $array[6];
};