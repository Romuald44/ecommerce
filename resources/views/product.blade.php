<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            font-family: 'Raleway', sans-serif;
            font-weight: 600;
            height: 100vh;
            margin: 0;
        }

        .links > a {
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        a {
            text-decoration: none;
            color: black;
        }
        button {
            margin-top:25px;
        }
        table, td {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>#</th>
        <th>Categorie</th>
        <th>Nom</th>
        <th>Stock</th>
        <th>Prix</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->categorie['nom'] }}</td>
            <td>{{ $product->nom }}</td>
            <td></td>
            <td>{{ $product->prix }} €</td>
            <td><a href="{{ route('product.edit', $product->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><a href="{{ route('product.destroy', $product->id) }}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
        </tr>
    @endforeach
</table>
<button><a href="{{ route('product.create') }}">+ Nouveau Produit</a></button>
</body>
</html>
