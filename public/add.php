<?php

$data = '../data/data.json';
$con = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nuevoDATO = [
        'nombre' => isset($_POST['nombre'] ) ? trim($_POST['nombre']) : '',
        'descripcion' => isset($_POST['descripcion'] ) ? trim($_POST['descripcion']) : '',
        'fecha_limite' => isset($_POST['fechaL'] ) ? trim($_POST['fechaL']) : '',
        'estado' => isset($_POST['estado'] ) ? trim($_POST['estado']) : '',
        'fecha_creacion' => isset($_POST['fechaC'] ) ? trim($_POST['fechaC']) : '',
    ];

    $dt = file_get_contents($data);
    $datos = json_decode($dt,true);

    if($datos == null){
        $datos = [];
    }
    $id_unico = uniqid();
    $datos[$id_unico] = $nuevoDATO;

    $ndatos = json_encode($datos,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    file_put_contents($data,$ndatos, LOCK_EX);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agregar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:  Roboto, 'Times New Roman', Times, serif;
        }

        h1,label{
            color:rgb(255, 255, 255);
        }
        label{
            font-weight: 200;
        }
        body {
            background-color: #515151;
        }

        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            padding: 2rem;
            border: 2px solid rgba(0, 255, 0, 0.56);

            box-shadow: 0 0 10px greenyellow;
            border-radius: 10px;
            background-color:#1e1e2f;/*rgb(98, 146, 250) */
        }

        .con{
            display: flex;
            flex-direction: column;
            gap: 10px;
            
        }
        
        .lcon{
            display: flex;
            flex-direction: column;
            padding: 0 .8em;
        }

        input[type="submit"]{
            color: white;
            background-color:rgb(0, 134, 0);;
            border: 1px;
            border-radius: 10px;
        }
        input[type="submit"]:hover{
            color: dimgray;
            background-color: rgba(11, 228, 47, 0.74);
            border: 1px solid green;
            border-radius: 10px;
        }

        input[type="text"] , input[type="date"]{
            border:  none;
            background-color:rgba(122, 253, 122, 0.97);
            border-bottom:3px solid rgb(0, 146, 0);
            padding: .2em;
        }

        input[type="date"]:focus{
            box-shadow: 0 5px 11px  #00FF00;
        }

        textarea{
            background-color:rgba(122, 253, 122, 0.97);
            border-bottom:3px solid rgb(0, 146, 0);
        }

        select , option{
            padding: .4em;
            background-color: rgba(122, 253, 122, 0.97);
            border-bottom:3px solid rgb(0, 146, 0);
        }
    </style>

<body>
    <form action="" method="post">
        <div><h1>Registro de tarea</h1></div>
        <div class="con">
            <div class="lcon">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div class="lcon">
                <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" id="descripcion"></textarea>
            </div>
            <div class="lcon">
                <label for="fechaL">Fecha Limite:</label>
                <input type="date" name="fechaL" id="fechaL">
            </div>
            <div class="lcon">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado">
                    <option value="Pendiente">Pendiente</option>
                    <option value="En Progreso">En Progreso</option>
                    <option value="Completada">Completada</option>
                </select>
            </div>
            <div class="lcon">
                <label for="fechaC">Fecha de Creacion:</label>
                <input type="date" name="fechaC" id="fechaC">
            </div>
            <div class="lcon">
                <input type="submit" value="Enviar">
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>