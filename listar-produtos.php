<h1>Listar produtos</h1>
<?php
    $sql = "SELECT * FROM produtos";
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Produto</th>";
            print "<th>QTD</th>";
            print "<th>Preço</th>";
            print "<th>Descrição</th>";
            print "<th>Data de cadastro</th>";
            print "<th>Horário de cadastro</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->Quantidade."</td>";
            print "<td>".$row->price."</td>";
            print "<td>".$row->desc_prod."</td>";
            print "<td>".$row->data_cad."</td>";
            print "<td>".$row->hora_cad."</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-warning'>Editar</button>

                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultado!</p>";
    }
?>