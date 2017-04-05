<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
<form action="{{ route('product.store') }}" method="post">
    {{ csrf_field() }}
    <label for="cat">Categorie : </label>
    <select name="cat">
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
        @endforeach
    </select><br><br>

    <label for="nom">Nom : </label><input type="text" name="nom"><br><br>
    <label for="prix">Prix : </label><input type="number" name="prix"><br><br>

    <input type="submit" value="Valider">
</form>
</body>
</html>
