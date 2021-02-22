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


<!--@ dd($fornecedores) Printa array no navegador, apenas tire o espasso deixado @ junto com dd -->
@isset($fornecedores)<!--Se a variavel for existe ele entra nessa condição, caso contraio não entra e nao dar erro -->
    <br>
    Fornecedores: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    Cnpj: {{$fornecedores[1]['status'] ?? 'Dado não preenchido' }}
@endisset
