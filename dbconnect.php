<?php
// Conexión PDO
try{
    // Conexión a la base de datos
    $conn = new PDO('mysql:host=localhost;dbname=fgj', "root", null);

    // Consulta por regiones
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

    // Consulta por municipios
    $mun_abasolo = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Abasolo' ORDER BY nombre_alias");
    $mun_aldama = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Aldama' ORDER BY nombre_alias");
    $mun_altamira = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Altamira' ORDER BY nombre_alias");
    $mun_antiguo_morelos = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Antiguo Morelos' ORDER BY nombre_alias");
    $mun_burgos = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Burgos' ORDER BY nombre_alias");
    $mun_bustamante = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Bustamante' ORDER BY nombre_alias");
    $mun_camargo = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Camargo' ORDER BY nombre_alias");
    $mun_casas = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Casas' ORDER BY nombre_alias");
    $mun_aldama = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Aldama' ORDER BY nombre_alias");
    $mun_ciudad_madero = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Ciudad Madero' ORDER BY nombre_alias");
    $mun_cruillas = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Cruillas' ORDER BY nombre_alias");
    $mun_aldama = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Aldama' ORDER BY nombre_alias");
    $mun_gomez_farias = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Gómez Farías' ORDER BY nombre_alias");
    $mun_gonzalez = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'González' ORDER BY nombre_alias");
    $mun_guemez = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Güemez' ORDER BY nombre_alias");
    $mun_guerrero = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Guerrero' ORDER BY nombre_alias");
    $mun_diaz_ordaz = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Gustavo Díaz Ordaz' ORDER BY nombre_alias");
    $mun_hidalgo = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Hidalgo' ORDER BY nombre_alias");
    $mun_jaumave = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Jaumave' ORDER BY nombre_alias");
    $mun_jimenez = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Jiménez' ORDER BY nombre_alias");
    $mun_llera = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Llera' ORDER BY nombre_alias");
    $mun_mainero = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Mainero' ORDER BY nombre_alias");
    $mun_el_mante = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'El Mante' ORDER BY nombre_alias");
    $mun_matamoros = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Matamoros' ORDER BY nombre_alias");
    $mun_mendez = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Méndez' ORDER BY nombre_alias");
    $mun_mier = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Mier' ORDER BY nombre_alias");
    $mun_miguel_aleman = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Miguel Alemán' ORDER BY nombre_alias");
    $mun_miquihuana = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Miguel Alemán' ORDER BY nombre_alias");
    $mun_nuevo_laredo = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Nuevo Laredo' ORDER BY nombre_alias");
    $mun_nuevo_morelos = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Nuevo Morelos' ORDER BY nombre_alias");
    $mun_ocampo = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Ocampo' ORDER BY nombre_alias");
    $mun_padilla = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Padilla' ORDER BY nombre_alias");
    $mun_palmillas = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Palmillas' ORDER BY nombre_alias");
    $mun_reynosa = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Reynosa' ORDER BY nombre_alias");
    $mun_rio_bravo = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Río Bravo' ORDER BY nombre_alias");
    $mun_san_carlos = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'San Carlos' ORDER BY nombre_alias");
    $mun_san_fernando = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'San Fernando' ORDER BY nombre_alias");
    $mun_san_nicolas = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'San Nicolás' ORDER BY nombre_alias");
    $mun_soto_la_marina = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Soto la Marina' ORDER BY nombre_alias");
    $mun_tampico = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Tampico' ORDER BY nombre_alias");
    $mun_tula = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Tula' ORDER BY nombre_alias");
    $mun_valle_hermoso = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Valle Hermoso' ORDER BY nombre_alias");
    $mun_victoria = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Victoria' ORDER BY nombre_alias");
    $mun_villagran = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Villagrán' ORDER BY nombre_alias");
    $mun_xicotencatl = $conn->query("SELECT * FROM inmuebles WHERE municipio = 'Xicoténcatl' ORDER BY nombre_alias");


    
    function consultaMunicipio($consulta){
        foreach($consulta as $fila) {
            
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
            echo                "<p>Teléfono: " . $fila[17] . "</p>";
            echo                '<p>' . '<a href="ficha.php">Ver ficha de inmueble...</a>' .'</p>';
            echo            '</div>';
            echo        '</div>';
            echo    '</div>';

        }

    }
    // Cerrar conexión
    $conn = null;

}catch(PDOException $e){
    echo "No se pudo establecer la conexión" . $e->getMessage() . "<br>";
}

?>