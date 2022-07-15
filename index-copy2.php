<!DOCTYPE html>
<html class="html-principal"lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS  -->
    <style><?= include_once('./css/materialize.css')?></style>
    <style><?= include_once('./css/estilos2.css')?></style>
    
    <title>Inmuebles de la Fiscalía General de Justicia del Estado de Tamaulipas</title>
</head>
<body id="body_index">

    <!-- Encabezado -->
    <header class="contenedor-header-blanco">
        <!-- <div class="contenedor-header-blanco"> -->
            <div class="contenedor-logo-azul"></div>
            <div class="contenedor-buscador">
                <form action="#" method="post">
                    <input type="text" id="buscador" name="buscador" placeholder="Buscar área o inmueble" name="buscador">
                    <input type="submit" class="boton-buscar waves-effect waves-light btn blue accent-2" value="Buscar">
                </form>
            </div>
            <div class="naveg-header">
                <a href="./regiones-main.php" class="waves-effect waves-light btn blue accent-2 btnavbar">Inmuebles</a>
                <a href="./regiones-main.php" class="waves-effect waves-light btn blue accent-2 btnavbar">Áreas</a>
                <a href="./regiones-main.php" class="waves-effect waves-light btn blue accent-2 btnavbar">Reportes</a>  
            </div>
        
    </header>
    
    
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