<h3> fornecedor </h3>

{{-- Comentarios fica o comentario que fica descartado pelo blade --}}
<?= 'aqui é o mesmo que de cima' ?>

<!--CHAMANDO PHP ABAIXO -->
@php
echo 'teste';
/*
    if(isset())//Retorna true caso a variavel estiver definidar 
    {
        
    } 
    */
@endphp

@php $i = 0 @endphp

@forelse ( $fornecedores as $id => $fornecedor)
@php $i++ @endphp
<br>    
<br>  
@if ($loop->first)<!--Funciona apenas no foreach e forelse -->
    primeira interacao do loop
@endif
@if ($loop->last) <!--Funciona apenas no foreach e forelse -->
    ultima interacao do loop
    @if ($loop->count) 

    <h1>Quantidade de elementos {{$loop->count}}</h1> <!--Funciona apenas no foreach e forelse -->
    
@endif
@endif

<!--@ dd($fornecedores) Printa array no navegador, apenas tire o espasso deixado @ junto com dd -->

@isset($fornecedor)<!--Se a variavel for existe ele entra nessa condição, caso contraio não entra e nao dar erro -->
<br>    
<br>            
INTEREACAO ATUAL: {{$loop->iteration}}        
<br>
        Fornecedores: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        Cnpj: @{{ $fornecedor['status'] ?? 'Dado não preenchido' }}

        Telefone: (@{{ $fornecedor['ddd'] ?? '' }}) ({{ $fornecedor['tel'] ?? '' }})
        @switch($fornecedor['ddd'])
                @case('11')
                    <h3> São paulo </h3>
                    @break
                @case('21')
                    <h3> Minas Gerais </h3>
                    @break
                @case('31')
                    <h3> Rio de janeiro </h3>
                    @break
                @default
                    <h3> Estado não encontrado </h3>
        @endswitch
@endisset   
@empty
    Não tem forncedor cadastrado 

    <br>
    <br>
    <br>


@endforelse
