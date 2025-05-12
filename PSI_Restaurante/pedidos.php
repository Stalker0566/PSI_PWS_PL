<?php
include('includes/auth.php');
include('includes/db.php'); // Para conexão com o banco de dados, se necessário
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos - Sistema de Restaurante</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJfQ6XvWb4eE88rB8MzMQLwB+g+cUm0bR1M2llCxHp0RvoFf9feU+fSy+kzo" crossorigin="anonymous">

    <!-- Custom CSS -->
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
        }

        .table thead {
            background-color: #4CAF50;
            color: white;
        }

        .btn-custom {
            background-color: #4CAF50;
            color: white;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
                    <a class="nav-link" href="produtos.php">Produtos</a>
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

        <!-- Tabela de Pedidos -->
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header">
                    Lista de Pedidos
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        // Conexão com o banco de dados
                        include('includes/db.php');

                        // Consultar todos os pedidos
                        $stmt = $pdo->query("SELECT * FROM pedidos");
                        $pedidos = $stmt->fetchAll();

                        foreach ($pedidos as $pedido) {
                            echo "<tr>
                                            <td>{$pedido['id']}</td>
                                            <td>{$pedido['cliente']}</td>
                                            <td>{$pedido['produto']}</td>
                                            <td>{$pedido['quantidade']}</td>
                                            <td>{$pedido['status']}</td>
                                            <td>
                                                <a href='concluir_pedido.php?id={$pedido['id']}' class='btn btn-success btn-sm'>Concluir</a>
                                                <a href='cancelar_pedido.php?id={$pedido['id']}' class='btn btn-danger btn-sm'>Cancelar</a>
                                            </td>
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
