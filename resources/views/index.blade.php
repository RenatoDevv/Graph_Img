<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Blade Icons</title>
</head>

<body>
    <h1>Hello Word</h1>
    @svg('bi-phone-fill')
    {{-- @svg('fluentui-phone-24')
    @svg('fluentui-phone-laptop-32') --}}
    <x-bi-paypal />
    {{-- <x-bi-briefcase-fill /> --}}
    {{-- <x-fluentui-wallet-24 /> --}}



    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">IMAGEN</th>
            </tr>
        </thead>
        @foreach ($feats as $feat)
            <tbody>
                <tr>
                    <th scope="row">{{ $feat->name }}</th>
                    <td>
                        <img src="{{ asset('storage/' . $feat->image) }}" alt="Imagen">
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    <div>
        <a href="{{ route('create') }}" class="btn btn-primary">Crear Nueva Imagen</a>
    </div>
</body>

</html>
