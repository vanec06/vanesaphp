<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        th,td{
            padding: 0px 10px;
            width: max-content;
            max-width: 150px;
            border: 1px solid black;
            font-size: 0.85em;
            word-break: break-all;
            word-wrap: break-word
        }

        th{
            background-color: rgb(167, 212, 251);
            font-size: 0.8em
        }
        h1{
            text-align: center;
        }
    </style>
   <h1>Informacion de usuario</h1>

    <table cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Identificacion</th>
                <th>Fecha</th>
                <th>Competencia</th>
                <th>Horario</th>
                <th>id_ficha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$userFind["id"]}}</td>
                <td style="font-size: 0.8em">{{$userFind["name"]}}</td>
                <td style="font-size: 0.8em">{{$userFind["apellido"]}}</td>
                <td style="font-size: 0.8em">{{$userFind["cedula"]}}</td>
                <td style="font-size: 0.8em">{{$userFind["fecha"]}}</td>
                <td style="font-size: 0.8em">{{$userFind["competencia"]}}</td>
                <td style="font-size: 0.8em">{{$userFind["horario"]}}</td>
                <td style="font-size: 0.8em">{{$userFind["idficha"]}}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>