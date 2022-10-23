<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario persona</title>
</head>
<body>
    <form action="{{route('persona.insertar')}}" method="post">
        @csrf
        <label for="nombre">
            <span>
                Nombre:
                <input type="text" name="nombre" id="nombre">
            </span>
        </label>
        <label for="apellidos">
            <span>
                Apellidos:
                <input type="text" name="apellidos" id="apellidos">
            </span>
        </label>
        <label for="edad">
            <span>
                Edad:
                <input type="text" name="edad" id="edad">
            </span>
        </label>
        <label for="telefono">
            <span>
                Telefono
                <input type="text" name="telefono" id="telefono">
            </span>
        </label>
        <label for="fkpais">
            <select name="fkpais" id="fkpais">
                <option value="" selected>Seleccione un pais...</option>
                @foreach ($paises as $fila)
                    <option value="{{$fila -> id}}">{{$fila -> nombre}}</option>
                @endforeach
            </select>
        </label>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>