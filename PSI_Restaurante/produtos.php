<?php
include('includes/auth.php');
include('includes/db.php'); // Para conectar ao banco de dados, caso precise buscar produtos
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Sistema de Restaurante</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJfQ6XvWb4eE88rB8MzMQLwB+g+cUm0bR1M2llCxHp0RvoFf9feU+fSy+kzo" crossorigin="anonymous">

    <!-- Custom CSS (Para melhorar a estética) -->
    <style>
        body {
            background-color: #f4f6f9;
        }

        .navbar-custom {
            background-color: #4CAF50;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: white;
        }

        .card {
            border-radius: 15px;
        }

        .card-header {
            background-color: #4CAF50;
            color: white;
            font-size: 1.2rem;
        }

        .card-body {
            background-color: #ffffff;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #4CAF50;
            color: white;
        }

        .table thead {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="#">Restaurante</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pedidos.php">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mesas.php">Mesas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main content -->
<div class="container mt-5">
    <div class="row">

        <!-- Formulário de Adicionar Produto -->
        <div class="col-md-6 mb-4">
            <div class="card form-container">
                <div class="card-header">
                    Adicionar Novo Produto
                </div>
                <div class="card-body">
                    <form action="produtos.php" method="POST">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome do Produto</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="preco" class="form-label">Preço</label>
                            <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom">Adicionar Produto</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabela de Produtos -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Lista de Produtos
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        // Conexão com o banco de dados
                        include('includes/db.php');

                        // Consultar todos os produtos
                        $stmt = $pdo->query("SELECT * FROM produtos");
                        $produtos = $stmt->fetchAll();

                        foreach ($produtos as $produto) {
                            echo "<tr>
                                            <td>{$produto['id']}</td>
                                            <td>{$produto['nome']}</td>
                                            <td>€{$produto['preco']}</td>
                                            <td>{$produto['descricao']}</td>
                                            <td><a href='editar_produto.php?id={$produto['id']}' class='btn btn-warning btn-sm'>Editar</a> <a href='deletar_produto.php?id={$produto['id']}' class='btn btn-danger btn-sm'>Deletar</a></td>
                                          </tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0zXQq5z5x1w1r8vbu2/Zl4xZbBp4Ib7cGomfs5/YZL4rt8s2" crossorigin="anonymous"></script>

</body>
</html>
