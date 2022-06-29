<?php

include("./main.php");
include("./dbconnect.php");

if(isset($_REQUEST['fiscalia'])){
    if($_REQUEST['fiscalia'] == "nuevo-laredo"){
        consultaRegiones($consulta_nuevo_laredo);
    }elseif($_REQUEST['fiscalia'] == "matamoros"){
        consultaRegiones($consulta_matamoros);
    }elseif($_REQUEST['fiscalia'] == "reynosa"){
        consultaRegiones($consulta_reynosa);
    }elseif($_REQUEST['fiscalia'] == "victoria"){
        consultaRegiones($consulta_victoria);
    }elseif($_REQUEST['fiscalia'] == "el-mante"){
        consultaRegiones($consulta_el_mante);
    }elseif($_REQUEST['fiscalia'] == "zona-sur"){
        consultaRegiones($consulta_zona_sur);
    }else{
        echo "verifica tu solicitud";
    }



}