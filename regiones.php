<?php include("./dbconnect.php");?>

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
            <div class="tabla-contenido-mapa-fiscalias">
                <?php include('./FD00-tabla-contenido-mapa-fiscalias.php')?>
            </div>

            <!-- Mapa Fiscalías de Distrito -->
            <div class="mapa-fiscalias">
                <?php include('./FD01-mapa-fiscalias-svg.php')?>
            </div>
        </div>
        
        <!-- Contenido de Inmuebles por Fiscalía -->        
        <div style=background:white; class="contenido">
            <?php
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
            ?>
            
        </div>
        
    </main>
    
        <script src="./js/main.js"></script>
    
    
</body>
</html>