<?php
// $municipios = array('Abasolo','Aldama','Altamira','Antiguo', 'Morelos','Burgos','Bustamante','Camargo','Casas','Ciudad Madero','Cruillas','Gómez Farías','González','Güémez','Guerrero','Gustavo Díaz O.','Hidalgo','Jaumave','Jiménez','Llera','Mainero','El Mante','Matamoros','Méndez','Mier','Miguel Alemán','Miquihuana','Nuevo Laredo','Nuevo Morelos','Ocampo','Padilla','Palmillas','Reynosa','Río Bravo','San Carlos','San Fernando','San Nicolás','Soto la Marina','Tampico','Tula','Valle Hermoso','Victoria','Villagrán','Xicoténcatl');

$municipios1  = array('Abasolo'=>'abasolo','Aldama'=>'aldama','Altamira'=>'altamira','Antiguo Morelos'=>'antiguo-morelos','Burgos'=>'burgos','Bustamante'=>'bustamante','Camargo'=>'camargo','Casas'=>'casas','Ciudad Madero'=>'ciudad-madero','Cruillas'=>'cruillas','Gómez Farías'=>'gomez-farias','González'=>'gonzalez','Güémez'=>'guemez','Guerrero'=>'guerrero','Gustavo Díaz O.'=>'diaz-ordaz','Hidalgo'=>'hidalgo','Jaumave'=>'jaumave','Jiménez'=>'jimenez','Llera'=>'llera','Mainero'=>'mainero','El Mante'=>'el-mante');


$municipios2  = array('Matamoros'=>'matamoros','Méndez'=>'mendez','Mier'=>'mier','Miguel Alemán'=>'miguel-aleman','Miquihuana'=>'miquihuana','Nuevo Laredo'=>'nuevo-laredo','Nuevo Morelos'=>'nuevo-morelos','Ocampo'=>'ocampo','Padilla'=>'padilla','Palmillas'=>'palmillas','Reynosa'=>'reynosa','Río Bravo'=>'rio-bravo','San Carlos'=>'san-carlos','San Fernando'=>'san-fernando','San Nicolás'=>'san-nicolas','Soto la Marina'=>'soto-la-marina','Tampico'=>'tampico','Tula'=>'tula','Valle Hermoso'=>'valle-hermoso','Victoria'=>'victoria','Villagrán'=>'villagran','Xicoténcatl'=>'xicontecatl');

function municipios1(){
    foreach ($GLOBALS["municipios1"] as $key => $value){
        
        //echo "<a href='municipios.php?municipios='" . $GLOBALS["municipios1"][$value] . ".php";
        echo "<a class='enlace-municipio' href='municipios.php?municipio=" . $value . "'>" . "<div class='nombre-municipio-btn'><tr><span class='municipio-texto-btn'>". $key . "</span></tr></div></a>";
        //echo "</a>";
    
    }
}

function municipios2(){
    foreach ($GLOBALS["municipios2"] as $key => $value){
        
        //echo "<a href='municipios.php?municipios='" . $GLOBALS["municipios1"][$value] . ".php";
        echo "<a class='enlace-municipio' href='municipios.php?municipio=" . $value . "'>" . "<div class='nombre-municipio-btn'><tr><span class='municipio-texto-btn'>". $key . "</span></tr></div></a>";
        //echo "</a>";
    
    }
}





?>