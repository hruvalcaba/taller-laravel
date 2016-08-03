<!DOCTYPE html>
<html>
<head>
    <title>Lista de TODOS</title>
</head>
<body>
    <table>
        <tr>
            <th>Estatus</th>
            <th>Descripcion</th>
        </tr>
        
        @foreach ($todos as $todo)
        <tr>
            <th><input type="checkbox" name="status"/></th>
            <th>{{ $todo }}</th>
        </tr>
        @endforeach
        <th><button>+</button></th>
    </table>
</body>
</html>