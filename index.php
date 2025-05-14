<?php
$data = 'data/data.json';
$datos_json = file_get_contents($data);
$datos = json_decode($datos_json, true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <style>
            table,thead , tbody , tr , td , th{
                padding: .7em;
            }

            .contenedor2{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                background-color: beige;
                width: 100%;
            }
            
            table{
                width: 100%;
                text-align: center;
            }

            thead{
                text-align: center;
                color: #000;
                background-color: cadetblue;
                border: 1px solid blue;
            }
        </style>
    <title>inicio</title>
</head>

<body>
    <div class="conteiner">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./public/add.php">agregar</a>
            </li>
        </ul>
    </div>

    <div class="contenedor2">
        <table>

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>fecha limite</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>

            </thead>
            <tbody>
                <?php foreach ($datos as $id => $dato): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($dato['nombre']) ?></td>
                        <td><?php echo htmlspecialchars($dato['descripcion']) ?></td>
                        <td><?php echo htmlspecialchars($dato['fecha_limite']) ?></td>
                        <td><?php echo htmlspecialchars($dato['estado']) ?></td>
                        <td>
                            <div>
                                <a href="./public/edit.php?codigo=<?php echo $id?>">editar</a>
                                <a href="./public/delete.php?codigo=<?php echo $id?>">eliminar</a>
                                <a href="./public/estado.php?codigo=<?php echo $id?>">estado</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>

    </div>

</body>

</html>