<form action={{ route('contatos') }} method="POST">
    @csrf <!-- É PRECISO USAR O TOKEN csrf PARA PODE ENVIAR DADOS VIA POST -->
    <input name="name" type="text" placeholder="Nome" class="borda-preta">
    <br>
    <input name="tel" type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input name="mail" type="text" placeholder="E-mail" class="borda-preta">
    <br>
    <select name="motivo" class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="borda-preta">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>