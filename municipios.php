<?php include("./dbconnect.php");?>
<?php include('./MU00-tabla-contenido-mapa-municipios.php')?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link ref="stylesheet" rel="text/css" href="./css/estilos.css">
    
    
    
    
    <title>Inmuebles de la Fiscalía General de Justicia del Estado de Tamaulipas</title>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <?= include_once('./00-header-azul.php'); ?>
    </header>

    <!-- Título de la Sección -->
    <div class="titulo-principal">
        
    </div>

    <!-- Tabla de contenido de mapa -->
    <main>
        <div id="cuadro-flotante">
            <div class="tabla-contenido-mapa-municipios1">
            <?=municipios1();?>
            </div>
            <div class="tabla-contenido-mapa-municipios2">
                <?=municipios2();?>
            </div>

            <!-- Mapa Municipios de Tamaulipas -->
            <div class="mapa-fiscalias">
                <?php include('./MU01-mapa-municipios-svg.php')?>
            </div>
        </div>

        <!-- Contenido de Inmuebles por Fiscalía -->        
        <div style=background:white; class="contenido">
        <?php

        function warning(){
            echo "<p style='background-color:#D0D0D0;padding:5px;border-radius:5px;font-size:smaller;'> >>> No hay más inmuebles para mostrar...</p>";
        }

        function seleccionaMunicipio($str_municipio, $consulta){
            echo "<h2 style='text-align:center';>" . $str_municipio . "</h2>";
            if(consultaMunicipio($consulta) == null){
                warning();
            }
            return consultaMunicipio($consulta);
        }


        if(isset($_REQUEST['municipio'])){
            $pag = $_REQUEST['municipio'];
            switch($pag){
                // Primer bloque de municipios.
                case 'abasolo':
                    seleccionaMunicipio('Abasolo', $mun_abasolo);
                    break;
                case 'aldama':
                    seleccionaMunicipio('Aldama', $mun_aldama);
                    break;
                case 'altamira':
                    seleccionaMunicipio('Altamira', $mun_altamira);
                    break;
                case 'antiguo-morelos':
                    seleccionaMunicipio('Antiguo Morelos', $mun_antiguo_morelos);
                    break;
                case 'burgos':
                    seleccionaMunicipio('Burgos', $mun_burgos);
                    break;
                case 'bustamante':
                    seleccionaMunicipio('Bustamante', $mun_bustamante);
                    break;
                case 'camargo':
                    seleccionaMunicipio('Camargo', $mun_camargo);
                    break;
                case 'casas':
                    seleccionaMunicipio('Casas', $mun_casas);
                    break;
                case 'ciudad-madero':
                    seleccionaMunicipio('Ciudad Madero', $mun_ciudad_madero);
                    break;
                case 'cruillas':
                    seleccionaMunicipio('Cruillas', $mun_cruillas);
                    break;
                case 'gomez-farias':
                    seleccionaMunicipio('Gómez Farías', $mun_gomez_farias);
                    break;
                case 'gonzalez':
                    seleccionaMunicipio('González', $mun_gonzalez);
                    break;
                case 'guemez':
                    seleccionaMunicipio('Güemez', $mun_guemez);
                    break;
                case 'guerrero':
                    seleccionaMunicipio('Guerrero', $mun_guerrero);
                    break;
                case 'diaz-ordaz':
                    seleccionaMunicipio('Gustavo Díaz Ordaz', $mun_diaz_ordaz);
                    break;
                case 'hidalgo':
                    seleccionaMunicipio('Hidalgo', $mun_hidalgo);
                    break;
                case 'jaumave':
                    seleccionaMunicipio('Jaumave', $mun_jaumave);
                    break;
                case 'jimenez':
                    seleccionaMunicipio('Jiménez', $mun_jimenez);
                    break;
                case 'llera':
                    seleccionaMunicipio('Llera', $mun_llera);
                    break;
                case 'mainero':
                    seleccionaMunicipio('Mainero', $mun_mainero);
                    break;
                case 'el-mante':
                    seleccionaMunicipio('El Mante', $mun_el_mante);
                    break;
                // Segundo bloque de municipios.
                case 'matamoros':
                    seleccionaMunicipio('Matamoros', $mun_matamoros);
                    break;
                case 'mendez':
                    seleccionaMunicipio('Méndez', $mun_mendez);
                    break;
                case 'mier':
                    seleccionaMunicipio('Mier', $mun_mier);
                    break;
                case 'miguel-aleman':
                    seleccionaMunicipio('Miguel Alemán', $mun_miguel_aleman);
                    break;
                case 'miquihuana':
                    seleccionaMunicipio('Miquihuana', $mun_miquihuana);
                    break;
                case 'nuevo-laredo':
                    seleccionaMunicipio('Nuevo Laredo', $mun_nuevo_laredo);
                    break;
                case 'nuevo-morelos':
                    seleccionaMunicipio('Nuevo Morelos', $mun_nuevo_morelos);
                    break;
                case 'ocampo':
                    seleccionaMunicipio('Ocampo', $mun_ocampo);
                    break;
                case 'padilla':
                    seleccionaMunicipio('Padilla', $mun_padilla);
                    break;
                case 'palmillas':
                    seleccionaMunicipio('palmillas', $mun_palmillas);
                    break;
                case 'reynosa':
                    seleccionaMunicipio('Reynosa', $mun_reynosa);
                    break;
                case 'rio-bravo':
                    seleccionaMunicipio('Río Bravo', $mun_rio_bravo);
                    break;
                case 'san-carlos':
                    seleccionaMunicipio('San Carlos', $mun_san_carlos);
                    break;
                case 'san-fernando':
                    seleccionaMunicipio('San Fernando', $mun_san_fernando);
                    break;
                case 'san-nicolas':
                    seleccionaMunicipio('San Nicolás', $mun_san_nicolas);
                    break;
                case 'soto-la-marina':
                    seleccionaMunicipio('Soto la Marina', $mun_soto_la_marina);
                    break;
                case 'tampico':
                    seleccionaMunicipio('Tampico', $mun_tampico);
                    break;
                case 'tula':
                    seleccionaMunicipio('Tula', $mun_tula);
                    break;
                case 'valle-hermoso':
                    seleccionaMunicipio('Valle Hermoso', $mun_valle_hermoso);
                    break;
                case 'victoria':
                    seleccionaMunicipio('Victoria', $mun_victoria);
                    break;
                case 'villagran':
                    seleccionaMunicipio('Villagrán', $mun_villagran);
                    break;
                case 'xicotencatl':
                    seleccionaMunicipio('Xicoténcatl', $mun_xicotencatl);
                    break;

                        
        }
    }          
        ?>

            
        </div>
        
    </main>
    
        <script src="./js/main.js"></script>
    
    
</body>
</html>