<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personas</title>
</head>
<body>
    <h1>Lista de personas registradas</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Pais</th>
        </tr>
        @foreach ($personas as $fila)
        <tr>    
            <td>{{$fila -> id}}</td>
            <td>{{$fila -> nombre_pe}}</td>
            <td>{{$fila -> apellidos}}</td>
            <td>{{$fila -> edad}}</td>
            <td>{{$fila -> telefono}}</td>
            <td>{{$fila -> nombre_pa}}</td>
            
        </tr>
    @endforeach
        
    </table>
    
</body>
</html>