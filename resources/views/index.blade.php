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
    <div>

        <span class="svg-icon svg-icon-success">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path
                        d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
                        fill="#000000" />
                </g>
            </svg>
        </span>
    </div>
</body>

</html>
