<h1>Adicionar Problema</h1>
<form action="" method="POST">
    @csrf
    <label for="descricao">
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
    </label><br/><br/>
    <label for="nivel">
        <select name="nivel" id="nivel">
            <option value="facil">Fácil</option>
            <option value="medio">Médio</option>
            <option value="díficil">Difícil</option>
        </select>
    </label>
    <button type="submit">Adicionar</button>
</form>