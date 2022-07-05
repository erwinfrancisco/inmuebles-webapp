<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="css/estilos.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
            <h2 style="color:white;">Consulta de inmuebles FGJ:</h2>
            <img src="img/ubicacion-mapa.png" width="300px">
        </div>
        <div class="consulta-region" style="background-color:white; width:200px; border-radius:20px;margin-left:120px">
            <img src="img/regiones.png" width="100px">
            
            <p>Fiscalías de Distrito</p>
            <a href="./regiones-main.php">
            <button type="button" class="btn btn-primary">Buscar</button></a>
        </div>
        <div class="consulta-municipio" style="background-color:white;width:200px;border-radius:20px;margin-left:40px">
            <img src="img/municipios.png" width="100px">
            
            <p> Municipios </p>
            <a href="./municipios-main.php">
            <button type="button" class="btn btn-primary">Buscar</button></a>
        </div>
    </div>

    <!-- <div class="col contenedor-index">
        <div class="col" id="svg-ubicacion">
            <img src="img/ubicacion-mapa.png" width="350px">

        </div>
        <div id="botones-index">
            <div id="botones">
                <button type="button" class="btn btn-primary">Buscar por región</button>
                <button type="button" class="btn btn-primary">Buscar por municipio</button>
            </div>
    
            
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>