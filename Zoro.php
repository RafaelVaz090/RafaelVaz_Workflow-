<?php 
require_once('lib_contador.php');
registrarAcesso('Zoro.php'); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>One Piece - Zoro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include('menu.php'); ?>
    <div class="container mt-4">
        <div class="p-5 mb-4 bg-success text-white rounded-3">
            <h1>Roronoa Zoro</h1>
            <p class="lead">O Caçador de Piratas e o maior mestre do Santoryu.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="zoro.webp" class="img-fluid rounded shadow" alt="Roronoa Zoro">
            </div>
            <div class="col-md-8">
                <h3>O Espadachim das Três Espadas</h3>
                <p>Zoro foi o primeiro a se juntar a Luffy. Ele utiliza o estilo de luta Santoryu (estilo de três espadas) e possui um senso de direção... peculiar.</p>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Recompensa:</strong> 1.100.000.000 Berries</li>
                    <li class="list-group-item"><strong>Função:</strong> Combatente / Imediato</li>
                    <li class="list-group-item"><strong>Sonho:</strong> Ser o maior espadachim do mundo</li>
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