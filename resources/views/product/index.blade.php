<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Product</title>
</head>

<body>
    <h1>Lista de Productos</h1>

    <div class="container">
        <table class="table caption-top">
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCION</th>
                </tr>
            </thead>
            @foreach ($products as $product)
            <tbody>
                <tr>
                    <th scope="row">{{$product->id }}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>
