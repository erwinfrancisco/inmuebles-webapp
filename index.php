<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/materialize.css" type="text/css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css" >
    
    <title>Inmuebles de la Fiscalía General de Justicia del Estado de Tamaulipas</title>
</head>
<body>
<body style="background-image: url('img/background.png');">
    <!-- Encabezado -->
    <div>
        <header id="header-index">
            <img src="./img/header_vector_blanco.png" width="100%" height="135px">
            <div class="logo">
                <img src="./img/logo_fgj_azul.png" width="75%" height="75%" alt="Fiscalía General de Justicia del Estado de Tamaulipas">
            </div>
        </header>
    </div>
    
    <div class="contenedor-imagen">
        <div>
            <h4 style="color:white;">Consulta de inmuebles FGJ:</h4>
            <img src="img/ubicacion-mapa.png" width="300px">
        </div>
        <div class="consulta-region" style="background-color:white; width:200px; border-radius:20px;margin-left:120px">
            <img src="img/regiones.png" width="100px">
            
            <p>Fiscalías de Distrito</p>
            <a href="./regiones-main.php" class="waves-effect waves-light btn blue accent-2">buscar</a>
        </div>
        <div class="consulta-municipio" style="background-color:white;width:200px;border-radius:20px;margin-left:40px">
            <img src="img/municipios.png" width="100px">
            
            <p>Municipios</p>
            <a href="./municipios-main.php" class="waves-effect waves-light btn blue accent-2">buscar</a>
        </div>
    </div>

    <script src="js/materialize.min.js"></script>
</body>
</html>