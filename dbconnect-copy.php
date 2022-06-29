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
            echo "<pre>";
            print_r($fila);
            echo "</pre>";
        }
        echo '<div class="contenido">';
        echo    '<div class="contenido-bloque">';
        echo        '<div class="contenido-titulo">';
        echo            '<h2><span id="titulo-municipio">Nuevo Laredo</span></h2>';
        echo        '</div>';
        echo        '<div class="contenido-texto-encabezado">';
        echo            '<div class="contenido-texto-cuerpo">';
        echo                '<h3>Centro de Justicia</h3>';
        echo                '<p>Domicilio conocido s/n Col. Conocida, CP. 87000</p>';
        echo                '<p>Nuevo Laredo, Tamaulipas</p>';
        echo                '<p><a href="tel:+34678567876">8343140947</a></p>';
        echo                '<p><a href="ficha.php">Ver ficha de inmueble...</a></p>';
        echo            '</div>';
        echo        '</div>';
        echo    '</div>';
        echo '</div>';
    }

    consultaRegiones($consulta_nuevo_laredo);

    $conn = null;



}catch(PDOException $e){
    echo "No se pudo establecer la conexión" . $e->getMessage() . "<br>";
}
?>