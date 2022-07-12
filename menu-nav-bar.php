<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css" type="text/css" >
    <link rel="stylesheet" href="css/new-style.css" type="text/css" >
    <title>Document</title>
</head>
<body>
<header>
    <img src="./img/header_vector.png" width="100%" height="135px">
    <a href="index.php">
    <div class="logo">
        <img src="./img/logo_fgj_blanco.png" width="100%" height="100%" alt="Fiscalía General de Justicia del Estado de Tamaulipas">
    </div></a>
</header>
<div class="menu-la right-align">
    <ul id="slide-out" class="sidenav juancho">
        <li><div class="user-view">
                <div class="background" style="height:120px;padding:20px;">
                    <img src="./img/logo_fgj_azul.png" style="height:100px;text-align:center;">
                </div>            
            </div>
        </li>
        <li style="margin-top:105px;"><div class="divider"></div></li>
        
        <li>
            <div class="row">
                <div class="center col s6 right">
                    <i class="material-icons small grey-text">account_balance</i>
                </div>
                <div class="center col s6">
                    <a class="subheader center">Inmuebles</a>
                </div>
            </div>
        </li>
        <li class="center"><a href="#!"><i class="material-icons green-text">add_circle_outline</i>Agregar Inmueble</a></li>
        <li class="center"><a href="#!"><i class="material-icons orange-text darken-4">edit</i>Modificar Inmueble</a></li>
        <li class="center"><a href="#!"><i class="material-icons red-text">clear</i>Eliminar Inmueble</a></li>
        <li class="center"><div class="divider"></div></li>
        <li>
            <div class="row">
                <div class="center col s6 right">
                    <i class="material-icons small grey-text">store</i>
                </div>
                <div class="center col s6">
                    <a class="subheader center">Área</a>
                </div>
            </div>
        </li>
        <li class="center"><a href="#!"><i class="material-icons green-text center">add_circle_outline</i>Agregar Área</a></li>
        <li class="center"><a href="#!"><i class="material-icons orange-text darken-4">edit</i>Modificar Área</a></li>
        <li class="center"><a href="#!"><i class="material-icons red-text center">clear</i>Eliminar Área</a></li>
        <li>
            <div class="row">
                <div class="center col s6 right">
                    <i class="material-icons small grey-text">search</i>
                </div>
                <div class="center col s6">
                    <a class="subheader center">Consultas</a>
                </div>
            </div>
        </li> 
        <li class="center"><a href="#!"><i class="material-icons red-text darken-4">location_on</i>Consulta por región</a></li>
        <li class="center"><a href="#!"><i class="material-icons red-text darken-4">location_searching</i>Consulta por municipio</a></li>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons small white-text">menu</i></a>
</div>

<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">M.AutoInit();</script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(edge, right);
});

// Initialize collapsible (uncomment the lines below if you use the dropdown variation)
// var collapsibleElem = document.querySelector('.collapsible');
// var collapsibleInstance = M.Collapsible.init('edge', 'right');

</script>

</body>
</html>