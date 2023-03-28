<h4>Nova Peça</h4>

<form action="?page=salvar" method="POST"  onsubmit="return validarCadastro()">
    <input type="hidden" name="acao" value="cadastrar" >

    <div class="form-group first">
        <label for="username">Nome</label>
        <input type="text" class="form-control" name="nome" id="nomePeca" >
    </div>

    <div class="form-group">
        <label for="username">Fabricante</label>
        <input type="text" class="form-control" name="fabricante" id="fabPeca" >
    </div>

    <div class="form-group">
        <label for="username">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="desPeca" >
    </div>

    <div class="form-group">
        <label for="username">Quantidade</label>
        <input type="number" class="form-control" name="qnt" id="qntPeca" >
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form> required