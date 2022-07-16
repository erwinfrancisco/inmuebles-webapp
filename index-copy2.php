<!DOCTYPE html>
<html class="html"lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS  -->
    <style><?= include_once('./css/materialize.css')?></style>
    <style><?= include_once('./css/estilos2.css')?></style>
    
    <title>Fiscalía General de Justicia del Estado de Tamaulipas</title>
</head>
<body id="body-background-blue">

    <!-- Encabezado -->
    <header class="contenedor-header-blanco">
        <!-- <div class="contenedor-header-blanco"> -->
            <div class="contenedor-logo-azul"></div>
            <div class="contenedor-buscador">
                <form action="index.php" method="get">
                    <input type="text" id="buscador" name="buscador" placeholder="Buscar área o inmueble" name="buscador">
                    <button class="btn waves-effect waves-light blue accent-2 btnavbar" type="submit" name="action">Buscar<span class="material-icons tiny right valign-wrapper">search</span></button>
                </form>
            </div>
            <div class="naveg-header">
                <span class="material-icons tiny right valign-wrapper blue-text accent-2">business</span>
                <a href="./regiones-main.php" class="waves-effect waves-light btn blue accent-2 btnavbar">Inmuebles</a>
                <span class="material-icons tiny right valign-wrapper blue-text accent-2">my_location</span>
                <a href="./regiones-main.php" class="waves-effect waves-light btn blue accent-2 btnavbar">Áreas</a>
                <span class="material-icons tiny right valign-wrapper blue-text accent-2">insert_chart</span>
                <a href="./regiones-main.php" class="waves-effect waves-light btn blue accent-2 btnavbar">Reportes</a>  
            </div>
    </header>
    
    
    <div class="contenedor-imagen-index">
        <div class="mapa-ubicacion">
            <h4 style="color:white;text-align:center;">Consulta de inmuebles FGJ:</h4>
            <img src="img/ubicacion-mapa.png" width="300px" style="text-align:center;">
        </div>
        <div class="consulta-region" style="background-color:white; width:200px; border-radius:20px;">
            <img src="img/regiones.png" width="100px">
            
            <p>Fiscalías de Distrito</p>
            <a href="./regiones-main.php" class="waves-effect waves-light btn blue accent-2">consultar</a>
        </div>
        <div class="consulta-municipio" style="background-color:white;width:200px;border-radius:20px;">
            <img src="img/municipios.png" width="100px">
            
            <p>Municipios</p>
            <a href="./municipios-main.php" class="waves-effect waves-light btn blue accent-2">consultar</a>
        </div>
    </div>

    <script src="js/materialize.min.js"></script>
</body>
</html>