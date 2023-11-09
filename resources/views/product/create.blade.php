<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            place-items: center;
            background: #ebebeb;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            background: #fff;
            padding: 20px 40px;
            border-radius: 10px;
        }

        .container form input {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <h4 class="text-center mt-5">Registrar Servicio</h4>
            <p>Complete los campos para registrar un nuevo servicio</p>
            <input type="text" name="name" placeholder="Nombres" class="form-control">
            <textarea name="description" id="" cols="30" rows="4" class="form-control"
                placeholder="Descripcion del Servicio"></textarea>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>

</html>
