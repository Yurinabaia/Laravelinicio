{{$slot}} <!--variavel que representa a mensagem eviada dentro do component, apenas o contatos.blade está passando esse valor
logo o index não está passando esse valor -->


{{$x}} <!--recebendo variavel do index,  aqui é obrigatorio passar no index e no contato -->
<form action={{ route('contatos') }} method="POST">
    @csrf <!-- É PRECISO USAR O TOKEN csrf PARA PODE ENVIAR DADOS VIA POST -->
    <input name="name" type="text" placeholder="Nome" class="{{$x}}">
    <br>
    <input name="tel" type="text" placeholder="Telefone" class="{{$x}}">
    <br>
    <input name="mail" type="text" placeholder="E-mail" class="{{$x}}">
    <br>
    <select name="motivo" class="{{$x}}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{$x}}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$x}}">ENVIAR</button>
</form>