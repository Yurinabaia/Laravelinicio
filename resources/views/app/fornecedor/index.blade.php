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


@if(count($fornecedores) > 0 && count($fornecedores) > 10) )
    <h3> Possuir fornecedores </h3>
@elseif(count($fornecedores) > 10))
    <h3> Possuir mais de dez fornecedores </h3>
@else 
    <h3> Não possuir fornecedores </h3>
@endif
