<?php
$municipios = array('Abasolo','Aldama','Altamira','Antiguo', 'Morelos','Burgos','Bustamante','Camargo','Casas','Ciudad Madero','Cruillas','Gómez Farías','González','Güémez','Guerrero','Gustavo Díaz Ordaz','Hidalgo','Jaumave','Jiménez','Llera','Mainero','El Mante','Matamoros','Méndez','Mier','Miguel Alemán','Miquihuana','Nuevo Laredo','Nuevo Morelos','Ocampo','Padilla','Palmillas','Reynosa','Río Bravo','San Carlos','San Fernando','San Nicolás','Soto la Marina','Tampico','Tula','Valle Hermoso','Victoria','Villagrán','Xicoténcatl');

$municipios1  = array('Abasolo','Aldama','Altamira','Antiguo', 'Morelos','Burgos','Bustamante','Camargo','Casas','Ciudad Madero','Cruillas','Gómez Farías','González','Güémez','Guerrero','Gustavo Díaz Ordaz','Hidalgo','Jaumave','Jiménez','Llera','Mainero','El Mante');

$municipios2  = array('Matamoros','Méndez','Mier','Miguel Alemán','Miquihuana','Nuevo Laredo','Nuevo Morelos','Ocampo','Padilla','Palmillas','Reynosa','Río Bravo','San Carlos','San Fernando','San Nicolás','Soto la Marina','Tampico','Tula','Valle Hermoso','Victoria','Villagrán','Xicoténcatl');

function municipios1(){
    foreach($GLOBALS["municipios1"] as $i){
        echo "<table>";
        echo "<tr>". $i . "</tr>";
        echo "</table>";
    
    }
}

function municipios2(){
    foreach($GLOBALS["municipios2"] as $i){
        echo "<table>";
        echo "<tr>". $i . "</tr>";
        echo "</table>";
    }

}





?>



<!-- <table>
    <thead>
        <th colspan="2">Municipios</th>
    </thead>
    <tr>
        <td>Abasolo</td>
    </tr>
    <tr>
        <td>Aldama</td>
    </tr>
    <tr>
        <td>Altamira</td>
    </tr>
    <tr>
        <td>Antiguo Morelos</td>
    </tr>
    <tr>
        <td>Burgos</td>
    </tr>
    <tr>
        <td>Bustamante</td>
    </tr>
    
</table> -->