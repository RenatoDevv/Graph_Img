<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
</head>
<body>
    <h1>Crear Elemento</h1>
    <form action="{{ route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Nombre" name="name">
        <input type="file" placeholder="Imagen" name="image">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
