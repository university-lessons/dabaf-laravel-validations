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
        
    <form method="POST" action="/insurance/store">
        <fieldset>

            @csrf
            
            <label for="name">Nome do Assegurado</label>
            <input type="text" placeholder="Nome do cliente assegurado" name="name">

            <label for="brand">Marca</label>
            <input type="text" placeholder="Marca do carro" name="brand">

            <label for="model">Model</label>
            <input type="text" placeholder="Modelo do carro" name="model">

            <label for="description">Descrição do Sinistro</label>
            <textarea placeholder="Descrição do sinistro..." name="description"></textarea>

            <label for="price">Orçamento</label>
            <input type="number" placeholder="Orçamento do reparo" name="price">

            <input class="button-primary" type="submit" value="Cadastrar Sinistro">

        </fieldset>
        </form>

    </body>
</html>
