<?php include("./dbconnect.php");?>
<?php include('./MU00-tabla-contenido-mapa-municipios.php')?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css" type="text/css" >
    
    
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
                    
            <div class="instrucciones-flecha">
                <img src="./img/pin.png" alt="Pin">
            </div>
            <div id=instrucciones-flecha-1>
                
                <h2>1). Selecciona el Municipio.</h2>
            </div>
            <div id=instrucciones-flecha-2>
                <h2>2). Consulta los inmuebles registrados.</h2>
            </div>
            <div id="instrucciones-flecha-img">
                <img src="./img/arrow.png" alt="Flecha izquierda">
            </div>
            
        </div>
        
    </main>
    
        <script src="./js/main.js"></script>
    
    
</body>
</html>