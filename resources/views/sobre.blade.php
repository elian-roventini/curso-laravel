<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre</title>
</head>
<body>
        <h1>somos grandes</h1>

        {!! $teste !!}

        @if ($teste2 === 123)
            é igual: {{$teste2}}
        
        @endif
        {{-- @elseif()
        @else
        --}}

        {{-- @unless () Só entra se for false
            
        @endunless
        --}}
    <hr>
        @isset($teste3) {{--pergunta se esta setado --}}
        <p>{{$teste3}}</p>
        @endisset
    <hr>
        @empty($teste4)
            <p>agua</p>
        @endempty
    <hr>
        @auth
            <p>Autenticado</p>
        @else
            <p>nao autenticado</p>
    
        @endauth
    <hr>
        @guest
            <p>so entra se n estiver autenticado</p>
        @endguest
    <hr>
        @switch($teste5)
            @case(1)
                igual 1
                @break
            @case(2)
                igual 2
                @break
            @default
                normal
        @endswitch
    <hr>
        {{-- @if (isset($products))
            @foreach ($products as $product)
        <p>{{$product}}</p> 
            @endforeach
        @endif --}}
    <hr>
        @forelse ($products as $product)
            @if ($loop->first)
                <hr>
            @endif
            <p class="@if ($loop->last) last @endif">{{$product}}</p>
        @empty
            <p>Nao existem produtos cadastrados.</p>
        @endforelse

    <hr>

        @include('teste.contato')

    <hr>

    <h1>exibindo produtos numa ancora</h1>

        <a href="{{ route('financeiro2.create') }}">Cadastrar</a>
</body>
</html>

<style>
    .last{background: #ccc};
</style>