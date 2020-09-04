<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>cadastrar produto</h1>

    @if ($errors ->any())
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif

<form action="{{ route('financeiro2.store') }}" method="post">
        @csrf
<input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}">
        <input type="text" name="texto" placeholder="descricao:" value="{{ old('texto') }}">
        <input type="submit" value="enviar">
    </form>
</body>
</html>