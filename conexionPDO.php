<?php
$user = "root";
$pass = "";

$pdo = new PDO('mysql:hostname=127.0.0.1, dbname=fgj', $user, $pass);

$consulta = "select * from inmuebles";

// EJECUCIÓN DE UNA CONSULTA PREPARADA
$resultado = $pdo->prepare($consulta);
// if (!$resultado) {
//     echo "fallo";       // Si la preparación de la consulta falla
// } elseif (!$resultado->execute([parámetros de la consulta]) {
//     ...        // Si la ejecución de la consulta falla
// } else {
//     ...        // Si la consulta se ejecuta correctamente
// }

$resultado->execute();

foreach($resultado as $i){
    echo $i;
}