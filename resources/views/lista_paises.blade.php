<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> Lista de paises registrados</h2>
    <table>
        <tr>
            <th>Pais</th>
            <th>Abreviatura</th>
            <th>Opciones</th>
        </tr>
        {{-- Nombre de la variable enviada desde el controlador as $variable cualquiera --}}
        @foreach ($paises as $fila)
            <tr>
                <td>{{$fila -> nombre}}</td>
                <td>{{$fila -> abreviatura}}</td>
                <td>
                    <a href="{{route('pais.editar', $fila -> id)}}">Editar</a>
                    <form action="{{route('pais.eliminar', $fila -> id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>