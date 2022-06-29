<?php

try{
    $conn = new PDO('mysql:host=localhost;dbname=fgj', "root", null);
    $consulta_nuevo_laredo = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'I - Nuevo Laredo' ORDER BY municipio");
    $consulta_reynosa = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'II - Reynosa' ORDER BY municipio");
    $consulta_matamoros = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'III - Matamoros' ORDER BY municipio");
    $consulta_victoria = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'IV - Victoria' ORDER BY municipio");
    $consulta_el_mante = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'V - EL Mante' ORDER BY municipio");
    $consulta_zona_sur = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'VI - Zona Sur' ORDER BY municipio");

    function consultaRegiones($consulta){
        foreach($consulta as $fila) {

            // echo '<div class="contenido">';
            echo    '<div class="contenido-bloque">';
            echo        '<div class="contenido-titulo">';
            echo            '<h2><span id="titulo-municipio">' . $fila[2] . '</span></h2>'; //municipio
            echo        '</div>';
            echo        '<div class="contenido-texto-encabezado">';
            echo            '<div class="contenido-texto-cuerpo">';
            echo                '<h3>' . $fila[13] . '</h3>';
            echo                '<p>' . $fila[10] . ", CP. " . $fila[12] . '</p>';
            echo                '<p>Colonia: ' . $fila[11] . '</p>';
            echo                '<p>' . $fila[13] . ', Tamaulipas</p>';
            echo                '<p>Teléfono: ' . '<a href=+52' . $fila[17] . '>' . $fila[17] .'</a>' . '</p>';
            echo                '<p>' . '<a href="ficha.php">Ver ficha de inmueble...</a>' .'</p>';
            echo            '</div>';
            echo        '</div>';
            echo    '</div>';
            // echo '</div>';
        }
        
    }

    $conn = null;

}catch(PDOException $e){
    echo "No se pudo establecer la conexión" . $e->getMessage() . "<br>";
}

?>