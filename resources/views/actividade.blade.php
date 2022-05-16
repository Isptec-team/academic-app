<h1>Adicionar Problema</h1>
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="img" id="img"><br><br>
    <input type="date" name="data" id="data"><br><br>
    <input type="text" name="local" id="local"><br><br>
    <label for="descricao">
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
    </label><br/><br/>
    <label for="preletores">
        <textarea name="preletores" id="preletores" cols="30" rows="10"></textarea>
    </label><br/><br/>
    <button type="submit">Adicionar</button>
</form>