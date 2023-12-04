<h1>Novo produto</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">QTD</label>
        <input type="number" name="Quantidade" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Preço</label>
        <input type="number" step="0.01" name="price" min="0.01" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Descrição</label>
        <input type="text" name="desc_prod" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de cadastro</label>
        <input type="date" name="data_cad" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Horário de cadastro</label>
        <input type="time" name="hora_cad" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-primary">Enviar</button>
    </div>
</form>