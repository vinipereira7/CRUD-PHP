<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $Quantidade = $_POST["Quantidade"];
            $price = $_POST["price"];
            $desc_prod = $_POST["desc_prod"];
            $data_cad = $_POST["data_cad"];
            $hora_cad = $_POST["hora_cad"];

            $sql = "INSERT INTO produtos (nome, Quantidade, price, desc_prod, data_cad, hora_cad) VALUES ('{$nome}', '{$Quantidade}', '{$price}', '{$desc_prod}', '{$data_cad}', '{$hora_cad}')";

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Cadastrado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            } else {
                print"<script>alert('Erro ao cadastrar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $Quantidade = $_POST["Quantidade"];
            $price = $_POST["price"];
            $desc_prod = $_POST["desc_prod"];
            $data_cad = $_POST["data_cad"];
            $hora_cad = $_POST["hora_cad"];

            $sql = "UPDATE produtos SET
                        nome='{$nome}',
                        Quantidade='{$Quantidade}',
                        price='{$price}',
                        desc_prod='{$desc_prod}',
                        data_cad='{$data_cad}',
                        hora_cad='{$hora_cad}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Editado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            } else {
                print"<script>alert('Erro ao editar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Excluído com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            } else {
                print"<script>alert('Erro ao excluir');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
    }