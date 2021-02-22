<h3> fornecedor </h3>

{{--Comentarios fica o comentario que fica descartado pelo blade--}}
<?='aqui é o mesmo que de cima' ?>

<!--CHAMANDO PHP ABAIXO -->
@php 
    echo('teste');
    /*
    if() 
    {
        
    }elseif (condition) {
        # code...
    }
    else {
        # code...
    }
    */
@endphp


<!--@ dd($fornecedores) Printa array no navegador, apenas tire o espasso deixado @ junto com dd -->
<br>
Fornecedores: {{$fornecedores[0]['nome']}}
<br>
Status: {{$fornecedores[0]['status']}}
<br>

@if(!$fornecedores[0]['status'] == 'S')
    <h3> Fornecedor inativo </h3>
@else
    <h3> Fornecedor ativo </h3>
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S')<!--é o mesmo que o ! de negação -->
<h3> Fornecedor inativo </h3>

@endunless


