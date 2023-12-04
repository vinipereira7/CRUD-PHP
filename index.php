<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=novo">Novo produto</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar produtos</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo-produto.php");
                    break;
                    case "listar":
                        include("listar-produtos.php");
                    break;
                    case "salvar":
                        include("salvar-produto.php");
                    break;
                    case "editar":
                        include("editar-produto.php");
                    break;
                    default:
                        print"<h1>Bem vindo!</h1>";
            
                }
            ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="mt-5">
            <h3>Projeto CRUD</h3>
            <p>Olá, este é o projeto CRUD que possui um formulário sobre Produtos com os campos de "Nome do produto", "Quantidade", "Preço", "Descrição", "Data de cadastro" e "Horário de cadastro". Projeto feito com PHP e Bootstrap</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>