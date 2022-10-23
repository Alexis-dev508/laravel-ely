<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar pais</title>
</head>
<body>
     {{-- pais.insertar es el alias de la ruta --}}
     <form action="{{route('pais.actualizar', $id)}}" method="post" style="display: block;">
        {{-- @csrf envia un token por seguridad --}}
        @csrf 
        @method('put')
        <label for="nombre">
            <span>Nombre:</span>
            <input type="text" name="nombre" id="nombre" placeholder="" value="{{$id -> nombre}}">
        </label>
        <br>
        <label for="abreviatura">
            <span>Abreviatura</span>
            <input type="text" name="abreviatura" id="abreviatura" placeholder="" value="{{$id -> abreviatura}}">
        </label>
        <br>
        <br>
        <input type="submit" value="Guardar">
    </form>
    
    
</body>
</html>