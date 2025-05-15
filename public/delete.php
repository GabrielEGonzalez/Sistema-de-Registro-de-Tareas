<?php
$data = '../data/data.json';
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $codigo = $_GET['codigo'];

    $datos = file_get_contents($data);
    $ndatos = json_decode($datos,true);

    unset($ndatos[$codigo]);

    // ¡Asegúrate de codificar el array de vuelta a JSON antes de escribirlo!
    file_put_contents($data, json_encode($ndatos, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));

    header('location: ../index.php');
    exit();
}
?>