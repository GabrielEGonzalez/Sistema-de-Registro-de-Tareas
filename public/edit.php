<?php
$data = '../data/data.json';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
    }

    $datosString = file_get_contents($data);

    if (empty($datos)) {
        $datos = json_decode($datosString,true);
    }

    $datosUSER = $datos[$codigo];
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /*
    Funcionamiento : se obtiene en get el codigo de index para los datos , se obtiene los datos enviados pr el metodo post que se ran datos actualizado y nuevos , 
     */
    $Index = $_POST['codigo'];
    $nuevosDatos = [
        'nombre' => isset($_POST['nombre']) ? trim($_POST['nombre']) : '',
        'descripcion' => isset($_POST['descripcion']) ? trim($_POST['descripcion']) : '',
        'fecha_limite' => isset($_POST['fechaL']) ? trim($_POST['fechaL']) : '',
        'estado' => isset($_POST['estado']) ? trim($_POST['estado']) : '',
        'fecha_creacion' => isset($_POST['fechaC']) ? trim($_POST['fechaC']) : '',
    ];

    $datos = file_get_contents($data);
    if (empty($datos)) {
        $datosN = json_decode($datos,true);
    }
    $datosN[$Index] = $nuevosDatos;
    file_put_contents($data,json_encode($datosN,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}else{
    echo 'ERROR';
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <h1>Edicion de Registro de tarea</h1>
        </div>
        <div class="con">
            <input type="text" name="codigo" id="codigo" value="<?php echo htmlspecialchars($codigo)?>">
            <div class="lcon">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($datosUSER["nombre"]);?>">
            </div>
            <div class="lcon">
                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion"><?php echo htmlspecialchars($datosUSER["descripcion"]);?></textarea>
            </div>
            <div class="lcon">
                <label for="fechaL">Fecha Limite:</label>
                <input type="date" name="fechaL" id="fechaL" value="<?php echo htmlspecialchars($datosUSER["fecha_limite"]);?>">
            </div>
            <div class="lcon">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado" value="<?php echo htmlspecialchars($datosUSER["estado"]);?>">
                    <option value="Pendiente">Pendiente</option>
                    <option value="En Progreso">En Progreso</option>
                    <option value="Completada">Completada</option>
                </select>
            </div>
            <div class="lcon">
                <label for="fechaC">Fecha de Creacion:</label>
                <input type="date" name="fechaC" id="fechaC" value="<?php echo htmlspecialchars($datosUSER["fecha_creacion"]);?>">
            </div>
            <div class="lcon">
                <input type="submit" value="Enviar">
            </div>
        </div>
    </form>
</body>

</html>