<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
<body>
    @yield('conteudoIndex') <!--Buscando do index para a secao conteudo que ele traz -->
    @yield('conteudoAbout')<!--Buscando do about para a secao conteudo que ele traz -->
    @yield('conteudoContatos')<!--Buscando do about para a secao conteudo que ele traz -->
</body>
</html>