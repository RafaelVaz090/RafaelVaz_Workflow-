<?php 
require_once('lib_contador.php');
registrarAcesso('Sanji.php'); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>One Piece - Sanji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include('menu.php'); ?>
    <div class="container mt-4">
        <div class="p-5 mb-4 bg-warning text-dark rounded-3">
            <h1>Vinsmoke Sanji</h1>
            <p class="lead">O cozinheiro do mar e o mestre das pernas negras.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="sanji.webp" class="img-fluid rounded shadow" alt="Sanji">
            </div>
            <div class="col-md-8">
                <h3>O Cozinheiro Galante</h3>
                <p>Sanji é o cozinheiro oficial do bando. Além de cozinhar pratos incríveis, ele luta usando apenas as pernas para não ferir as mãos que usa para cozinhar.</p>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Recompensa:</strong> 1.032.000.000 Berries</li>
                    <li class="list-group-item"><strong>Função:</strong> Cozinheiro</li>
                    <li class="list-group-item"><strong>Sonho:</strong> Encontrar o All Blue</li>
                </ul>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5 p-4 bg-dark text-white">
        <div class="container">
        <p class="mb-1">Trabalho T1 – VTPDWE2 & VTPISRV</p> 
        <p class="mb-1">Rafael Kennedy de Oliveira Vaz</p> 
        <p class="mb-0">rafael.vaz@aluno.ifsp.edu.br</p> 
    </div>
    </footer>
</body>
</html>