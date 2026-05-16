<?php
session_start();
$chave_secreta = "senha_da_nasa";
$erro = "";
$sucesso = isset($_GET['msg']) ? $_GET['msg'] : "";

if (isset($_POST['key'])) {
    if ($_POST['key'] === $chave_secreta) {
        $_SESSION['logado'] = true;
    } else {
        $erro = "Chave de acesso incorreta!";
    }
}

if (isset($_GET['sair'])) { 
    session_destroy(); 
    header("Location: logs.php"); 
    exit; 
}

if (isset($_GET['limpar'])) {
    if (!isset($_SESSION['logado'])) {
        header("Location: logs.php");
        exit;
    }
    
    $target = $_GET['limpar'];
    $msg = "";
    
    if ($target == 'all') {
        array_map('unlink', glob("contagem_*.txt"));
        $msg = "Todos os contadores de acesso foram zerados com sucesso.";
    } elseif ($target == 'somente_log') {
        if (file_exists("registro_acessos.txt")) {
            unlink("registro_acessos.txt");
            $msg = "O arquivo de Log Geral (registro_acessos.txt) foi removido.";
        }
    } else {
        $arquivo_alvo = "contagem_$target.txt";
        if (file_exists($arquivo_alvo)) {
            unlink($arquivo_alvo);
            $msg = "O contador da página $target foi zerado.";
        }
    }
    header("Location: logs.php?msg=" . urlencode($msg));
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Logs de Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php include('menu.php'); ?>
    <div class="container">
        <?php if (!isset($_SESSION['logado'])): ?>
            <div class="card mx-auto mt-5" style="max-width: 400px;">
                <div class="card-body text-center">
                    <h3>Acesso Restrito</h3>
                    <?php if ($erro): ?>
                        <div class="alert alert-danger p-2 small"><?php echo $erro; ?></div>
                    <?php endif; ?>
                    <form method="POST">
                        <input type="password" name="key" class="form-control mb-3" placeholder="Chave secreta" required>
                        <button class="btn btn-primary w-100">Entrar</button>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <div class="d-flex justify-content-between align-items-center mt-4">
                <h2>Estatísticas de Acesso</h2>
            </div>

            <?php if ($sucesso): ?>
                <div class="alert alert-danger mt-3 p-2 border-danger text-dark shadow-sm">
                    <?php echo htmlspecialchars($sucesso); ?>
                </div>
            <?php endif; ?>

            <div class="row mb-4 mt-3">
                <?php
                $paginas = ['Luffy', 'Zoro', 'Sanji'];
                $stats = [];
                foreach($paginas as $p) {
                    $arquivo = "contagem_$p.txt"; 
                    $stats[$p] = file_exists($arquivo) ? (int)file_get_contents($arquivo) : 0;
                }
                arsort($stats);
                $total = array_sum($stats);

                foreach($stats as $nome => $qtd): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card text-center p-3 shadow-sm">
                            <h4><?php echo $nome; ?></h4>
                            <p class="display-6"><?php echo $qtd; ?> acessos</p>
                            <a href="?limpar=<?php echo $nome; ?>" 
                               class="btn btn-sm btn-outline-danger" 
                               onclick="return confirm('Deseja zerar o contador de <?php echo $nome; ?>?')">Limpar Individual</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="card p-3 mb-4 text-center border-danger shadow-sm">
                <h4>Total de Acessos: <?php echo $total; ?></h4> 
                <div class="mt-2">
                    <a href="?limpar=all" class="btn btn-danger" onclick="return confirm('Deseja zerar TODOS os contadores individuais?')">
                        Limpar Todos os Acessos
                    </a>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-end mb-2">
                <h3>Registros de Log</h3>
                <a href="?limpar=somente_log" class="btn btn-danger btn-sm" onclick="return confirm('Deseja APAGAR o arquivo de Log Geral?')">
                    Limpar Log
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped bg-white border shadow-sm small">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th> <th>Página</th> <th>Data/Hora</th> <th>IP</th> <th>Navegador</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (file_exists("registro_acessos.txt")) {
                            $linhas = file("registro_acessos.txt");
                            $logs = array_reverse($linhas);
                            foreach($logs as $i => $l) {
                                $partes = explode(' | ', trim($l));
                                if(count($partes) >= 4) {
                                    echo "<tr>";
                                    echo "<td>" . (count($logs) - $i) . "</td>";
                                    echo "<td>{$partes[0]}</td>"; 
                                    echo "<td>{$partes[1]}</td>"; 
                                    echo "<td>{$partes[2]}</td>"; 
                                    echo "<td>{$partes[3]}</td>";
                                    echo "</tr>";
                                }
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center text-muted'>Nenhum registro encontrado.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>

    <footer class="text-center mt-5 p-4 bg-dark text-white">
        <div class="container small">
            <p class="mb-1">Trabalho T1 – VTPDWE2 & VTPISRV</p> 
            <p class="mb-1">Rafael Kennedy de Oliveira Vaz</p> 
            <p class="mb-0">rafael.vaz@aluno.ifsp.edu.br</p> 
        </div>
    </footer>
</body>
</html>