<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
</head>
<body>
    {{--comentario blade--}}
    <h3>Fornecedor</h3>
    @php
        $valor = 'enzo patriarca';
        $id = 11;
    @endphp
    <h2>{{$valor}}</h2>
    @if ($id != 12)
        <h2>O id nao é 12</h2>
    @else
        <h2>ID esta correto</h2>
    @endif

    {{-- @dd($fornecedores) --}}

    @isset($fornecedores)
        @for ($i = 0; isset($fornecedores[$i]); $i++)
            <br>
            Fornecedor: {{$fornecedores[$i]['nome']}}
            <br>
            Status: {{$fornecedores[$i]['status']}}
            <br>
            CNPJ: {{$fornecedores[$i]['cnpj']?? 'Dado nao foi preenchido'}}
            <hr>
        @endfor
        {{-- @dd($fornecedores)     --}}

    @endisset

    {{-- @foreach ($fornecedores as $fornecedor)
        <br>
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{$fornecedor['cnpj']?? 'Dado nao foi preenchido'}}
        <hr>
    @endforeach --}}
</body>
</html>