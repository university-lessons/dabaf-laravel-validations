<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

        <!-- CSS Reset -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

        <!-- Milligram CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    </head>
    <body class="container">
        <h1>Seguradora de Veículos</h1>

        <a href="/insurance/new">Cadastrar novo Sinistro</a>

        @foreach ($data as $i)
            <h2>Sinistro {{$i->id}}</h2>
            <p><b>Nome</b> {{ $i->name }}</p>
            <p><b>Marca</b> {{ $i->brand }}</p>
            <p><b>Modelo</b> {{ $i->model }}</p>
            <p><b>Descrição</b> {{ $i->description }}</p>
            <p><b>Orçamento</b> {{ $i->price }}</p>
        @endforeach
    </body>
</html>
