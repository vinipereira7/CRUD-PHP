<h1>Editar produto</h1>
<?php
    $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">QTD</label>
        <input type="number" name="Quantidade" value="<?php print $row->Quantidade; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Preço</label>
        <input type="number" step="0.01" name="price" value="<?php print $row->price; ?>" min="0.01" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Descrição</label>
        <input type="text" name="desc_prod" value="<?php print $row->desc_prod; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de cadastro</label>
        <input type="date" name="data_cad" value="<?php print $row->data_cad; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Horário de cadastro</label>
        <input type="time" name="hora_cad" value="<?php print $row->hora_cad; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-primary">Enviar</button>
    </div>
</form>