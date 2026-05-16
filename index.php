<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Trabalho T1 - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
        }
        .header-title {
            padding: 20px 0;
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 0;
        }
        .main-content {
            min-height: 80vh;
        }
        .left-panel {
            border-right: 1px solid #dee2e6;
            padding-top: 50px;
        }
        .right-panel {
            background-color: #f8f9fac2;
            padding-top: 150px;
        }
        .btn-link-custom {
            background-color: #ffffff;
            border: 1px solid #e9ecef;
            color: #333;
            text-decoration: none;
            padding: 15px;
            display: block;
            width: 80%;
            margin: 10px auto;
            transition: 0.3s;
        }
        .btn-link-custom:hover {
            background-color: #e2e6ea;
            color: #000;
        }
    </style>
</head>
<body>

    <h1 class="text-center header-title">Servidor Web da disciplina de VTPDWE2 2026/01</h1>

    <div class="container-fluid">
        <div class="row main-content text-center">
            
            <div class="col-md-4 left-panel">
                <div class="mb-4">
                    <img src="foto minha.png" alt="Rafael Kennedy" class="rounded-circle shadow" width="250" height="250" style="object-fit: cover; border: 5px solid #d35400;">
                </div>
                <h2 class="fw-bold">Rafael Kennedy de Oliveira Vaz</h2>
            </div>

            <div class="col-md-8 right-panel">
                <h3 class="mb-4">Links</h3>
                <div class="px-5">
                    <a href="../Aula7_CEP/index.php" class="btn-link-custom shadow-sm">Praticando Busca CEP</a>
                    <a href="Luffy.php" class="btn-link-custom shadow-sm">Trabalho 1 - Contador de Acessos</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>