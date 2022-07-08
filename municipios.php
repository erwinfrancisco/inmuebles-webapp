<?php include("./dbconnect.php");?>
<?php include('./MU00-tabla-contenido-mapa-municipios.php')?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'css/estilos.css'?></style>
    
    
    <title>Inmuebles de la Fiscalía General de Justicia del Estado de Tamaulipas</title>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <img src="./img/header_vector.png" width="100%" height="135px">
        <div class="logo">
            <img src="./img/logo_fgj_blanco.png" width="100%" height="100%" alt="Fiscalía General de Justicia del Estado de Tamaulipas">
        </div>
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
            return consultaMunicipio($consulta);
        }


        if(isset($_REQUEST['municipio'])){
            $pag = $_REQUEST['municipio'];
            switch($pag){
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
                    if(consultaMunicipio($mun_mainero) == null){
                        warning();
                    }
                    break;
                case 'el-mante':
                    seleccionaMunicipio('El Mante', $mun_el_mante);
                    if(consultaMunicipio($mun_el_mante) == null){
                        warning();
                    break;

                }
                
        }
    }          
        ?>

            
        </div>
        
    </main>
    
        <script src="./js/main.js"></script>
    
    
</body>
</html>