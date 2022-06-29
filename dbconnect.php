<?php


try{
    $conn = new PDO('mysql:host=localhost;dbname=fgj', "root", null);
    $consulta_nuevo_laredo = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'I - Nuevo Laredo'");
    $consulta_reynosa = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'II - Reynosa'");
    $consulta_matamoros = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'III - Matamoros'");
    $consulta_victoria = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'IV - Victoria'");
    $consulta_el_mante = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'V - EL Mante'");
    $consulta_zona_sur = $conn->query("SELECT * FROM inmuebles WHERE fiscalia_distrito = 'VI - Zona Sur'");

    function consultaRegiones($consulta){
        foreach($consulta as $fila) {

            echo '<div class="contenido">';
            echo    '<div class="contenido-bloque">';
            echo        '<div class="contenido-titulo">';
            echo            '<h2><span id="titulo-municipio">' . $fila[13] . '</span></h2>'; //municipio
            echo        '</div>';
            echo        '<div class="contenido-texto-encabezado">';
            echo            '<div class="contenido-texto-cuerpo">';
            echo                '<h3>' . $fila[2] . '</h3>';
            echo                '<p>' . $fila[10] . ", CP. " . $fila[12] . '</p>';
            echo                '<p>Colonia: ' . $fila[12] . '</p>';
            echo                '<p>' . $fila[13] . ', Tamaulipas</p>';
            echo                '<p>Tel:' . '<a href="tel:+' . $fila[17] . '></a></p><br>';
            echo                '<p>' . '<a href="ficha.php">Ver ficha de inmueble...</a>' .'</p>';
            echo            '</div>';
            echo        '</div>';
            echo    '</div>';
            echo '</div>';
            // echo "<pre>";
            // print_r("<br>Tipo de inmueble: " . $fila[1]);
            // print_r("<br>Nombre: " . $fila[2]);
            // print_r("<br>Domicilio: " . $fila[10]);
            // print_r("<br>" . $fila[11] . " C.P." . $fila[12]);
            // print_r("<br>Superficie Terreno: " . $fila[5] ." m2");
            // print_r("<br>Construcción: " . $fila[6] . " m2");
            // echo "</pre>";
        }
        
    }

    $conn = null;



}catch(PDOException $e){
    echo "No se pudo establecer la conexión" . $e->getMessage() . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'css/estilos.css'?></style>
    <title>Document</title>
</head>
<body>
    
</body>
</html>