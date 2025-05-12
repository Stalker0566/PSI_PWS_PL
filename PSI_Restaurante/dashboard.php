<?php
include('includes/auth.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema de Restaurante</title>

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

        .dashboard-widget {
            background-color: #4CAF50;
            color: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard-widget h2 {
            font-size: 2rem;
            margin: 0;
        }

        .dashboard-widget p {
            font-size: 1.5rem;
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
                    <a class="nav-link" href="produtos.php">Produtos</a>
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

        <!-- Dashboard Widget 1 -->
        <div class="col-md-4 mb-4">
            <div class="dashboard-widget">
                <h2>Produtos</h2>
                <p>12</p>
                <a href="produtos.php" class="btn btn-light mt-3">Ver Produtos</a>
            </div>
        </div>

        <!-- Dashboard Widget 2 -->
        <div class="col-md-4 mb-4">
            <div class="dashboard-widget">
                <h2>Pedidos</h2>
                <p>8</p>
                <a href="pedidos.php" class="btn btn-light mt-3">Ver Pedidos</a>
            </div>
        </div>

        <!-- Dashboard Widget 3 -->
        <div class="col-md-4 mb-4">
            <div class="dashboard-widget">
                <h2>Mesas</h2>
                <p>5</p>
                <a href="mesas.php" class="btn btn-light mt-3">Ver Mesas</a>
            </div>
        </div>

    </div>

    <!-- Recent Activity (Exemplo de lista de atividades recentes) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Atividades Recentes
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Pedido #1 - Criado em 12/05/2025</li>
                        <li class="list-group-item">Novo Produto - Café Adicionado</li>
                        <li class="list-group-item">Mesa #3 Ocupada</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0zXQq5z5x1w1r8vbu2/Zl4xZbBp4Ib7cGomfs5/YZL4rt8s2" crossorigin="anonymous"></script>

</body>
</html>
