<?php 
require_once('lib_contador.php');
registrarAcesso('Luffy.php'); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>One Piece - Luffy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include('menu.php'); ?>
    <div class="container mt-4">
        <div class="p-5 mb-4 bg-danger text-white rounded-3">
            <h1>Monkey D. Luffy</h1>
            <p class="lead">O capitão dos Chapéus de Palha e o homem que busca o One Piece.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="luffycareca.webp" class="img-fluid rounded shadow" alt="Monkey D. Luffy">
            </div>
            <div class="col-md-8">
                <h3>Sobre o Capitão</h3>
                <p>Luffy é o fundador e capitão dos Piratas do Chapéu de Palha. Ele possui os poderes da Gomu Gomu no Mi (Hito Hito no Mi, Modelo: Nika), que tornam seu corpo de borracha.</p>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Recompensa:</strong> 3.000.000.000 Berries</li>
                    <li class="list-group-item"><strong>Função:</strong> Capitão</li>
                    <li class="list-group-item"><strong>Sonho:</strong> Tornar-se o Rei dos Piratas</li>
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